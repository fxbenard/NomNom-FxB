	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Header Options', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
			<td>
				<blockquote>

					<div class="theme-admin">

						<div class="ajax_msg" id="header_options_msg"></div>
						
						<table border="0" bordercolor="" width="100%" bgcolor="">
							<tr>
	<!-- Header resize -->
<td valign="top" width="25%">
<table>
	<tr>
		<td>
		<?php $header_options = get_option( 'resize_header_options' ); ?>
<h4><?php _e('Choose your header size.','nomnom');?></h4>
			<tr valign="top">
				<th scope="row"><?php _e('Width','nomnom');?></th>
				<td><input style="width: 100px; type="text" name="resize_header_options_width" id="resize_header_options_width" value="<?php echo $header_options['width']; ?>"/> <b><?php _e('Recommended 1000px','nomnom');?> </b>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e('Height','nomnom');?></th>
				<td><input style="width: 100px; type="text" name="resize_header_options_height" id="resize_header_options_height" value="<?php echo $header_options['height']; ?>"/> <b><?php _e('Default is 288px','nomnom');?></p>
				</td>
			</tr>
		</td>
	</tr>

</table>
	<td width="30%" style="padding-top:25px;">
	<p><?php _e('Resize the header image here. This will also affect the slider size. It\'s a good idea to stick with the same header size after resizing if you plan to use the slider.','nomnom');?></p>
	<p><?php _e('You must upload a new header image after setting a size as only new images are resized, if you use an old or default header image, it will display as the size it was originally cropped to.','nomnom');?></p>
	</td>
			<tr>
				<td colspan="2"><input type="button" class="button-primary" name="Submit" id="nomnom_resize_header" value="<?php _e('Update Header Size','nomnom');?>" /></td>
			</tr>
</td>
<!-- end header size -->

		</table>
			<div>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>
<!-- Begin Post Options Table -->
	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Post Options', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
			<td>
				<blockquote>
					<div class="theme-admin">
						
					<div class="ajax_msg" id="theme_post_options_msg"></div>
							
						<table border="0" bordercolor="" width="100%" bgcolor="">
							<tr>
				<!-- Begin POST Options -->
	<table class="form-table">
<!-- excerpts thumbnails -->
<?php  $nomnom_post_thumbnail = get_option( 'nomnom_display_post_image' );  ?>
        <tr valign="top">
        <th scope="row"><?php _e('Excerpts with Thumbnails or Full','nomnom');?></th>
        <td>
			<select style="width:100px;" id="nomnom_post_thumbnail">
				<option value="1" <?php echo ($nomnom_post_thumbnail)? "selected='selected'":""; ?> ><?php _e('Excerpts','nomnom');?></option>
				<option value="0" <?php echo (!$nomnom_post_thumbnail)? "selected='selected'":""; ?> ><?php _e('Full Posts','nomnom');?></option>
			</select> <?php _e('Excerpts will display post thumbnail if a featured image is selected for the post.','nomnom');?>
		</td>
        </tr>
<!-- Posted on -->
<?php  $nomnom_posted_on = get_option( 'nomnom_posted_on' );  ?> 
        <tr valign="top">
        <th scope="row"><?php _e('Post date on/off','nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_posted_on">
			<option value="1" <?php echo ($nomnom_posted_on)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_posted_on)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the Post Date meta information on or off on the index.', 'nomnom');?>
		</td>
        </tr>
<!-- Posted In -->
<?php  $nomnom_posted_in = get_option( 'nomnom_posted_in' );  ?>
        <tr valign="top">
        <th scope="row"><?php _e('Post Category on/off','nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_posted_in">
			<option value="1" <?php echo ($nomnom_posted_in)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_posted_in)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>	
			</select> <?php _e('This will turn Post Category meta information on/off on the index.', 'nomnom');?>
		</td>
        </tr>
	<!-- Post Tags -->
<?php  $nomnom_post_tags = get_option( 'nomnom_post_tags' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Post Tags on/off','nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_post_tags">
			<option value="1" <?php echo ($nomnom_post_tags)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_post_tags)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the Post Tags on or off on the index.', 'nomnom'); ?>
		</td>
        </tr>
<!-- Single Post Meta -->
<?php  $nomnom_single_meta = get_option( 'nomnom_single_meta' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Post Meta on All Single Post Pages', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_single_meta">
			<option value="1" <?php echo ($nomnom_single_meta)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_single_meta)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the Post meta information on or off for single post pages.', 'nomnom'); ?>
		</td>
        </tr>
<!-- leave reply-->
<?php  $nomnom_leave_reply = get_option( 'nomnom_leave_reply' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Leave Reply on/off', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_leave_reply">
			<option value="1" <?php echo ($nomnom_leave_reply)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_leave_reply)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the Leave a Reply link on or off.', 'nomnom'); ?>
		</td>
        </tr>		
		
	</table>
<input type="button" class="button-primary" name="Submit" id="nomnom_update_post_options" value="<?php _e('Update Post Options', 'nomnom');?>" />

				<!-- End POST Options -->			
			</div>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>
<!-- End Post Options Table -->
	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Site Options', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
			<td>
				<blockquote>
					<div class="theme-admin">
						
					<div class="ajax_msg" id="theme_options_msg"></div>
							
						<table border="0" bordercolor="" width="100%" bgcolor="">
							<tr>
				<!-- Begin MISC Options -->
	<table class="form-table">

