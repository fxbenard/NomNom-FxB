<?php
// Thanks to http://designisphilosophy.com/ for this nice addition
	$backup = $post; //backup current object
	$current = $post->ID; //current page ID
?>
<?php
	global $post;
	$thisCat = get_the_category();
	$currentCategory = $thisCat[0]->cat_ID;
	$stepper = 1;
	$myposts = get_posts('numberposts=2&order=DESC&orderby=ID&category=' . $currentCategory . '&exclude=' . $current);
	
	$check = count($myposts);
	
	if ($check > 1 ) { ?>
	<div id="recent">Recent Related Posts</div>
	<div id="related" class="group">
	
<?php	
	foreach($myposts as $post) :
	setup_postdata($post);
?>
<div class="story<?php echo $stepper ?>">
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>
	<div class="date"><?php the_time('F j, Y'); ?></div>
	<div class="theExcerpt"><?php the_excerpt(); ?></div>
</div>
 
	<?php
	$stepper = ($stepper+1);
	endforeach; ?>
 
<?php
	$post = $backup; //restore current object
	wp_reset_query();
?>

</div><!-- #related -->
<?php } ?>