$( function() {

	$( window ).on( 'load resize', function() {
		var w = $( window ).width();
		var d;
		$( 'img' ).each( function() {
			if ( $( this ).hasClass( 'm900' ) ) {
				if ( 900 > w ) {
					d = $( this ).data( "sp" );
				} else {
					d = $( this ).data( "pc" );
				}
			} else {
				if ( 640 > w ) {
					d = $( this ).data( "sp" );
				} else {
					d = $( this ).data( "pc" );
				}
			}

			if ( '' !== d ) {
				$( this ).attr( 'src', d );
			}
		} );
	} );


} );