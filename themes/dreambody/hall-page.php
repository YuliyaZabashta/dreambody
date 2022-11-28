<?php
/*
Template Name: hall
Template Post Type: post, page, product
*/
?>
<body>
	<?php get_header()?>
    <section class="services-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2">
					<?php wp_nav_menu( array(
					'theme_location' => 'services_menu',
					'container' => false,
					'menu_class' => 'nav nav-pills'
					)) ?>
				</div>
				<div class="col-lg-9 service-block">
					<div class="tab-content">
						<div class="tab-pane show active">
							<?php if( get_field('header') ):;?>
								<h4><?php the_field('header') ?></h4>      
							<?php endif;?>
							<div class="row">
								<div class="col-lg-6">
								<div class="itcss">
									<div class="itcss__wrapper">
										<div class="itcss__items">
											<div class="gallery">
												<div class="gallery-item">
												<?php if( get_field('promo-img') ):;?>
													<a href="<?php the_field('promo-img') ?>" class="itcss__item"><img src="<?php the_field('promo-img') ?>" alt=""></a>
												<?php endif;?>
												</div>
												<div class="gallery-item">
												<?php if( get_field('promo-img2') ):;?>
													<a href="<?php the_field('promo-img2') ?>" class="itcss__item"><img src="<?php the_field('promo-img2') ?>" alt=""></a>
												<?php endif;?>
												</div>
												<div class="gallery-item">
												<?php if( get_field('promo-img3') ):;?>
													<a href="<?php the_field('promo-img3') ?>" class="itcss__item"><img src="<?php the_field('promo-img3') ?>" alt=""></a>
												<?php endif;?>
												</div>
												<div class="gallery-item">
												<?php if( get_field('promo-img4') ):;?>
													<a href="<?php the_field('promo-img4') ?>" class="itcss__item"><img src="<?php the_field('promo-img4') ?>" alt=""></a>
												<?php endif;?>
												</div>
												
											</div>
										</div>
										<a class="itcss__control itcss__control_prev" href="#" role="button" data-slide="prev"></a>
										<a class="itcss__control itcss__control_next" href="#" role="button" data-slide="next"></a>
									</div>
								</div>
								</div>
								<div class="col-lg-6">
								<?php if( get_field('description') ):;?>
									<?php the_field('description') ?>     
								<?php endif;?>
								</div>
								<?php if( get_field('block-text') ):;?>
									<p><?php the_field('block-text') ?> </p>   
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer()?>
</body>
