<?PHP
function launcher_setup_theme(){
    load_theme_textdomain("launcher");
    add_theme_support("post_thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme","launcher_setup_theme");
function launcher_assets(){
    wp_enqueue_style("animate-css",get_theme_file_url("./assets/css/animate.css"));
    wp_enqueue_style("animate-css",get_theme_file_url("./assets/css/animate.css"));
    wp_enqueue_style("animate-css",get_theme_file_url("./assets/css/animate.css"));
    wp_enqueue_style("animate-css",get_theme_file_url("./assets/css/animate.css"));
}
add_action("wp_enqueue_Script","launcher_assets");