// ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive) 
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;
var last_Item = 1;

// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
function parallaxScroll(evt) {
  if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * (-120);
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
  }

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber) {
        currentSlideNumber++;
        nextItem();
      }else if(currentSlideNumber == totalSlideNumber && last_Item == 1){
        lastItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) { 
        currentSlideNumber--;
        previousItem();
      }
      
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  // $previousSlide.removeClass("last-scroll");
  // $previousSlide.removeClass("up-scroll").addClass("down-scroll");
  $previousSlide.css('transform', 'translate3d(0,-130vh,0)').find('.content-wrapper').css('transform', 'translateY(40vh)');
  currentSlideTransition();
}

function previousItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber + 1);
  // $currentSlide.removeClass("last-scroll");
  // $currentSlide.removeClass("down-scroll").addClass("up-scroll");
  // last_Item = 1;
  $previousSlide.css('transform', 'translate3d(0,30vh,0)').find('.content-wrapper').css('transform', 'translateY(30vh)');
  currentSlideTransition();
}

function currentSlideTransition() {
  var $currentSlide = $('.background').eq(currentSlideNumber);
  $currentSlide.css('transform', 'translate3d(0,-15vh,0)').find('.content-wrapper').css('transform', 'translateY(15vh)');
  ;
}



function lastItem() {
  var $currentSlide = $(".background");
  $currentSlide.removeClass("down-scroll").addClass("last-scroll");
  $currentSlide.removeClass("last-scroll");
  $currentSlide.addClass("hidden");
  last_Item = 0;
  
}