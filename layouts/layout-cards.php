<?php if( have_rows('cards') ): ?>
	<div class="block layout cards">
		<ul class="card-list">
			<?php while( have_rows('cards') ): the_row(); ?>
				<?php
					$card_type = get_row_layout();
				    $display_icon = get_sub_field('display_icon');
				    $icon = get_sub_field('icon');
					if ($icon) {
						$icon_path = 'inc/svg/' . $icon;
					}
				    $title = get_sub_field('title');
					$content = get_sub_field('content');
					$image = get_sub_field('image');
					if ($image) {
						$image_id = $image['ID'];
						$image_url = $image['url'];
						$image_alt = $image['alt'];
						$image_large = $image['sizes']['large'];
					}
				?>

				<?php if ($card_type == 'image'): ?>
					<li class="card img">
						<div class="card-wrapper">
							<a data-fancybox="gallery" href="<?php echo $image_large; ?>" data-type="image">
								<img class="card-img" src="<?php echo $image_large; ?>"  alt="<?php echo $image_alt; ?>" />
							</a>
						</div>
					</li>
				<?php else: ?>
					<li class="card">
						<div class="card-wrapper">
							<?php if ($display_icon): ?>
								<div class="card-icon">
									<?php include(locate_template($icon_path)); ?>
								</div>
							<?php endif; ?>
							<h2><?php echo $title; ?></h2>
							<?php echo $content; ?>
							<?php include(locate_template('layouts/component-button.php')); ?>
						</div>
					</li>
				<?php endif; ?>

			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>
