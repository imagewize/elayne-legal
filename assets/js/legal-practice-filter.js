/**
 * Legal practice-area filter.
 *
 * Progressive enhancement for the "Legal Practice Areas (Filterable)" pattern.
 * Cards carry legal-cat-{slug} and legal-loc-{slug} classes; the tab buttons
 * carry legal-tab-{slug}; the script swaps the office buttons for a select. Without JavaScript every card stays visible.
 */
( function () {
	'use strict';

	function init( root ) {
		var cards = Array.prototype.slice.call( root.querySelectorAll( '.legal-area' ) );
		var empty = root.querySelector( '.legal-empty' );
		var groups = {
			cat: root.querySelectorAll( '.legal-filter-type .legal-tab' ),
			loc: root.querySelectorAll( '.legal-filter-office .legal-tab' )
		};
		var active = { cat: 'all', loc: 'all' };

		function keyOf( item ) {
			var match = item.className.match( /legal-tab-([a-z-]+)/ );
			return match ? match[ 1 ] : 'all';
		}

		function apply() {
			var shown = 0;

			cards.forEach( function ( card ) {
				var okCat = 'all' === active.cat || card.classList.contains( 'legal-cat-' + active.cat );
				var okLoc = 'all' === active.loc || card.classList.contains( 'legal-loc-' + active.loc );
				card.hidden = ! ( okCat && okLoc );
				if ( ! card.hidden ) {
					shown++;
				}
			} );

			if ( empty ) {
				empty.classList.toggle( 'is-visible', 0 === shown );
			}
		}

		function bind( type ) {
			Array.prototype.forEach.call( groups[ type ], function ( item ) {
				var link = item.querySelector( 'a' );
				if ( ! link ) {
					return;
				}
				link.setAttribute( 'role', 'button' );
				link.setAttribute( 'aria-pressed', keyOf( item ) === active[ type ] ? 'true' : 'false' );
				link.addEventListener( 'click', function ( event ) {
					event.preventDefault();
					active[ type ] = keyOf( item );
					Array.prototype.forEach.call( groups[ type ], function ( other ) {
						var otherLink = other.querySelector( 'a' );
						if ( otherLink ) {
							otherLink.setAttribute( 'aria-pressed', other === item ? 'true' : 'false' );
						}
					} );
					apply();
				} );
			} );
		}

		// The office buttons stay as the editable, no-script markup; show them as a dropdown.
		var officeButtons = root.querySelector( '.legal-filter-office' );
		if ( officeButtons ) {
			var select = document.createElement( 'select' );
			select.className = 'legal-filter-select';
			select.setAttribute( 'aria-label', 'Office' );
			Array.prototype.forEach.call( groups.loc, function ( item ) {
				var link = item.querySelector( 'a' );
				var option = document.createElement( 'option' );
				option.value = keyOf( item );
				option.textContent = link ? link.textContent : option.value;
				select.appendChild( option );
			} );
			select.addEventListener( 'change', function () {
				active.loc = select.value;
				apply();
			} );
			officeButtons.parentNode.appendChild( select );
			groups.loc = [];
		}

		bind( 'cat' );
		bind( 'loc' );
		root.classList.add( 'is-filterable' );
		apply();
	}

	document.querySelectorAll( '.is-style-legal-practice-areas' ).forEach( init );
}() );
