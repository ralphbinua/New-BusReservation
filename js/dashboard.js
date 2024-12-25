$(document).ready(function() {
    $('.dropdown-toggle').on('click', function() {
      $(this).next('.dropdown-menu').toggle();
    });
  });

