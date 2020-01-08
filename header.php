<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
<!-- 		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet"> -->

<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> -->
		
		<?php wp_head(); ?>
		
	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper page-theme-<?php the_field('header_logo'); ?>">
			
					
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<?php if( get_field('show_alert', 'option')): ?>
	
					<div id="alert">
						
						<div class="grid-container text-center">
							
							<?php if( get_field('will_the_message_link_to_a_page', 'option') == 'yes' ):?>
							
								<?php 
								$link = get_field('linked_message', 'option');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>						
	
							<?php endif;?>
	
	
							<?php if( get_field('will_the_message_link_to_a_page', 'option') == 'no' ):?>
							
								<p><?php the_field('message', 'option');?></p>
	
							<?php endif;?>	
							
						<button id="alert-close" class="no-style close-x white thick" type="button"><span></span><span></span></button>					
	
						</div>
											
					</div>	
					
				<?php endif; ?>
				
				<header class="header" role="banner">
					
					<div class="grid-container">
							
						<!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
						 
						 
<!--
						<?php if(is_front_page() || is_page_template('page-template-fest.php')):?>
						 						
						<?php endif;?>
-->
						
					</div> 
					
					<?php if( is_front_page() || is_page_template('page-template-fest.php')):?>
					
						<div class="grid-x grid-padding-x">
						<div class="header-embellishment-wrap small-12 medium-12 large-12 cell text-center">					 
						
							<?php if(get_field('header_logo')== 'wild-west'):?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wild-west-header-graphic.svg"/>
							<?php endif;?> 
						
							<?php if(get_field('header_logo')== 'way-west'):?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/way-west-header-graphic.svg"/>
							<?php endif;?> 
						
						</div>
						</div>
						
					<?php endif;?>
	 	
				</header> <!-- end .header -->