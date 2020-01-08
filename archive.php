<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
	
	<div class="content">
		
		<div class="top old-paper-bg">
			
			<div class="grid-container">
						
				<div class="inner-content back-page grid-x grid-margin-x grid-padding-x">
	
				    <main class="main small-12 medium-8 large-8 cell" role="main">
				
							
				    	<header>
				    		<h1 class="archive-title"><?php the_archive_title();?></h1>
							<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
				    	</header>
		
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