<!-- main menu on or off -->
<?php $nomnom_default_menu_option = get_option( 'nomnom_default_menu' ); ?>
        <tr valign="top">
        <th scope="row"><?php _e('Main Menu Below Header', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_default_menu">
				<option value="1" <?php echo ($nomnom_default_menu_option)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
				<option value="0" <?php echo (!$nomnom_default_menu_option)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>
			</select> <?php _e('The menu option controls the main default Twenty Eleven menu in case you just want to use the top one.', 'nomnom'); ?>
		</td>
        </tr>
<!-- comment bubble -->
<?php  $nomnom_show_bubble = get_option( 'nomnom_display_bubble' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Comment Bubble on Index', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_show_bubble">
			<option value="1" <?php echo ($nomnom_show_bubble)? "selected='selected'":""; ?> ><?php _e('Yes', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_show_bubble)? "selected='selected'":""; ?> ><?php _e('No', 'nomnom');?></option>						
			</select> <?php _e('Choose to display the comment bubble on the index or hide it.', 'nomnom'); ?>
		</td>
        </tr>
<!-- comment form Posts -->
<?php  $nomnom_comment_form_post = get_option( 'nomnom_comment_form_post' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Post Comments Site Wide on/off', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_comment_form_post">
			<option value="1" <?php echo ($nomnom_comment_form_post)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
		<option value="0" <?php echo (!$nomnom_comment_form_post)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the comments, comment form and leave a Reply link on/off for all posts.', 'nomnom'); ?>
		</td>
        </tr>
<!-- comment form Page -->
<?php  $nomnom_comment_form_page = get_option( 'nomnom_comment_form_page' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Page Comments Site Wide on/off', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_comment_form_page">
			<option value="1" <?php echo ($nomnom_comment_form_page)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
		<option value="0" <?php echo (!$nomnom_comment_form_page)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn the comments and comment form on/off for all pages.', 'nomnom'); ?>
		</td>
        </tr>
		
<!-- minimal comments -->
<?php  $nomnom_minimal_comments = get_option( 'nomnom_minimal_comments' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('Minimal Style Comments on/off', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_minimal_comments">
			<option value="1" <?php echo ($nomnom_minimal_comments)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
		<option value="0" <?php echo (!$nomnom_minimal_comments)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This displays a more minimal style comment system than the default.', 'nomnom'); ?>
		</td>
        </tr>


<!-- related posts --> 
<?php  $nomnom_post_related = get_option( 'nomnom_display_related' );  ?>
        <tr valign="top">
        <th scope="row"><?php _e('Display Related Posts', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_post_related">
			<option value="1" <?php echo ($nomnom_post_related)? "selected='selected'":""; ?> ><?php _e('Yes', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_post_related)? "selected='selected'":""; ?> ><?php _e('No', 'nomnom');?></option>						
			</select> <?php _e('Related posts are displayed under each post if selected.', 'nomnom'); ?>
		</td>
        </tr>
 
<!-- aurthor post avatar -->
<?php  $nomnom_post_avatar = get_option( 'nomnom_display_avatar_image' );  ?> 
        <tr valign="top">
        <th scope="row"><?php _e('Author Post Avatar', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_post_avatar">
			<option value="1" <?php echo ($nomnom_post_avatar)? "selected='selected'":""; ?> ><?php _e('Yes', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_post_avatar)? "selected='selected'":""; ?> ><?php _e('No', 'nomnom');?></option>						
			</select> <?php _e('Author avatars will be displayed next to each post title if turned on.', 'nomnom'); ?>
		</td>
        </tr>
<!-- search in header -->
<?php  $nomnom_show_search = get_option( 'nomnom_display_search' );  ?>
        <tr valign="top">
        <th scope="row"><?php _e('Searchform in Header','nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_show_search">
			<option value="1" <?php echo ($nomnom_show_search)? "selected='selected'":""; ?> ><?php _e('Yes', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_show_search)? "selected='selected'":""; ?> ><?php _e('No', 'nomnom');?></option>						
			</select> <?php _e('This will turn the searchform in the header on/off.', 'nomnom'); ?>
		</td>
        </tr>
<!-- advanced style -->
<?php  $nomnom_advanced_style = get_option( 'nomnom_advanced_style' );  ?>
   
        <tr valign="top">
        <th scope="row"><?php _e('CSS3 Effects on/off', 'nomnom'); ?></th>
        <td>
			<select style="width: 100px;" id="nomnom_advanced_style">
			<option value="1" <?php echo ($nomnom_advanced_style)? "selected='selected'":""; ?> ><?php _e('On', 'nomnom');?></option>
			<option value="0" <?php echo (!$nomnom_advanced_style)? "selected='selected'":""; ?> ><?php _e('Off', 'nomnom');?></option>						
			</select> <?php _e('This will turn all NomNom CSS3 off. (text shadow, box shadow, border-radius)', 'nomnom'); ?>
		</td>
        </tr>

	</table>
<input type="button" class="button-primary" name="Submit" id="nomnom_update_options" value="<?php _e('Update Site Options', 'nomnom');?>" />
				<!-- End MISC Options -->			
			</div>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>
