! function ( $ ) {
	"use strict";
	// Loader 
	$( window ).on( 'load', function () {
		$( '#status' ).fadeOut();
		$( '#preloader' ).delay( 350 ).fadeOut( 'slow' );
		$( 'body' ).delay( 350 ).css( {
			'overflow': 'visible'
		} );
	} );

	// Menu
	$( '.navbar-toggle' ).on( 'click', function ( event ) {
		$( this ).toggleClass( 'open' );
		$( '#navigation' ).slideToggle( 400 );
	} );

	// $( '.navigation-menu>li' ).slice( -1 ).addClass( 'last-elements' );

	$( '.menu-arrow,.submenu-arrow' ).on( 'click', function ( e ) {
		if ( $( window ).width() < 992 ) {
			e.preventDefault();
			$( this ).parent( 'li' ).toggleClass( 'open' ).find( '.submenu:first' ).toggleClass( 'open' );
		}
	} );

	// $( ".navigation-menu a" ).each( function () {
	// 	if ( this.href == window.location.href ) {
	// 		$( this ).parent().addClass( "active" );
	// 		$( this ).parent().parent().parent().addClass( "active" );
	// 		$( this ).parent().parent().parent().parent().parent().addClass( "active" );
	// 	}
	// } );

	// Clickable Menu
	$( ".has-submenu a" ).click( function () {
		if ( window.innerWidth < 992 ) {
			if ( $( this ).parent().hasClass( 'open' ) ) {
				$( this ).siblings( '.submenu' ).removeClass( 'open' );
				$( this ).parent().removeClass( 'open' );
			} else {
				$( this ).siblings( '.submenu' ).addClass( 'open' );
				$( this ).parent().addClass( 'open' );
			}
		}
	} );

	$( '.mouse-down' ).on( 'click', function ( event ) {
		var $anchor = $( this );
		$( 'html, body' ).stop().animate( {
			scrollTop: $( $anchor.attr( 'href' ) ).offset().top - 0
		}, 1500, 'easeInOutExpo' );
		event.preventDefault();
	} );

	//Sticky
	$( window ).scroll( function () {
		var scroll = $( window ).scrollTop();

		if ( scroll >= 50 ) {
			$( ".sticky" ).addClass( "nav-sticky" );
		} else {
			$( ".sticky" ).removeClass( "nav-sticky" );
		}
	} );

	// Back to top
	$( window ).scroll( function () {
		if ( $( this ).scrollTop() > 100 ) {
			$( '.back-to-top' ).fadeIn();
		} else {
			$( '.back-to-top' ).fadeOut();
		}
	} );
	$( '.back-to-top' ).click( function () {
		$( "html, body" ).animate( { scrollTop: 0 }, 3000 );
		return false;
	} );

	//Tooltip
	$( function () {
		$( '[data-toggle="tooltip"]' ).tooltip()
	} );
	//Popover
	$( function () {
		$( '[data-toggle="popover"]' ).popover()
	} );

	// AOS.init({
	//     easing: 'ease-in-out-sine',
	//     duration: 1000
	// });

	// Login/Register modal toggle flip class
	var loginCard = document.getElementById( 'login-modal-flip' );
	var regCard = document.getElementById( 'reg-modal-flip' );
	var loginBtn = document.getElementById( 'login-flip' );
	var registerBtn = document.getElementById( 'register-flip' );
	var regLoginBtn = document.getElementById( 'reg-login-flip' );
	var regRegisterBtn = document.getElementById( 'reg-register-flip' );

	loginBtn.addEventListener( 'click', function ( e ) {
		loginCard.classList.toggle( 'is-flipped' );
	} );

	registerBtn.addEventListener( 'click', function ( e ) {
		loginCard.classList.toggle( 'is-flipped' );
	} );

	regLoginBtn.addEventListener( 'click', function ( e ) {
		regCard.classList.toggle( 'is-flipped' );
	} );

	regRegisterBtn.addEventListener( 'click', function ( e ) {
		regCard.classList.toggle( 'is-flipped' );
	} );

}( jQuery )

// Pricing monthly switch
var e = document.getElementById( "filt-monthly" ),
	d = document.getElementById( "filt-yearly" ),
	t = document.getElementById( "switcher" ),
	m = document.getElementById( "monthly" ),
	y = document.getElementById( "yearly" );

e.addEventListener( "click", function () {
	console.log( 'filt-monthly' );
	t.checked = false;
	e.classList.add( "toggler--is-active" );
	d.classList.remove( "toggler--is-active" );
	m.classList.remove( "hide" );
	y.classList.add( "hide" );
} );

d.addEventListener( "click", function () {
	t.checked = true;
	d.classList.add( "toggler--is-active" );
	e.classList.remove( "toggler--is-active" );
	m.classList.add( "hide" );
	y.classList.remove( "hide" );
} );

t.addEventListener( "click", function () {
	d.classList.toggle( "toggler--is-active" );
	e.classList.toggle( "toggler--is-active" );
	m.classList.toggle( "hide" );
	y.classList.toggle( "hide" );
} );

// Vanilla JavaScript Scroll to Anchor
// @ https://perishablepress.com/vanilla-javascript-scroll-anchor/

( function () {
	scrollTo();
} )();

function scrollTo() {
	const links = document.querySelectorAll( '.scroll' );
	links.forEach( each => ( each.onclick = scrollAnchors ) );
}

function scrollAnchors( e, respond = null ) {
	const distanceToTop = el => Math.floor( el.getBoundingClientRect().top );
	e.preventDefault();
	var targetID = ( respond ) ? respond.getAttribute( 'href' ) : this.getAttribute( 'href' );
	const targetAnchor = document.querySelector( targetID );
	if ( !targetAnchor ) return;
	const originalTop = distanceToTop( targetAnchor );
	window.scrollBy( { top: originalTop, left: 0, behavior: 'smooth' } );
	const checkIfDone = setInterval( function () {
		const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
		if ( distanceToTop( targetAnchor ) === 0 || atBottom ) {
			targetAnchor.tabIndex = '-1';
			targetAnchor.focus();
			window.history.pushState( '', '', targetID );
			clearInterval( checkIfDone );
		}
	}, 100 );
}
