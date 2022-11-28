<?php
/*
Template Name: group-page
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
								<?php if( get_field('promo-img') ):;?>
									<img src="<?php the_field('promo-img') ?>" alt="">
								<?php endif;?>
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