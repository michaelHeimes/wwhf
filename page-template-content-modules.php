<?php
/*
Template Name: Content Modules
*/

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<main class="main top old-paper-bg" role="main">

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
		
			<div class="inner-content back-page">

				<?php get_template_part( 'parts/content-modules' );?>
		    
			</div> <!-- end #inner-content -->
		
		</div> <!-- end #content -->
	
	</main> <!-- end #main -->
	
</article>


<?php get_footer(); ?>
