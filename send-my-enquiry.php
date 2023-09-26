<!DOCTYPE>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
   <title>Send My Enquiry - Tusk Travel</title>
   <meta name="Description" content="Enquire Now" />
    <meta name="Keywords" content="" />

    
  <?php include("head.php"); ?>
  
  <link rel="stylesheet" href="<?=BASE_URL?>css/slippry-2.css">
  <link rel="stylesheet" href="<?=BASE_URL?>css/owl.carousel.css"/>
<link rel="stylesheet" href="<?=BASE_URL?>css/send-my-enquiry.css"/>
</head>

<body class="wsmenucontainer my-trip clearfix">
  
     <!--header-->
    <?php include ('header.php') ?>
    <!--End header-->


 <!--section class="step_create">
  <div class="step_create_bg_color">
  <div class="container-fluid">
    <div class="how_to_create">
      
          <div class="creat_col">
            <div class="number">01</div>
            <div class="create_des">Call us or use the contact form below</div>
          </div>

          <div class="creat_col">
            <div class="number">02</div>
            <div class="create_des">We will then plan an itinerary based on your preferences</div>
          </div>

          <div class="creat_col">
            <div class="number">03</div>
            <div class="create_des"> We send you a detailed itinerary document</div>
          </div>

          <div class="creat_col">
            <div class="number">04</div>
            <div class="create_des">  We work with you to refine the itinerary until you're happy</div>
          </div>
        </div>
        </div>
  </div>
</section-->
    <!---START BRIDCROM-->
  <section class="full-breds"><div class="container-fluid"><div class="bredcums"><?= breadcrumbs() ?></div></div></section>
  <!---END BRIDCROM-->



<section class="plan_my_trip_page">
    <div class="container">
       <h1 class="text-center" style="background:none;">Get a Free Quote</h1>

     <div class="row, center-row">
     	<div class="col-lg-9 col-md-9 col-sm-12 plan_my_trip_form">


      

        
    <div class="send_my_enquiry"> 
       <form method="post" id="verticalForm" name="verticalForm" method="post" action="https://www.tusktravel.com.mx/form/checkmail.html" onsubmit="return validateJsForm(this)">
  <input type="hidden" name=""  value="">
        <h2>Travel Informations</h2>

        <div class="form_row">
          <div class="form_name">
            Arrival Date <span>*</span>
          </div>
          <div class="form_field">
            <input type="date" class="arv_date DateFrom" placeholder="Date of Arrival" name="guest_arv_date" id="guest_arv_date" value="">
          </div>
        </div>

        <div class="form_row">
          <div class="form_name">
            No. of Days <span>*</span>
          </div>
          <div class="form_field">
            <select name="guest_travel_duration" id="guest_travel_duration" class="duration">
                <option value="Days">No. of Days</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31+">31+</option>
              </select>
          </div>
        </div>


        <div class="form_row">
          <div class="form_name">
            Travellers. <span>*</span>
          </div>
          <div class="form_field">
                  <select name="guest_adults_no" id="guest_adults_no" class="send_guest_adults_no">
                    <option value="">Adults</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15+">15+</option>
                  </select>

                  <select name="guest_childs_no" id="guest_childs_no" class="send_guest_childs_no">
                    <option value="">Childrens</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15+">15+</option>
                  </select>

          </div>
        </div>


        <div class="form_row">
          <div class="form_name">
           Type of Hotel <span>*</span>
          </div>
          <div class="form_field">
              <select name="guest_selected_type_hotel" id="guest_selected_type_hotel">
                <option value="">Hotel Category</option>
                <option value="Luxury">Luxury</option>
                <option value="5 Star">5 Star</option>
                <option value="4 Star">4 Star</option>
                <option value="3 Star">3 Star</option>
                <option value="Budget">Budget</option>
              </select>
          </div>
        </div>

        <h2>Tell us about Your details</h2>

        <div class="form_row">
          <div class="form_name">
           Your Name <span>*</span>
          </div>
          <div class="form_field">
              <input type="text" name="guest_name"  id="guest_name" placeholder="Your Name" class="">
          </div>
        </div>

        <div class="form_row">
          <div class="form_name">
           Your Email <span>*</span>
          </div>
          <div class="form_field">
              <input name="guest_email_id" id="guest_email_id" placeholder="Your Email" type="email">
          </div>
        </div>

        <div class="form_row">
          <div class="form_name">
           Your Country <span>*</span>
          </div>
          <div class="form_field">
              <select name="guest_country" id="guest_country">
                <option value="0" selected="selected" required="">Select Your Country</option>
                <option value="Australia_61">Australia</option>
          <option value="Austria_43">Austria</option>
      <option value="Belgium_32">Belgium</option>
  <option value="Canada_1">Canada</option>
