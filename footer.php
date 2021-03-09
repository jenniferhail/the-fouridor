							</div> <!-- End .ajax-wrapper -->
						</div> <!-- End .content -->
					</div> <!-- End .wrapper -->
				</div> <!-- End .main -->
				<div id="close" class="close">
					<button><i class="fal fa-times"></i></button>
				</div>

			</div> <!-- End .sidebar -->

			<footer class="footer">
				<div class="tagline">
					<h2 class="h1">Unexpect more.</h2>
					<h1 class="h3">South Central Indiana</h1>
				</div>
				<nav class="footer-menu">
					<ul class="menu">
						<?php
							$args = array(
							    'menu' => 'footer-menu',
							    'container' => 'false',
							    'items_wrap' => '%3$s'
							);
						?>
						<?php wp_nav_menu($args); ?>
					</ul>
				</nav>
			</footer>

		</div>

	</div>

	<?php // if (get_field('cookie_notice_display', 'option')):?>
		<div class="option cookie-notice<?php if ( isset($_COOKIE['cookieNotice']) ) : ?> hide<?php endif; ?>">
			<button class="close"><i class="fal fa-times"></i></button>
			<div class="wrapper">
				<div class="content">
					<p>This website uses cookies in order to offer you the most relevant information.<?php // the_field('cookie_notice_content', 'option');?></p>
				</div>
			</div>
		</div>
	<?php // endif;?>

</main>

<!-- <?php // if (get_field('popup_display', 'option')): ?>
    <div class="option popup" data-delay="<?php // the_field('popup_delay', 'option'); ?>" data-duration="<?php // the_field('popup_duration', 'option'); ?>">
        <div class="wrapper">
            <div class="content">
                <h3><?php // the_field('popup_title', 'option'); ?></h3>
                <?php // the_field('popup_content', 'option'); ?>
            </div>
        </div>
    </div>
<?php // endif; ?> -->

<?php wp_footer(); ?>

</body>
</html>
