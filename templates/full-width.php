<?php
/*
	Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div class="content" >
	<div id="main-content">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>

		<!-- Lay tieu de trong post admin
		<h1><?php the_title(); ?> </h1>
		-->
		<?php get_template_part('content',get_post_format());?>

	
		<?php endwhile ?>

		<?php else: ?>

		<?php get_template_part('content','none'); ?> 

		<?php endif; ?>
	</div>

</div>
<?php get_footer(); ?>