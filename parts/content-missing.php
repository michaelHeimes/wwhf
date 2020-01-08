<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<div class="post-not-found">
	
	<?php if ( is_search() ) : ?>
		
		<header class="no-results-header">
			<h3><?php _e( 'Sorry, No Results.', 'jointswp' );?></h3>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Please try your search again.', 'jointswp' );?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
<!--
		<footer class="article-footer">
			<p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'jointswp' ); ?></p>
		</footer>
-->
		
	<?php else: ?>
	
		<header class="article-header">
			<h3><?php _e( 'Oops, Post Not Found!', 'jointswp' ); ?></h3>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'jointswp' ); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
<!--
		<footer class="article-footer">
		  <p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'jointswp' ); ?></p>
		</footer>
-->
			
	<?php endif; ?>
	
</div>
