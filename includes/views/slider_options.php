	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Slider Options', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>
	
<div class="theme-admin">
	
	<div class="ajax_msg" id="slider_options_msg"></div>
	
	<?php
		$has_slider = get_option("nomnom_has_slider");
		$slider_featured_category = get_option("nomnom_slider_featured_category");
		$slider_count = get_option("nomnom_slider_count");
		$slider_effects = get_option("nomnom_slider_effects");
		$image_pause = get_option("nomnom_image_pause");
		$trans_speed = get_option("nomnom_trans_speed");
	 ?>
	 
	<table width="100%" >
		<tr>
			<td>
				<table class="form-table" style="margin-left:5px;">
					
					<tr valign="top">
						<td><?php _e('Display Slider?','nomnom');?></td>
						<td>
							<select style="width: 50%;" id="nomnom_has_slider">
								<option value="1" <?php echo ($has_slider)? "selected='selected'":""; ?> ><?php _e('Yes','nomnom');?></option>
								<option value="0" <?php echo (!$has_slider)? "selected='selected'":""; ?> ><?php _e('No','nomnom');?></option>						
							</select>
						</td>
					</tr>
					<tr>
						<td><?php _e('Number of posts to display?','nomnom');?></td>
						<td><input type="text" id="nomnom_slider_max_post" value="<?=$slider_count?>" /></td>
					</tr>
				</table>
			</td>
				
			<td>
				<table class="form-table" style="margin-left:5px;">
					<tr>
						<td><?php _e('Featured Category?','nomnom');?></td>
						<td>
							<?php
								$args=array(
								  'orderby' => 'term_id',
								  'order' => 'Desc'
								  );
								 
								 $categories=get_categories($args);
								
								if (count($categories))
								{
									echo "<select id='nomnom_slider_category'>";
									foreach ($categories as $cat)
										echo "<option value='{$cat->term_id}' ". (($slider_featured_category==$cat->term_id)? "selected='selected'":"") .">{$cat->name}</option>";
									echo "</select>";
								}
							?>
						
						</td>
					</tr>
				<tr>
					<td><?php _e('Transition Effect','nomnom');?></td>
					<td>
						<select id="slider_effects">
							<option style="padding-right: 10px;" value="random" <?php if ($slider_effects == "random") echo "selected='selected'" ?> ><?php _e('Random','nomnom');?></option>		
							<option style="padding-right: 10px;" value="fold" <?php if ($slider_effects == "fold") echo "selected='selected'" ?> ><?php _e('Fold','nomnom');?></option>		
							<option style="padding-right: 10px;" value="fade" <?php if ($slider_effects == "fade") echo "selected='selected'" ?> ><?php _e('Fade','nomnom');?></option>		
							<option style="padding-right: 10px;" value="sliceUp" <?php if ($slider_effects == "sliceUp") echo "selected='selected'" ?> ><?php _e('sliceUp','nomnom');?></option>		
							<option style="padding-right: 10px;" value="sliceUpLeft" <?php if ($slider_effects == "sliceUpLeft") echo "selected='selected'" ?> ><?php _e('sliceUpLeft','nomnom');?></option>
							<option style="padding-right: 10px;" value="sliceDown" <?php if ($slider_effects == "sliceDown") echo "selected='selected'" ?> ><?php _e('sliceDown','nomnom');?></option>	
							<option style="padding-right: 10px;" value="sliceDownLeft" <?php if ($slider_effects == "sliceDownLeft") echo "selected='selected'" ?> ><?php _e('sliceDownLeft','nom');?></option>
							<option style="padding-right: 10px;" value="sliceUpDown" <?php if ($slider_effects == "sliceUpDown") echo "selected='selected'" ?> ><?php _e('sliceUpDown','nomnom');?></option>
							<option style="padding-right: 10px;" value="sliceUpDownLeft" <?php if ($slider_effects == "sliceUpDownLeft") echo "selected='selected'" ?> ><?php _e('sliceUpDownLeft','nomnom');?></option>		
							<option style="padding-right: 10px;" value="slideInLeft" <?php if ($slider_effects == "slideInLeft") echo "selected='selected'" ?> ><?php _e('slideInLeft','nomnom');?></option>		
							<option style="padding-right: 10px;" value="slideInRight" <?php if ($slider_effects == "slideInRight") echo "selected='selected'" ?> ><?php _e('slideInRight','nomnom');?></option>
						</select>
					</td>
				</tr>
				</table>
			</td>

			<td>
				<table class="form-table" style="margin-left:5px;">
					<tr>
						<td><?php _e('Transition Speed','nomnom');?></td>
						<td><input id="trans_speed" size="10" maxlength="4" value="<?=$trans_speed?>" type="text"></td>					
					</tr>
					
					<tr>
						<td><?php _e('Image Pause','nomnom');?></td>
						<td><input id="image_pause" size="10" maxlength="4" value="<?=$image_pause ?>" type="text"></td>					
					</tr>
				</table>
			</td>			
		</tr>
		
		<tr>
			<td colspan="3" style="padding-left:20px; padding-top:10px;"><?php _e('Transition Speed and Image Pause times are in millisecond 1000ms = 1sec, there is a limit of 90000 ms or 90 sec for Image Pause and 9000 ms or 9 sec for Transition Speed.','nomnom');?>
		<br><br>
				<b><font color="red"><?php _e('Never set Transition Speed higher then Image Pause or your site will explode','nomnom');?></font> >=)</b>
		<br><br><?php _e('Slider images are pulled from posts that have a featured image set. If you don\'t see any images in the slider after selecting the category, make sure you have set a featured image.','nomnom');?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="padding-left:20px; padding-top:10px;"><input type="button" class="button-primary" name="Submit" id="nomnom_update_slider" value="<?php _e('Update Slider Options','nomnom');?>"></td>
		</tr>				
			</table>
				</div>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>