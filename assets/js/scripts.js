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

  $('.btn-mobinavi').live('click', function(e) {
    OpenMobileNav();
  })

  $('.btn-mobinavi--close-a').live('click', function(e) {
    $('.btn-mobinavi--close-a').removeClass('btn-mobinavi--close-a');
    $('.nav__header--mobiled').removeClass('nav__header--mobiled');
  })

  var widgetTitle = $('.widget .widget--title')
  FirstWordSpan(widgetTitle);

  var innerTitle = $('.inner-title')
  FirstWordSpan(innerTitle);

  $('nav li').on('mouseover', function(e) {
    $(this).prev().addClass('pre-nav-hovered')
  })
  $('nav li').on('mouseout', function(e) {
    $(this).prev().removeClass('pre-nav-hovered')
  })


});

function CloseModal() {
  $('.modal-bg').attr('class', '').addClass('modal-bg');
  $('body').removeClass('modal-opened');
}

function OpenModal(html) {
  $('body').addClass('modal-opened');
}

function OpenMobileNav() {
  var width = $(window).width();
  if (width <= 519) {
    $('.nav__header').addClass('nav__header--mobiled');
    $('.btn-mobinavi--close').addClass('btn-mobinavi--close-a');
  }
}
function FirstWordSpan(element) {
  var html = $(element).html();
  // doing the transformation (adding the span) with a regular expression
  html = html.replace(/^([^\s]*)(.*)/, "<span class=\"first-word\">$1</span>$2");
  // update your text
  $(element).html(html);
}
