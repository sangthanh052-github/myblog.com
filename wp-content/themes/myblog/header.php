<header>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="logo">
						<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="Blog Huy kira"></a>
						<h1><?php bloginfo('name') ?></h1>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="banner">
						<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/banner.jpg" alt="Banner quảng cáo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-nav">
		<div class="container">
			<div class="menu-header">
				<?php wp_nav_menu( 
				  array( 
				      'theme_location' => 'topmenu', 
				      'container' => 'false', 
				      'menu_id' => 'top-menu', 
				      'menu_class' => 'top-menu'
				   ) 
				); ?>
			</div>
		</div>
	</div>
</header>