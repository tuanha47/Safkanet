<?php
/**
@khai bao hang gia tri
@ THEME_URL = lay duong dan thu muc theme
@ CORE = lay duong dan cua thu muc /core
**/

define ('THEME_URL', get_stylesheet_directory());
define ('CORE',THEME_URL . "/core");

/**
@ Nhung file /core/init.php
**/
require_once(CORE . "/init.php");

if(!isset($content_width)){
	$content_width=620;
}
/**
@ Khai bao ham
**/
if(!function_exists('theme_setup')){
	function theme_setup(){
	/* thiet lap textdomain */
		$language_folder= THEME_URL . '/languages';
		load_theme_textdomain('Safkanet', $language_folder);
		/* them ress vao head */
		add_theme_support('automatic-feed-links');
		/* them thumbnails */
		add_theme_support('post-thumbnails');
		
		/* post format */
		
		add_theme_support('post-formats',array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		
		));
		
		/* them title-tag*/
		add_theme_support('title-tag');
		
		/* them custom background */
		$default_backround = array(
			'default-color'=>'#e8e8e8'
		);
		add_theme_support('custom-background',$default_backround);
		
		/* them menu */
		
		/*
		register_nav_menu('primary-menu',__('Primary Menu','Safkanet'));
		*/
		
	if ( ! function_exists( 'cwd_wp_bootstrapwp_theme_setup' ) ):

  		function cwd_wp_bootstrapwp_theme_setup() {

    	// Adds the main menu

    	register_nav_menus( array(

      	'main-menu' => __( 'Main Menu', 'cwd_wp_bootstrapwp' ),

    	) );

  	}

	endif;

add_action( 'after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup' );
		
		
		
		/* Tao sidebar */
		
		$sidebar = array(
			'name' => __('Main Sidebar','Safkanet'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		
		register_sidebar($sidebar);
	}
	add_action('init','theme_setup');
}


require_once 'inc/nav.php';


/*
Functions
*/

if(!function_exists('sitewp_header'))
{
	function sitewp_header()
	{
	?>
		<div class="site-name">
		<?php
		
			if(is_home())
			{
			
				printf('<h1><a href="%1$s" title="%2$s"> %3$s</h1>',
				get_bloginfo('url'),
				get_bloginfo('description'),
				get_bloginfo('sitename'));
				
			}
			else
			{
			
				printf('<p><a href="%1$s" title="%2$s"> %3$s</p>',
				get_bloginfo('url'),
				get_bloginfo('description'),
				get_bloginfo('sitename'));		
					
			}
		
		?>
		
		</div>	
		<div class="site-description">
			<?php bloginfo('description'); ?> 
		</div> <?php	
		
	}

}
/*
Thiet lap menu

*/
if(!function_exists('sitewp_menu')){
	function sitewp_menu($menu){
		$menu = array(
			'theme_location'=>$menu,
			'container'=>'nav',
			'container_class'=>$menu
		);
		wp_nav_menu($menu);
	}
}

/*
 Phan trang
*/

 if(!function_exists('sitewp_pagination'))
 {
 	function sitewp_pagination() {
 		if($GLOBALS['wp_query']->max_num_pages < 2){
 			return '';
 		} ?>
 		<nav class="pagination" role='navigation'>
 			<?php if(get_next_posts_link()): ?>
 				<div class="prev"><?php next_posts_link(__('Older Posts','Safkanet')); ?> </div>
 			<?php endif; ?>
 			<?php if(get_previous_posts_link()): ?>
 				<div class="next"><?php previous_posts_link(__('Newest posts','Safkanet')); ?> </div>
 			<?php endif; ?>
 		</nav>
 	<?php 
 	}
 }
 
 /*
 Hien thi Thumbnail
 */
 
 if(!function_exists('sitewp_thumbnail')){
 	function sitewp_thumbnail($size){
 		if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')): ?>
 		
 		<figure class="post-thumbnail"> <?php the_post_thumbnail($size); ?> </figure>
 		
 		
 		<?php endif; 
 	}
 }
 
 /* 
 Hien thi tieu de post
 */
 
  if(!function_exists('sitewp_entry_header')){
 	function sitewp_entry_header(){ ?>
 		<?php  if(is_single()) : ?>
 			<h1 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title(); ?> </a> </h1>
 		<?php  else :?>
 	
				<h2 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title(); ?> </a> </h2>
 		<?php endif; 
 	}
 }
 
if(!function_exists('sitewp_entry_meta')){
 	function sitewp_entry_meta(){ ?>
 		<?php if(!is_page()) :?>
 			<div class="entry-meta">
 			<?php
 				printf(__('<span class="author"> Posted by %1$s','sitewp'),
 				get_the_author());
 		
 		        printf(__('<span class="date-published"> at %1$s','sitewp'),
 				get_the_date());		
 				
 				printf(__('<span class="category"> , in %1$s ','sitewp'),
 				
 				get_the_category_list(','));
 				
 				if(comments_open()):
 					echo '<span class="meta-reply">';
 						comments_popup_link(
 							__('Leave a comment','sitewp'),
 							__('One comment','sitewp'),
 							__('% comments','sitewp'),
 							__('Read all comments','sitewp')
 						);
 					echo '</span>';
 				endif;		
 			?>			
 			    <!-- get_the_modified_date(): thoi gian cap nhat bai viet -->
 			</div>
 		
 		<?php endif;
 	}
 	
 }
 
 /*
 Hien thi noi dung post/page sitewp_entry_content
 */
 
 if(!function_exists('sitewp_entry_content')){
 	function sitewp_entry_content(){ 
 		if(!is_single() && !is_page()){
 			the_excerpt();
 		}
 		else
 		{
 			the_content();
 			/*Phan trang (chia cac doan trong bai viet <!--nextpage-->)*/
 			$link_pages=array(
 				'before'=>__('<p>Page: ','sitewp'),
 				'after'=>'</p>',
 				'nextpagelink'=>__('Next Page','sitewp'),
 				'previouspagelink'=>__('Previous Page','sitewp'),
 			);
 			
 			wp_link_pages($link_pages);
 		}
 	}
 }	
 
 function sitewp_readmore(){
 	return'<a class="read-more" href="'.get_permalink(get_the_ID()).'">'.__('...[Read_More]','sitewp'.'</a>');
 	
 }
 
 add_filter('excerpt_more','sitewp_readmore');
 
 /* hien thi tag */
 
  if(!function_exists('sitewp_entry_tag')){
 	function sitewp_entry_tag(){ 
 		if(has_tag()):
 			echo '<div class="entry-tag">';
 			printf(__('tagged in %1$s','sitewp'),get_the_tag_list('',','));
 			echo '</div>';
 		endif;
 	}
 	
  }
 
 /* nhung file style.css */
 
 function sitewp_style(){
 
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-style');
 
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bootstrap');
    
 
 	wp_register_style('main-style', get_template_directory_uri() . "/style.css",'all');
 	wp_enqueue_style('main-style');
 	
 	
 }
 add_action('wp_enqueue_scripts','sitewp_style');
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





