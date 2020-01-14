<?php
/*
Template Name: Home Page
*/

get_header(); ?>
			
	<div class="content">
		
		<div class="inner-content">
	
		    <main class="main" role="main">
		
				<div class="top old-paper-bg">
					
					<div class="grid-container">
					<div class="grid-x grid-padding-x">
					<div class="small-12 cell">
					
						<div class="home-slider banner-slider">

							<?php get_template_part( 'parts/banner-slider' );?>								
						
						</div>
						
						<div class="fancy-header-wrap with-prongs about-heading-wrap text-center">
							<h2 class="black"><?php the_field('about_heading');?></h2>
						</div>

								
					</div>
					</div>
					</div>
					
<!-- 					<img class="buffalo-scene" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage_landscape.svg"/> -->
						
					<div class="home-buffalo-scene">
						<img class="left" src="<?php echo get_template_directory_uri(); ?>/assets/images/left-home-landscape.svg"/>
						<img class="right" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-home-landscape.svg"/>
					</div>
						
										
				</div><!-- end top -->
				
				<div class="bottom secondary-bg">
					
					<div class="grid-container about-wrap">
						
					<div class="grid-x grid-padding-x">
					
						<p class="about-copy small-12 cell text-center"><?php the_field('about_copy');?></p>
						
						<div class="small-12 cell text-center">
							<img class="green-2-points text-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/green-2-points.svg"/>
						</div>
						
						<div class="small-12 medium-12 large-12 cell text-center">
							<?php get_template_part( 'parts/multi-links' );?>
						</div>
											
					</div>
					</div>	
					
					<?php if( have_rows('fests') ):?>
					<div class="dark-secondary-bg fests-this-year-wrap">
						
						<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="fancy-header-wrap with-prongs small-12 text-center">
								<h2 class="white"><?php the_field('fests_this_year_heading');?></h2>
							</div>
							
							<div class="fest-grid small-12">
								
								<div class="grid-x grid-padding-x small-up-1 medium-up-2">
								
								<?php while ( have_rows('fests') ) : the_row();?>
								
									<?php
									$post_object = get_sub_field('single_fest');
									
									if( $post_object ): 
									
										// override $post
										$post = $post_object;
										setup_postdata( $post ); 
									
										?>
									    <div class="single-fest cell">
										    
										    <?php 
											$image = get_field('image_for_home_page');
											$size = 'fest-thumb';
											if( $image ) {
											    echo wp_get_attachment_image( $image, $size );
											}?>
											
											<div class="overlay">
										    
										    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_field('fest_year');?></a></h3>
										    	
										    	
												<?php if( have_rows('ticket_card') ):?>
													<?php while ( have_rows('ticket_card') ) : the_row();?>	
	
													<?php 
													$link = get_sub_field('get_tickets_link');
													if( $link ): 
													    $link_url = $link['url'];
													    $link_title = $link['title'];
													    $link_target = $link['target'] ? $link['target'] : '_self';
													    ?>
														<div class="text-center">
															<a class="button white style-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
														</div>
													<?php endif;?>
	
												
													<?php endwhile;?>
												<?php endif;?>
											
											</div>
									    	
									    </div>
									    <?php wp_reset_postdata();?>
									<?php endif; ?>								
									
								<?php endwhile;?>
								
								</div>
								
								<div class="cell small-12">
									<img class="tickets-divider" src="<?php echo get_template_directory_uri(); ?>/assets/images/tickets-divider.svg"/>
								</div>
								
							</div>
						
						</div>
						</div>
						
					</div>	
					<?php endif;?>	
					
					
				</div><!-- end bottom -->
		
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
