<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 	
get_header(); ?>
			
	<div class="content">
		
		<div class="top old-paper-bg">
			
			<header class="article-header">
		
				<img class="a-head a-head-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/left_interior_hero.svg"/>
		
				<div class="grid-container">
					<div class="fancy-header-wrap with-prongs about-heading-wrap text-center grid-x grid-x-padding">
						<h1 class="black no-white-shadow page-title text-center cell small-12"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
					</div>
				</div>
				
				<img class="a-head a-head-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/right_interior_hero.svg"/>
		
			</header> <!-- end article header -->
			
			<div class="below-header-divider"></div>
			
			<div class="grid-container">
						
				<div class="inner-content back-page grid-x grid-margin-x grid-padding-x">
	
				    <main class="main small-12 medium-8 large-8 cell" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 
							<!-- To see additional archive styles, visit the /parts directory -->
							<?php get_template_part( 'parts/loop', 'archive' ); ?>
						    
						<?php endwhile; ?>	
		
							<?php joints_page_navi(); ?>
							
						<?php else : ?>
						
							<?php get_template_part( 'parts/content', 'missing' ); ?>
								
					    <?php endif; ?>
			
				    </main> <!-- end #main -->
				
				    <?php get_sidebar(); ?>
			    
				</div>
			
			</div>
	    
	    </div>
		

	</div> <!-- end #content -->

<?php get_footer(); ?>