<?php get_header(); ?>

	<?php if (have_rows('layouts')) : ?>

		<?php while (have_rows('layouts')) : the_row(); ?>

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
				<div class="row">
					<div class="left">
						<div class="block layout cards">
							<ul class="card-list">
								<li class="card">
									<div class="card-wrapper">
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
								</li>
							</ul>
						</div>
					</div>
			<?php else: ?>
				<div class="row">
			<?php endif; ?>

				<?php if (have_rows('content_blocks')): ?>
					<div class="right">
						<?php while(have_rows('content_blocks')) : the_row(); ?>
							<?php $layout_type = get_row_layout(); ?>
							<?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>
