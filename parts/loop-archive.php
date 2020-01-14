<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?> role="article">		
	
		<a href="<?php the_permalink() ?>" rel="bookmark">			
	
			<header class="archive-article-header">
				<h2><?php the_title(); ?></h2>
				<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
			</header> <!-- end article header -->
		</a>
						
		<section class="archive-content content-wrap" itemprop="text">
			<?php the_post_thumbnail('full'); ?>
			<?php the_field('excerpt_text'); ?>
			<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
		</footer> <!-- end article footer -->	
		
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<p class="read-more style-button black">Read More</p>
		</a>
		
	</a>
	
	<div class="text-left post-divider-wrap">
		<img src="/wp-content/themes/wwhf/assets/images/ticket-card-divider.svg">
	</div>
				    						
</article> <!-- end article -->

