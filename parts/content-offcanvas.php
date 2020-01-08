<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right old-paper-bg" id="off-canvas" data-off-canvas>
	
	<div class="menu-close-wrap cell small-12 text-right">
		<button id="mobile-menu-close" class="no-style close-x black thin" type="button" data-toggle="off-canvas"><span></span><span></span></button>
	</div>
	
	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
