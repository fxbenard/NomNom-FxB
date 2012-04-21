<?php
	include ("../../../../wp-config.php");
	
	header('content-type: text/css');
	header('Expires: ' . gmdate('D, d M Y H:i:s', (time() + 900)) . ' GMT');

	$options = get_option ("nomnom_color_options");
	$font_options = get_option ("nomnom_font_options");
	$color_font_option = get_option ("nomnom_color_font_option");
	
	$fonts = get_nomnom_available_fonts ();
	
		
	/*
	echo "<pre>";
	print_r (get_option ("nomnom_color_options"));
	echo "</pre>";*/
?>

<?php
	echo $fonts[$font_options['main_font']]['import']."\n";
	echo $fonts[$font_options['widget_body_font']]['import']."\n";
	echo $fonts[$font_options['widget_title_font']]['import']."\n";
	echo $fonts[$font_options['blog_title_font']]['import']."\n";
	echo $fonts[$font_options['index_post_title_font']]['import']."\n";
	echo $fonts[$font_options['single_post_title_font']]['import']."\n";
?>

.entry-content, .entry-summary {
	font-size: <?php echo $font_options['main_font_size'];?>px;
	<?php echo $fonts[$font_options['main_font']]['css']; ?> 	
}

.widget-area a:link, .widget-area a:visited {
	font-size: <?php echo $font_options['widget_font_size'];?>px;
	<?php echo $fonts[$font_options['widget_font']]['css']; ?> 

}

h3.widget-title, .widget-title {
	font-size: <?php echo $font_options['widget_title_font_size'];?>px;
	<?php echo $fonts[$font_options['widget_title_font']]['css']; ?> 	
}

div.widget-area ul li, div.widget-area ul li a, aside.widget li, aside.widget li a,
.widget, .widget ul, .widget ul li, .widget a, .widget-area a:link, .widget-area a:visited {
	font-size: <?php echo $font_options['widget_body_font_size'];?>px;
	<?php echo $fonts[$font_options['widget_body_font']]['css']; ?> 	
}

.entry-title
{
	font-size: <?php echo $font_options['index_title_font_size'];?>px;
	<?php echo $fonts[$font_options['index_post_title_font']]['css']; ?> 		
}

#site-title{
	padding-top: 20px;
	padding-bottom: 0;
	margin:0px;
}

.entry-content,
.entry-summary {
	padding: ;
}


#site-title, #site-title a{
	font-size: <?php echo $font_options['blog_title_font_size'];?>px;
	<?php echo $fonts[$font_options['blog_title_font']]['css']; ?> 
}

.entry-title, .entry-title a{
	font-size: <?php echo $font_options['index_title_font_size'];?>px;
	<?php echo $fonts[$font_options['index_post_title_font']]['css']; ?> 	
}

#access, #access2 {
	background: <?=$options['bottom_nav_bg']?>; /* Show a solid color for older browsers */
	background: -moz-linear-gradient(<?=$options['bottom_nav_bg']?>, <?=$options['bottom_nav_secondary']?>);
	background: -o-linear-gradient(<?=$options['bottom_nav_bg']?>, <?=$options['bottom_nav_secondary']?>);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(<?=$options['bottom_nav_bg']?>), to(<?=$options['bottom_nav_secondary']?>)); /* older webkit syntax */
	background: -webkit-linear-gradient(<?=$options['bottom_nav_bg']?>, <?=$options['bottom_nav_secondary']?>);
}



<?php if (!$color_font_option['default']):  ?>

#access ul ul, #access2 ul ul, #access3 ul ul{
	background: <?=$options['bottom_nav_secondary']?>;
}
 

#access a, #access2 a, #access3 a, #access .menu li a, #access2 .menu li a, #access3 .menu li a{
	color:  <?=$options['bottom_nav_color']?>;
}

#access ul ul a, #access2 ul ul a, #access3 ul ul a {	
	background: <?=$options['bottom_nav_hover_bg']?>;
	color: <?=$options['bottom_nav_bg']?>;
}

#access .menu ul.children > li:hover > a,
#access .menu ul.sub-menu > li:hover > a,
#access .menu > ul > li:hover > a,
#access .menu > li:hover > a,
#access2 .menu ul.children > li:hover > a,
#access2 .menu ul.sub-menu > li:hover > a,
#access2 .menu > ul > li:hover > a,
#access2 .menu > li:hover > a,#access3 .menu ul.children > li:hover > a,#access3 .menu ul.sub-menu > li:hover > a,#access3 .menu > ul > li:hover > a,#access3 .menu > li:hover > a{
	background: <?=$options['bottom_nav_hover_bg']?>;
	color: <?=$options['bottom_nav_hover_color']?>;
}

/* Navigation sub-menus background and text color */
#access .menu ul.children li a,
#access .menu ul.sub-menu li a,
#access2 .menu ul.children li a,
#access2 .menu ul.sub-menu li a,#access3 .menu ul.children li a,#access3 .menu ul.sub-menu li a {
	background: <?=$options['bottom_nav_bg']?>; 
	color:  <?=$options['bottom_nav_color']?>;
}

#access li:hover > a,
#access ul ul :hover > a,
#access a:focus,
#access2 li:hover > a,
#access2 ul ul :hover > a,
#access2 a:focus,#access3 li:hover > a,#access3 ul ul :hover > a,#access3 a:focus {
	background: <?=$options['bottom_nav_hover_color']?>;
	color: <?=$options['bottom_nav_hover_bg']?>;
}

<?php endif; ?>

#nomnom-header{
	padding:0px;
	margin:0px;
}

#nomnom-header img{
}

#access{
	margin-top:0px;
}
}