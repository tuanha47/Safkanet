<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
	<meta charset = "<?php bloginfo('charset'); ?>" />
	

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="pingback" href ="<?php bloginfo('pingback_url'); ?>" />
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div id="container">
		<div class="logo">
			<?php sitewp_header(); ?>
			<?php //sitewp_menu('primary-menu'); ?>
			

			<nav class="navbar navbar-default" role="navigation">

  				<!-- Mobile display -->

  			<div class="navbar-header">

    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

      				<span class="sr-only">Toggle navigation</span>

      				<span class="icon-bar"></span>

      				<span class="icon-bar"></span>

      				<span class="icon-bar"></span>

    			</button>

  			</div>

                <!-- Collect the nav links for toggling -->

            <?php // Loading WordPress Custom Menu

    			wp_nav_menu( array(

        		'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',

        		'menu_class'      => 'nav navbar-nav',

        		'menu_id'         => 'main-menu',

        		//'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()

    			) );
			
		
			 ?>

             </nav>			
		</div>