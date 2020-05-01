<?php
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size('i-blog-home', 50, 50, true);
add_image_size('home-news', 132, 132, true);
add_image_size('index-pst-i', 255, 255, true); //در صفحه index استفاده شده
add_image_size('product-pic', 500, 500, true); //در صفحه محصولات استفاده شده
}
/*--*/

function register_my_menus() {
register_nav_menus(
array(
'top-menu' => __( 'فهرست بالا' ),
'main-menu' => __( 'فهرست میانی' ),
'footer-menu' => __( 'فهرست پایین' )
)
);
}

add_action( 'init', 'register_my_menus' );

/*--------------------*/

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'جستجو',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
));
register_sidebar(array('name'=>'لینک ها',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'دسترسی سریع',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'پانویس 1',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4 class="head-blog-cat">',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'پانویس 2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4 class="head-blog-cat">',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'پانویس 3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4 class="head-blog-cat">',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'پانویس 4',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4 class="head-blog-cat">',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'ستون-راست',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

// start woocommerce
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// end woocommerce

?>