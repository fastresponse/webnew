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

  // create open/close icons
  /*
  * triangle up: &#x25B2;
  * triangle down: &#x25BC;
  * triangle right: &#x25B6;
  * triangle left: &#x25C0;
  */

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

  // process start-closed classes
  // do this here instead of in CSS so it's only hidden if JS is enabled to reshow it
  collapsibles.filter('.collapsible-'+type+'-start').children(':not(.trigger, .stay-open)').hide();
  collapsibles.filter('.collapsible-'+type+'-start').find('.collapsible-opened').hide();
  collapsibles.filter(':not(.collapsible-'+type+'-start)').find('.collapsible-closed').hide();
}

$(document).ready(function() {

  $('#menu-button').click(function() {
    $('nav').slideToggle('fast');
  });

  enable_collapse();

});
