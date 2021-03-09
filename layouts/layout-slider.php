<?php
	$title = get_sub_field('title');
?>

<div class="layout slider">
	<div class="slider-wrapper">
		<h2><?php echo $title; ?></h2>
		<?php if( have_rows('slide') ): ?>
			<div class="glide-wrapper">
				<div class="glide">
					<div class="glide__track" data-glide-el="track">
		            	<ul class="glide__slides">
			            	<?php while( have_rows('slide') ): the_row(); ?>

			                    <?php
									$video = get_sub_field('video');
			                        $image = get_sub_field('image');
			                        $image_id = $image['ID'];
			                        $image_url = $image['url'];
			                        $image_alt = $image['alt'];
			                        $image_large = $image['sizes']['large'];
									$caption = get_sub_field('caption');

									if ($image != NULL) {
                                        $video_image = $image['sizes']['large'];
                                    } else {
                                        $video_image = urlToThumbnail($video);
                                    }
			                    ?>

								<?php if ($video): ?>
									<li class="glide__slide video-slide">
										<div class="video-slide-inner">
											<a data-fancybox="gallery" class="video-slide-item" href="<?php the_sub_field('video', false, false); ?>" data-type="video" style="background-image: url(<?php echo $video_image; ?>);">
												<div class="play-btn-outer">
													<div class="play-btn-inner">
														<div class="play-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 52"><polygon points="0 0.5 0 51.5 44 26 "/></svg></div>
													</div>
												</div>
											</a>
										</div>
										<?php if ($caption): ?>
											<div class="slide-content">
												<?php echo $caption; ?>
											</div>
										<?php endif; ?>
									</li>
								<?php else: ?>
									<li class="glide__slide">
										<a data-fancybox="gallery" href="<?php echo $image_large; ?>" data-type="image">
				                            <img class="item-img" src="<?php echo $image_large; ?>"  alt="<?php echo $image_alt; ?>" />
										</a>
										<?php if ($caption): ?>
											<div class="slide-content">
					                            <?php echo $caption; ?>
					                        </div>
										<?php endif; ?>
				            		</li>
								<?php endif; ?>

			            	<?php endwhile; ?>
		            	</ul>
					</div>
					<div class="glide__arrows arrows-left" data-glide-el="controls">
						<button data-glide-dir="<"><i class="far fa-angle-left"></i></button>
					</div>
					<div class="glide__arrows arrows-right" data-glide-el="controls">
						<button data-glide-dir=">"><i class="far fa-angle-right"></i></button>
					</div>
					<div class="glide__bullets" data-glide-el="controls[nav]">
						<?php $i = 0; while( have_rows('slide') ): the_row(); ?>
							<button class="glide__bullet" data-glide-dir="=<?php echo $i; ?>"></button>
						<?php $i++; endwhile; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
