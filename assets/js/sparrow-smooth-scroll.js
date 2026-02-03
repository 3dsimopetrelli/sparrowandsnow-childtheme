function init() {
  new SmoothScroll(document, 30, 10);
}

function SmoothScroll(target, speed, smooth) {
  if (target === document)
    target = document.documentElement || document.body.parentNode || document.body; // cross-browser support for document scrolling

  var moving = false;
  var pos = target.scrollTop;
  var frame = target === document.body && document.documentElement ? document.documentElement : target; // Safari is the new IE

  target.addEventListener('wheel', scrolled, { passive: false });
  target.addEventListener('DOMMouseScroll', scrolled, { passive: false });

  var scrollToTop = document.querySelectorAll('a[href="#support-top"]'),
      sparrowCategories = document.querySelectorAll('.sparrow-category'),
      sparrowTags = document.querySelectorAll('.sparrow-tag'),
      anchors = document.querySelectorAll('[href*="#"]:not(a[href="#support-top"])');

  resetScroll(scrollToTop);
  resetScroll(sparrowCategories);
  resetScroll(sparrowTags);

  setScroll(anchors);

  function resetScroll(elements) {
    if(elements) {
      elements.forEach(element => {
        element.addEventListener('click', function() {
          pos = 0;
        });
      });
    }
  }

  function setScroll(elements) {
    if(elements) {
      elements.forEach(element => {
        element.addEventListener('click', function() {
          var href = element.href,
              anchoredElement = document.getElementById( href.split("#").pop() ),
              elemRect = anchoredElement.getBoundingClientRect();
          pos = pos + elemRect.top;
        });
      });
    }
  }

  function scrolled(e) {
    if (!document.body.classList.contains('product-image-overlay-open')) {
      e.preventDefault(); // disable default scrolling

      var delta = normalizeWheelDelta(e);

      pos += -delta * speed;
      pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)); // limit scrolling

      if (!moving) update();
    }
  }

  function normalizeWheelDelta(e) {
    var delta = e.wheelDelta ? e.wheelDelta : -e.deltaY;
    return delta / 120; // normalize delta value
  }

  function update() {
    moving = true;

    var delta = (pos - target.scrollTop) / smooth;

    target.scrollTop += delta;

    if (Math.abs(delta) > 0.5)
      requestFrame(update);
    else
      moving = false;
  }

  var requestFrame = function() {
    return (
      window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      function(func) {
        window.setTimeout(func, 1000 / 50);
      }
    );
  }();
}

document.addEventListener('DOMContentLoaded', function() {
  init();
});