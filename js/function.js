
	$(document).ready(function() {
	
         
       



	  
	  


//==modal popup form script
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });


   //==Tour (plus and mines section) script
      
   

 //==header stickey script
    $(window).scroll(function(){
      if ($(window).scrollTop() >= 650) {
          $('.tout-stickey-navigation').addClass('fixed-header');
         
      }
      else {
          $('.tout-stickey-navigation').removeClass('fixed-header');
          $('.tout-stickey-navigation div').removeClass('visible-title');
      }


/*$("a.state-btn").click(function () {
    $("a.state-btn").removeClass("active");
   
    $(this).addClass("active");   
});*/