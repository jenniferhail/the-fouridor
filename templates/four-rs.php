<?php get_header(); ?>

<div class="intro">
	<h1 class="divider">Four Rs for Profit</h1>
</div>
<div class="row">
	<div class="left">
		<div class="item">
			<p>Companies who locate in The Fouridor gain an immediate advantage with access to a quartet of transportation options to move people, products, materials, and services quickly and inexpensively. Plus, with two-thirds of the U.S. population
				within a day’s drive, they have close access to markets and suppliers.</p>
			<div class="buttons">
				<a class="btn" href="#">Learn More</a>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="layout slider">

			<div class="item">
				<div class="glide-wrapper">
					<div class="glide">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<li class="glide__slide">
									<a class="glightboxTest" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/sci-video-placeholder.jpg" data-type="image">
										<img class="item-img" src="<?php echo get_template_directory_uri(); ?>/app/assets/img/sci-video-placeholder.jpg" alt="This is a sample video.">
									</a>
								</li>
								<li class="glide__slide">
									<a class="glightboxTest" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/sample.jpg" data-type="image">
										<img class="item-img" src="<?php echo get_template_directory_uri(); ?>/app/assets/img/sample.jpg" alt="This is a sample video.">
									</a>
								</li>
								<li class="glide__slide">
									<a class="glightboxTest" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/waves.jpg" data-type="image">
										<img class="item-img" src="<?php echo get_template_directory_uri(); ?>/app/assets/img/waves.jpg" alt="This is a sample video.">
									</a>
								</li>
								<li class="glide__slide video-slide">
									<div class="video-slide-inner">
										<a class="glightboxTest video-slide-item" href="https://youtu.be/mQ055hHdxbE" data-type="video" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/assets/img/sci-video-placeholder.jpg);">
											<div class="play-btn-outer">
												<div class="play-btn-inner">
													<div class="play-btn">
													</div>
												</div>
											</div>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="glide__arrows arrows-left" data-glide-el="controls">
							<button data-glide-dir="<"><i class="far fa-angle-left"></i></button>
						</div>
						<div class="glide__arrows arrows-right" data-glide-el="controls">
							<button data-glide-dir=">"><i class="far fa-angle-right"></i></button>
						</div>
						<div class="glide__bullets" data-glide-el="controls[nav]">
							<button class="glide__bullet" data-glide-dir="=0"></button>
							<button class="glide__bullet" data-glide-dir="=1"></button>
							<button class="glide__bullet" data-glide-dir="=2"></button>
							<button class="glide__bullet" data-glide-dir="=3"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="item video">
				<h2>Title Here</h2>
				<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit.</p>
			</div>

		</div>
		<div class="block">
			<div class="item divider">
				<h2>River</h2>
				<p>The Port of Indiana-Jeffersonville is one of the fastest-growing ports on the Ohio-Mississippi river system, handling more than 2 million tons of cargo for manufacturers and agribusinesses.</p>
			</div>
			<div class="item divider">
				<h2>Runway</h2>
				<p>We have access to four airports within The Fouridor that cover both commercial and general aviation services, including UPS’s Worldport at the Louisville International Airport.</p>
			</div>
			<div class="item">
				<h2>Railway</h2>
				<p>Commercial transport is provided by CSX, Norfolk Southern, Louisville Indiana Railroad in Indiana and Canadian Pacific in Louisville. Louisville is also one of four regional hubs for CSX.</p>
			</div>
			<div class="item">
				<h2>Roads</h2>
				<p>We sit at the convergence of three major interstates (I-65, I-64 and I-71), allowing companies to ship and receive cargo to and from two-thirds of the U.S population within a day.</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
