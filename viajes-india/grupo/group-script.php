 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="BASE_URLjs/webslidemenu.js"></script>
    <script type="text/javascript" src="BASE_URLjs/function.js"></script>
    <script src="BASE_URLjs/slippry.min.js"></script>



  <script src="BASE_URLjs/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
  <script src="BASE_URLjs/jsor-thumbnail.js" type="text/javascript"></script>
  <link href="BASE_URLcss/jsor-thumbnail.css" rel="stylesheet">




  

  
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


       $(window).scroll(function(){
      if ($(window).scrollTop() >= 650) {
          $('.GroupStickeyNav').addClass('fixed-header');
         
      }
      else {
          $('.GroupStickeyNav').removeClass('fixed-header');
          $('.GroupStickeyNav div').removeClass('visible-title');
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




  <script>
$( function() {
    $("#arv_date").datepicker();   
    minDate: 0  
  });
/* $("#arv_date").datepicker({
      minDate: 0  
   });
  $("#guest_arv_date").datepicker({
      minDate: 0  
   });

 $("#guest_arv_date_2").datepicker({
      minDate: 0  
   });
*/

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
        $(this).text($(this).text() == 'Lee menos -' ? 'Lee mas +' : 'Lee menos -');
        return false;
      }
     );
    /* sidebar show hide*/
   $('div.hide-guide-sidebar').hide();
      $('.click-more-sidebar').click(function() {
        $(this).parent().parent().find("div.hide-guide-sidebar").slideToggle(400);
        $(this).text($(this).text() == 'View Less [-]' ? 'View More [+]' : 'View Less [-]');
        return false;
      }
     );
    
    /* sidebar show hide*/
       $('div.hide-highlist').hide();
      $('.click-more-highlis').click(function() {
        $(this).parent().parent().find("div.hide-highlist").slideToggle(400);
        $(this).text($(this).text() == 'View Less [-]' ? 'View More [+]' : 'View Less [-]');
        return false;
      }
     );

      $('div.show_hide').hide();
      $('.show_hde_btn').click(function() {
        $(this).parent().parent().find("div.show_hide").slideToggle(1200);
        $(this).text($(this).text() == 'Load Less [-]' ? 'Load More [+]' : 'Load Less [-]');
        return false;
      }
     );
  </script>