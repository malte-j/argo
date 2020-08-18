/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

// ( function() {
// 	const siteNavigation = document.getElementById( 'site-navigation' );

// 	// Return early if the navigation don't exist.
// 	if ( ! siteNavigation ) {
// 		return;
// 	}

// 	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

// 	// Return early if the button don't exist.
// 	if ( 'undefined' === typeof button ) {
// 		return;
// 	}

// 	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

// 	// Hide menu toggle button if menu is empty and return early.
// 	if ( 'undefined' === typeof menu ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	if ( ! menu.classList.contains( 'nav-menu' ) ) {
// 		menu.classList.add( 'nav-menu' );
// 	}

// 	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
// 	button.addEventListener( 'click', function() {
// 		siteNavigation.classList.toggle( 'toggled' );

// 		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
// 			button.setAttribute( 'aria-expanded', 'false' );
// 		} else {
// 			button.setAttribute( 'aria-expanded', 'true' );
// 		}
// 	} );

// 	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
// 	document.addEventListener( 'click', function( event ) {
// 		const isClickInside = siteNavigation.contains( event.target );

// 		if ( ! isClickInside ) {
// 			siteNavigation.classList.remove( 'toggled' );
// 			button.setAttribute( 'aria-expanded', 'false' );
// 		}
// 	} );

// 	// Get all the link elements within the menu.
// 	const links = menu.getElementsByTagName( 'a' );

// 	// Get all the link elements with children within the menu.
// 	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

// 	// Toggle focus each time a menu link is focused or blurred.
// 	for ( const link of links ) {
// 		link.addEventListener( 'focus', toggleFocus, true );
// 		link.addEventListener( 'blur', toggleFocus, true );
// 	}

// 	// Toggle focus each time a menu link with children receive a touch event.
// 	for ( const link of linksWithChildren ) {
// 		link.addEventListener( 'touchstart', toggleFocus, false );
// 	}

// 	/**
// 	 * Sets or removes .focus class on an element.
// 	 */
// 	function toggleFocus() {
// 		if ( event.type === 'focus' || event.type === 'blur' ) {
// 			let self = this;
// 			// Move up through the ancestors of the current link until we hit .nav-menu.
// 			while ( ! self.classList.contains( 'nav-menu' ) ) {
// 				// On li elements toggle the class .focus.
// 				if ( 'li' === self.tagName.toLowerCase() ) {
// 					self.classList.toggle( 'focus' );
// 				}
// 				self = self.parentNode;
// 			}
// 		}

// 		if ( event.type === 'touchstart' ) {
// 			const menuItem = this.parentNode;
// 			event.preventDefault();
// 			for ( const link of menuItem.parentNode.children ) {
// 				if ( menuItem !== link ) {
// 					link.classList.remove( 'focus' );
// 				}
// 			}
// 			menuItem.classList.toggle( 'focus' );
// 		}
// 	}
// } );

document.querySelector(".main-header").addEventListener('click', e => {
	e.composedPath()[2].classList.toggle("open"); 
})

let callback = (entries, observer) => {
  entries.forEach(entry => {
		if(entry.isIntersecting) {
			// console.log("Intersecting: " + entry.target.innerHTML)
			entry.target.classList.remove('scroll-hidden')
		} else {
			// console.log("not intersect: " + entry.target.innerHTML)
			// entry.target.classList.add('scroll-hidden')
		}
  });
};

let observer = new IntersectionObserver(callback, {
	// root: document.querySelector('body'),
  rootMargin: '0px',
  threshold: .1
});

document.querySelectorAll('main h2, main p').forEach(el=>{
	el.classList.add('scroll-hidden')
	el.classList.add('scroll-hideable')

	observer.observe(el);
})
document.querySelectorAll('[data-slide-in]').forEach(el=>{
	el.classList.add('scroll-hidden')
	el.classList.add('scroll-hideable')

	observer.observe(el);
})



// console.log('%c Oh my heavens! ', 'background: #1c1c1c; color: #ff');
let b = [
" __                  _  __ _ _     ",
" / _\\_ __   __ _  ___(_)/ _(_) | __ ",
" \\ \\| '_ \\ / _` |/ __| | |_| | |/ / ",
" _\\ \\ |_) | (_| | (__| |  _| |   <  ",
" \\__/ .__/ \\__,_|\\___|_|_| |_|_|\\_\\ ",
"    |_|                             ",
"                                    ",
" Spaß an Quellcode und Lust für uns ",
" zu arbeiten?                       ",
"                                    ",
"  --> https://spacifik.de/jobs <--  ",
"                                    ",
]

c = b.join("\n")
console.log('%c ' + c, 'background: #1c1c1c; color: #fff; font-weight: bold');
