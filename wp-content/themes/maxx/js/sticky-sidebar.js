jQuery.noConflict();
jQuery( document ).ready(function($) {

  var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 136;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ top: diff }); //
		  $('#before').removeClass('normalwidget');
		  $('#before').removeClass('fixwidget');
		  $('#before').addClass('bottomwidget');
		  
      } else if (stickyTop < windowTop+stickOffset) { //
          $sticky.css({ top: stickOffset }); // mulai fixed
		  $('#before').removeClass('normalwidget');
		  $('#before').removeClass('bottomwidget');
		  $('#before').addClass('fixwidget');
      } else {
		  $sticky.css({ top: 'initial' });
		  $('#before').addClass('normalwidget');
		  $('#before').removeClass('fixwidget');
		  $('#before').removeClass('bottomwidget');
      }
    });

  }
});