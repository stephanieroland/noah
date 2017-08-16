/*
 * M-Store | Modern E-Commerce Template
 * Copyright 2016 rokaux
 * Theme Custom Scripts
 */

jQuery(document).ready(function($) {
	'use strict';

	// Check if Page Scrollbar is visible
	//------------------------------------------------------------------------------
	var hasScrollbar = function() {
	  // The Modern solution
	  if (typeof window.innerWidth === 'number') {
	    return window.innerWidth > document.documentElement.clientWidth;
		}

	  // rootElem for quirksmode
	  var rootElem = document.documentElement || document.body;

	  // Check overflow style property on body for fauxscrollbars
	  var overflowStyle;

	  if (typeof rootElem.currentStyle !== 'undefined') {
			overflowStyle = rootElem.currentStyle.overflow;
		}

	  overflowStyle = overflowStyle || window.getComputedStyle(rootElem, '').overflow;

	    // Also need to check the Y axis overflow
	  var overflowYStyle;

	  if (typeof rootElem.currentStyle !== 'undefined') {
			overflowYStyle = rootElem.currentStyle.overflowY;
		}

	  overflowYStyle = overflowYStyle || window.getComputedStyle(rootElem, '').overflowY;

	  var contentOverflows = rootElem.scrollHeight > rootElem.clientHeight;
	  var overflowShown    = /^(visible|auto)$/.test(overflowStyle) || /^(visible|auto)$/.test(overflowYStyle);
	  var alwaysShowScroll = overflowStyle === 'scroll' || overflowYStyle === 'scroll';

	  return (contentOverflows && overflowShown) || (alwaysShowScroll);
	};
	if (hasScrollbar()) {
		$('body').addClass('hasScrollbar');
	}


	// Disable default link behavior for dummy links that have href='#'
	//------------------------------------------------------------------------------
	var $emptyLink = $('a[href=#]');
	$emptyLink.on('click', function(e){
		e.preventDefault();
	});




	// Language Dropdown
	//------------------------------------------------------------------------------
	var langSwitcher = $('.lang-switcher'),
			langToggle = $('.lang-toggle');
	langToggle.on('click', function() {
		$(this).parent().toggleClass('open');
	});
	langSwitcher.on('click', function(e) {
    e.stopPropagation();
	});
	$(document).on('click', function(e) {
		langSwitcher.removeClass('open');
	});


	// Toolbar Toggles
	//------------------------------------------------------------------------------
	function closeToolBox() {
		toolbarToggle.removeClass('active');
	}

	var toolbarToggle = $('.toolbar-toggle');
	toolbarToggle.on('click', function(e) {
		if($(e.target).is('.active')) {
			closeToolBox();
            // $('.background').toggle(''); 
	       	
        } else {
			closeToolBox();
			$(this).addClass('active');
           // $('.background').toggle(''); 
		}
    
	});
    // remove background
    var background = $('.background');
	background.on('click', function(e) {
        closeToolBox();
       //  $('.background').toggle(''); 
    });
    	
      
	// Smooth scroll to element
	//------------------------------------------------------------------------------
	// Scroll Spy
	//$( '.fw-section' ).scrollSpy();

	$( document ).on( 'click', '.scroll-to', function ( event ) {
		var target = $( this ).attr( 'href' );
		if ( '#' === target ) {
			
            return false;
		}

		var $target = $( target );
		if( $target.length > 0 ) {
             closeToolBox();
			var $elemOffsetTop = $target.data( 'offset-top' ) || 180;
			$( 'html' ).velocity( "scroll", {
				offset: $( this.hash ).offset().top - $elemOffsetTop,
				duration: 1000,
				easing: 'easeOutExpo',
				mobileHA: false
			} );
		}
		event.preventDefault();
	} );
 

	// Waves Effect (on Buttons)
	//------------------------------------------------------------------------------
	if($('.waves-effect').length) {
		Waves.displayEffect( { duration: 600 } );
	}


	// Count Input (Quantity)
	//------------------------------------------------------------------------------
	$(document).on("click", ".incr-btn", function(e) {
		var $button = $(this);
		var oldValue = $button.parent().find('.quantity').val();
		//var price = parseFloat($('.order-totals .price i').text());
		var variableprice = parseFloat($('#variable_price').val());
        var fixedprice = parseFloat($('#fixed_price').val());
        console.log(fixedprice);
        
        var totalCostText = $('.order-totals .total-cost i');
        var quantitywater = $('.water-quantity i');
        var quantitymeal = $('.meal-quantity i');
         var quantityblanket = $('.blanket-quantity i');
         var quantityiodine = $('.iodine-quantity i');
         var quantitypurification = $('.purification-quantity i');
		var totalCostInput = $('input[name="total_cost"]');
		$button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        var plus;
		if ($button.data('action') == "increase") {
            if (oldValue < 5){
                var newVal = parseFloat(oldValue) + 1;
        
            }
            else{
                var newVal = oldValue;
            }
			
		} else {
		 // Don't allow decrementing below 1
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
                plus = -1;
			} else {
				newVal = 1;
				$button.addClass('inactive');
                plus = 0;
			}
		}
		$button.parent().find('.quantity').val(newVal);
        
		var totalCost = parseInt(newVal) * variableprice + fixedprice;
		totalCost = totalCost.toFixed(2);
		totalCostText.text(totalCost);
        quantitywater.text(parseInt(newVal)*18);
        quantitymeal.text(parseInt(newVal)*11);
        quantityblanket.text(parseInt(newVal));
        quantityiodine.text(parseInt(newVal)*3);
          quantitypurification.text(parseInt(newVal)*6);
		totalCostInput.val(totalCost);
        
		e.preventDefault();
	});
    
    
	// Count input Premium items
	//------------------------------------------------------------------------------
    
    	$(document).on("click", "#premium", function(e) {
		var button = $(this);
            console.log(button);
	
		var totalCostT = $('.order-totals .total-cost i');
		var totalCostInput = $('input[name="total_cost"]');
	   var totalCostText = $('.order-totals .total-cost i').text();
            
        console.log(totalCostText);    
            console.log(parseInt(totalCostText));
            
        var premium = button.val();
            console.log(premium);
            console.log(parseInt(premium));
		
            
        var totalCost = parseInt(totalCostText) + parseInt(premium);
       console.log(totalCost);    
            
		totalCost = totalCost.toFixed(2);
        console.log(totalCost);    
                
		totalCostT.text(totalCost);
		totalCostInput.val(totalCost);
        console.log(totalCostInput.val());   
		e.preventDefault();
	});



	// Single Post via Ajax
	//------------------------------------------------------------------------------
	var ajaxLoadLink = $('.ajax-load-link'),
			orderBackdrop = $('.order-content-backdrop'),
			orderContainer = $('.order-content-wrap'),
			orderContentWrap = $('.order-content-wrap .inner'),
			orderContent = $('.order-content-wrap .inner .order-content'),
			closeBtn = $('.order-content-wrap .close-btn'),
			orderPreloader = $('.order-content-wrap .preloader');

	// Get Data via Ajax
	function getData(url) {
		$.ajax({
			url: url,
			type: "GET",
			dataType: "html",
			success: successFn,
			error: errorFn,
			complete: function(xhr, status) {
				console.log('Request is complete!');
			}
		});
	}


	// Success
	function successFn(result, status) {
		orderContent.prepend(result);
		orderContentWrap.addClass('loaded');
		console.log('Data has been received!');
	}

	// Error
	function errorFn(xhr, status, strErr) {
		orderContent.prepend('<p>' + strErr + '</p>');
		orderContentWrap.addClass('loaded');
		console.log(strErr);
	}

	// Open Order
	function openOrder(postUrl) {

		$('body').addClass('order-content-open');
		orderBackdrop.addClass('active');
		orderContainer.addClass('open');
		//orderPreloader.addClass('active');
        getData(postUrl);
		//setTimeout(function() {
		//	orderPreloader.removeClass('active');
		//	getData(postUrl);
		//}, 900);
	}

	// Close Order
	function closeOrder() {
		$('body').removeClass('order-content-open');
		orderBackdrop.removeClass('active');
		orderContainer.removeClass('open');
		orderContentWrap.removeClass('loaded');
		setTimeout(function() {
			orderContent.empty();
		}, 500);
	}

	ajaxLoadLink.on('click', function(e) {
		var targetOrder = $(this).attr('href');

		openOrder(targetOrder);

		e.preventDefault();
	});

	closeBtn.on('click', closeOrder);


	// Tooltips
	//------------------------------------------------------------------------------
	var $tooltip = $('[data-toggle="tooltip"]');
	if ( $tooltip.length > 0 ) {
		$tooltip.tooltip();
	}


	// Custom checkboxes and radios
	//------------------------------------------------------------------------------
	var $checkbox = $('input[type="checkbox"], input[type="radio"]');
	if($checkbox.length) {
		$('input').iCheck();
	}


	// Layer Parallax Effect
	//------------------------------------------------------------------------------
	var $layerParallax = $('.layer-parallax');
	if ( $layerParallax.length > 0 ) {
		$layerParallax.parallax();
	}

	// Image Carousel
	//------------------------------------------------------------------------------
	var $imageCarousel = $( '.image-carousel .inner' );
	if ( $imageCarousel.length > 0 ) {
		$imageCarousel.each( function () {

			var dataLoop 	 = $( this ).parent().data( 'loop' ),
					autoPlay   = $( this ).parent().data( 'autoplay' ),
					timeOut    = $( this ).parent().data( 'interval' ),
					autoheight = $( this ).parent().data( 'autoheight' );

			$( this ).owlCarousel( {
				items: 1,
				loop: dataLoop,
				margin: 0,
				nav: false,
				dots: true,
				navText: [ , ],
				autoplay: autoPlay,
				autoplayTimeout: timeOut,
				autoHeight: autoheight
			} );
		} );
	}


	// Video Popup
	//------------------------------------------------------------------------------
	var $videoBtn = $( '.video-popup-btn, .gallery-video, .video-popup-placeholder .play-btn' );
	if( $videoBtn.length > 0 ) {
		$videoBtn.magnificPopup( {
		  type: 'iframe',
		  mainClass: 'mfp-fade',
		  removalDelay: 500,
		  gallery: {
		    enabled: true
		  }
		} );
	}


	// Google Maps API
	//------------------------------------------------------------------------------
	var $googleMap = $('.google-map');
	if($googleMap.length > 0) {
		$googleMap.each(function(){
			var mapHeight = $(this).data('height'),
					address = $(this).data('address'),
					zoom = $(this).data('zoom'),
					controls = $(this).data('disable-controls'),
					scrollwheel = $(this).data('scrollwheel'),
					marker = $(this).data('marker'),
					markerTitle = $(this).data('marker-title'),
					styles = $(this).data('styles');
			$(this).height(mapHeight);
			$(this).gmap3({
          marker:{
            address: address,
            data: markerTitle,
            options: {
            	icon: marker
            },
            events: {
              mouseover: function(marker, event, context){
                var map = $(this).gmap3("get"),
                  	infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.open(map, marker);
                  infowindow.setContent(context.data);
                } else {
                  $(this).gmap3({
                    infowindow:{
                      anchor:marker,
                      options:{content: context.data}
                    }
                  });
                }
              },
              mouseout: function(){
                var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.close();
                }
              }
            }
          },
          map:{
            options:{
              zoom: zoom,
              disableDefaultUI: controls,
              scrollwheel: scrollwheel,
              styles: styles
            }
          }
			});
		});
	}

});/*Document Ready End*/
