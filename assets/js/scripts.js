// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
$(document).ready(function() {

  $('nav .current-menu-item').each(function(index, el) {
    $(this).prev().addClass('previous-menu-item')
  });

  $('.modal-close').on('click', function(e) {
    CloseModal()
  })
  $('.modal-bg').on('click', function(e) {
    CloseModal()
  })

  $('.modal-container').on('click', function(e) {
    e.stopPropagation();
  })

  $('.header-btn__add').on('click', function(e) {
    e.stopPropagation();
    OpenModal();
    $('.modal-bg').addClass('modal-bg--opened').addClass('modal-recall');
  })

});

function CloseModal() {
  $('.modal-bg').attr('class', '').addClass('modal-bg');
  $('body').removeClass('modal-opened');
}

function OpenModal(html) {
  $('body').addClass('modal-opened');
}
