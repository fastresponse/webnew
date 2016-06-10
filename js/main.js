
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
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
// --- //



function enable_collapse() {
  var type = $FRvars.type;
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


$.fn.removeClassRegex = function(regex) {
  return this.each(function() {
    $(this).attr('class', function(index, css) {
      if (!css) return '';
      var re = new RegExp('(^|\\s)' + regex, 'g');
      return css.replace(re, '');
    });
  });
};

$.fn.even_out = function(compare, movements, threshold) {
  if (!threshold) threshold = 200;
  var bottom1 = $(this).offset().top + $(this).outerHeight(true);
  var bottom2 = $(compare).offset().top + $(compare).outerHeight(true);

  if (bottom1 > bottom2+threshold) {
    for (move_sel in movements) {
      $(move_sel).appendTo(movements[move_sel]);
    }
  }
};

function pause_all_players() {
  for (var i = 0; i < $FRvars.allplayers.length; i++) {
    $FRvars.allplayers[i].pause();
  }
}

$.fn.enable_videolinks = function(default_selector, width) {
  return this.each(function() {
    var $links = $(this).children('.video-link');

    $links.click(function(event) {
      pause_all_players();

      var $elem = $( $(this).attr('data-for') );
      if ($elem.attr('data-loaded') != 'false') {
        return;
      }
      $elem.attr('data-loaded', 'true');

      var vidnum = $elem.attr('data-number');
      var def_width = 448;
      var def_height = 336;
      var use_width, use_height;

      if (width && width == 'fit') {
        use_width = $elem.width();
        use_height = Math.floor( (use_width / def_width) * def_height );
      }
      else {
        use_width = def_width;
        use_height = def_height;
      }

      $('<iframe/>', {
        id: "vzvd-"+vidnum,
        name: "vzvd-"+vidnum,
        height: use_height.toString(),
        width: use_width.toString(),
        src: "//view.vzaar.com/"+vidnum+"/player?apiOn=true",
        title: "Video: "+ $(this).text(),
        type: "text/html",
        frameborder: "0",
        allowTransparency: "true",
        allowFullScreen: "allowFullScreen",
        mozallowfullscreen: "mozallowfullscreen",
        webkitAllowFullScreen: "webkitAllowFullScreen"
      }).addClass('vzaar-video-player').appendTo($elem);

      var vzp = new vzPlayer('vzvd-'+vidnum);
      $FRvars.allplayers.push(vzp);
    });

    var $start_link;
    if (default_selector != null) {
      $start_link = $(this).find('[data-for="'+ default_selector +'"]');
    }
    if (!$start_link || $start_link.length == 0) {
      $start_link = $(this).find('[data-for="'+ $(this).attr('data-default') +'"]');
    }
    if ($start_link) {
      $start_link.trigger('click');
    }
  });
};

$.fn.enable_menulinks = function(default_selector) {
  return this.each(function() {
    var $links = $(this).children('.menu-link');
    var $sections = $(
      $links.map(function() {
        return $(this).attr('data-for');
      })
      .toArray()
      .join(',')
    );

    $links.click(function(event, instant) {
      var $elem = $( $(this).attr('data-for') );
      if (instant) {
        $sections.not($elem).hide();
        $elem.show();
      }
      else {
        $sections.not($elem).slideUp();
        $elem.slideDown();
      }
      $links.not($(this)).removeClass('menu-open');
      $(this).addClass('menu-open');
    });

    var $start_link;
    if (default_selector != null) {
      $start_link = $(this).find('[data-for="'+ default_selector +'"]');
    }
    if (!$start_link || $start_link.length == 0) {
      $start_link = $(this).find('[data-for="'+ $(this).attr('data-default') +'"]');
    }
    if ($start_link) {
      $start_link.trigger('click', true);
    }
  });
};

$.fn.load_images_num = function(num) {
  var srclist = $FRvars.piclist.slice(0);

  return this.each(function() {
    if (num > srclist.length) num = srclist.length;
    if (num < 1) return;

    for(var i = 0; i < num; i++) {
      $('<img/>', {
        src: srclist.shift(),
        alt: ''
      }).appendTo($(this));
    }

    if (srclist.length < 1) return false; // break out of .each
  });
}

$.fn.load_placeholders = function() {
  var opts = $FRvars.imageOpts[ $FRvars.type ];
  var srclist = $FRvars.piclist.slice(0);

  return this.each(function() {
    var localOpts = opts[ $(this).attr('id') ];
    var $thisparent = $(this).parent();
    var src;

    if (localOpts.load == 'none') {
      $(this).remove();
      $thisparent
        .removeClassRegex('contains-\\d+')
        .addClass( 'contains-'+ ($thisparent.children().length) )
      ;
      return; // skip
    }

    if (localOpts.hasOwnProperty('src')) {
      src = localOpts.src;
    }
    else {
      src = $(this).data('src');
    }

    if (!src && srclist.length > 0) {
      src = srclist.shift();
    }

    if (src) {
      var $img = $('<img/>', {
        src: src,
        alt: '',
      }).addClass( $(this).attr('class') );
      $(this).replaceWith($img);
    }
    else {
      $(this).remove();
    }

    $thisparent
      .removeClassRegex('contains-\\d+')
      .addClass( 'contains-'+ ($thisparent.children().length) )
    ;
  });
};

$.fn.load_testimonials = function() {
  var opts = $FRvars.testimonialOpts[ $FRvars.type ];
  var defaultSliderOpts = {
    pause: 9000,
    controls: false,
    pager: false,
    minSlides: 1,
    maxSlides: 1,
    moveSlides: 1,
    slideMargin: 0,
    autoHover: true,
    auto: true,
    adaptiveHeight: true
  };

  var deferred = new $.Deferred();
  var subcalls = [];

  this.each(function() {
    var localOpts = opts[ $(this).attr('id') ];
    var sliderOpts;
    var ajaxOpts;
    var domOb = $(this);

    // skip
    if (localOpts.load == 'none') {
      domOb.closest('.testimonial-column, .testimonial-row').hide();
      return;
    }

    if (localOpts.hasOwnProperty('sliderOpts') && localOpts.sliderOpts) {
      sliderOpts = $.extend({}, defaultSliderOpts, localOpts.sliderOpts);
    }
    else {
      sliderOpts = false;
    }

    ajaxOpts = {
      "type" : "POST",
      "url" : $FRvars.incdir+"php/ajax.testimonials.php",
      "dataType" : "json",
      "data" : {
        "num" : localOpts.num,
        "orientation" : localOpts.orientation,
        "categories" : localOpts.categories,
      },
      "domOb" : domOb,
      "sliderOpts" : sliderOpts,
      "success" : function(data, textStatus, jqxhr) {
        if (data.length == 0) {
          this.domOb.closest('.testimonial-column, .testimonial-row').hide();
        }
        else {
          this.domOb.html(data);
          if (data.length > 1 && this.sliderOpts) {
            this.domOb.bxSlider( this.sliderOpts );
          }
        }
      },
      "error" : function(jqxhr, textStatus, errorThrown) {
        //console.log("Error: "+textStatus+"; "+errorThrown);
        //console.log(jqxhr);
      }
    };

    if (localOpts.load == 'auto') {
      subcalls.push( $.ajax(ajaxOpts) );
    }
    if (localOpts.load == 'click') {
      domOb.find('.click-load').click(function() {
        $.ajax(ajaxOpts);
      });
    }
    
  });

  $.when.apply($, subcalls).done(function() {
    deferred.resolve();
  });

  return deferred;
};



$(document).ready(function() {

  var width = $(window).width();
  if (width >= 800) {
    $FRvars.type = 'desktop';
  }
  else if (width >= 550) {
    $FRvars.type = 'tablet';
  }
  else {
    $FRvars.type = 'mobile';
  }

  $('#menu-button').click(function() {
    $('nav').slideToggle('fast');
  });

  $('.phone-btn').click(function() {
    /*
    var origdest = $(this).parent().attr('action');
    var dest = origdest.slice(4).trim(); // slice off protocol
    //console.log('phone: '+dest);
    window.location.href = origdest;
    //window.open(origdest, '_system'); // for iOS
    */
    $(this).siblings('a').click();
  });

  enable_collapse();

  $.when(
    $('.testimonial-container').load_testimonials()
  ).then(function() {
    $('.image-placeholder').load_placeholders();
  }).then(function() {
    for (var i = 0; i < $FRvars.loadfuncs.length; i++) {
      $FRvars.loadfuncs[i]();
    }
  });

});
