//* Enqueue LESS
add_action( 'wp_enqueue_scripts', 'enqueue_less' );
function enqueue_less() {
	wp_enqueue_style( 'less-style', '/wp-content/themes/genesis-sample/less-style.less' );
  if ( is_front_page() && file_exists(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress1/wp-content/themes/genesis-sample/less/home.less' ) ) {
    wp_enqueue_style( 'less-home-style', '/wp-content/themes/genesis-sample/less/home.less' );
  }
  else if ( file_exists(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress1/wp-content/themes/genesis-sample/less/' . basename(get_permalink()) . '.less' ) ) {
    wp_enqueue_style( 'less-' . basename(get_permalink()) . '-style', '/wp-content/themes/genesis-sample/less/' . basename(get_permalink()) . '.less' );
  }
}