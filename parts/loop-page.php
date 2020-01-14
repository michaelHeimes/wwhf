<?php
/**
 * Template part for displaying page content in page.php../assets/styles/scss/_global.scss
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">

		<img class="a-head a-head-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/left_interior_hero.svg"/>
		
		<div class="grid-container">

			<div class="fancy-header-wrap with-prongs about-heading-wrap text-center grid-x grid-x-padding">
				<h1 class="black no-white-shadow page-title text-center cell small-12">Blog</h1>
			</div>
			
		</div>
		
		<img class="a-head a-head-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/right_interior_hero.svg"/>

	</header> <!-- end article header -->
	
	<div class="below-header-divider"></div>
	
	<div class="below-header-divider"></div>
	
	<?php if(is_page_template('content-modules.php')):?>
	
	<div class="grid-container">
	<div class="grid-x grid-padding-x">
	<div class="small-12 cell">
					
	    <section class="entry-content content-wrap" itemprop="text">
		    <?php the_content(); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
			 <?php wp_link_pages(); ?>
		</footer> <!-- end article footer -->
		
	</div>
	</div>
	</div>
	
	<?php endif;?>
						    
					
</article> <!-- end article -->