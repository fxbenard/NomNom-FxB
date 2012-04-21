	<table class="postbox widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="2"><?php _e( 'Theme Info', 'nomnom' ); ?></th>
		</tr>
	</thead>
	<tbody>		
		<tr class="alternate">
					<td>
						<blockquote>
	<p>Thanks for using NomNom Twenty Eleven child theme.<br> Click here to go to <a href="themes.php?page=theme_options">Theme Options</a> page and select from 10 color schemes and 9 layouts. 
	<br>Visit the <a href="http://zeaks.org/nomnom-twenty-eleven-child-theme/" target="_blank">Theme Homepage</a> here.
	<br>If your having problems, you can check the FAQ and get support on the <a href="http://zeaks.org/board/threads/nomnom-faq.15/" target="_blank">Forums</a>.<br> 
	</p>
<br>
<br>

	<div id="nomnom_tweet_wrap">
		<div id="nomnom_tweet">
	<b>Follow me on Twitter and Share on Facebook!</b><br><br>
		<p><a href="https://twitter.com/earthjellyfish" class="twitter-follow-button">Follow @ZeaksBlog</a>
		
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="http://www.facebook.com/zeaks.blog.org" data-send="false" data-width="450" data-show-faces="true"></div>
		
		<br>
	</div>
	</div>
	</blockquote>
	</td>

<td  width="45%">
<br>
	<div id="headlines">
<font size="3">
<div class='rss-feed-admin'>
<a href="http://feeds.feedburner.com/ZeaksBlog" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="vertical-align:-15%;border:0"/></a>&nbsp;<a href="http://feedburner.google.com/fb/a/mailverify?uri=ZeaksBlog" target="_blank" rel="alternate" type="application/rss+xml">Latest Posts From ZeaksBlog</a>
</font><br><br>


	<?php
			//add RSS feed to options							
			$rss_options = array(
				'link' => 'http://ZeaksBlog.org',
				'url' => 'http://feeds.feedburner.com/zeaksblog',
				'title' => 'ZeaksBlog.org',
				'items' => 5,
				'show_summary' => 0,
				'show_author' => 0,
				'show_date' => 0,
				'before' => 'text'
			);
			wp_widget_rss_output( $rss_options ); ?>
			   
</div>
</div>
<br>
	<font size="3"><b>Support NomNom</b></font>
	<p>If you enjoy this theme and want to support my time and effort, you can help me out by donating. Any amount big or small, all donations are appreciated.
<div id="paypal-float" style="float:right;margin-top:5px;width:300px;">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_donations">
		<input type="hidden" name="business" value="YJCQM2XRQCMYA">
		<input type="hidden" name="lc" value="CA">
		<input type="hidden" name="item_name" value="NomNom Theme - Zeaks Blog">
		<input type="hidden" name="currency_code" value="CAD">
		<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
</div>
</p>
		</td>				
		</tr>
	</tbody>
</table>