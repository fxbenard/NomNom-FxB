<?php
/*---------------------------------------------------------------------------------*/
/* Twitter widget */
/*---------------------------------------------------------------------------------*/
class twentyeleven_Twitter extends WP_Widget {

   
   function twentyeleven_Twitter() {
      $widget_ops = array('description' => __('Add your Twitter feed to your sidebar with this widget.','nomnom'));

      parent::WP_Widget(false, __('Twenty Eleven - Twitter Stream', 'nomnom'),$widget_ops);      
   }
   
   function widget($args, $instance) {  
    extract( $args );
    $title = $instance['title'];
    $limit = $instance['limit']; if (!$limit) $limit = 5;
  $username = $instance['username'];
  $unique_id = $args['widget_id'];
  ?>
    <?php echo $before_widget; ?>
        <?php if ($title) echo $before_title . $title . '<span class="username"><a href="http://twitter.com/' . $username . '" title="' . __('Follow', 'nomnom') . ' ' . $username . ' ' . __('on Twitter', 'nomnom') . '">@' . $username . '</a></span>' . $after_title; ?>
        <ul id="twitter_update_list_<?php echo $unique_id; ?>"><li></li></ul> 
        <?php echo twentyeleven_twitter_script($unique_id,$username,$limit); //Javascript output function ?>   
        <?php echo $after_widget; ?>      
  <?php
   }

   function update($new_instance, $old_instance) {                
       return $new_instance;
   }

   function form($instance) {        
   
       $title = esc_attr($instance['title']);
       $limit = esc_attr($instance['limit']);
     $username = esc_attr($instance['username']);
       ?>
       <p>
         <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'nomnom'); ?></label>
         <input type="text" name="<?php echo $this->get_field_name('title'); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
       </p>
       <p>
         <label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Username:', 'nomnom'); ?></label>
         <input type="text" name="<?php echo $this->get_field_name('username'); ?>"  value="<?php echo $username; ?>" class="widefat" id="<?php echo $this->get_field_id('username'); ?>" />
       </p>
       <p>
         <label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit:', 'nomnom'); ?></label>
         <input type="text" name="<?php echo $this->get_field_name('limit'); ?>"  value="<?php echo $limit; ?>" class="" size="3" id="<?php echo $this->get_field_id('limit'); ?>" />

       </p>
      <?php
   }
   
} 
register_widget('twentyeleven_Twitter');
?>