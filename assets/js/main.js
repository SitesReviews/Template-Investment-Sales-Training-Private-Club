$(document).ready(function() {
  //parallax scroll
  $(window).on("load scroll", function() {
    var parallaxElement = $(".parallax_scroll"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function() {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * 0.15 + "px, 0)"
        });
      }
    });
  });
});

$(document).ready(function() {
  //parallax scroll
  $(window).on("load scroll", function() {
    var parallaxElement = $(".parallax_scroll_top"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function() {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * -0.15 + "px, 0)"
        });
      }
    });
  });
});


$(function () {
$('[data-toggle="tooltip"]').tooltip()
});

var header = $('.navbar'),
scrollPrev = 0;

var sticky = $('.sticky'),
		scrollPrev = 0;
$(window).scroll(function() {
	var scrolled = $(window).scrollTop();

	if ( scrolled > 0 && scrolled > scrollPrev ) {
		header.addClass('out');
sticky.addClass('out');
	} else {
		header.removeClass('out');
sticky.removeClass('out');
	}
	scrollPrev = scrolled;
});

let bg = document.querySelector('.mouse-parallax');
window.addEventListener('mousemove', function(e) {
let x = e.clientX / window.innerWidth;
let y = e.clientY / window.innerHeight;
bg.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
});
