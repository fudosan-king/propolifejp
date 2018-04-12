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
		if ( 'pc' === mode ) {
			$( '.access-right' ).prepend( $( '.access-left .img' ) );
		} else {
			$( '.access-left ul' ).after( $( '.access-right .img' ) );
		}
	}

	$( window ).on( 'resize load', function() {
		var w = $( window ).width();
		if ( 600 > w ) {
			mode = 'sp';
		} else {
			mode = 'pc';
		}
		changeImage( mode );
		moveContents( mode );
	});
});