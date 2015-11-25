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

// Place any jQuery/helper plugins in here.


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

$.fn.load_images = function(opts) {
  /* opts = {
   *   "num" : n,
   *   "srclist" : [ "path 1", "path 2" ],
   *   "until" : function($img),
   *   "done" : function()
   * }
   */

  var max = 1;
  if (opts.num) {
    max = opts.num;
  }

  var srclist = [];
  if (opts.srclist) {
    srclist = opts.srclist;
  }
  
  var until = function($img) { return true; }
  if (opts.until) {
    until = opts.until;
    if (!opts.num) {
      max = 0;
    }
  }

  var done = function() { }
  if (opts.done) {
    done = opts.done;
  }

  return this.each(function() {
    var current = 0;

    var localsrclist = $(this).data('src');
    if (localsrclist && localsrclist.length) {
      localsrclist = localsrclist.split(',');
    }
    else {
      localsrclist = [];
    }

    ({
      "container" : undefined,
      "current" : 0,
      "max" : 0,
      "localsrclist" : [],
      "srclist" : [],
      "until" : undefined,
      "done" : undefined,
      "set" : function(container, max, localsrclist, srclist, until, done) {
        this.container = container;
        this.max = max;
        this.localsrclist = localsrclist;
        this.srclist = srclist;
        this.until = until;
        this.done = done;
        return this;
      },
      "do" : function() {
        var src;
        var local = false;
        var until_callback = (typeof(this.until) === "function");
        var done_callback = (typeof(this.done) === "function");

        if (this.max > 0 && this.current++ >= this.max) {
          if (done_callback) { done(); }
          return;
        }

        if (this.localsrclist.length) {
          src = this.localsrclist.shift();
          local = true;
        }
        else if (this.srclist.length) {
          src = this.srclist.shift();
        }
        else {
          if (done_callback) { done(); }
          return;
        }

        $('<img/>', {
          src: src,
          alt: ''
        }).appendTo(container).load(function() {
          if (until_callback && until($(this)) === false) {
            if (local) {
              this.localsrclist.unshift($(this).attr('src'));
            }
            else {
              this.srclist.unshift($(this).attr('src'));
            }
            $(this).remove();
            if (done_callback) { done(); }
          }
          else {
            this.do();
          }
        });

      }
    }).set(max, localsrclist, srclist, until, done).do();


  });
};

$.fn.load_images_num = function(srclist, num) {
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

$.fn.load_placeholders = function(opts, srclist) {
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
        class: $(this).attr('class')
      });
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

$.fn.load_testimonials = function(opts) {
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
      "url" : "/new/php/ajax.testimonials.php",
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
          if (this.sliderOpts) {
            this.domOb.bxSlider( this.sliderOpts );
          }
        }
      },
      "error" : function(jqxhr, textStatus, errorThrown) {
        console.log("Error: "+textStatus+"; "+errorThrown);
        console.log(jqxhr);
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

/*
function load_images_until(container, srclist, checkfunc, donefunc) {
  var done_callback = (typeof(donefunc) === "function");

  if (srclist.length < 1) {
    if (done_callback) {
      donefunc();
    }
    return;
  }

  $('<img/>', {
    src: srclist.shift(),
    alt: ''
  }).appendTo(container).load(function() {
    if (checkfunc($(this)) === false) {
      srclist.unshift($(this).attr('src'));
      $(this).remove();
      if (done_callback) {
        donefunc();
      }
    }
    else {
      load_images_until(container, srclist, checkfunc, donefunc);
    }
  });
}

load_images_until( $('#image-placeholder-primary'), srclist,
  function($img) {
    var sidebar_height = $('#sidebar-primary').height();
    var content_height = $('#content').height();
    var leeway = 50; // pixels

    if (content_height >= sidebar_height) {
      return true;
    }

    if (sidebar_height > content_height && (sidebar_height - content_height) <= leeway) {
      return true;
    }

    return false;
  },
  function() {
  }
);

*/

