<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<div class="top old-paper-bg">
			
		<header class="article-header">
	
			<img class="a-head a-head-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/left_interior_hero.svg"/>
	
			<div class="grid-container">
				<div class="fancy-header-wrap with-prongs about-heading-wrap text-center grid-x grid-x-padding">
					<h1 class="black no-white-shadow page-title text-center cell small-12"><?php the_title(); ?></h1>
				</div>
			</div>
			
			<img class="a-head a-head-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/right_interior_hero.svg"/>
	
		</header> <!-- end article header -->
			
			
		<div class="below-header-divider"></div>
		
		<div class="content">
		
			<div class="grid-container">	
		
				<div class="inner-content back-page grid-x grid-padding-x grid-padding-x">
			
					<main class="main small-12 medium-8 large-8 cell" role="main">
					
						<?php get_template_part( 'parts/content-modules' );?>
						
						<?php if ( is_active_sidebar( 'postfooter' ) ):?>
							<div class="cell small-12 text-center">
								<img src="/wp-content/themes/wwhf/assets/images/tickets-divider.svg">
							</div>
	
							<?php get_sidebar('postfooter'); ?>
							
						<?php endif?>

						<footer class="article-footer">
							<?php the_post_navigation(array(
								'prev_text'                  => __( 'previous post:<br><span class="post-nav-title">%title</span>' ),
					            'next_text'                  => __( 'next post:<br><span class="post-nav-title">%title</span>' ),
					            'screen_reader_text' => __( 'Continue Reading' ),
					        )
							);?>
						</footer> <!-- end article footer -->
								
					</main> <!-- end #main -->
					
					<?php get_sidebar(); ?>
								
				</div> <!-- end #inner-content -->
				
			</div>
		
		</div> <!-- end #content -->
				
	</div>

</article>	


<?php get_footer(); ?>