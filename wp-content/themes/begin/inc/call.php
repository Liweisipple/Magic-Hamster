<?php  
add_action('wp_head','begin_width');
add_shortcode('reply','reply_read');
add_shortcode('password','secret');
add_shortcode('login','login_to_read');
add_shortcode('img','gallery');
add_shortcode('slide','image');
add_shortcode('file','button_a');
add_shortcode('button','button_b');
add_shortcode('url','button_url');
add_shortcode('fieldset','fieldset_label');
add_shortcode('videos','my_videos');
add_action('wp_ajax_nopriv_zm_ding','begin_ding');
add_action('wp_ajax_zm_ding','begin_ding');
add_shortcode('s','show_more');
add_shortcode('p','section_content');
add_shortcode('ad','post_ad');
$add = $_SERVER['SERVER_NAME'].','.$_SERVER['SERVER_NAME'].',localhost';
add_filter('category_description','deletehtml');
add_filter('post_class','post_classes');
add_filter('comments_popup_link_attributes','nofollow_comments_popup_link');
add_action('init','begin_smilies',5);
if(current_user_can('edit_posts')&& current_user_can('edit_pages'))
{
	add_action('media_buttons','begin_select',11);
}
add_action('admin_head','begin_button');
add_action('save_post','clear_archives');
add_filter('user_contactmethods','begin_user_contact');
add_filter('protected_title_format','change_protected_title_prefix');
add_filter('esc_html','begin_post_format');
add_action('wp_head','begin_color');
add_action('wp_head','modify_css');
add_action('wp_head','begin_thumbnail_width');
add_action('wp_head','zm_meta_left');
add_action('admin_init','ssid_add');
add_action('wp_login','user_last_login');
add_action('admin_head','spces_code_plugin');
add_action('admin_init','begin_tinymce_button');
require get_template_directory().'/inc/widget.php';
require get_template_directory().'/inc/comment-template.php';
require get_template_directory().'/inc/my-field.php';
require get_template_directory().'/inc/notify.php';
require get_template_directory().'/inc/meta-boxes.php';
require get_template_directory().'/inc/admin/options-framework.php';
if(is_admin()&& $_GET['activated']=='true')
{
	header('Location: themes.php?page=options-framework');
}
require get_template_directory().'/inc/help.php';
require get_template_directory().'/inc/post-type.php';
require get_template_directory().'/inc/custom.php';
require get_template_directory().'/inc/function.php';
require get_template_directory().'/inc/add-lazyload.php';
require get_template_directory().'/inc/order.php';
require get_template_directory().'/inc/lazy-avatars.php';
$is_allow=false;
$url=trim($_SERVER['SERVER_NAME']);
$allow_domain=explode(',',"$add");
if(zm_get_option('edd'))
{
	require get_template_directory().'/inc/edd.php';
}
if(zm_get_option('smart_ideo'))
{
	require get_template_directory().'/inc/smartideo.php';
}
if(zm_get_option('front_tougao'))
{
	require get_template_directory().'/inc/frontpost/frontpost.php';
}
if(zm_get_option('no_category'))
{
	require get_template_directory().'/inc/no-category.php';
}
if(zm_get_option('wp_thumbnails'))
{
	add_theme_support('post-thumbnails');
	require get_template_directory().'/inc/thumbnail-all.php';
	require get_template_directory().'/inc/featured-image.php';
}
else
{
	require get_template_directory().'/inc/thumbnail.php';
}
if(zm_get_option('favorite_p'))
{
	require get_template_directory().'/inc/favorite/favorite-posts.php';
}
if(zm_get_option('qq_info'))
{
	require get_template_directory().'/inc/qquser.php';
}
foreach($allow_domain as $value)
{
	$value=trim($value);
	$tmparr=explode($value,$url);
	if(count($tmparr)>1)
	{
		$is_allow=true;
		break;
	}
}
if(zm_get_option('qt'))
{
	require get_template_directory().'/inc/qaptcha.php';
}
if(zm_get_option('auto_tags'))
{
	add_action('save_post','auto_tags');
}
if(zm_get_option('page_html'))
{
	add_action('init','html_page_permalink',-1);
}
if(zm_get_option('no_admin'))
{
	add_action('admin_init','redirect_non_admin_user');
}
if(zm_get_option('save_image'))
{
	require get_template_directory().'/inc/save-image.php';
}
if(zm_get_option('search_title'))
{
	add_filter('posts_search','wpse_11826_search_by_title',10,2);
}
if(zm_get_option('async_js'))
{
	add_filter('script_loader_tag','async_script',10,3);
}
if(zm_get_option('scroll'))
{
	add_action('wp_footer','ajax_scroll_js',100);
}
if(zm_get_option('comment_scroll'))
{
	add_action('wp_footer','ajax_c_scroll_js',100);
}
function begin_seo()
{
	get_template_part('inc/seo');
}
function type_breadcrumb()
{
	get_template_part('/inc/type-navigation');
}
function setTitle()
{
	$var_2930=get_term_by('slug',get_query_var('term'),get_query_var('taxonomy'));
	echo $var_2931=$var_2930->name;
}
if(!$is_allow)
{
	echo '<script> alert(\'This themes is locked to another domain.\');</script>';
}
if(zm_get_option('check_admin'))
{
	if(!is_user_logged_in())add_filter('preprocess_comment','usercheck');
}
?>