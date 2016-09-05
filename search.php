<?php get_header(); ?>

<div class="content" >
<div id="main-content">
<div class="search-info">
	<?php
		$search_query = new WP_Query('s='.$s.'&showpost=-1');
		$search_keyword=wp_specialchars($s,1);
		$search_count=$search_query->post_count;
		
		printf(__('Found %1$s results','sitewp'),$search_count);
		
		
		//echo '<pre>';
		//var_dump($search_count);
		//echo '</pre>';
	?>
</div>
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