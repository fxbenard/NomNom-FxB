<!-- aditional info -->
	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Additional Info', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>
<?php echo '<p>'.sprintf(__('<b>Wp-PageNavi -</b> This theme is <a href="%1$s">Wp-PageNavi</a> ready. Simply install the plugin and it will appear at the bottom of your page. Preset color schemes have special styles included','nomnom'),'http://wordpress.org/extend/plugins/wp-pagenavi/" target="_blank"').'</p>';?>						


<p><?php _e('<b>Header Image -</b> After first install the header image will display as the default Twenty Eleven size 1000 x 288. You <b>must</b> select a header size then upload a new header for your new size to take effect. It\'s also a good idea to stick with your chosen header size when using the slider','nomnom');?>.</p>

<?php echo '<p>'.sprintf(__('<b>Shortcodes -</b> Shortcodes have been removed as of version 1.5. the reason being, you\'re stuck with the same theme forever if you want to keep your shortcodes working. So instead, i\'ve created a plugin which will allow you to continue using your current shortcodes even if you switch themes. Grab it here <a href="%1$s">NomNom Shortcodes Plugin</a>','nomnom'),'http://zeaks.org/nomnom-shortcodes-plugin-2/').'</p>';?>

<p><?php _e('<b>Adsense -</b> This theme can display adsene ads within and below the content on single post view and on pages. Open adsense-options.php in the theme directory and paste your adsense code in the commented area. Recommend sizes are 468x60 for bottom adsense and 250x250 or smaller for square content adsense.','nomnom');?></p>

<?php echo '<p>'.sprintf(__('<b>Dark Scheme style -</b> By default the dark stylesheet gets loaded after the style.css of the child theme. This makes it difficult to edit it in a child theme. A function has been added to NomNom Thanks to <a href="%1$s">http://transformationpowertools.com</a> that allows you to edit this theme. Open includes/css/dark-default.css to make changes to this color scheme.','nomnom'),'http://transformationpowertools.com/wordpress/twenty-eleven-overwrite-dark-color-scheme-in-child-theme" target="_blank"').'</p>';?>

<?php echo '<p>'.sprintf(__('<b>Image issues -</b> If your header image or featured images either on the main page or on the post editor page are not displaying the prper size please do the following. NomNom Options > General Options > select a header size. Upload a new header image after selecting the header size. Selecting a header size should also fix the issue with the large featured image on the post editor page. To fix featured images when switching from another theme, or changing featured image size I suggest installing <a href="%1$s">Ajax Rebuild Thumbnails</a> and running it. This will create proper sizes for all your featured images.','nomnom'),'http://wordpress.org/extend/plugins/ajax-thumbnail-rebuild/" target="_blank"').'</p>';?>
							
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>

<!-- aditional info -->
	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Commonly used CSS Classes', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>						
<p><b><?php _e('Site title and description','nomnom');?></b> <code>#site-title, #site-description { }</code></p>
<p><b><?php _e('Post titles','nomnom');?></b> <code>.entry-title, .entry-title a { }</code> </p>
<p><b><?php _e('Header searchform','nomnom');?></b> <code>#branding #searchform { }</code> </p>
<p><b><?php _e('NomNom Custom Layout Classes','nomnom');?></b> <code>.narrow-sidebar-left, .narrow-sidebar-right, .three-column, .two-right, .two-left, .wide-column,{ }</code></p>
<p><b><?php _e('NomNom Custom class for all layouts','nomnom');?></b> <code>.custom-layouts { }</code></p>
<p><b><?php _e('Twenty Eleven Default Layouts','nomnom');?></b> <code>.one-column, .right-sidebar, .left-sidebar { }</code>
<p><b><?php _e('NomNom Menus(default, top, bottom)','nomnom');?></b> <code>#access, #access2, #access3 { }</code></p>
<p><b><?php _e('Sidebars','nomnom');?></b> <code>#secondary, #extra-sidebar { }</code></p>
<p><b><?php _e('Body Classes','nomnom');?></b> <code>.home, .page, .two-column, .page-template, .page-template-showcase-php, .page-template-default, .singular</code></p>
<p><b><?php _e('Posted on, Posted by, Posted in etc','nomnom');?></b> <code>.entry-meta{ } .entry-header .entry-meta { }</code></p>
<p><b><?php _e('Header','nomnom');?></b> <code>#nomnom-header { }</code></p>
<p><b><?php _e('Content Layout','nomnom');?></b> <code>#primary { } #content { }  #secondary, #extra-sidebar { }</code></p>
<p><b><?php _e('Increase right sidebar width 4%','nomnom');?></b> <code> #primary { margin: 0 -30.4% 0 0;}  #secondary, #extra-sidebar { width: 22.8%; } #content { width: 56.4%; }</code></p>
<p><b><?php _e('Increase left sidebar 4%','nomnom');?></b> <code>.left-sidebar #primary { margin: 0 0 0 -30.4%; } .left-sidebar #content { margin: 0 7.6% 0 36%; } .left-sidebar #secondary, .left-sidebar #extra-sidebar { width: 22.8%; }</code></p>
<p><b><?php _e('Widget Titles','nomnom');?></b> <code>h3.widget-title, .widget-title { }</code></p>
<br>										
				</blockquote>
			</td>
		</tr>
	</tbody>
</table>