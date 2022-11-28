<header class="main-header section_menu" id="home" <?php echo dreambody_get_background('header_bg');?>>
		<nav class="navbar navbar-expand-lg header_box">
			<a class="navbar-brand" href="<?php echo home_url('/')?>">
				<?php $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo')); if($custom_logo):?>
					<img src="<?php echo $custom_logo[0]?>" alt="<?php bloginfo('name')?>">
				<?php endif; ?>
			</a>
			<button class="btn-header d-md-block d-lg-none" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
            </button>
			<div class="collapse navbar-collapse header_menu" id="navbarSupportedContent">
				<?php wp_nav_menu( array(
				'theme_location' => 'header_menu',
				'container' => false,
				'menu_class' => 'navbar-nav ml-auto'
			)) ?>
			</div>			
			<button class="btn-header" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться</button>
		</nav>
		<div class="main-header-text">
        <?php if( get_field('header_main') ):;?>
			<h3><?php the_field('header_main') ?></h3>      
		<?php endif;?>
        <?php if( get_field('header_text') ):;?>
			<h4><?php the_field('header_text') ?></h4>      
		<?php endif;?>
		</div>
	</header>