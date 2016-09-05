<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

	<div class="entry-header"> 
		<?php sitewp_entry_header(); ?>
	
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php (is_single()?sitewp_entry_tag():''); ?>
	 </div>
	 
</article>