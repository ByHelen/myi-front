
$(document).ready(function() {

 $(document.body).toggleClass('is-sidebar-nav-open');

   (function() {
          'use strict';
          window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              });
          }, false);
      })();
});




var Script = function () {

//    sidebar dropdown menu auto scrolling

    jQuery('#sidebar .sub-menu > a').on('click', function () {
        var o = ($(this).offset());
        diff = 250 - o.top;
        if(diff>0)
            $("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            $("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

//    sidebar toggle

    $('.sidebar-toggle-box').on('click', function () {
        $(document.body).toggleClass('is-sidebar-nav-open');
           openmenu1();
    });

// custom scrollbar
    $("#sidebar").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: '', scrollspeed: 60});

    //$("html").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000', scrollspeed: 100, mousescrollstep: 60});


}();


$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({ html : true });


});

$(window).scroll(function(event) {
    var scroll = $(window).scrollTop();
    if(scroll> 200){

        $('.header').addClass('backscroll');
    }else{
       $('.header').removeClass('backscroll');
    }
});

    $(document).ready(function () {


        $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery"])', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        // return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        // return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        // disable wrapping
        $(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery"]', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                wrapping: false
            });
        });

        //Programmatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        // navigateTo
        $(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
            event.preventDefault();

            return $(this).ekkoLightbox({
                onShown: function() {

                    this.modal().on('click', '.modal-footer a', function(e) {

                        e.preventDefault();
                        this.navigateTo(2);

                    }.bind(this));

                }
            });
        });

    });



var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagenback');
      $('#previaimg').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };



  function countcharacteres(cadena) {
      var cadena=cadena;
      console.log(cadena);
     var totalChars = cadena.length;
     $('#characteres').html(totalChars);
}



var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagelogo');
      $('#imglogo').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };


var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('sponsor');
      $('#imgsponsor').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };



var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('cover');
      $('#imgcover').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };



    
$(document).ready(function() {

 $('#menu-two').hide();
 $('#menu-three').hide();
});


function openmenu1() {
 $('#menu-one').show();
 $('#menu-two').hide();
 $('#menu-three').hide();
}

function openmenu2() {
   $('#menu-one').hide();
   $('#menu-two').show();
   $('#menu-three').hide();
}


function openmenu3() {
   $('#menu-one').hide();
   $('#menu-two').hide();
   $('#menu-three').show();
}

