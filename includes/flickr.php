<?php
/*---------------------------------------------------------------------------------*/
/* Flickr widget */
/*---------------------------------------------------------------------------------*/
class twentyeleven_flickr extends WP_Widget {

    function twentyeleven_flickr() {
        $widget_ops = array('description' => __('This Flickr widget populates photos from a Flickr ID.','nomnom'));
        
        parent::WP_Widget(false, __('Twenty Eleven - Flickr', 'nomnom'),$widget_ops);      
    }

    function widget($args, $instance) {  
        extract( $args );
        $id = $instance['id'];
        $number = $instance['number'];
        $type = $instance['type'];
        $sorting = $instance['sorting'];
        $size = $instance['size'];
        
        echo $before_widget;
        echo $before_title; ?>
        <?php _e('Photos on <span>flick<span>r</span></span>', 'nomnom'); ?>
        <?php echo $after_title; ?>
            
        <div class="wrap">
            <div class="fix"></div>
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=<?php echo $sorting; ?>&amp;&amp;layout=x&amp;source=<?php echo $type; ?>&amp;<?php echo $type; ?>=<?php echo $id; ?>&amp;size=<?php echo $size; ?>"></script>        
            <div class="fix"></div>
        </div>

       <?php            
       echo $after_widget;
   }

   function update($new_instance, $old_instance) {                
       return $new_instance;
   }

   function form($instance) {        
        $id = esc_attr($instance['id']);
        $number = esc_attr($instance['number']);
        $type = esc_attr($instance['type']);
        $sorting = esc_attr($instance['sorting']);
        $size = esc_attr($instance['size']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('id'); ?>"><?php _e('Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):','nomnom'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('id'); ?>" value="<?php echo $id; ?>" class="widefat" id="<?php echo $this->get_field_id('id'); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number:', 'nomnom'); ?></label>
            <select name="<?php echo $this->get_field_name('number'); ?>" class="widefat" id="<?php echo $this->get_field_id('number'); ?>">
                <?php for ( $i = 1; $i <= 10; $i += 1) { ?>
                <option value="<?php echo $i; ?>" <?php if($number == $i){ echo "selected='selected'";} ?>><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Type:', 'nomnom'); ?></label>
            <select name="<?php echo $this->get_field_name('type'); ?>" class="widefat" id="<?php echo $this->get_field_id('type'); ?>">
                <option value="user" <?php if($type == "user"){ echo "selected='selected'";} ?>><?php _e('User', 'nomnom'); ?></option>
                <option value="group" <?php if($type == "group"){ echo "selected='selected'";} ?>><?php _e('Group', 'nomnom'); ?></option>            
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('sorting'); ?>"><?php _e('Sorting:', 'nomnom'); ?></label>
            <select name="<?php echo $this->get_field_name('sorting'); ?>" class="widefat" id="<?php echo $this->get_field_id('sorting'); ?>">
                <option value="latest" <?php if($sorting == "latest"){ echo "selected='selected'";} ?>><?php _e('Latest', 'nomnom'); ?></option>
                <option value="random" <?php if($sorting == "random"){ echo "selected='selected'";} ?>><?php _e('Random', 'nomnom'); ?></option>            
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('size'); ?>"><?php _e('Size:', 'nomnom'); ?></label>
            <select name="<?php echo $this->get_field_name('size'); ?>" class="widefat" id="<?php echo $this->get_field_id('size'); ?>">
                <option value="s" <?php if($size == "s"){ echo "selected='selected'";} ?>><?php _e('Square', 'nomnom'); ?></option>
                <option value="m" <?php if($size == "m"){ echo "selected='selected'";} ?>><?php _e('Medium', 'nomnom'); ?></option>
                <option value="t" <?php if($size == "t"){ echo "selected='selected'";} ?>><?php _e('Thumbnail', 'nomnom'); ?></option>
            </select>
        </p>
        <?php
    }
} 

register_widget('twentyeleven_flickr');
?>