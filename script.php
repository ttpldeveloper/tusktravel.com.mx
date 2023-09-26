    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>js/webslidemenu.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>js/function.js"></script>
    <script src="<?=BASE_URL?>js/slippry.min.js"></script>
<script>

  $(".book-this-tour").click(function() {
  // alert("The paragraph was clicked.");
   $('html, body').animate({
       scrollTop: $("#tusk-side-form").offset().top
   }, 2000);    
 });

</script>
<script type="text/javascript">
    $(document).ready(function(){
     
      $(".TourList:not(:first) .TourInfo").css( "display", "none" );
      $(".TourList:not(:first) .TourDates").append('<div class="expBut">+</div>');
      $(".TourList:first .TourDates").append('<div class="expBut">-</div>');
      $('.TourDates').on('click', function(){
     
      butVal = $(this).find(".expBut").text();
      if(butVal=='+')
      {
        $(this).parent().children(".TourInfo").slideDown('1000');
        $(this).find(".expBut").text('-');
      }
      else
      {
        $(this).parent().children(".TourInfo").slideUp('1000');
        $(this).find(".expBut").text('+');
      }
   
      });

    });

    $(window).scroll(function(){
      if ($(window).scrollTop() >= 650) {
          $('.tout-stickey-navigation').addClass('fixed-header');
         
      }
      else {
          $('.tout-stickey-navigation').removeClass('fixed-header');
          $('.tout-stickey-navigation div').removeClass('visible-title');
      }
  });

 
                         // ====SLIDER JS START HERE=================
  $('#news-demo').slippry({

      slippryWrapper: '<div class="sy-box news-slider" />',
        elements: 'article',
     
        adaptiveHeight: false,
        captions: false,
        // pager
        pagerClass: 'news-pager',
        pager: false,
   
        transition: 'horizontal',
        speed: 600,
        pause: 5500,
   
        autoDirection: 'next'
      })

       // ====OWL SLIDER HOME PAGE SIDER=================  
        $("#owl-demo").owlCarousel({
          navigation: true, // Show next and prev buttons
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true,
          autoPlay: true,
        }
         );

         // ====OWL SLIDER HOME PAGE bLOG START=================  
        $("#owl-demo-blog").owlCarousel({
          autoPlay: 7000, //Set AutoPlay to 3 seconds
          loop: true,
          nav: true,
          mouseDrag: true,
          responsiveClass: true,
          items: 3,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [979, 3]
        }
        );
        $("#owl-magazine-ds").owlCarousel({
          autoPlay: false,
          slideSpeed: 500,
          navigation: true,
          dots: true,
          pagination: !1,
          mouseDrag: !1,
          addClassActive: !0,
          singleItem: !0,
          afterAction: function() {
            var e = $("#magazine-thum");
            e.find(".active").removeClass("active"),
            e.find(".thumnail-item").eq(this.currentItem).addClass("active")
          }
        }
        );
</script>

<script src="<?=BASE_URL?>js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
  <script src="<?=BASE_URL?>js/jsor-thumbnail.js" type="text/javascript"></script>
  <link href="<?=BASE_URL?>css/jsor-thumbnail.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

        
<link rel="stylesheet" href="https://www.tusktravel.com.mx/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://www.tusktravel.com.mx/assets/owlcarousel/assets/owl.theme.default.min.css">

