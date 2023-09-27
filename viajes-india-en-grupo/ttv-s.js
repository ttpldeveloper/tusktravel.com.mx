/*CURRENT PAGE URL*/
document.getElementById('sideurl').value = window.location.href;

 /*COUNTRY CODE CHANGE*/
 var country_code = "";
 function updateContact_2(e) {
     var ax = e.value.split("_");
     country_code = "+" + ax[1] + "";
     document.getElementById("c_code2").value = country_code;
 }

 /*VALIDATION*/
 function validateJsForm_2() {
     //var guest_arv_date_2 = $("#guest_arv_date_2").val();
    // var guest_travel_duration_2 = $("#guest_travel_duration_2").val();
    
     //var guest_selected_type_hotel_2 = $("#guest_selected_type_hotel_2").val();
     var guest_name_2 = $("#guest_name_2").val();
     var guest_adults_no_2 = $("#guest_adults_no_2").val();
     var guest_email_id_2 = $("#guest_email_id_2").val();
     var guest_country_2 = $("#guest_country_2").val();
     var guest_contact_no_2 = $("#guest_contact_no_2").val();
     var guest_message_2 = $("#guest_message_2").val();

    /* if (guest_arv_date_2.trim() == '' || guest_arv_date_2 == null) {
         alert("Please select date of arrival.");
         $("#guest_arv_date_2").focus();
         return false;
     }

     if (guest_travel_duration_2.trim() == '' || guest_travel_duration_2 == null) {
         alert("Please select no. of days.");
         $("#guest_travel_duration_2").focus();
         return false;
     }
*/
     if (guest_name_2.trim() == '' || guest_name_2 == null) {
         alert("Please enter your name.");
         $("#guest_name_2").focus();
         return false;
     }

     if (guest_adults_no_2.trim() == '' || guest_adults_no_2 == null) {
         alert("Please select no. of adult.");
         $("#guest_adults_no_2").focus();
         return false;
     }

   /*  if (guest_selected_type_hotel_2.trim() == '' || guest_selected_type_hotel_2 == null) {
         alert("Please select hotel category.");
         $("#guest_selected_type_hotel_2").focus();
         return false;
     }*/

     

     if (guest_email_id_2.trim() == '' || guest_email_id_2 == null) {
         alert("Please enter your email address.");
         $("#guest_email_id_2").focus();
         return false;
     }

     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if (!filter.test(guest_email_id_2)) {
         alert('Please provide a valid email address');
         $("#guest_email_id_2").focus();
         return false;
     }

     if (guest_country_2.trim() == '' || guest_country_2 == null) {
         alert("Please select your country.");
         $("#guest_country_2").focus();
         return false;
     }

     if (guest_contact_no_2.trim() == '' || guest_contact_no_2 == null) {
         alert("Please enter contact number.");
         $("#guest_contact_no_2").focus();
         return false;
     }

     if (guest_message_2.trim() == '' || guest_message_2 == null) {
         alert("Please tell us more about tour.");
         $("#guest_message_2").focus();
         return false;
     }
 }
 /* calendar js start here*/

 $("#guest_arv_date_2").datepicker({
     minDate: 0
 });
 /*calendar js end here*/