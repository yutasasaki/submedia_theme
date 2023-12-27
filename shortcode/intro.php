<?php
class Intro {
	public static function output( $atts, $content = "" ) {
    $a = shortcode_atts( array(
      'name' => '医師名',
      'organization' => '所属する医療法人',
      'image' => '画像URL',
    ), $atts );
    $output = '<div class="container">
        ' . $content . '
      </div>';
		return $output;
	}
}
add_shortcode( 'intro', array( 'Intro', 'output' ) );
?>