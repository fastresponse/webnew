function enable_collapse() {
  var width = $(window).width();
  var collapsibles = $('.collapsible');
  var col_headers = collapsibles.children('header');
  var type;

  if (width >= 800) {
    //type = 'desktop';
    col_headers.unbind('click');
    return;
  }
  else if (width >= 550) {
    type = 'tablet';
  }
  else {
    type = 'mobile';
  }

  // append open/close icon
  // define default visibility via css
  /*
  * triangle up: &#x25B2;
  * triangle down: &#x25BC;
  * triangle right: &#x25B6;
  * triangle left: &#x25C0;
  */
  var $opened = $('<span></span>').attr('class', 'collapsible-opened').append(' &#x25B2;');
  var $closed = $('<span></span>').attr('class', 'collapsible-closed').append(' &#x25B6;');
  col_headers.find('h1,h2,h3,h4,h5').append($opened, $closed);
  col_headers.css('cursor', 'pointer');

  col_headers.click(function() {
    if ( $(window).width() >= 800) return;
    var main = $(this).parent();
    main.children(':not(header)').slideToggle('fast');
    main.find('.collapsible-opened').toggle();
    main.find('.collapsible-closed').toggle();
  });

  // process start-closed classes
  // do this here instead of in CSS so it's only hidden if JS is enabled to reshow it
  collapsibles.filter('.start-closed-'+type).children(':not(header)').hide();
  collapsibles.filter('.start-closed-'+type).find('.collapsible-opened').hide();
  collapsibles.filter(':not(.start-closed-'+type+')').find('.collapsible-closed').hide();
}

$(document).ready(function() {

  $('#menu-button').click(function() {
    $('nav').slideToggle('fast');
  });

  enable_collapse();

});
