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
<h4>Choose your header size.</h4>
			<tr valign="top">
				<th scope="row">Width</th>
				<td><input style="width: 100px; type="text" name="resize_header_options_width" id="resize_header_options_width" value="<?php echo $header_options['width']; ?>"/> <b>Recommended 1000px </b>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Height</th>
				<td><input style="width: 100px; type="text" name="resize_header_options_height" id="resize_header_options_height" value="<?php echo $header_options['height']; ?>"/> <b>Default is 288px</p>
				</td>
			</tr>
		</td>
	</tr>

</table>
	<td width="30%" style="padding-top:25px;">
	<p>Resize the header image here. This will also affect the slider size. It's a good idea to stick with the same header size after resizing if you plan to use the slider.</p><p>You must upload a new header image after setting a size as only new images are resized, if you use an old or default header image, it will display as the size it was originally cropped to.</p>
	</td>
			<tr>
				<td colspan="2"><input type="button" class="button-primary" name="Submit" id="nomnom_resize_header" value="Update Header Size" /></td>
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
	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Theme Options', 'nomnom' ); ?></th>
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
<!-- excerpts thumbnails -->
<?php  $nomnom_post_thumbnail = get_option( 'nomnom_display_post_image' );  ?>
        <tr valign="top">
        <th scope="row">Excerpts with Thumbnails or Full</th>
        <td>
			<select style="width:100px;" id="nomnom_post_thumbnail">
				<option value="1" <?php echo ($nomnom_post_thumbnail)? "selected='selected'":""; ?> >Excerpts</option>
				<option value="0" <?php echo (!$nomnom_post_thumbnail)? "selected='selected'":""; ?> >Full Posts</option>
			</select> Excerpts will display post thumbnail if a featured image is selected for the post.
		</td>
        </tr>

<!-- main menu on or off -->
<?php $nomnom_default_menu_option = get_option( 'nomnom_default_menu' ); ?>
        <tr valign="top">
        <th scope="row">Main Menu Below Header</th>
        <td>
			<select style="width: 100px;" id="nomnom_default_menu">
				<option value="1" <?php echo ($nomnom_default_menu_option)? "selected='selected'":""; ?> >On</option>
				<option value="0" <?php echo (!$nomnom_default_menu_option)? "selected='selected'":""; ?> >Off</option>
			</select> The menu option controls the main default Twenty Eleven menu in case you just want to use the top one.
		</td>
        </tr>
<!-- comment bubble -->
<?php  $nomnom_show_bubble = get_option( 'nomnom_display_bubble' );  ?>
   
        <tr valign="top">
        <th scope="row">Comment Bubble on Index</th>
        <td>
			<select style="width: 100px;" id="nomnom_show_bubble">
			<option value="1" <?php echo ($nomnom_show_bubble)? "selected='selected'":""; ?> >Yes</option>
			<option value="0" <?php echo (!$nomnom_show_bubble)? "selected='selected'":""; ?> >No</option>						
			</select> Choose to display the comment bubble on the index or hide it.
		</td>
        </tr>
<!-- comment form -->
<?php  $nomnom_comment_form = get_option( 'nomnom_comment_form' );  ?>
   
        <tr valign="top">
        <th scope="row">Comments on/off Site Wide</th>
        <td>
			<select style="width: 100px;" id="nomnom_comment_form">
			<option value="1" <?php echo ($nomnom_comment_form)? "selected='selected'":""; ?> >On</option>
			<option value="0" <?php echo (!$nomnom_Comment_form)? "selected='selected'":""; ?> >Off</option>						
			</select> This will turn the comments, comment form and "leave a comment" link on/off for all posts and pages.
		</td>
        </tr>
<!-- related posts --> 

<?php  $nomnom_post_related = get_option( 'nomnom_display_related' );  ?>
        <tr valign="top">
        <th scope="row">Display Related Posts</th>
        <td>
			<select style="width: 100px;" id="nomnom_post_related">
			<option value="1" <?php echo ($nomnom_post_related)? "selected='selected'":""; ?> >Yes</option>
			<option value="0" <?php echo (!$nomnom_post_related)? "selected='selected'":""; ?> >No</option>						
			</select> Related posts are displayed under each post if selected.
		</td>
        </tr>
 
<!-- aurthor post avatar -->
<?php  $nomnom_post_avatar = get_option( 'nomnom_display_avatar_image' );  ?> 
        <tr valign="top">
        <th scope="row">Author Post Avatar</th>
        <td>
			<select style="width: 100px;" id="nomnom_post_avatar">
			<option value="1" <?php echo ($nomnom_post_avatar)? "selected='selected'":""; ?> >Yes</option>
			<option value="0" <?php echo (!$nomnom_post_avatar)? "selected='selected'":""; ?> >No</option>						
			</select> Author avatars will be displayed next to each post title if turned on.
		</td>
        </tr>
<!-- search in header -->
<?php  $nomnom_show_search = get_option( 'nomnom_display_search' );  ?>
        <tr valign="top">
        <th scope="row">Searchform in Header</th>
        <td>
			<select style="width: 100px;" id="nomnom_show_search">
			<option value="1" <?php echo ($nomnom_show_search)? "selected='selected'":""; ?> >Yes</option>
			<option value="0" <?php echo (!$nomnom_show_search)? "selected='selected'":""; ?> >No</option>						
			</select> This will turn the searchform in the header on/off.
		</td>
        </tr>
	</table>
<input type="button" class="button-primary" name="Submit" id="nomnom_update_options" value="Update All Options" />
				<!-- End MISC Options -->			


			</div>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>