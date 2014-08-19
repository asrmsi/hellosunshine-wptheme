<?php
/* Shortcodes */
// Price Card 
// [price_card image="" header="" price="" duration="" photos=""][/price_card]
function price_card_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'image' => '',
			'header' => '',
			'price' => '',
			'duration' => '',
			'photos' => '',
		), $atts )
	);

	// Code
return '<div class="card">
<div class="card-image">
      <img src="' . $image . '" alt="' . $header . '">
    </div>
    <div class="card-header">
      ' . $header . '
    </div>
    <div class="card-copy"><p>' . $content . '</p></div>
<div class="card-stats">
      <ul>
      	<li><span>About</span>' . $price . '</li>
        <li><span>Hours</span>' . $duration . '</li>
        <li><span>Photos</span>' . $photos . '</li>
      </ul>
    </div>
</div>';
}
add_shortcode( 'price_card', 'price_card_shortcode' );
// Gallery Hover Tile
// Add Shortcode
function gallery_card_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'image' => '',
			'title' => '',
			'link' => '',
		), $atts )
	);

	// Code
return '<a class="hover-tile-link" href="' . $link . '"><div class="hover-tile-outer ' . $image . '">
  <div class="hover-tile-container">
    <div class="hover-tile hover-tile-visible">' . $title . '</div>
    <div class="hover-tile hover-tile-hidden">
      <h4>' . $title . '</h4>
      <p>' . $content . '</p>
    </div>
  </div>
</div></a>';
}
add_shortcode( 'gallery_card', 'gallery_card_shortcode' );