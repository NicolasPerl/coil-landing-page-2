/*global $:false, window:false, document:false */
$(document).ready(function () {
  'use strict';

  $('#mobile-menu-toggle').click(function () {
    $(this).toggleClass('animated-menu-icon--open');
    $(this).closest('.navbar__menu').toggleClass('navbar__menu--open');
  });
});
