<?php
// Show Adsense at the bottom of each post on single view
add_filter( 'the_content', 'adsense_bottom_content_filter' );
	function adsense_bottom_content_filter( $content ) {
	   if ( is_single() || is_page() ) {
		  $content .= '
<div class="adsense-bottom-content">
<!-- Adsense under post content goes below this line -->
</div>	  
	  ';
   }
   return $content;
}

// 250x250 Adsense Code shown to left inside post content
add_filter( 'the_content', 'square_adsense_content' );
	function square_adsense_content($content) {
		if ( is_single() || is_page() ) {
		global $post;
        $original = $content;
		if ( is_single() || is_page() ) {
		$content = "";
		$content .= '
<div class="adsense-square">
<!-- Place 250x250 or smaller adsense code below this line -->
</div>		
		';
	$content .= "";
}
}
	$content .= $original;
return $content;
}