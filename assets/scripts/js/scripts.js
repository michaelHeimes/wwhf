jQuery( document ).ready(function($) {
		
// 	.top padding-top set to header height
	$('header.header').imagesLoaded( function() {	
		function setTopPadding() {
			$headerHeight = $('header.header').innerHeight();
			$('.top.old-paper-bg').css('padding-top', $headerHeight);
		};
		setTopPadding();
		
	$(window).resize(function() {
		setTopPadding();
	});
		
	});
	
	

	
// 	Top Alert
	if($('#alert').length) {
		var alert = $('#alert');
			
		function setAlertHeight() {
			alertHeight = $(alert).outerHeight();	
		};
		
		setAlertHeight();
			
		$(window).resize(function() {
			setAlertHeight();
		});
			
		$( alert).on('click', 'button#alert-close', function() {
			$(alert).css('margin-top', -alertHeight).queue(function(next){
				
// 			$(alert).delay(1500).fadeOut();
			$(alert).delay(1500).css('visibility', 'hidden');			
			next();
			
			});
						
		});
				
	};
		
	
// 	Sliders
	if($('.banner-slider').length) {
		$('.banner-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			fade: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			rows: 0
		});
	};
	
// 	This Year's Fests Hover
	$('.fest-grid .single-fest').each(function () {
		
		$(this).find('a').hover(
			
			function(){ $(this).parents('.fest-grid .single-fest').addClass('hovered') },
			function(){ $(this).parents('.fest-grid .single-fest').removeClass('hovered') }
		)		
		
	});
	

});