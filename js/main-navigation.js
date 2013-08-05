jQuery(function($) {
  var DELAY = 200;

  $('.nav .menu-item.dropdown').each( function() {
    var $dropdown = $(this);
    var menuVisible = false, currentTimeout = -1;

    var $link = $dropdown.children('a');
    var $hoverContents = $dropdown.children('ul.dropdown-menu');

    var showMenu = function() {
      if (!menuVisible) {
        menuVisible = true;
        $hoverContents.show();
        $link.addClass('hover');
      } else {
        window.clearTimeout(currentTimeout);
      }
    }

    var hideMenu = function() {
      if (menuVisible) {
        currentTimeout = window.setTimeout(function() {
          menuVisible = false;
          $hoverContents.hide();
          $link.removeClass('hover');
        }, DELAY);
      }
    }

    $link.hover(function(e) {
      // Hover in
      showMenu();
    }, function(e) {
      // Hover out
      hideMenu();
    });

    $hoverContents.hover(function(e) {
      // Hover in
      showMenu();
    }, function(e) {
      // Hover out
      hideMenu();
    });

  });
});
