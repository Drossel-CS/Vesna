/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
$ = jQuery.noConflict(true);

$(document).ready( function () {

$('.menu-toggle').click(function(e) {
   e.preventDefault();
    if ($('.navigation').is(":visible") ) {
      $('.navigation').stop(true,true).slideUp(1000);
    } else {
      $('.navigation').stop(true,true).slideDown(1000);
    }
  });

});
