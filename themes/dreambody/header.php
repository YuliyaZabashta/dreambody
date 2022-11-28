<?php wp_head()?>
<header class="page-header section_menu" id="home">
	<nav class="navbar navbar-expand-lg header_box">
		<a class="navbar-brand" href="<?php echo home_url('/')?>">
			<?php $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo')); if($custom_logo):?>
				<img src="<?php echo $custom_logo[0]?>" alt="<?php bloginfo('name')?>">
			<?php endif; ?>
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
        </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php wp_nav_menu( array(
				'theme_location' => 'header_menu',
				'container' => false,
				'menu_class' => 'navbar-nav ml-auto'
			)) ?>
		</div>			
		<button class="btn-header" data-bs-toggle="modal" data-bs-target="#exampleModal">Записаться</button>
	</nav>
		<!-- /.main-header-text -->
		
</header>