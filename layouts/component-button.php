<?php if ( have_rows('button') ) : ?>
    <div class="buttons">
    <?php while( have_rows('button') ) : the_row(); ?>
        <?php
            $link = get_sub_field('link');
            if ($link) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'];

                if ($link_target == NULL) {
                    $link_target = '_self';
                }
                echo '<a href="' . $link_url . '" target="' . $link_target . '" class="btn">' . $link_title . '</a>';
            }
        ?>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
