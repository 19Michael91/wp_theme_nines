<?php

function register_content_scripts() {
        wp_enqueue_style("reset1",get_stylesheet_directory_uri()."/assets/css/reset.css");
        wp_enqueue_style("bootstrap",get_stylesheet_directory_uri()."/assets/libs/bootstrap/bootstrap-grid-3.3.1.min.css");
        wp_enqueue_style("font_awesome",get_stylesheet_directory_uri()."/assets/libs/font-awesome-4.2.0/css/font-awesome.min.css");
        wp_enqueue_style("fancybox",get_stylesheet_directory_uri()."/assets/libs/fancybox/jquery.fancybox.css");
        wp_enqueue_style("owl_carousel_css",get_stylesheet_directory_uri()."/assets/libs/owl-carousel/owl.carousel.css");
        wp_enqueue_style("slick_css",get_stylesheet_directory_uri()."/assets/libs/slick/slick.css");
        wp_enqueue_style("countdown_css",get_stylesheet_directory_uri()."/assets/libs/countdown/jquery.countdown.css");
        wp_enqueue_style("fonts",get_stylesheet_directory_uri()."/assets/css/fonts.css");
        wp_enqueue_style("main",get_stylesheet_directory_uri()."/assets/css/main.css");
        wp_enqueue_style("media",get_stylesheet_directory_uri()."/assets/css/media.css");


        wp_enqueue_script( 'jquery1', get_stylesheet_directory_uri() . '/assets/libs/jquery/jquery-3.2.1.min.js'  );
        wp_enqueue_script( 'jquery_mousewheel1', get_stylesheet_directory_uri() . '/assets/libs/jquery-mousewheel/jquery.mousewheel.min.js' );
        wp_enqueue_script( 'waypoints1', get_stylesheet_directory_uri() . '/assets/libs/waypoints/waypoints-1.6.2.min.js' );
        wp_enqueue_script( 'scrollto1', get_stylesheet_directory_uri() . '/assets/libs/scrollto/jquery.scrollTo.min.js' );
        wp_enqueue_script( 'owl_carousel_js1', get_stylesheet_directory_uri() . '/assets/libs/owl-carousel/owl.carousel.js' );
        wp_enqueue_script( 'slick_js1', get_stylesheet_directory_uri() . '/assets/libs/slick/slick.min.js' );
        wp_enqueue_script( 'countdown_js1', get_stylesheet_directory_uri() . '/assets/libs/countdown/jquery.plugin.js' );
        wp_enqueue_script( 'post_ajax', get_stylesheet_directory_uri() . '/assets/js/post_ajax.js' );
        wp_enqueue_script( 'common1', get_stylesheet_directory_uri() . '/assets/js/common.js' );
        wp_localize_script( 'post_ajax', 'MyAjax', array('ajaxurl' => admin_url('admin-ajax.php') ) );
    }
add_action( 'wp_enqueue_scripts', 'register_content_scripts' );

// Регистрация сайдбара в админ панели
if(function_exists('register_sidebar')){
    register_sidebar(array('name' => 'Sidebar')); // регистрируем сайдбар
}

// Регистрация сайдбара в админ панели
add_theme_support('post-thumbnails');


add_action('wp_ajax_getFreshNews', 'getFreshNews');
add_action('wp_ajax_nopriv_getFreshNews', 'getFreshNews');
function getFreshNews()
{
    $button = true;
    $news = '';
    $offSet = 0;
    if(isset($_POST['offSet'])){
        $offSet = $_POST['offSet'];
    }
    $args = array(
                    'numberposts' => -1,
                 );
    $posts = get_posts($args);
    $posts = array_slice($posts, $offSet);
    if(count($posts) < 3){
        $button = false;
    }
    $posts = array_slice($posts, 0, 2);
    foreach ($posts as $post) {
        $news .= '<div class="news-item">
                    <div class="photo-news">
                        <img src="'.get_the_post_thumbnail_url($post->ID).'" alt="">
                    </div>
                    <div class="det-news">
                        <p>
                        '.$post->post_content.'
                        </p>
                    </div>
                        <a class="see_more" href="'.$post->guid.'">Читати</a>
                  </div><br />';
    }
    if(isset($_POST['ajax'])){
    exit(json_encode(array('news' => $news,
                           'button' => $button,
                           'posts' => $posts,
                           )
                    )
        );
    } else {
        return $news;
    }
}
