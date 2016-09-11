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


	
<header id="header" >	
	<div class="container">	
		<div class="top-bar">
			<?php //sitewp_header(); ?>
			<div class="row">

			</div>
<nav class="navbar navbar-default">
    <div class="nopadding">
    
                            
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="background-color:black;">
            <ul class="nav navbar-nav" style="background-color: black;">
                <li class="active"><a href="#">Etusivu</a></li>
                <li><a href="#">Kauppa</a></li>
                <li><a href="#">Safkatutka®</a></li>
                <li><a href="#">Kemikaalitutka</a></li>
                <li><a href="#">Reseptit</a></li>
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Safkatutka<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>Ostoskori - 45€    I    Kassalle >
                </li>-->
            </ul>   
            <ul class="nav navbar-nav navbar-right nopadding" style="background-color: black;">
                <li class="navbar-text">
                	 
                <a href="#">
                <img src ="<?php echo get_template_directory_uri() . '/Icon_web/cart.png' ?>"  />
                Ostoskori - 45€</a></li>
                <li class="navbar-text"><a >|</a></li>
                <li class="navbar-text"><a class="nextpage" href="#">Kassalle &gt;</a></li> 
                <!--<li><a href="../navbar/">OSTOSKORI</a></li>
                    <li class="active"><a href="../navbar-static-top/">KAASSALLE&gt;</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
		
		<div class="linkpage">
				<ol class="breadcrumb">
  			   		<li><a href="#">Etusivu</a></li>
  			  		<li><a href="#">Safkatutka</a></li>
  					<li class="active">Kaikki artikkelit</li>
				</ol>	
		</div>	
				
				
			
		</div>
	</div>	
</header>	
		
