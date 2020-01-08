<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : the_row();?> 


	<?php if ( get_row_layout() == 'text_editor' ) : ?>
	
	<section class="text-editor module entry-content" itemprop="text">
		<div class="content-wrap">
		<div class="grid-container">
		<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
	
			<?php the_sub_field('wysiwyg');?>
		
		</div>
		</div>
		</div>
		</div>
	</section>
	
	<?php endif;?>
	

	<?php if ( get_row_layout() == 'image_and_text' ) : ?>

	<section class="image-and-text module entry-content" itemprop="text">
		<div class="content-wrap">
		<div class="grid-container">
		<div class="row-wrap grid-x grid-padding-x layout-<?php the_sub_field('layout');?>">
			
			<div class="cell small-12 medium-6">

				<?php $image = get_sub_field('image'); 
				$image_size = 'image-text';
				$image_url = $image['sizes'][$image_size];
				?>
				<?php if($image):?>
				
				<div class="image-wrap">
				
					<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['image-text-width']; ?>" height="<?php echo $image['sizes']['image-text-height']; ?>" alt="<?php echo $image['caption']; ?>" />

					<div class="mask"></div>
					
				</div>
					
				<?php endif; ?>
				
			</div>	
				
			<div class="text-wrap cell small-12 medium-6">
				<?php the_sub_field('text');?>		
			</div>					
		
		</div>						
		</div>
		</div>
	</section>
	
	<?php endif;?>
	
	<?php if ( get_row_layout() == 'text_two_columns' ) : ?>
	<section class="two-column-text module">
		<div class="content-wrap">
		<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if ( $heading = get_sub_field('heading')):?>
			
				<h2 class="cell small-12 text-center"><?php echo $heading;?></h2>
			
			<?php endif;?>
			
			<div class="cell small-12 medium-6">
				<?php the_sub_field('left_column');?>
			</div>
			
			<div class="cell small-12 medium-6">
				<?php the_sub_field('left_column');?>
			</div>
			
			<?php if ( $footnote = get_sub_field('footnote')):?>
			
				<div class="footnote-wrap cell small-12"><?php echo $footnote;?></div>
			
			<?php endif;?>
		
		</div>
		</div>
		</div>
	</section>
	<?php endif;?>
	

	<?php if ( get_row_layout() == 'fest_ticket_card' ) : ?>
	<section class="fest-ticket-card module">
	
		<?php if(get_field('header_logo')== 'wild-west'):?>
	
			<?php		
			$args = array(
			    'post_type'  => 'page', 
			    'post__not_in' => array( $post->ID ),
			    'meta_query' => array( 
			        array(
			            'key'   => '_wp_page_template', 
			            'value' => 'page-template-fest.php'
			        )
			    ),
			    'meta_key'		=> 'header_logo',
			    'meta_value'	=> 'wild-west'
			);
			
			$loop = new WP_Query( $args );
					
			while ( $loop->have_posts() ) : $loop->the_post();?>		
			
				<?php if( have_rows('ticket_card') ):?>
					<?php while ( have_rows('ticket_card') ) : the_row();?>	
					
					<div class="ticket-card cell auto">
						
						<div class="top text-center">
						
							<p class="price"><?php the_sub_field('price');?></p>
							
							<div class="text-center">
								<img class="green-2-points text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/green-2-points.svg"/>
							</div>
							
							<h3><?php the_sub_field('heading');?></h3>
						
						</div>
						
						<div class="text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket-card-divider.svg" />
						</div>
						
						<div class="bottom">
						
							<p class="whats-included"><?php the_sub_field('whats_included_heading');?></p>
							
							<?php the_sub_field('whats_included_list');?>
							
							<?php 
							$link = get_sub_field('get_tickets_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <div class="text-center">
							    	<a class="button black style-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							    </div>
							<?php endif; ?>
							
						</div>
						
					</div>
				
					<?php endwhile;?>
				<?php endif;?>

			<?php endwhile; wp_reset_query();?> 
		
		<?php endif;?>
		
		
		<?php if(get_field('header_logo')== 'way-west'):?>
		
			<?php		
			$args = array(
			    'post_type'  => 'page', 
			    'post__not_in' => array( $post->ID ),
			    'meta_query' => array( 
			        array(
			            'key'   => '_wp_page_template', 
			            'value' => 'page-template-fest.php'
			        )
			    ),
			    'meta_key'		=> 'header_logo',
			    'meta_value'	=> 'way-west'
			);
			
			$loop = new WP_Query( $args );
					
			while ( $loop->have_posts() ) : $loop->the_post();?>		
			
				<?php if( have_rows('ticket_card') ):?>
					<?php while ( have_rows('ticket_card') ) : the_row();?>	
					
					<div class="ticket-card cell auto">
						
						<div class="top text-center">
						
							<p class="price"><?php the_sub_field('price');?></p>
							
							<div class="text-center">
								<img class="green-2-points text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/green-2-points.svg"/>
							</div>
							
							<h3><?php the_sub_field('heading');?></h3>
						
						</div>
						
						<div class="text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket-card-divider.svg" />
						</div>
						
						<div class="bottom">
						
							<p class="whats-included"><?php the_sub_field('whats_included_heading');?></p>
							
							<?php the_sub_field('whats_included_list');?>
							
							<?php 
							$link = get_sub_field('get_tickets_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <div class="text-center">
							    	<a class="button black style-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							    </div>
							<?php endif; ?>
							
						</div>
						
					</div>
				
					<?php endwhile;?>
				<?php endif;?>

			<?php endwhile; wp_reset_query();?> 
		
		<?php endif;?>
	
	</section>
	<?php endif;?>
	
	
	<?php if ( get_row_layout() == 'youtube_embed' ) : ?>
	<section class="youtube-embed module">
		<div class="content-wrap">
		<div class="grid-container">
		<div class="grid-x grid-padding-x">
		<div class="cell small-12">
			
		<?php the_sub_field('video_link');?>
		
		</div>
		</div>
		</div>
		</div>
		
	</section>
	<?php endif;?>


	<?php if ( get_row_layout() == 'links' ) : ?>
	<section class="links module">
		
		<div class="content-wrap">
		<div class="grid-container">
		<div class="grid-x grid-padding-x">
		<div class="cell small-12">
		
		<?php get_template_part( 'parts/multi-links' );?>		
		
		</div>
		</div>
		</div>
		</div>						
		
	</section>
	<?php endif;?>
	
<?php endwhile;?>
<?php endif;?>
		