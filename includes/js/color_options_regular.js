// noconflict.js
$ = jQuery;
// JavaScript Document
jQuery(document).ready(function(e){
	jQuery('#colorSelector1').ColorPicker({
		color: jQuery("#top_nav_bg").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector1 div').css('backgroundColor', '#' + hex);
			jQuery("#top_nav_bg").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector2').ColorPicker({
		color: jQuery("#bottom_nav_bg").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector2 div').css('backgroundColor', '#' + hex);
			jQuery("#bottom_nav_bg").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector3').ColorPicker({
		color: jQuery("#top_nav_color").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector3 div').css('backgroundColor', '#' + hex);
			jQuery("#top_nav_color").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector4').ColorPicker({
		color: jQuery("#bottom_nav_color").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector4 div').css('backgroundColor', '#' + hex);
			jQuery("#bottom_nav_color").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector5').ColorPicker({
		color: jQuery("#top_nav_hover_bg").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector5 div').css('backgroundColor', '#' + hex);
			jQuery("#top_nav_hover_bg").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector6').ColorPicker({
		color: jQuery("#bottom_nav_hover_bg").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector6 div').css('backgroundColor', '#' + hex);
			jQuery("#bottom_nav_hover_bg").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector7').ColorPicker({
		color: jQuery("#top_nav_hover_color").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector7 div').css('backgroundColor', '#' + hex);
			jQuery("#top_nav_hover_color").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector8').ColorPicker({
		color: jQuery("#bottom_nav_hover_color").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector8 div').css('backgroundColor', '#' + hex);
			jQuery("#bottom_nav_hover_color").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector9').ColorPicker({
		color: jQuery("#top_nav_secondary").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector9 div').css('backgroundColor', '#' + hex);
			jQuery("#top_nav_secondary").val("#"+hex)
		}
	});	 
	
	jQuery('#colorSelector10').ColorPicker({
		color: jQuery("#bottom_nav_secondary").val(),
		
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb, id) {
			
			jQuery('#colorSelector10 div').css('backgroundColor', '#' + hex);
			jQuery("#bottom_nav_secondary").val("#"+hex)
		}
	});	 
	
	jQuery("#nomnom_load_default_color_font_options").click(function(e){
		jQuery("#color_options_msg").hide("slow");	
		
		var data = {
			action						: 'nomnom_load_default_color_font_options',
			whatever					: Math.random()			
		};
		
		var bodyContent = jQuery.ajax({
			  url: ajaxurl,
			  global: false,
			  type: "POST",
			  data: data,
			  dataType: "html",
			  async: false,	
			  success: function(result){
				
				jQuery("#extra").html (result);
				var scheme = jQuery("#extra").find("bottom_nav_hover_bg").html();
				
				jQuery("#color_options_msg").html("You are currently using a default color scheme.");
				jQuery("#color_options_msg").show("slow");
				
				
				jQuery("#colorSelector2 div").css("backgroundColor", "#242424");
				jQuery("#bottom_nav_bg").val("#242424");
				jQuery("#colorSelector10 div").css("backgroundColor", "#0A0A0A");
				jQuery("#bottom_nav_secondary").val("#0A0A0A");
				
				jQuery("#colorSelector8 div").css("backgroundColor", "#333333");				
				jQuery("#bottom_nav_hover_color").val("#333333");
				
				jQuery("#colorSelector6 div").css("backgroundColor", scheme);			
				jQuery("#bottom_nav_hover_bg").val(scheme);
				
				jQuery("#colorSelector4 div").css("backgroundColor", scheme);			
				jQuery("#bottom_nav_color").val(scheme);
				
				
				
				
				jQuery("#main_font").val("Helvetica Neue");
				jQuery("#main_font_size").val("15");
				
				jQuery("#blog_title_font").val("Helvetica Neue");
				jQuery("#blog_title_font_size").val("28");
				
				jQuery("#index_post_title_font").val("Helvetica Neue");
				jQuery("#index_title_font_size").val("24");
				
				jQuery("#widget_title_font").val("Helvetica Neue");
				jQuery("#widget_title_font_size").val("10");

				jQuery("#widget_body_font").val("Helvetica Neue");
				jQuery("#widget_body_font_size").val("13");


				jQuery("#nomnom_color_options").val("Update Changes");
				jQuery("#nomnom_load_default_color_font_options").hide("slow");

			  }
		}).responseText;
		
	});
	
	jQuery("#nomnom_color_options").click(function(e){
		jQuery("#color_options_msg").hide("slow");

		var data = {
			/*
			top_nav_bg					: jQuery("#top_nav_bg").val(),
			top_nav_color				: jQuery("#top_nav_color").val(),
			top_nav_hover_bg 			: jQuery("#top_nav_hover_bg").val(),
			top_nav_hover_color			: jQuery("#top_nav_hover_color").val(),
			top_nav_secondary			: jQuery("#top_nav_secondary").val(),
			*/
			
			bottom_nav_bg				: jQuery("#bottom_nav_bg").val(),
			bottom_nav_color			: jQuery("#bottom_nav_color").val(),
			bottom_nav_hover_bg			: jQuery("#bottom_nav_hover_bg").val(),
			bottom_nav_hover_color		: jQuery("#bottom_nav_hover_color").val(),
			bottom_nav_secondary		: jQuery("#bottom_nav_secondary").val(),
			
			main_font					: jQuery("#main_font").val(),
			main_font_size				: jQuery("#main_font_size").val(),
			
			blog_title_font				: jQuery("#blog_title_font").val(),
			blog_title_font_size		: jQuery("#blog_title_font_size").val(),
			
			index_post_title_font		: jQuery("#index_post_title_font").val(),
			index_title_font_size		: jQuery("#index_title_font_size").val(),

			widget_title_font			: jQuery("#widget_title_font").val(),
			widget_title_font_size		: jQuery("#widget_title_font_size").val(),

			widget_body_font			: jQuery("#widget_body_font").val(),
			widget_body_font_size		: jQuery("#widget_body_font_size").val(),
			
			action						: 'nomnom_update_color_options',
			whatever					: Math.random()
			
		};

			
		var bodyContent = jQuery.ajax({
			  url: ajaxurl,
			  global: false,
			  type: "POST",
			  data: data,
			  dataType: "html",
			  async: false,	
			  success: function(result){
				jQuery("#color_options_msg").html("Options Saved");
				jQuery("#color_options_msg").show("slow");
				
				jQuery("#nomnom_color_options").val("Update Changes");
				jQuery("#nomnom_load_default_color_font_options").show("slow");
				
			  }
		}).responseText;										  
	});
});