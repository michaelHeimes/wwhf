<?php
/*
Template Name: Fest Page
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
						
						
					<div class="fest-info-wrap cell small-12">
						
						<div class="grid-x grid-padding-x align-center">
				
							<div class="single-info circle-icon cell small-12 tablet-shrink">
								
								<div class="inner">
									
									<div class="icon-wrap">
										
										<div class="inner">
										
											<img src="<?php the_field('date_icon');?>"/>
										
										</div>
																			
									</div>
									
									<p><?php the_field('date');?></p>

									
								</div>
								
							</div>
		
							<div class="single-info circle-icon cell small-12 tablet-shrink">
								
								<a class="inner" href="<?php the_field('location_map_link');?>" target="_blank">
									
									<div class="icon-wrap">
										
										<div class="inner">
										
											<img src="<?php the_field('location_icon');?>"/>
										
										</div>
																			
									</div>
									
									<p><?php the_field('location');?></p>

									
								</a>
								
							</div>
						
						</div>
						
					</div>	
						
								
					</div>
					</div>
					</div>
					
					
															
				</div><!-- end top -->
				

				
				<div class="bottom secondary-bg">
					
					<div class="inner">
						
						<?php if( get_field('header_logo')== 'wild-west'):?>
							<img class="mountain-half left show-for-tablet" src="<?php echo get_template_directory_uri(); ?>/assets/images/left-mountains.svg"/>
							<img class="mountain-half right show-for-tablet" src="<?php echo get_template_directory_uri(); ?>/assets/images/right-mountains.svg"/>		
						<?php endif;?>				
					
						<div class="grid-container">
						<div class="fest-about-links grid-x grid-padding-x small-up-1 medium-up-2 large-up-4">
							
							<?php if( have_rows('about_links') ):?>
								<?php while ( have_rows('about_links') ) : the_row();?>	
								
								<?php if( have_rows('single_link') ):?>
									<?php while ( have_rows('single_link') ) : the_row();?>	
									
									<?php $link = get_sub_field('link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <div class="cell circle-icon fest-about-link text-center">
										    
										    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											   
											   <div class="inner">
												    
													<div class="icon-wrap">
														
														<div class="inner">
														
															<img src="<?php the_sub_field('icon');?>"/>
														
														</div>
																							
													</div>
												
											   </div>
											   
											   <p><?php echo esc_html( $link_title ); ?></p>
										    
										    </a>
										    
										    
										    								    
									    </div>
									<?php endif; ?>
															
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
		
						</div>
						</div>	
					
					</div><!-- end inner -->
					
					<div class="featured-courses-tickets dark-secondary-bg">
						
						<div class="grid-container">
							
							<div class="fancy-header-wrap cell small-12">
								<h2 class="white"><?php the_field('featured_courses_heading');?></h2>
							</div>

							<div class="fest-about-links grid-x grid-padding-x" data-equalizer data-equalize-on="medium" id="test-eq">
								
								
								<?php if( have_rows('courses') ):?>
									<?php while ( have_rows('courses') ) : the_row();?>
									
									<?php if( have_rows('single_course') ):?>
										<?php while ( have_rows('single_course') ) : the_row();?>	
										
										<div class="single-course cell small-12 medium-6">
											
											<div class="inner" data-equalizer-watch>
												
												<div class="left">
													<?php 
													$image = get_sub_field('logo');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
													
													<div class="dot-divider gray-dots show-for-large"></div>
													
												</div>
																								
												<div class="right">
													
													<img class="divider-dots-mobile hide-for-large" src="/wp-content/themes/wwhf/assets/images/course-divider-dots-mobile.svg"/>
													
													<h3><?php the_sub_field('title');?></h3>
													<p><?php the_sub_field('instructors');?></p>
													
												</div>
												
											</div>
											
										</div>
									
										<?php endwhile;?>
									<?php endif;?>	
								
									<?php endwhile;?>
								<?php endif;?>
								
								

							</div>
							
							
							<div class="fest-tickets grid-x grid-padding-x">
								
								<div class="fancy-header-wrap with-prongs cell small-12 text-center">
									<h2 class="white"><?php the_field('tickets_heading');?></h2>
								</div>
								
								<div class="cell small-12 text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tickets-divider.svg" />
								</div>
								
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
								
							</div>
							
							
						</div>
						
						
					</div><!-- end featured-courses-tickets -->
					
				</div><!-- end bottom -->
		
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
