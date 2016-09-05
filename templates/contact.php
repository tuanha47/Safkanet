<?php
/*
	Template Name: Contact
*/

/*if(have_posts()):while (have_posts):the_post();
	the_content();
endwhile;
endif;*/

?>

<?php get_header(); ?>

<div class="content" >
	<div id="main-content">
		<div class="contact-info">
			<h4> Dia chi lien he </h4>
			<p> So 13, ngo 9, luong ngoc quyen, thanh xuan, Ha Noi </p>
		</div>
		<div class="contact-info">
			<?php echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]'); ?>
		</div>
	</div>
	<div id="sidebar">
		<?php get_sidebar();?>
	</div>
	
</div>

<?php get_footer(); ?>>

