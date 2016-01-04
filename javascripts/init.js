//INIT WATERMARK
function initWatermark() {
    $.watermark.options = {
      className: 'input--placeholder',
      useNative: false
    };

    //INPUT PLACEHOLDER
    $("[placeholder]").each(function() {
        $(this).watermark($(this).attr("placeholder"));
    });
    $("[type=password]").blur();
}

$(window).load(function() {
  $("#preloader").fadeOut("slow");
});

$(document).ready( function () {


    //detect iOS
    var ua = navigator.userAgent.toLowerCase();
      function removeSpaces(ua) {
        return ua.split(' ').join('');
      }
    ua = removeSpaces(ua);
    var iOS = ua.match(/(iphone|ipod|ipad)/);
      if(iOS) {
        $('html').addClass('iOS');
      }

    // initialize autosize script
    $('textarea').autosize();

    //sticky footer trick
    var bumpIt = function() {
          $('body').css('margin-bottom', $('.footer-main').outerHeight());
        },
        didResize = false;

    bumpIt();

    $(window).resize(function() {
      didResize = true;
    });
    setInterval(function() {
      if(didResize) {
        didResize = false;
        bumpIt();
      }
    }, 250);

    //on resize run function
    var tOut = false;
    var milSec = 500;
    $(window).resize(function(){
     if(tOut !== false)
        clearTimeout(tOut);
     tOut = setTimeout(rsizeItems, milSec);
    });
    function rsizeItems()
    {
        //put code inside this function
    }

    //detect window resize
    $(window).on('resize', function() {
      //put scripts inside
    }).trigger('resize');

    //detect page scroll
    $(window).on('scroll', function() {
      //put scripts inside
    }).trigger('scroll');

    //INIT WATERMARK
    initWatermark();

});

