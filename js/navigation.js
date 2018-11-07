/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
$ = jQuery.noConflict(true);

$(document).ready( function () {
$("#primary-menu").css("display","none");
$('.menu-toggle').click(function(e) {
   e.preventDefault();
    if ($('#primary-menu').is(":visible") ) {
      $('#primary-menu').stop(true,true).slideUp(1000);
    } else {
      $('#primary-menu').stop(true,true).slideDown(1000);
    }
  });

});
