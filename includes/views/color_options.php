<form>
<table width="100%">
	<tr>
		<td width="48%" valign="bottom">
			<div class="ajax_msg <?php if ($color_font_options['default']) echo "show"; ?>" id="color_options_msg">
			<?php if ($color_font_options['default']) echo "You are currently using a default color scheme."; ?>
			</div>
			
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Navigation Primary Color</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<div class="labelcolor"><input type="text" class="txtcolor" id="bottom_nav_bg" readonly=""  value="<?=$options['bottom_nav_bg'] ?>" /></div> 
						<div id="colorSelector2" style="float:left"><div style="background-color:<?=$options['bottom_nav_bg'] ?>"></div></div>
					</td>
				</tr>
		
			</table>
		</td>
		<td>&nbsp;</td>
		<td width="48%" valign="bottom">
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Blog Title Font</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<select id="blog_title_font">
						<?php						
							foreach ($fonts as $key=>$val)
								echo "<option value='{$key}' ".(($font_options['blog_title_font'] == $key)? "selected='selected'":"") .">{$val['name']}</option>";
						?>
						</select>						
						Size : <input type="text" id="blog_title_font_size" class="font_size" maxlength="2" value="<?=$font_options['blog_title_font_size'] ?>" /> px
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>			
					<th colspan="2">Navigation Secondary Color</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<div class="labelcolor"><input type="text" class="txtcolor" id="bottom_nav_secondary" readonly=""  value="<?=$options['bottom_nav_secondary'] ?>" /></div>
						<div id="colorSelector10" style="float:left"><div style="background-color:<?=$options['bottom_nav_secondary'] ?>"></div></div>
					</td>
				</tr>
			</table>
		</td>
		<td></td>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Post Title Font</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<select id="index_post_title_font">
						<?php						
							foreach ($fonts as $key=>$val)
								echo "<option value='{$key}' ".(($font_options['index_post_title_font'] == $key)? "selected='selected'":"") .">{$val['name']}</option>";
						?>
						</select>
						Size : <input type="text" id="index_title_font_size" class="font_size" maxlength="2" value="<?=$font_options['index_title_font_size'] ?>" /> px					
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Navigation Text Color</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<div class="labelcolor"><input type="text" class="txtcolor" id="bottom_nav_color" readonly=""  value="<?=$options['bottom_nav_color'] ?>" /></div>
						<div id="colorSelector4" style="float:left"><div style="background-color:<?=$options['bottom_nav_color'] ?>"></div></div>
					</td>
				</tr>
			</table>
				</td>
		<td></td>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Post Content Font</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<select id="main_font">
						<?php						
							foreach ($fonts as $key=>$val)
								echo "<option value='{$key}' ".(($font_options['main_font'] == $key)? "selected='selected'":"") ." >{$val['name']}</option>";
						?>
						</select>						
						Size : <input type="text" id="main_font_size" class="font_size" maxlength="2" value="<?=$font_options['main_font_size'] ?>" /> px
					</td>
				</tr>
			</table>
		</td>
		<!-- widget test end -->	
			
		</td>
		<td></td>
		<td></td>
	</tr>
	
	<!--  fonts -->
	<tr>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Navigation Hover Text Color</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<div class="labelcolor"><input type="text" class="txtcolor" id="bottom_nav_hover_color" readonly=""  value="<?=$options['bottom_nav_hover_color'] ?>" /></div>
						<div id="colorSelector8" style="float:left"><div style="background-color:<?=$options['bottom_nav_hover_color'] ?>"></div></div>
					</td>
				</tr>
			</table>
		</td>
		<td></td>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Widget Title Font</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<select id="widget_title_font">
						<?php						
							foreach ($fonts as $key=>$val)
								echo "<option value='{$key}' ".(($font_options['widget_title_font'] == $key)? "selected='selected'":"") .">{$val['name']}</option>";
						?>
						</select>
						Size : <input type="text" id="widget_title_font_size" class="font_size" maxlength="2" value="<?=$font_options['widget_title_font_size'] ?>" /> px
					</td>
				</tr>
			</table>
		</td>		
	</tr>
	
	<tr>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Navigation Hover Background</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<div class="labelcolor"><input type="text" class="txtcolor" id="bottom_nav_hover_bg" readonly="" value="<?=$options['bottom_nav_hover_bg'] ?>" /></div>
						<div id="colorSelector6" style="float:left"><div style="background-color:<?=$options['bottom_nav_hover_bg'] ?>"></div></div>

					</td>
				</tr>
			</table>
		</td>
		<td></td>
		<td>
			<table class="postbox widefat" cellspacing="0" cellpadding="4">
			<thead>
				<tr>
					<th colspan="2">Widget Body Font</th>
				</tr>
			</thead>
				<tr class="alternate">
					<td>
						<select id="widget_body_font">
						<?php						
							foreach ($fonts as $key=>$val)
								echo "<option value='{$key}' ".(($font_options['widget_body_font'] == $key)? "selected='selected'":"") ." >{$val['name']}</option>";
						?>
						</select>						
						Size : <input type="text" id="widget_body_font_size" class="font_size" maxlength="2" value="<?=$font_options['widget_body_font_size'] ?>" /> px
					</td>
				</tr>
			</table>
		</td>		
	</tr>
	
	<tr>
		<td><p>
			<input type="button" class="button-primary" id="nomnom_color_options" value="<?php echo ($color_font_options['default'])? "Update Color scheme" : "Update All Changes" ?>" />  
			<input type="button" class="button-primary" style="display:<?php if ($color_font_options['default']) echo "none"; ?>" id="nomnom_load_default_color_font_options" value="Load Color Scheme Defaults" /> 		
			</p>		
		</td>
		<td></td>
		<td></td>
	</tr>
</table>

<div style="display:none" id="extra"></div>
</form>