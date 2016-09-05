<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
	<div class="entry-thumbnail">
		<?php sitewp_thumbnail('large'); ?>
	</div>
	<div class="entry-header"> 
		<?php sitewp_entry_header(); ?>
		<?php 
			$attachment=get_children(array('post_parent'=>$post->ID));
			$attachment_number=count($attachment);
			printf(__('This image post: %1$s photos','sitewp'),$attachment_number);
		?>
	</div>
	<div class="entry-content">
		<?php sitewp_entry_content(); ?>
		<?php (is_single()?sitewp_entry_tag():''); ?>
	 </div>
	 
</article>