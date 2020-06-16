$(document).ready(function() {

  // hide preload spinner
  $('#preloader').fadeOut(500);

  // make header floating
  let floatingAfter = $('#header').outerHeight();

  $(window).scroll(function() {
    let currentPos = $(window).scrollTop();

    if (currentPos > floatingAfter) {
      $('#header').addClass('floating').css('top', 0);
    }
    else {
      $('#header').removeClass('floating').css('top', -floatingAfter);
    }
  });

});
