$( function() {

	function changeImage( mode ) {
		$( '.change-image' ).each( function() {
			var src_o = $( this ).attr( 'src' );
			if ( 'pc' === mode ) {
				$( this ).attr( 'src', src_o.replace( /-sp/, '-pc' ) );
			} else if ( 'sp' === mode ) {
				$( this ).attr( 'src', src_o.replace( /-pc/, '-sp' ) );
			}
		});
	}

	function moveContents( mode ) {
		var i01 = $( '.loc01' );
		var i02 = $( '.loc02' );
		var i03 = $( '.loc03' );
		var i04 = $( '.loc04' );

		if ( 'pc' === mode ) {
			$( '.location01 ul' ).append( $( i01 ) );
			$( '.location01 ul' ).append( $( i02 ) );
			$( '.location01 ul' ).append( $( i03 ) );
			$( '.location01 ul' ).append( $( i04 ) );
			$( '.location0201-right' ).prepend( $( '.location0201 h4' ) );
			$( '.location0202-right' ).prepend( $( '.location0202 h4' ) );
		} else {
			$( '.location01 ul' ).append( $( i01 ) );
			$( '.location01 ul' ).append( $( i02 ) );
			$( '.location01 ul' ).append( $( i04 ) );
			$( '.location01 ul' ).append( $( i03 ) );
			$( '.location0201' ).prepend( $( '.location0201-right h4' ) );
			$( '.location0202' ).prepend( $( '.location0202-right h4' ) );
		}
	}

	function sameHeight() {
		$( '.institution-box ul' ).css( 'height', 'auto' );
		var h = 0;
		$( '.institution-box' ).each( function() {
			if ( $( this ).find( 'ul' ).height() > h ) {
				h = $( this ).find( 'ul' ).height();
			}
		});
		$( '.institution-box ul' ).height( h );
	}

	$( window ).on( 'resize load', function() {
		var w = $( window ).width();
		if ( 640 > w ) {
			mode = 'sp';
		} else {
			mode = 'pc';
		}
		changeImage( mode );
		moveContents( mode );
		sameHeight();
	});
});