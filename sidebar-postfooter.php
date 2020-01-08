<?php 
/**
 * The sidebar containing the post footer widget area
 */
 ?>

<div id="sidebar-postfooter" class="sidebar small-12 cell" role="complementary">

	<?php if ( is_active_sidebar( 'postfooter' ) ) : ?>

		<?php dynamic_sidebar( 'postfooter' ); ?>

	<?php endif; ?>

</div>