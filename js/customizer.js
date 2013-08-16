/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
  "use strict";

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#masthead a.brand' ).text( to );
		} );
	} );

  wp.customize( 'wp386_options[color_combination]', function ( value ) {
    value.bind( function( to ) {
      var classes, $el;
      $el = $('body');
      classes = $el.attr("class").split(" ").filter(function(item) {
        return item.indexOf("theme-") === -1 ? item : "";
      });
      classes.push('theme-' + to);
      $el.attr("class", classes.join(" "));
    } );
  } );

} )( jQuery );
