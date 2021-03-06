// *************************************
//
//   Responsive nav toggle
//   -> Collapse/expand navigation
//
// *************************************

$(function() {
  var menu = $('#js-navCollapseTarget');
  var menuToggle = $('#js-navCollapse');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function() {
      if (menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });
});
