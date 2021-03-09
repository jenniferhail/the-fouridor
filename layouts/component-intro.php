<?php
    $intro = get_sub_field('intro');
    $display_intro = $intro['display_intro'];
    $title = $intro['title'];
    $content = $intro['content'];
	$display_button = $intro['display_button'];
	$button = $intro['button'];
?>

<?php if ($display_intro): ?>

	<div class="intro">
		<h1 class="divider"><?php echo $title; ?></h1>
	</div>

	<div class="left">
		<div class="item">
			<?php echo $content; ?>

			<?php if ($display_button): ?>
				<?php if( have_rows('intro') ): while ( have_rows('intro') ) : the_row(); ?>
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
				<?php endwhile; endif; ?>
			<?php endif; ?>

		</div>
	</div>

<?php endif; ?>
