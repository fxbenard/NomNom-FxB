<?php $nomnom_custom_css_option = get_option( 'nomnom_custom_css' ); ?>
	<table class="postbox widefat" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2"><?php _e( 'Custom CSS', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>				
	<div class="ajax_msg" id="css_options_msg"></div>
<table border="0" bordercolor="" width="100%" bgcolor="">
	<tr>
	<!-- <form method="post" action="options.php"> -->
	 <?php settings_fields( 'nomnom_settings' ); ?>
	<textarea name="nomnom_custom_css" id="nomnom_custom_css" dir="ltr" cols="150" rows="10"><?php echo get_option('nomnom_custom_css');?></textarea>
	<p class="submit">
    	<!-- <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /> -->
		<input type="button" class="button-primary" name="Submit" id="nomnom_update_css_options" value="<?php _e('Save Changes','nomnom');?>" />
   	</p>
		</form>
			</tr>
		</table>
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>
<!-- cUSTOM css info -->
<table class="postbox widefat" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2"><?php _e( 'Custom CSS Info', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>				
<table border="0" bordercolor="" width="100%" bgcolor="">
	<tr>
 <?php echo '<p>'.sprintf(__('You can add your own custom CSS style here, it will not be overwritten during an upgrade of NomNom. Any CSS you add here will override NomNoms default style. <br><br><b>Example:</b><code>.entry-title a { border: 1px solid red; color: green;}</code><br><br>Check this page for <a href="%1$s">some cool CSS snippets</a>','nomnom'),'http://zeaks.org/board/threads/twenty-eleven-css-snippets.20/" target="blank').'</p>';?>

<br>
<?php _e('This will not check the validness of your code, so make sure to use compliant CSS.','nomnom');?>
			</tr>
		</table>						
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>