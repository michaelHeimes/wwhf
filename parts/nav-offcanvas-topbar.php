<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu shrink">
			
			<?php if(is_search() || is_archive() || is_singular('post')):?>
				<li class="wild-west-logo">
					<a href="<?php echo home_url(); ?>">
						
						<?php 
						$image = get_field('wild_west_logo', 'option');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					
					</a>
				</li>
			
			<?php else:?>

				<?php if(get_field('header_logo')== 'wild-west'):?>
				
					<li class="wild-west-logo">
						<a href="<?php echo home_url(); ?>">
							
							<?php 
							$image = get_field('wild_west_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						
						</a>
					</li>
				
				<?php endif;?>
				
				<?php if(get_field('header_logo')== 'way-west'):?>
				
					<li class="way-west-logo">
						<a href="<?php echo home_url(); ?>">
							
							<?php 
							$image = get_field('way_west_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>					
						</a>
					</li>
				
				<?php endif;?>
			
			<?php endif;?>
			
			
			<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium shrink">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
		</ul>
	</div>
</div>