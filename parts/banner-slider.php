<?php if( have_rows('slider') ):?>
	<?php while ( have_rows('slider') ) : the_row();?>	
	
	<?php if( have_rows('single_slide') ):?>
		<?php while ( have_rows('single_slide') ) : the_row();?>	
		
		<div class="single-slide" style="background-image: url(<?php the_sub_field('image');?>)">
			
			<div class="inner">
				
				<div class="mask"></div>
			
				<h2><?php the_sub_field('heading');?></h2>
				
				<p><?php the_sub_field('copy');?></p>
				
				<?php get_template_part( 'parts/multi-links' );?>								
				
			</div>
			
		</div>
										
		<?php endwhile;?>
	<?php endif;?>
							
	<?php endwhile;?>
<?php endif;?>
