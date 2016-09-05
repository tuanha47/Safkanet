<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
	<div class="entry-thumbnail">
		<?php sitewp_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-header"> 
		<?php sitewp_entry_header(); ?>
		<?php sitewp_entry_meta(); ?>
	</div>
	<div class="entry-content">
		<?php sitewp_entry_content(); ?>
		<?php (is_single()?sitewp_entry_tag():''); ?>
	 </div>
	 
</article>