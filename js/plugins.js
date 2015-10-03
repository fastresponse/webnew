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

$.fn.load_placeholders = function(srclist) {
  return this.each(function() {
    var src = $(this).data('src');
    if (!src && srclist.length > 0) {
      src = srclist.shift();
    }
    if (src) {
      var $img = $('<img/>', {
        src: src,
        alt: ''
      });
      $(this).replaceWith($img);
    }
  });
};

$.fn.load_testimonials = function(opts) {
  var defaultOpts = {
    pause: 12000,
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
  return this.each(function() {
    var localOpts = opts[ $(this).attr('id') ];
    var sliderOpts;
    var ajaxOpts;
    var domOb = $(this);

    if (localOpts.load == 'none') return; // skip

    if (localOpts.hasOwnProperty('sliderOpts') && localOpts.sliderOpts) {
      sliderOpts = $.extend({}, defaultOpts, localOpts.sliderOpts);
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
        "categories" : localOpts.categories.split(','),
      },
      "domOb" : domOb,
      "sliderOpts" : sliderOpts,
      "success" : function(data, textStatus, jqxhr) {
        this.domOb.html(data);
        if (this.sliderOpts) {
          this.domOb.bxSlider( this.sliderOpts );
        }
      },
      "error" : function(jqxhr, textStatus, errorThrown) {
      }
    };

    if (localOpts.load == 'auto') {
      $.ajax(ajaxOpts);
    }
    if (localOpts.load == 'click') {
      domOb.find('.click-load').click(function() {
        $.ajax(ajaxOpts);
      });
    }
    
  });
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

