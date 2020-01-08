<?php if( have_rows('links') ):?>
	<div class="multi-links-wrap">
	<?php while ( have_rows('links') ) : the_row();?>
	
	<?php if( have_rows('single_link') ):?>
		<?php while ( have_rows('single_link') ) : the_row();?>										
		

			<?php 
				
			$label = get_sub_field('link_label');
				
			$link = get_sub_field('link');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    
			<?php 
			$field = get_sub_field_object('link_style'); 
			$link_style = $field['value'];?>
			    
			    <?php if( get_sub_field('link_type') == 'page-link' ):?>
			    
			    	<a class="multi-link style-<?php echo esc_attr($link_style);?> <?php if(is_page_template('page-template-content-modules.php')):?>black<?php endif;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			    	
				<?php endif;?>

			    <?php if( get_sub_field('link_type') == 'call-link' ):?>
			    
					<a class="multi-link style-<?php echo esc_attr($link_style);?> <?php if(is_page_template('page-template-content-modules.php')):?>black<?php endif;?>" href="tel:<?php the_sub_field('phone_number');?>"><?php echo esc_html( $label ); ?></a>
				
				<?php endif;?>
				<?php if( get_sub_field('link_type') == 'email-link' ):?>
				
					<a class="multi-link style-<?php echo esc_attr($link_style);?> <?php if(is_page_template('page-template-content-modules.php')):?>black<?php endif;?>" href="mailto:<?php the_sub_field('email_address');?>"><?php echo esc_html( $label ); ?></a>
				
				<?php endif;?>
			    
			<?php endif; ?>

		<?php endwhile;?>
	<?php endif;?>

	<?php endwhile;?>
	</div>
<?php endif;?>
