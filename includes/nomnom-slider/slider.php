<?php
	
	//if (!is_admin())
	
	add_action('init', 'nomnom_nivo_slider_options');
	add_action('get_header', 'nomnom_nivo_slider_script');
	
	function nomnom_nivo_slider_options (){
		add_option ("nomnom_has_slider", 0);
		add_option ("nomnom_slider_featured_category", 1);
		add_option ("nomnom_slider_count", 10);		
		add_option ("nomnom_display_post_image", 1);		
		add_option ("nomnom_slider_effects", "random");	
		add_option ("nomnom_image_pause", 5000); 	
		add_option ("nomnom_trans_speed", 500);	
		
		
	}
		
	function nomnom_nivo_slider_script ()
	{
		/* nivo theme */
		wp_register_style('nivo-default.css', get_stylesheet_directory_uri().'/includes/nomnom-slider/nivo-slider/themes/default/default.css');	
		wp_register_script('nivo.js', get_stylesheet_directory_uri() . '/includes/nomnom-slider/nivo-slider/nivo.slider.pack.js', array('jquery'));

		
		if (is_home())
		{
			/* install nivo slider*/				
			wp_enqueue_style('nivo-default.css');				
			wp_enqueue_script('jquery');
			wp_enqueue_script('nivo.js');
		}
	}
	
	function nomnom_slider ()
	{
		global $post;
		
		if (!get_option("nomnom_has_slider"))
			return;
			
		$slider_featured_category = get_option("nomnom_slider_featured_category");
		$slider_count = get_option("nomnom_slider_count");

		if (!$slider_featured_category) $slider_featured_category = 1;
		if (!$slider_count) $slider_count = 10;
			
		$qry = array (
			'post_type'			=> 'post',
			'posts_per_page'	=> $slider_count,
			'orderby'			=> 'date',
			'order'				=> 'DESC',
			'cat'				=> $slider_featured_category
			
		);
		
		$myposts = new WP_Query ($qry);
		
		// slider  size 
			
		$img_list = "";
		$labels_list = "";
		
		if ($myposts->have_posts()) :
			$has_img_featured = false;
			while ($myposts->have_posts()) : $myposts->the_post(); 
			
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false);
				
				list($src, $width, $height) = $image;
				
				/*if (has_post_thumbnail( $post->ID ) )
				{
					if (!$has_img_featured)
						echo "<div id='slider'>";
						
					$has_img_featured = true;
					
					echo ' <div class="nivo-caption2"><p>'.$post->post_title.'</p></div>'; 
					echo "<a href='". get_permalink( $post->ID )."'>";
					the_post_thumbnail();
					echo "</a>";
					
//					$img_list .= "<img src='".get_stylesheet_directory_uri()."/slider/timthumb.php?src={$src}&w=".WIDTH."&h=".HEIGHT."' data-caption='#slider_caption_{$post->ID}' height='".HEIGHT."' /> \n";
//					$labels_list .= '<span class="orbit-caption" id="slider_caption_'.$post->ID.'"><a href="'. get_permalink( $post->ID ) .'">'.$post->post_title.'</a></span>';
				}*/
				
				if (has_post_thumbnail( $post->ID ) )
				{
					$has_img_featured = true;
				/*	$img_list .= '<a href="'.get_permalink( $post->ID ).'" title="'.$post->post_title.'"> 
					 <div class="nivo-caption2"><p>'.$post->post_title.'</p></div>
					<img width="'.HEADER_IMAGE_WIDTH.'" height="'.HEADER_IMAGE_HEIGHT.'" src="'.get_stylesheet_directory_uri().'/slider/timthumb.php?src='.$src.'&w='.HEADER_IMAGE_WIDTH.'&h='.HEADER_IMAGE_HEIGHT.'" class="attachment-post-thumbnail wp-post-image" alt="'.$post->post_title.'" title="'.$post->post_title.'" />  
					 </a>';
				*/
					
				
					$img_list .= "<a href='".get_permalink( $post->ID )."'><img src='".get_stylesheet_directory_uri()."/includes/nomnom-slider/timthumb.php?src={$src}&w=".HEADER_IMAGE_WIDTH."&h=".HEADER_IMAGE_HEIGHT."&zc=1' title='#slider_caption_{$post->ID}' width='".HEADER_IMAGE_WIDTH."' height='".HEADER_IMAGE_HEIGHT."' /></a> \n";
					$labels_list .= '<div class="nivo-html-caption" id="slider_caption_'.$post->ID.'"><a href="'. get_permalink( $post->ID ) .'">'.$post->post_title.'</a></div>'."\n";
				}
								
			endwhile;
			
		/*	if ($has_img_featured)
				echo "</div>";*/
			if ($has_img_featured)
				echo "<div class='slider-wrapper theme-default'>\n<div id='slider'>\n{$img_list}\n</div> \n {$labels_list}</div>";		
		endif;
	
		return $has_img_featured;

	}
?>