<?php get_header(); ?>

<div class="content" >
	<div id="main-content">
		<?php 
			_e('<h2> 404 NOT FOUND </h2>','sitewp');
			get_search_form();
			_e('<h3> Content categories:</h3>','sitewp');
			echo '<div class="404-cat-list">';
				wp_list_categories(array('title_li'=>''));
			echo '</div>';
			
			_e('Tag Cloud','sitewp');
			wp_tag_cloud();
		?>
	</div>
<div id="sidebar">
	<?php get_sidebar();?>
</div>
</div>
<?php get_footer(); ?>