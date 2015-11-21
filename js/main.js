function enable_collapse() {
  var width = $(window).width();
  var type;
  if (width >= 800) {
    type = 'desktop';
  }
  else if (width >= 550) {
    type = 'tablet';
  }
  else {
    type = 'mobile';
  }

  var collapsibles = $('.collapsible-'+type+', .collapsible-'+type+'-start');

  var triggers = collapsibles.find('.trigger');

  // in case this is called for window resizing
  triggers.unbind('click');

  /*
  * triangle up: &#x25B2;
  * triangle down: &#x25BC;
  * triangle right: &#x25B6;
  * triangle left: &#x25C0;
  */

  // populate trigger text and append open/close icons
  triggers.each(function() {
    var $opened = $('<span></span>').attr('class', 'collapsible-opened').append(' &#x25B2;');
    var $closed = $('<span></span>').attr('class', 'collapsible-closed').append(' &#x25B6;');
    var text = $(this).attr('data-trigger-text');
    if (text && text.length) {
      $(this).text(text);
    }
    $(this).append($opened, $closed);
  });

  // hide things here instead of CSS so it's only hidden if JS is enabled to reshow it

  // collapse elements inside collapsible-start blocks
  collapsibles.filter('.collapsible-'+type+'-start').children(':not(.trigger, .stay-open)').hide();

  // hide the open or close icons (for closed/open start states)
  /*
  collapsibles.filter('.collapsible-'+type+'-start').find('.collapsible-opened').hide();
  collapsibles.filter(':not(.collapsible-'+type+'-start)').find('.collapsible-closed').hide();
  */

  // set class based on starting state for styling
  collapsibles.filter('.collapsible-'+type+'-start').addClass('closed').removeClass('opened');
  collapsibles.filter(':not(.collapsible-'+type+'-start)').addClass('opened').removeClass('closed');

  // create click events on all triggers to toggle visibility
  triggers.click(function() {
    var main = $(this).closest('.collapsible-'+type+', .collapsible-'+type+'-start');
    main.children(':not(.trigger, .stay-open)').slideToggle('fast');
    main.toggleClass('opened closed');
    //$(this).find('.collapsible-opened').toggle();
    //$(this).find('.collapsible-closed').toggle();
  });
}

/*
$.fn.enable_collapse = function() {
  return this.each(function() {
    var triggers = $(this).find('.trigger');
    triggers.each(function() {
      var $opened = $('<span></span>').attr('class', 'collapsible-opened').append(' &#x25B2;');
      var $closed = $('<span></span>').attr('class', 'collapsible-closed').append(' &#x25B6;');
      var text = $(this).attr('data-trigger-text');
      if (text && text.length) {
        $(this).text(text);
      }
      $(this).append($opened, $closed);
    });
    triggers.click(function() {
      var main = $(this).closest('.collapsible-'+type+', .collapsible-'+type+'-start');
      main.children(':not(.trigger, .stay-open)').slideToggle('fast');
      $(this).find('.collapsible-opened').toggle();
      $(this).find('.collapsible-closed').toggle();
    });
  });
};
*/

$(document).ready(function() {

  $('#menu-button').click(function() {
    $('nav').slideToggle('fast');
  });

  enable_collapse();

});