<option value="Czech Republic_420">Czech Republic</option>
<option value="Denmark_45">Denmark</option>
    <option value="France_33">France</option>
          <option value="Finland_358">Finland</option>
<option value="Germany_49">Germany</option>
<option value="Greece_30">Greece</option>
 <option value="Hungary_36">Hungary</option>
          <option value="India_91">India</option>
     <option value="Ireland_353">Ireland</option>
          <option value="Italy_39">Italy</option>
          <option value="Luxembourg_352">Luxembourg</option>
          <option value="Mexico_52">Mexico</option>  
        <option value="New Zealand_64">New Zealand</option>
          <option value="Norway_47">Norway</option> 
         <option value="Netherlands_31">Netherlands</option>
          <option value="Portugal_351">Portugal</option>   
       <option value="Poland_48">Poland</option>  
        <option value="Spain_34">Spain</option>
          <option value="Sweden_46">Sweden</option>  
        <option value="Switzerland_41">Switzerland</option> 
         <option value="United Kingdom_44">United Kingdom</option>  
        <option value="U.S.A._1">U.S.A.</option>
          <option value="Afghanistan_93">Afghanistan</option>
          <option value="Albania_355">Albania</option>  
        <option value="Algeria_213">Algeria</option>    
      <option value="American Samoa_1-168">American Samoa</option>    
      <option value="Andorra_376">Andorra</option>
          <option value="Angola_244">Angola</option>   
       <option value="Anguilla_1-264">Anguilla</option>
          <option value="Antarctica_672">Antarctica</option> 
         <option value="Antigua &amp; Barbuda_1-268">Antigua &amp; Barbuda</option>
          <option value="Argentina_54">Argentina</option>  
        <option value="Armenia_7">Armenia</option>
          <option value="Azerbaijan_994">Azerbaijan</option>    
      <option value="Bahamas_1-242">Bahamas</option> 
         <option value="Bahrain_973">Bahrain</option>
          <option value="Bangladesh_880">Bangladesh</option>  
        <option value="Barbados_1-246">Barbados</option>  
        <option value="Belarus_375">Belarus</option>
          <option value="Belize_501">Belize</option>   
       <option value="Benin_229">Benin</option>
          <option value="Bermuda_1-441">Bermuda</option> 
         <option value="Bhutan_975">Bhutan</option>
          <option value="Bolivia_591">Bolivia</option> 
         <option value="Bosnia_387">Bosnia</option> 
         <option value="Botswana_267">Botswana</option>  
        <option value="Brazil_55">Brazil</option>
          <option value="British IndianOcean_246">British IndianOcean</option>    
      <option value="British Virgin Islands_1-284">British Virgin Islands</option>
          <option value="Brunei_673">Brunei</option>     
     <option value="Bulgaria_359">Bulgaria</option>  
        <option value="Burkina Faso_226">Burkina Faso</option> 
         <option value="Burundi_257">Burundi</option> 
         <option value="Cambodia_855">Cambodia</option>   
       <option value="Cameroon_237">Cameroon</option>    
      <option value="Cape Verde_238">Cape Verde</option> 
         <option value="Cayman Islands_1-345">Cayman Islands</option>  
        <option value="Central African Rep._236">Central African Rep.</option>
          <option value="Chad_235">Chad</option>   
       <option value="Chile_56">Chile</option>   
       <option value="China_86">China</option> 
         <option value="Christmas Island_61">Christmas Island</option>   
       <option value="Cocos Islands_672">Cocos Islands</option>
          <option value="Colombia_57">Colombia</option>   
       <option value="Comoros_269">Comoros</option>  
        <option value="Congo_243">Congo</option>  
        <option value="Cook Islands_682">Cook Islands</option>       
   <option value="Costa Rica_506">Costa Rica</option>     
     <option value="Croatias_385">Croatias</option>  
        <option value="Cuba_53">Cuba</option>       
   <option value="Cyprus_357">Cyprus</option>  
        <option value="Djibouti_253">Djibouti</option> 
         <option value="Dominica_1-767">Dominica</option>   
       <option value="Dominican Republic_1-809">Dominican Republic</option> 
         <option value="East Timor_670">East Timor</option> 
         <option value="Ecuador_593">Ecuador</option>  
        <option value="Egypt_20">Egypt</option> 
         <option value="El Salvador_503">El Salvador</option>     
     <option value="Equatorial Guinea_240">Equatorial Guinea</option>
          <option value="Eritrea_291">Eritrea</option>  
        <option value="Estonia_372">Estonia</option>
          <option value="Ethiopia_251">Ethiopia</option>    
      <option value="Falkland Islands_500">Falkland Islands</option>   
       <option value="Faroe Islands_298">Faroe Islands</option>
          <option value="Fiji_679">Fiji</option> 
         <option value="French Guiana_594">French Guiana</option>    
      <option value="French Polynesia_689">French Polynesia</option>
          <option value="Gabon_241">Gabon</option>
          <option value="Gambia_220">Gambia</option>   
       <option value="Georgia_995">Georgia</option>
          <option value="Ghana_233">Ghana</option>     
     <option value="Gibraltar_350">Gibraltar</option>    
      <option value="Greenland_299">Greenland</option>
          <option value="Grenada_1-473">Grenada</option>  
        <option value="Guadeloupe_590">Guadeloupe</option>    
      <option value="Guam_1-671">Guam</option>    
      <option value="Guatemala_502">Guatemala</option>    
      <option value="Guinea_224">Guinea</option>  
        <option value="Guinea-Bissau_245">Guinea-Bissau</option>  
        <option value="Guyana_592">Guyana</option>  
        <option value="Haiti_509">Haiti</option>  
        <option value="Heard &amp; McDonald_672">Heard &amp; McDonald</option>   
       <option value="Honduras_504">Honduras</option>  
        <option value="Hong Kong_852">Hong Kong</option>  
        <option value="Iceland_354">Iceland</option>  
        <option value="Indonesia_62">Indonesia</option>  
        <option value="Iran_98">Iran</option>   
       <option value="Iraq_964">Iraq</option>    
      <option value="Israel_972">Israel</option>      
    <option value="Ivory Coast_225">Ivory Coast</option>
          <option value="Jamaica_1-876">Jamaica</option> 
         <option value="Japan_81">Japan</option>
          <option value="Jordan_962">Jordan</option>       
   <option value="Kazakhstan_7">Kazakhstan</option>          <option value="Kenya_254">Kenya</option>          <option value="Kuwait_965">Kuwait</option>          <option value="Kyrgyzstan_996">Kyrgyzstan</option>          <option value="Laos_856">Laos</option>          <option value="Latvia_371">Latvia</option>          <option value="Lebanon_961">Lebanon</option>          <option value="Liberia_231">Liberia</option>          <option value="Libya_218">Libya</option>          <option value="Liechtenstein_423">Liechtenstein</option>          <option value="Lithuania_370">Lithuania</option>          <option value="Macau_853">Macau</option>          <option value="Madagascar_261">Madagascar</option>          <option value="Malawi_265">Malawi</option>          <option value="Malaysia_60">Malaysia</option>          <option value="Maldives_960">Maldives</option>          <option value="Mali_223">Mali</option>          <option value="Malta_356">Malta</option>          <option value="Martinique_596">Martinique</option>          <option value="Mauritius_230">Mauritius</option>          <option value="Mayotte_269">Mayotte</option>          <option value="Moldova_373">Moldova</option>          <option value="Monaco_377">Monaco</option>          <option value="Mongolia_976">Mongolia</option>          <option value="Morocco_212">Morocco</option>          <option value="Mozambique_258">Mozambique</option>          <option value="Myanmar_95">Myanmar</option>          <option value="Namibia_264">Namibia</option>          <option value="Nepal_977">Nepal</option>          <option value="Netherlands Antilles_599">Netherlands Antilles</option>          <option value="New Caledonia_687">New Caledonia</option>          <option value="Nicaragua_505">Nicaragua</option>          <option value="Niger_227">Niger</option>          <option value="Nigeria_234">Nigeria</option>          <option value="Niue_683">Niue</option>          <option value="North Korea_850">North Korea</option>          <option value="Northern Mariana Isl._1-670">Northern Mariana Isl.</option>          <option value="Oman_968">Oman</option>          <option value="Pakistan_92">Pakistan</option>          <option value="Palau_680">Palau</option>          <option value="Panama_507">Panama</option>          <option value="Papua New Guinea_675">Papua New Guinea</option>          <option value="Paraguay_595">Paraguay</option>          <option value="Peru_51">Peru</option>          <option value="Philippines_63">Philippines</option>          <option value="Puerto Rico_1">Puerto Rico</option>          <option value="Qatar_974">Qatar</option>          <option value="Reunion_262">Reunion</option>          <option value="Romania_40">Romania</option>          <option value="Russia_7">Russia</option>          <option value="Rwanda_250">Rwanda</option>          <option value="GS">S.Georgia &amp; S.Sand.</option>          <option value="Saint Kitts &amp; Nevis_1-869">Saint Kitts &amp; Nevis</option>          <option value="Samoa_685">Samoa</option>          <option value="San Marino_378">San Marino</option>          <option value="Saudi Arabia_966">Saudi Arabia</option>          <option value="Senegal_221">Senegal</option>          <option value="Seychelles_248">Seychelles</option>          <option value="Singapore_65">Singapore</option>          <option value="Slovakia_421">Slovakia</option>          <option value="Slovenia_386">Slovenia</option>          <option value="Somalia_252">Somalia</option>          <option value="South Africa_27">South Africa</option>          <option value="South Korea_82">South Korea</option>          <option value="Sri Lanka_94">Sri Lanka</option>          <option value="Sudan_249">Sudan</option>          <option value="Suriname_597">Suriname</option>          <option value="Syria_963">Syria</option>          <option value="Taiwan_886">Taiwan</option>          <option value="Tajikista_992">Tajikistan</option>          <option value="Tanzania_255">Tanzania</option>          <option value="Thailand_66">Thailand</option>          <option value="Togo_228">Togo</option>          <option value="Tonga_676">Tonga</option>          <option value="Trinidad and Tobago_1-868">Trinidad and Tobago</option>          <option value="Tunisia_216">Tunisia</option>          <option value="Turkey_90">Turkey</option>          <option value="Turkmenistan_993">Turkmenistan</option>          <option value="Turks &amp; Caicos Isl._1-649">Turks &amp; Caicos Isl.</option>          <option value="Tuvalu_688">Tuvalu</option>          <option value="Uganda_256">Uganda</option>          <option value="Ukraine_380">Ukraine</option>          <option value="United Arab Emirates_971">United Arab Emirates</option>          <option value="Uruguay_598">Uruguay</option>          <option value="Uzbekistan_998">Uzbekistan</option>          <option value="Vatican City_379">Vatican City</option>          <option value="Venezuela_58">Venezuela</option>          <option value="Vietnam_84">Vietnam</option>          <option value="Virgin Islands_1-284">Virgin Islands</option>          <option value="Wallis &amp; Futuna Isl._681">Wallis &amp; Futuna Isl.</option>          <option value="Western Sahara_212">Western Sahara</option>          <option value="Yemen_967">Yemen</option>          <option value="Yugoslavia (Former)_38">Yugoslavia (Former)</option>          <option value="Zaire_243">Zaire</option>          <option value="Zambia_260">Zambia</option> 
         <option value="Zimbabwe_263">Zimbabwe</option>
             </select>

          </div>
        </div>

        <div class="form_row">
          <div class="form_name">
           Your Contact No. <span>*</span>
          </div>
          <div class="form_field">
              <input name="guest_contact_no" id="guest_contact_no" placeholder="Your Contact Number" type="tel">
          </div>
        </div>

        <div class="form_row" style="width:100%;">
          <div class="form_name">
           Your Message. <span>*</span>
          </div>
          <div class="form_field">
               <textarea name="guest_message"  id="guest_message" cols="25" rows="3" class="" placeholder="Be as detailed as you like...."></textarea>
          </div>
        </div>


         <div style="width:100%; padding-top:15px; float: left;">        
                 <button class="button buttonText" value="" type="submit">
     Send Enquiry
        
          </button>


        </div>
        <div class="clearfix"></div>
      </form>

         
    <script type="text/javascript">

  function validateJsForm()
  {
    var guest_arv_date            = $("#guest_arv_date").val();
    var guest_travel_duration     = $("#guest_travel_duration").val();
    var guest_adults_no           = $("#guest_adults_no").val();
    var guest_selected_type_hotel = $("#guest_selected_type_hotel").val();
    var guest_name                = $("#guest_name").val();
    var guest_email_id            = $("#guest_email_id").val();
    var guest_country             = $("#guest_country").val();
    var guest_contact_no          = $("#guest_contact_no").val();
    var guest_message             = $("#guest_message").val();

    if(guest_arv_date.trim()==''||guest_arv_date==null)
    {
      alert("Please select date of arrival.");
      $("#guest_arv_date").focus();
      return false;
    }

    if(guest_travel_duration.trim()==''||guest_travel_duration==null)
    {
      alert("Please select no. of days.");
      $("#guest_travel_duration").focus();
      return false;
    }

    if(guest_adults_no.trim()==''||guest_adults_no==null)
    {
      alert("Please select no. of adult.");
      $("#guest_adults_no").focus();
      return false;
    }

    if(guest_selected_type_hotel.trim()==''||guest_selected_type_hotel==null)
    {
      alert("Please select hotel category.");
      $("#guest_selected_type_hotel").focus();
      return false;
    }

    if(guest_name.trim()==''||guest_name==null)
    {
      alert("Please enter your name.");
      $("#guest_name").focus();
      return false;
    }

    if(guest_email_id.trim()==''||guest_email_id==null)
    {
      alert("Please enter your email address.");
      $("#guest_email_id").focus();
      return false;
    }

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(guest_email_id))
    {
      alert('Please provide a valid email address');
      $("#guest_email_id").focus();
      return false;
    }

    if(guest_country.trim()==''||guest_country==null)
    {
      alert("Please select your country.");
      $("#guest_country").focus();
      return false;
    }

    if(guest_contact_no.trim()==''||guest_contact_no==null)
    {
      alert("Please enter contact number.");
      $("#guest_contact_no").focus();
      return false;
    }

    if(guest_message.trim()==''||guest_message==null)
    {
      alert("Please tell us more about tour.");
      $("#guest_message").focus();
      return false;
    }



  }
</script>
      
    </div>
</div>


         

        </div>
</section>
  <style type="text/css">


.center-row{
	display: flex;

}

.office-hours {
    padding-top: 15px;
    float: left;
    width: 100%;
}


        </style>
  
 <?php include ('footer.php') ?> 
 <?php include ('model.php') ?>
 <?php include ('script.php') ?>
</body>
</html>
