<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream body</title>
    <?php wp_head()?>
</head>
<body>
	<?php get_header('main')?>
	<section class="section_menu" id="services">
		<?php if( get_field('header-servblock') ):?>
			<h4><?php the_field('header-servblock') ?></h4>      
		<?php endif;?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="row">
						<?php if( get_field('service-link1') ):?>
						<a href="<?php the_field('service-link1') ?>" class="col-lg-4 col-md-6 service">
							<div class="hall" <?php echo dreambody_get_background('service-img1');?>>
								<div class="service-text">
								<?php if( get_field('service-name1') ):?>
									<h4><?php the_field('service-name1') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
						<?php if( get_field('service-link2') ):?>
						<a href="<?php the_field('service-link2') ?>" class="col-lg-4 col-md-6  service">
							<div class="personal" <?php echo dreambody_get_background('service-img2');?>>
								<div class="service-text">
								<?php if( get_field('service-name2') ):?>
									<h4><?php the_field('service-name2') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
						<?php if( get_field('service-link3') ):?>
						<a href="<?php the_field('service-link3') ?>" class="col-lg-4 col-md-6  service">
							<div class="group" <?php echo dreambody_get_background('service-img3');?>>
								<div class="service-text">
								<?php if( get_field('service-name3') ):?>
									<h4><?php the_field('service-name3') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
						<?php if( get_field('service-link4') ):;?>
						<a href="<?php the_field('service-link4') ?>" class="col-lg-4 col-md-6  service">
							<div class="infrared-cabinet" <?php echo dreambody_get_background('service-img4');?>>
								<div class="service-text">
								<?php if( get_field('service-name4') ):?>
									<h4><?php the_field('service-name4') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
						<?php if( get_field('service-link5') ):;?>
						<a href="<?php the_field('service-link5') ?>" class="col-lg-4 col-md-6  service">
							<div class="fitness-bar" <?php echo dreambody_get_background('service-img5');?>>
								<div class="service-text">
								<?php if( get_field('service-name5') ):?>
									<h4><?php the_field('service-name5') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
						<?php if( get_field('service-link6') ):;?>
						<a href="<?php the_field('service-link6') ?>" class="col-lg-4 col-md-6  service">
							<div class="solarium" <?php echo dreambody_get_background('img-service6');?>>
								<div class="service-text">
								<?php if( get_field('service-name6') ):?>
									<h4><?php the_field('service-name6') ?></h4>      
								<?php endif;?>
								</div>
							</div>
						</a>
						<?php endif;?>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</section>
	<section class="section_menu" id="timetable">
		<?php if( get_field('timetable-header') ):?>
			<h4><?php the_field('timetable-header') ?></h4>      
		<?php endif;?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="table-responsive">
					<?php echo do_shortcode('[table id=2 /]'); ?>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</section>
	<section class="section_menu" id="prices">
		<?php if( get_field('price-header') ):?>
			<h4><?php the_field('price-header') ?></h4>      
		<?php endif;?>
		<div class="container-fluid">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item price-button" role="presentation">
					  	<a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" role="tab" aria-controls="pills-home" aria-selected="true">
						<?php if( get_field('price-header2') ):?>
						<?php the_field('price-header2') ?>    
						<?php endif;?></a>
					</li>
					<li class="nav-item price-button" role="presentation">
					  	<a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-abonement" role="tab" aria-controls="pills-profile" aria-selected="false">
					  	<?php if( get_field('price-header3') ):?>
						<?php the_field('price-header3') ?>    
						<?php endif;?></a>
					</li>
				</ul>
			</div>
			<div class="col-2"></div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 price">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-home-tab">
						<?php if( get_field('price-header2') ):?>
						<h4><?php the_field('price-header2') ?></h4>  
						<?php endif;?>
						<div class="table-responsive">
							<?php echo do_shortcode('[table id=3 /]'); ?>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-abonement" role="tabpanel" aria-labelledby="pills-profile-tab">
						<?php if( get_field('price-header3') ):?>
						<h4><?php the_field('price-header3') ?></h4>  
						<?php endif;?>
						<div class="table-responsive">
							<?php echo do_shortcode('[table id=4 /]'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
		</div>
	</section>
	<section class="section_menu" id="trainers">
		<?php if( get_field('header-trainers') ):?>
		<h4><?php the_field('header-trainers') ?></h4>      
		<?php endif;?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="row">
						<?php query_posts('trainers' );?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="col-lg-3 col-md-4 col-sm-6 trainer-block">
							<div class="trainer">
								<?php if( get_field('photo-trainer') ):;?>
									<img src="<?php the_field('photo-trainer') ?>" alt="">
								<?php endif;?>
							</div>
							<?php if( get_field('name-trainer') ):;?>
							<p><?php the_field('name-trainer') ?></p>    
							<?php endif;?>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query();?>
					</div>
				</div>
				<div class="col-1"></div>
			</div> 
		</div>
		<?php if( get_field('treners-link') ):
            $link = get_field('treners-link');?>
            <a href="<?php echo $link['url'];?>" class="nav-link active">Узнать больше <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        <?php endif;?>
	</section>
	<?php get_footer()?>
</body>
</html>