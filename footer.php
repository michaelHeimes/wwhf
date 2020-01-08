<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 large-shrink">
								
								<div class="grid-x grid-padding-x">
							
									<ul class="menu cell small-12 medium-shrink">
											
										<li class="wild-west-logo">
											<a href="<?php echo home_url(); ?>">
												
												<?php 
												$image = get_field('wild_west_logo', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											
											</a>
										</li>
				
									</ul>
							
									
									<div class="cell  small-12 medium-shrink">
										<nav role="navigation">
				    						<?php joints_footer_links(); ?>
				    					</nav>
				    				</div>
				    				
								</div>
			    				
							</div>
							
							<div class="right cell small-12 large-shrink">
								
								<div class="stay-connected grid-x grid-padding-x align-middle">
			    									    				
				    				<?php if( $heading = get_field('stay_connected_heading', 'option') ): ?>
				    					<p class="cell small-12 medium-shrink"><?php echo $heading ?></p>
				    				<?php endif ;?>
				    				
				    				<ul class="menu cell small-12 medium-shrink">
					    				
					    				<?php if( $facebook = get_field('facebook_link', 'option') ): ?>
					    					<li><a href="<?php echo $facebook ;?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					    				<?php endif ;?>
					    				
					    				<?php if( $twitter = get_field('twitter_link', 'option') ): ?>
					    					<li><a href="<?php echo $twitter ;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
					    				<?php endif ;?>
					    				
					    				<?php if( $youtube = get_field('youtube_link', 'option') ): ?>
					    					<li><a href="<?php echo $youtube ;?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
					    				<?php endif ;?>
					    				
					    				<?php if( $email = get_field('email_address', 'option') ): ?>
					    					<li><a href="mailto:<?php echo $email ;?>"><i class="fas fa-envelope"></i></a></li>
					    				<?php endif ;?>
					    								    				
					    			</ul>
						    							    				
								</div>
				    				
		    				</div>
					
						</div> <!-- end #inner-footer -->
						
					</div>
					
					<div class="sub-footer">
						
						<div class="grid-container">
						
							<div class="grid-x grid-padding-x">
																	
								<p class="top-row source-org copyright small-12 cell text-center"><?php the_field('top_line','option');?> <?php echo date('Y'); ?></p>
							
								<p class="bottom-row small-12 cell text-center"><?php the_field('bottom_line','option');?></p>

							</div>
								
						</div>	
														
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

	</body>
	
</html> <!-- end page -->