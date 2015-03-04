//* Enqueue JavaScript
add_action( 'wp_enqueue_scripts', 'enqueue_js' );
function enqueue_js() {
  wp_enqueue_script( 'site-wide-javascript', '/wp-content/themes/genesis-sample/js/site.js', array( 'jquery' ) );
  if ( is_front_page() && file_exists(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress1/wp-content/themes/genesis-sample/js/home.js' ) ) {
  }
  if ( file_exists(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress1/wp-content/themes/genesis-sample/js/' . basename(get_permalink()) . '.js' ) ) {
    wp_enqueue_script( basename(get_permalink()) . '-javascript', '/wp-content/themes/genesis-sample/js/' . basename(get_permalink()) . '.js', array( 'jquery' ) );
  }
}