<script>


  /*  1.click btn ==.click_ques a
      2. show hide div = ans_sec
  */


  $(document).ready(function() {
  var oneAtTime = 1;
  var inDesignMode = 0; // replace zero with following string to make it look for edit mode in SharePoint environment: document.forms[MSOWebPartPageFormName].MSOLayout_InDesignMode.value;
  if (inDesignMode !== "1") {
    $('.ans_sec').hide();
  if (oneAtTime == 1) {
    $('.click_ques').click(function() {
      if ($(this).hasClass("active")) {
      $('.click_ques').removeClass('active');
      $('.ans_sec').slideUp('1000');
      } else {
      $('.click_ques').removeClass('active');
      $('.ans_sec').slideUp('1000');
      $(this).addClass('active');
      $(this).next().slideDown('1000');
      }
      return false;
      });
  } else {
    $('.click_ques').click(function() {
      if ($(this).hasClass("active")) {
      $(this).removeClass('active');
      $(this).next().slideUp('1000');
      } else {
      $(this).addClass('active');
      $(this).next().slideDown('1000');
      }
      return false;
    });
  }
  } else {
    $('.ans_sec').show();
  }
 /* active class for  plus minus btn*/
/*  $('.destination_col_title').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
   
  });*/

});
</script>
    <!-- javascript -->

    <script src="https://www.tusktravel.com.mx/assets/owlcarousel/owl.carousel.js"></script>
          
          <script>
            $(document).ready(function() {
              $('.guestslider').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
          <script>
            $(document).ready(function() {
              $('.slider_offerinr').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>

          <script> $('.owl-carousel-recomended').owlCarousel({

        margin: 20,
        loop: true,
        items: 3,
        singleItem: true,
        stagePadding: 100,
        nav: true,
      dots: false,
        responsive: {
          
            
            600: {
                stagePadding: 0,
                margin: 20,
                 items: 4,
            },
            0: {
                margin: 5,
                items: 1,
                stagePadding: 15,
            }
        }

    })
           </script>

<!-- 

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<style type="text/css">


    input[type="date"] {
  position: relative;
  padding: 10px;
}

input[type="date"]::-webkit-calendar-picker-indicator {
  color: transparent;
  background: none;
  z-index: 1;
}

input[type="date"]:before {
  color: transparent;
  background: none;
  display: block;
  font-family: 'FontAwesome';
  content: '\f073';
  /* This is the calendar icon in FontAwesome */
  width: 15px;
  height: 20px;
  position: absolute;
  top: 12px;
  right: 6px;
  color: #999;
}
</style> -->

<script>
    $(function(){
    var dtToday = new Date();
   
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
   
    var maxDate = year + '-' + month + '-' + day;
   // alert(maxDate);
    $('#guest_arv_date').attr('min', maxDate);
});
</script>
  <script>
/* $( function() {
    $("#arv_date").datepicker();  
    minDate: 0  
  });*/
/* $("#arv_date").datepicker({
      minDate: 0  
   });
  $("#guest_arv_date").datepicker({
      minDate: 0  
   });

 $("#guest_arv_date_2").datepicker({
      minDate: 0  
   });*/


 $("a.state-btn").click(function () {
    $("a.state-btn").removeClass("active");
   
    $(this).addClass("active");  
});




 $("a.custom-banner-btn").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

      // ====START READ MORE TEXT(SHOW HIDE JS START HERE)========
     $('div.more-read').hide();
      $('.click_me').click(function() {
        $(this).parent().parent().find("div.more-read").slideToggle(400);
        $(this).text($(this).text() == 'Leer menos -' ? 'Lee mas +' : 'Leer menos -');
        return false;
      }
     );
    /* sidebar show hide*/
   $('div.hide-guide-sidebar').hide();
      $('.click-more-sidebar').click(function() {
        $(this).parent().parent().find("div.hide-guide-sidebar").slideToggle(400);
        $(this).text($(this).text() == 'Ver menos [-]' ? 'Ver más [+]' : 'Ver menos [-]');
        return false;
      }
     );
   
    /* sidebar show hide*/
       $('div.hide-highlist').hide();
      $('.click-more-highlis').click(function() {
        $(this).parent().parent().find("div.hide-highlist").slideToggle(400);
        $(this).text($(this).text() == 'Ver menos [-]' ? 'Ver más [+]' : 'Ver menos [-]');
        return false;
      }
     );

      $('div.show_hide').hide();
      $('.show_hde_btn').click(function() {
        $(this).parent().parent().find("div.show_hide").slideToggle(1200);
        $(this).text($(this).text() == 'Ver menos [-]' ? 'Ver más [+]' : 'Ver menos [-]');
        return false;
      }
     );
  </script>
 

   <script src="https://www.tusktravel.com.mx/tts/js/ttv-h.js"></script>