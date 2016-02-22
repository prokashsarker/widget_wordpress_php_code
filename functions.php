<?php


/**
 * Register widget area.
 *
 * @link https://www.alorpath.com
 */
function ranna_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ranna' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) ); 
}
add_action( 'widgets_init', 'ranna_widgets_init' );











?>