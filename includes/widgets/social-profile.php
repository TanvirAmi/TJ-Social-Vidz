<?php
/**
 * Theme Junkie Social Widget
 */
 
class TJ_Widget_Social extends WP_Widget {

	function TJ_Widget_Social() {
		$widget_ops = array('classname' => 'widget_social', 'description' => __('Display Social Profiles'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('social', __('ThemeJunkie - Social Profiles'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = $instance['twitter_id'];
		$facebook_id = $instance['facebook_id'];
		$google_plus_id = $instance['google_plus_id'];		
		?>
		
		<div class="social-icons">
			<ul>
				<li class="icon-rss"><a href="http://feeds.feedburner.com/<?php echo $feedburner_id; ?>"><?php _e('RSS', 'themejunkie'); ?></a><span><?php _e('Get updates', 'themejunkie'); ?></span></li>
				<li class="icon-google"><a href="https://plus.google.com/<?php echo $google_plus_id; ?>"><?php _e('Google Plus', 'themejunkie'); ?></a><span><?php _e('Join our circle', 'themejunkie'); ?></span></li>
				<li class="icon-twitter"><a href="http://twitter.com/<?php echo $twitter_id; ?>"><?php _e('Twitter', 'themejunkie'); ?></a><span><?php _e('Follow us', 'themejunkie'); ?></span></li>
				<li class="icon-facebook"><a href="http://www.facebook.com/<?php echo $facebook_id; ?>"><?php _e('Facebook', 'themejunkie'); ?></a><span><?php _e('Become our fan', 'themejunkie'); ?></span></li>				
			</ul>
			<div class="clear"></div>
		</div>

		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['feedburner_id'] = $new_instance['feedburner_id'];
		$instance['twitter_id'] =  $new_instance['twitter_id'];
		$instance['facebook_id'] =  $new_instance['facebook_id'];
		$instance['google_plus_id'] =  $new_instance['google_plus_id'];		
		return $instance;
	}

	function form( $instance ) { 
		$instance = wp_parse_args( (array) $instance, array( 'feedburner_id' => 'themejunkie', 'twitter_id' => 'theme_junkie', 'facebook_id' => 'themejunkie', 'google_plus_id' => '116387478398345310130' ) );
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = format_to_edit($instance['twitter_id']);
		$facebook_id = format_to_edit($instance['facebook_id']);
		$google_plus_id = format_to_edit($instance['google_plus_id']);		
	?>
		<p><label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php _e('Enter your Feedburner ID:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" type="text" value="<?php echo $feedburner_id; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php _e('Enter your Twitter ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $twitter_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('facebook_id'); ?>"><?php _e('Enter your Facebook ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('facebook_id'); ?>" value="<?php echo $facebook_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('google_plus_id'); ?>"><?php _e('Enter your Google Plus ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('google_plus_id'); ?>" value="<?php echo $google_plus_id; ?>" /></p>		
		<?php }
}

//register_widget('TJ_Widget_Social');

// Register the widget
function my_register_custom_widget() {
	register_widget( 'TJ_Widget_Social' );
}
add_action( 'widgets_init', 'my_register_custom_widget' );
