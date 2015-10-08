<?php
/*
Author: Hacksaw
URL: htp://hacksawstudio.com/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/
//require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
require_once('library/admin.php');

/*
4. Theme customiser
 */
require_once('library/customise.php');


/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'page-sidebar',
    	'name' => 'Default Sidebar',
    	'description' => 'Sidebar shown on pages.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'blog-sidebar',
        'name' => 'Blog Sidebar',
        'description' => 'Sidebar shown on blog pages.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    /*
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call
    your new sidebar just use the following code:

    Just change the name to whatever your new
    sidebar's id is, for example:

    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php

    */
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php
			    /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */
			    ?>
			    <!-- custom gravatar call -->
			    <?php
			    	// create variable
			    	$bgauthemail = get_comment_author_email();
			    ?>
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'hacksawtheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert alert-info">
          			<p><?php _e('Your comment is awaiting moderation.', 'hacksawtheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'hacksawtheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...', 'hacksawtheme').'" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!

/************* ADD EXCERPT SUPPORT TO PAGES *****************/

add_post_type_support( 'page', 'excerpt' );

/************* ADD FEATURED IMAGE BODY CLASS *****************/

//Adds a body class ‘has-featured-image’ if the current post has a featured image assigned.

add_action('body_class', 'dm2_if_featured_image_class' );

function dm2_if_featured_image_class($classes) {
    if ( has_post_thumbnail() ) {
        array_push($classes, 'has-featured-image');
    }
    return $classes;
}

/************* ADD MENU NAME CLASS *****************/

//Adds a class to each menu item with the name of the item.
//Handy for styling individual menu items.

add_filter('nav_menu_css_class' , 'ed_page_title_class' , 10 , 2);

function ed_page_title_class($classes, $item){
    $classes[] = sanitize_title('menu-item-' . $item->title);
    return $classes;
}

/*************** CUSTOM EXCERPT LENGTH *************/

//Make the_excerpt your bitch
//Allows custom excerpt lenght to be set for each occurrence

function my_excerpt_length() {
	global $myExcerptLength;

	if ($myExcerptLength) {
	    return $myExcerptLength;
	} else {
	    return 55; //default excerpt length
	    }
}
add_filter('excerpt_length', 'my_excerpt_length');

/*
Replace the_excerpt(); with the following:

<?php
$myExcerptLength=25;		//Define the word count for the excerpt in question
echo get_the_excerpt();
$myExcerptLength=0;?>

*/

/*************** PREVENT AUTOLINKING POST IMAGES *************/

function rkv_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'rkv_imagelink_setup', 10);

/*************** ADD STYLES TO TINYMCE *************/

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'button'
        ),
        // array(
        //     'title' => 'Read More Link',
        //     'selector' => 'a',
        //     'classes' => 'read-more'
        // ),
        // array(
        //     'title' => 'Read More Button',
        //     'selector' => 'a',
        //     'classes' => 'read-more-button'
        // ),
        array(
            'title' => 'Inline List',
            'selector' => 'ol, ul',
            'classes' => 'inline'
        ),
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}

/*************** IMPORT CSS TO TINYMCE *************/

add_action( 'admin_init', 'add_my_editor_style' );

function add_my_editor_style() {
    add_editor_style('library/css/editor.css');
}

/************** DIE DUMP - Debug function *************/

/**
 * Dump the given value and kill the script.
 *
 * @param  mixed  $value
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}

?>
