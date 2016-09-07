<?php get_header(); ?>

<section id="main-content" >
	<div class="container">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>

		<!-- Lay tieu de trong post admin
		<h1><?php the_title(); ?> </h1>post-formats
		-->
		<?php get_template_part('content',get_post_format());?>
	
		<?php endwhile ?>
		<?php  sitewp_pagination();?>


		<?php else: ?>

		<?php get_template_part('content','none'); ?> 

		<?php endif; ?>
	</div>
	<div id="sidebar">
		<?php get_sidebar();?>
	</div>
	

</div>
<?php get_footer(); ?>