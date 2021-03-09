<?php if( have_rows('contact_cards') ): ?>
	<div class="block layout cards contact-cards">
		<ul class="card-list">
			<?php while( have_rows('contact_cards') ): the_row(); ?>
				<?php
				    $logo = get_sub_field('logo');
				    $name = get_sub_field('name');
					$address = get_sub_field('address');
					$phone = get_sub_field('phone');
					$website = get_sub_field('website');
					$contact_name = get_sub_field('contact_name');
					$contact_email = get_sub_field('contact_email');
				?>
				<li class="card contact">
					<div class="card-wrapper">
						<?php if ($logo): ?>
							<img class="card-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
						<?php else: ?>
							<h2><?php echo $name; ?></h2>
						<?php endif; ?>
						<p><?php echo $address; ?><br><?php echo $phone; ?></p>
						<p>Contact: <?php echo $contact_name; ?><br><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></p>
						<div class="links">
							<div class="links-wrapper">
								<?php
									if ($website) {
										$website_url = $website['url'];
										$website_title = $website['title'];
										$website_target = $website['target'];

										if ($website_target == NULL) {
											$website_target = '_self';
										}
										echo '<a class="contact-website" href="' . $website_url . '" target="' . $website_target . '">' . $website_title . '</a>';
									}
								?>
								<?php if (have_rows('social_links')): ?>
							    	<ul class="social-links">
							    	<?php while (have_rows('social_links')): the_row(); ?>
							            <?php
		                                    $network = get_sub_field('network');
		                                    $link = get_sub_field('link');
		                                    $link_url = $link['url'];
		                                    $link_title = $link['title'];
		                                    $link_target = $link['target'];

		                                    if ($link_target == null) {
		                                        $link_target = '_self';
		                                    }
		                                ?>
							    		<li class="social-link">
							                <?php if ($network == 'facebook'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-facebook-f"></i></a>
							                <?php elseif ($network == 'twitter'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-twitter"></i></a>
							                <?php elseif ($network == 'instagram'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-instagram"></i></a>
							                <?php elseif ($network == 'snapchat'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-snapchat-ghost"></i></a>
							                <?php elseif ($network == 'pinterest'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-pinterest-p"></i></a>
							                <?php elseif ($network == 'googleplus'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-google-plus-g"></i></a>
							                <?php elseif ($network == 'linkedin'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-linkedin-in"></i></a>
							                <?php elseif ($network == 'youtube'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-youtube"></i></a>
							                <?php elseif ($network == 'vimeo'): ?>
							                    <a href="<?php echo $link_url; ?>" class="<?php echo $network; ?>" target="<?php echo $link_target; ?>"><i class="fab fa-vimeo-v"></i></a>
							                <?php endif; ?>
							    		</li>
							    	<?php endwhile; ?>
							    	</ul>
							    <?php endif; ?>
							</div>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>
