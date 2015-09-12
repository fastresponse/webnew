;$.fn.slideshow = function(slidepausetime, slidefadetime) {
  return this.each(function() {
    var $children = $(this).children();
    if ($children.length > 1) {
      $children.hide();
      var position = -1;
      // using !function loop() {}() is equivalent to ;(function loop() {})();
      // it declares the function then immediately calls it, forcing semicolons
      !function loop() {
        position = (position + 1) % $children.length;
        $children.eq(position)
          .fadeIn(slidefadetime)
          .delay(slidepausetime)
          .fadeOut(slidefadetime, loop);
      }();
    }
  });
};

;$.fn.rotatecontents = function(numvisible, pausetime, transitiontime, transitiontype) {
  if (numvisible < 1 || numvisible > this.length) return this;
  return this.each(function() {
    var $children = $(this).children();
    if ($children.length > 1) {
      $children.slice(numvisible).hide();
      var firstvis = -1;
      var nextvis = numvisible-1;
      // using !function loop() {}() is equivalent to ;(function loop() {})();
      // it declares the function then immediately calls it, forcing semicolons
      !function loop() {
        firstvis = (firstvis + 1) % $children.length;
        nextvis = (nextvis + 1) % $children.length;

        $children.eq(firstvis)
          .delay(pausetime)
          .fadeOut(transitiontime);
        $children.eq(nextvis)
          .delay(pausetime)
          .fadeIn(transitiontime, loop);
      }();
    }
  });
};
