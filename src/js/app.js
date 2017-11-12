$( document ).ready( () => {
	$( '.grid-resp' ).each( () => {
		console.log( this.data( 'grid' ) );
	} );
} );