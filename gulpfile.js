var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    header  = require('gulp-header'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    concat = require('gulp-concat'),
    gutil = require('gulp-util'),
    sourcemaps = require('gulp-sourcemaps'),
    package = require('./package.json');

var banner = [
  '/*!\n' +
  ' * <%= package.name %>\n' +
  ' * <%= package.title %>\n' +
  ' * <%= package.url %>\n' +
  ' * @author <%= package.author %>\n' +
  ' * @version <%= package.version %>\n' +
  ' * Copyright ' + new Date().getFullYear() + '. <%= package.license %> licensed.\n' +
  ' */',
  '\n'
].join('');

var jsVendorFiles = [
    'node_modules/rellax/rellax.js',
    'node_modules/@glidejs/glide/dist/glide.js',
    'node_modules/aos/dist/aos.js'
];

var cssFiles = ['src/scss/style.scss'],
    cssDest = 'app/assets/css';

var jsCoreFiles = ['src/js/layouts/*.js', 'src/js/scripts.js'],
    jsDest = 'app/assets/js';

var jsFiles = jsVendorFiles.concat(jsCoreFiles);

gulp.task('css', function () {
    gulp.src(cssFiles)
    .pipe(sourcemaps.init())
    .pipe(sass({errLogToConsole: true}))
    .pipe(autoprefixer('last 4 version'))
    .pipe(gulp.dest(cssDest))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(header(banner, { package : package }))
    .pipe(sourcemaps.write(''))
    .pipe(gulp.dest(cssDest))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('js',function(){
  gulp.src(jsFiles)
    .pipe(sourcemaps.init())
    .pipe(concat('scripts.js'))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest(jsDest))
    .pipe(uglify().on('error', gutil.log))
    .pipe(header(banner, { package : package }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write(''))
    .pipe(gulp.dest(jsDest))
    .pipe(browserSync.reload({stream:true, once: true}));
});

gulp.task('browser-sync', function() {
    browserSync.init(null, {
        server: {
            baseDir: "app"
        }
    });
});
gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['css', 'js', 'browser-sync'], function () {
    gulp.watch("src/scss/*/*.scss", ['css']);
    gulp.watch("src/js/**/*.js", ['js']);
    gulp.watch("app/*.html", ['bs-reload']);
});
