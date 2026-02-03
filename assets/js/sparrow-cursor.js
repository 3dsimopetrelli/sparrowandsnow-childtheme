jQuery(document).ready(function($) {

    var prevScrollTop = $(window).scrollTop();

    $(document).mousemove(function(event) {
      setTimeout(function() {
        $('#circularcursor').css({
          left: event.pageX - ($('#circularcursor').width() / 2),
          top: event.pageY - ($('#circularcursor').height() / 2)
        });
      }, 50);
    });

    // bind to custom 'scrolldelta' event
    $(window).scroll(function() {
      var scrollTop = $(this).scrollTop();
      var delta = scrollTop - prevScrollTop;
      prevScrollTop = scrollTop;
      
      var divPosition = parseInt($('#circularcursor').css('top')) || 0;
      $('#circularcursor').css({
        'top': divPosition + delta // adjust the value to move the div up/down as desired
      });
    });
    
    $('a:not([data-cursor-txt]):not([data-cursor-hover])').hover(function(){
      $('#circularcursor').addClass("hover-a");
    },
    function(){
      $('#circularcursor').removeClass("hover-a");
    });


    //HOVER
    $('[data-cursor-hover]').hover(function(){
      var cursorHoverBackground = $(this).attr("data-cursor-hover-background") ? $(this).attr("data-cursor-hover-background") : "rgba(0,255,0,0.5)";
      var mixBlend = $(this).attr("data-cursor-mix-blend") ? $(this).attr("data-cursor-mix-blend") : false;
      $('#circularcursor').css("background-color", cursorHoverBackground); //Aggiunge background color
      if(mixBlend) {
        $('#circularcursor').css("mix-blend-mode", mixBlend); //Aggiunge mix-blend-mode
      }
      $('#circularcursor').addClass("hover-a");
    },
    function(){
      $('#circularcursor').removeClass("hover-a");
      $('#circularcursor').css("background-color", ""); //Rimuove background color
      $('#circularcursor').css("mix-blend-mode", ""); //Rimuove mix-blend
    });


    //ETICHETTA
    $('[data-cursor-txt]').hover(function(event){
      var cursorTxtColor = $(this).attr("data-cursor-txt-color") ? $(this).attr("data-cursor-txt-color") : "#000";
      var cursorTxtBackground = $(this).attr("data-cursor-txt-background") ? $(this).attr("data-cursor-txt-background") : "rgba(255,0,0,0.5)";
      $('#circularcursor').attr("data-cursor-txt", $(this).attr("data-cursor-txt"));
      $('#circularcursor.hover-label::after').css("color", cursorTxtColor); //Aggiunge txt color
      $('#circularcursor.hover-label::after').css("background-color", cursorTxtBackground); //Aggiunge background color
      $('#circularcursor').addClass("hover-label");
    },
    function(){
      $('#circularcursor').removeClass("hover-label");
      $('#circularcursor').removeAttr("data-cursor-txt");
      $('#circularcursor.hover-label::after').css("color", ""); //Rimuove txt color
      $('#circularcursor.hover-label::after').css("background-color", ""); //Rimuove background color
    });


});
