require('./bootstrap');

jQuery(window).on('load', function() {
	//

	jQuery('[data-toggle="off-canvas"]').on('click', function(e)
	{
		e.stopPropagation();

	  	if(jQuery(this).hasClass('is-activated')) {
	    		jQuery('#off-canvas').foundation('close');

	    		jQuery(this).removeClass('is-activated');

	  	} else {
	    		jQuery('#off-canvas').foundation('open');

	    		jQuery(this).addClass('is-activated');
	  	}
	});

	jQuery('#off-canvas').on('close.zf.offCanvas', function()
	{
	  	jQuery('[data-toggle="off-canvas"]').removeClass('is-activated');
	});

	var count = -1;

	function accordionItem( count ) {
		var min = 0;
		var max = Number( jQuery('#history-accordion').find('.accordion-item').length ) - 1;
		var i;

		jQuery('#history-accordion').find('.accordion-item').each(function(){
			i = jQuery(this).index();

			jQuery(this).removeClass('is-active').removeClass('is-hidden').addClass( 'inactive' );

			if ( count == min ) {
				if ( i > ( count + 2) ) {
					jQuery(this).removeClass( 'flex-child-auto' ).removeClass( 'inactive' ).addClass( 'is-hidden' );

					jQuery('.btn-arrow').hasClass('prev').addClass('disabled');
				}

			} else if ( count == max ) {
				if ( i < ( count - 2) ) {
					jQuery(this).removeClass( 'flex-child-auto' ).removeClass( 'inactive' ).addClass( 'is-hidden' );
				}

			} else {
				if ( i < ( count - 1) || i > ( count + 1 ) ) {
					jQuery(this).removeClass( 'flex-child-auto' ).removeClass( 'inactive' ).addClass( 'is-hidden' );
				}
			}

			if ( i == count ) {
				jQuery(this).removeClass( 'flex-child-auto' ).removeClass( 'inactive' ).addClass( 'is-active' );
			}
			/*if ( ( i >= ( count + 3 ) ) || i < ( ( count - 1 ) ) ) {
				jQuery(this).removeClass( 'flex-child-auto' ).addClass( 'is-hidden' );

			} else if ( i == count ) {
				jQuery(this).removeClass( 'flex-child-auto' ).addClass( 'is-active' );
			}*/
		});
	}

	if ( jQuery('#hero-image-slider').length > 0 ) {
		jQuery('#hero-image-slider').slick(
		{
			'dots': true,
			'appendDots': jQuery('#hero-image').find('.dots-container'),
			'arrows': false,
		});
	}

	if ( jQuery('#history-accordion').length > 0 ) {
		length = jQuery('#history-accordion').find('.accordion-item').length;

		jQuery('[data-toggle-accordion]').on('click', function() {
			if ( jQuery(this).hasClass('next') ) {
				if ( count < ( length - 1)) {
					count++;
				}

			} else if ( jQuery(this).hasClass('prev') ) {
				if ( count > 0) {
					count--;
				}
			}

			accordionItem( count );
		});
	}

	if ( jQuery('#the-farm-accordion').length > 0 ) {

		jQuery('[data-toggle-the-farm-accordion]').on('click', function() {
			jQuery('#the-farm-accordion').foundation('toggle', jQuery('#the-farm-accordion-content-1'));
		});
	}

	if ( jQuery('#gmap').length > 0 ) {
		function initialize_gmap() {
            var latlang = new google.maps.LatLng( -34.271007, 116.0813837 );
            
            var options = {
                center: latlang,
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                };

            var map = new google.maps.Map(document.getElementById("gmap"),  options);

            var marker = new google.maps.Marker({
                position: latlang,
                map: map,
            });
        }

        initialize_gmap();
	}
});