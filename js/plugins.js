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

;$.fn.load_placeholders = function(srclist) {
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
}
