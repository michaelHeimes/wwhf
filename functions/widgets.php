<?php
// Register and load the social follow links widget
function wpb_load_widget() {
    register_widget( 'ff_social' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class ff_social extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'ff_social', 
 
// Widget name will appear in UI
__('Social Links', 'ff_social_domain'), 
 
// Widget description
array( 'description' => __( 'Social Widget Pulling from ACF Theme Options', 'ff_social_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];?>

 
<?php // This is where you run the code and display the output'?>

<ul>
<?php if( $facebook = get_field('facebook_link', 'option') ): ?>
	<li><a href="<?php echo $facebook ;?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<?php endif ;?>

<?php if( $twitter = get_field('twitter_link', 'option') ): ?>
	<li><a href="<?php echo $twitter ;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
<?php endif ;?>

<?php if( $youtube = get_field('youtube_link', 'option') ): ?>
	<li><a href="<?php echo $youtube ;?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
<?php endif ;?>
</ul>

<?php echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'ff_social_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class ff_social ends here






// Register and load the social share widget
function wpb_load_widget2() {
    register_widget( 'ff_share' );
}
add_action( 'widgets_init', 'wpb_load_widget2' );
 
// Creating the widget 
class ff_share extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'ff_share', 
 
// Widget name will appear in UI
__('Social Share', 'ff_share_domain'), 
 
// Widget description
array( 'description' => __( 'Shares this page/post to social media', 'ff_share_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];?>

 
<?php // This is where you run the code and display the output'?>

<div class="social-wrap share-icons a2a_kit clearfix" data-a2a-url="" data-a2a-title="">
    <a class="a2a_button_facebook"><span class="screen-reader-text">facebook</span><i class="fab fa-facebook-f"></i></a>
    <a class="a2a_button_twitter"><span class="screen-reader-text">twitter</span><i class="fab fa-twitter"></i></a>
    <a class="a2a_button_linkedin"><span class="screen-reader-text">linkedin</span><i class="fab fa-linkedin-in"></i></a>
	<a href="javascript:window.print()"><i class="fas fa-print"></i></a>
    
</div>

				
<?php
echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'ff_share_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class ff_share ends here



// Register and load related posts widget
function wpb_load_widget3() {
    register_widget( 'ff_related' );
}
add_action( 'widgets_init', 'wpb_load_widget3' );
 
// Creating the widget 
class ff_related extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'ff_related', 
 
// Widget name will appear in UI
__('Related Posts', 'ff_related_domain'), 
 
// Widget description
array( 'description' => __( 'Related Posts', 'ff_related_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];?>

 
<?php // This is where you run the code and display the output'?>

<?php 
	
	global $post;
	$tag_arr = '';
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		echo '<ul class="joints-related-posts">';
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
						<h5><?php the_title(); ?></h5>
						<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
					</a>
				</li>
			<?php endforeach; }
			}
	wp_reset_postdata();
	echo '</ul>';
?>
				
<?php
echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'ff_related_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class ff_share ends here


