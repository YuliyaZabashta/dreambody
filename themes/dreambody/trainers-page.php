<?php
/*
Template Name: trainers-page
Template Post Type: post, page, product
*/
?>
<body>
	<?php get_header()?>
    <section class="trainer-page">
		<div class="container-fluid">
			<?php if( get_field('header-trainers') ):;?>
				<h4><?php the_field('header-trainers') ?></h4>      
			<?php endif;?>
			<div class="row">
				<div class="col-xl-1"></div>
				<div class="col-xl-10">
					<div class="row">
						<?php query_posts('cat=treners' );?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="col-lg-4 col-md-6">
								<div class="row trainers-block">
									<?php if( get_field('photo-trainer') ):;?>
										<img src="<?php the_field('photo-trainer') ?>" alt="">
									<?php endif;?>
									<?php if( get_field('name-trainer') ):;?>
										<p><b><?php the_field('name-trainer') ?></b></p>    
									<?php endif;?>
									<?php if( get_field('description-trainer') ):;?>
										<p><?php the_field('description-trainer') ?><p><hr>
									<?php endif;?>
									<?php if( get_field('experience-trainer') ):;?>
										<p><?php the_field('experience-trainer') ?><p>
									<?php endif;?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query();?>
					</div>
				</div>
				<div class="col-xl-1"></div>
			</div>
		</div>
	</section>
	<?php get_footer()?>
</body>