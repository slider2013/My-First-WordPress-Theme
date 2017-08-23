<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function my_widgets_init() {

register_sidebar( array(
    'name' => __( 'Main Sidebar', 'your-theme' ),
    'id' => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'Header Area', 'your-theme' ),
    'id' => 'sidebar-2',
    'description' => __( 'An optional widget area for your site header', 'your-theme' ),
    'before_widget' => '<div id="%1$s" class="headwidget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'my_widgets_init' );
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
get_post_format_link();
get_post_format_string();
wp_get_theme()->get_page_templates();
?>
