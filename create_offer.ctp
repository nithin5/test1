
<style type="text/css">

 
#delete_all_locations{

  margin-left: 15px;
}

#mapbtn p{
  margin-left: 15px;
}
#add_one_more_combo{
 
 background-color: #0fb55e;
    float: left;
    height: 35px;
    margin: 15px 0px 0px 15px;
   
}
 
   
 a.view_all_combos {
    background-color: #81a3d0;
    border-color: #81a3d0;
    border-radius: 3px;
    color: #fff;
    display: block;
    float: left;
    font-size: 14px;
    margin: 10px 90px 0px 15px;
    padding: 10px;
    text-align: center;

      height:35px;
 
}

a.view_all_combos: hover {

  background-color: #2B5B9A;
  color: #fff;
}
 
#view_all_combos{
  width:400px;
  height:35px;
  margin-left: 35px;
}
  
  #delete_marker{
    margin-bottom: 0px;
    float: right;
    height: 23px;


  }
  #address1 {
    margin-left: 0px;
    width: 100%;
}

              #google_map_full_page{
                  margin-left: 0px;
                }
                #marker_address{
                  color: green;
                  font-size: 17px;
                }
              
 
</style> 

 
    <script>
function initializepins() {






  var myLatlng = new google.maps.LatLng(12.954517,77.3507365);
  var mapOptions = {
    zoom: 7,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);
 


  // var myLatlng5 = new google.maps.LatLng(24.18061975930,79.36565089010);



   <?php foreach ($allArticles2 as $allArticle): ?>

                 var myLatlng4567 = {lat:  <?php echo $allArticle['offer_listing_coordinates']['UserLatitude']; ?>, lng:<?php echo $allArticle['offer_listing_coordinates']['UserLongitude']; ?> };

 var marker = new google.maps.Marker({
      position: myLatlng4567,
      map: map,
      title: "<?php echo $allArticle['offer_listing_coordinates']['Useraddress']; ?> ",   
  });

  var secretMessages = "<span id='marker_address'>This Marker Address is:</span><br> " + "<?php echo $allArticle['offer_listing_coordinates']['Useraddress']; ?>. ";
   // var  infowindow: '<?php echo $allArticle['offer_listing_coordinates']['Useraddress']; ?> ';
   //  var contentString = '<?php echo $allArticle['offer_listing_coordinates']['Useraddress']; ?> ';
   //     console.log(contentString);
   // var infowindow = new google.maps.InfoWindow({
   //     content: '<?php echo $allArticle['offer_listing_coordinates']['Useraddress']; ?> ',
   //     maxWidth: 200
   // });

   //   google.maps.event.addListener(marker, 'click', function() {
   // infowindow.open(map,marker);
   // });
   attachSecretMessage(marker, secretMessages); 


  <?php endforeach; ?>


}

function attachSecretMessage(marker, secretMessage) {
  var infowindow = new google.maps.InfoWindow({
    content: secretMessage,
    maxWidth: 250
  });

  marker.addListener('click', function() {
    infowindow.open(marker.get('map'), marker);
  });
}

// google.maps.event.addDomListener(window, 'load', initializepins);

    </script>

<script type="text/javascript">
$(document).ready(function() {

 var offer_id  = $("#offer_id").val();

 var book_for = $("#booking_for").val();

 if(book_for==1){


  var category_book = $("#category_booking").val();

  if(category_book==79 || category_book==80){
  

    $("#booking_section").show();

  }
 }
 
 // alert(store_id);

  if(offer_id==''){

    $("#optionsRadios1").prop("checked",true);
    $("#optionsRadios2").prop("checked",false);
    $("#offer_type_select").val(0);

  }
else{
  var Id= $("#offer_type_select").val();
  var store_for = $("#customer_type").val();


      if(Id==3)
      {
      $("#ValueField").show();
      $("#OfferValue").show();
      $("#main_promourl").hide();
    $("input[id=rups]").show();
    $("input[id=pers]").hide();
      }else if(Id==4 || Id==5)
      {
      $("#ValueField").show();
      $("#OfferValue").show();
      $("#main_promourl").hide();

     $("input[id=rups]").hide();
    $("input[id=pers]").show();
      }

      else if(Id==12){

      $("#main_promourl").hide();
        
      }

      else
      {
      $("#ValueField").hide();
      $("#OfferValue").hide();
      $("#main_promourl").show();

       $("input[id=rups]").hide();
      $("input[id=pers]").hide();
      }


  

      
      if(store_for==1)
      {

        $("#coporate_category").hide();
        $("#consumer_category").show();
        $("#coporate_subcategory").hide();
        $("#consumer_subcategory").show();
        $("#category_select").val(1);

}
else{
       $("#coporate_category").show();
        $("#consumer_category").hide();
        $("#coporate_subcategory").show();
        $("#consumer_subcategory").hide();
        $("#category_select").val(2);

}


     
      if(store_for==1)
      {

        $("#coporate_category_1").hide();
        $("#consumer_category_1").show();
        $("#coporate_subcategory_1").hide();
        $("#consumer_subcategory_1").show();
        $("#category_select_1").val(1);

}
else{
       $("#coporate_category_1").show();
        $("#consumer_category_1").hide();
        $("#coporate_subcategory_1").show();
        $("#consumer_subcategory_1").hide();
        $("#category_select_1").val(2);

}
    $("#optionsRadios1").prop("checked",false);
    $("#optionsRadios2").prop("checked",true);
    $(".storevaluelist").show();
}

category= $("#Category_consumer").val();
// alert(category);


});

  
  function show_consumer(){

  //document.getElementById('coporate_category').hide(true);

  // alert("clicked");
  $('#coporate_category').hide();
  $('#coporate_subcategory').hide();
  $('#consumer_category').show();
  $('#category_select').val(1);
  $('#continue_1').show();
  $("#continue_2").hide();
// coporate_subcategory
$("#coporate_subcategory").hide();
$("#consumer_subcategory").show();
  
}
function show_coporate(){

  // alert("clicked");
  $('#consumer_category').hide();
  $('#coporate_subcategory').show();
  $('#coporate_category').show();
  $('#category_select').val(2);
  $("#continue_2").show();
  $('#continue_1').hide();
  $("#coporate_subcategory").show();
  $("#consumer_subcategory").hide();
  
}


  function show_consumer_1(){

  //document.getElementById('coporate_category').hide(true);

  // alert("clicked");
  $('#coporate_category_1').hide();
  $('#coporate_subcategory_1').hide();
  $('#consumer_category_1').show();
  $('#category_select_1').val(1);
  $('#continue_1_1').show();
  $("#continue_2_1").hide();
// coporate_subcategory
$("#coporate_subcategory_1").hide();
$("#consumer_subcategory_1").show();
  
}
function show_coporate_1(){

  // alert("clicked");
  $('#consumer_category_1').hide();
  $('#coporate_subcategory_1').show();
  $('#coporate_category_1').show();
  $('#category_select_1').val(2);
  $("#continue_2_1").show();
  $('#continue_1_1').hide();
  $("#coporate_subcategory_1").show();
  $("#consumer_subcategory_1").hide();
  
}

function getPromo(){

var value = parseInt($("#offer_type").val());

if(value==12){

  // alert("its working");
  $(".promo_code_section").show();
  $(".subtitle_section").show();
  // $("#main_promourl").hide();
  $(".url_section").show();
 


}



else{

  $(".promo_code_section").hide();
  $(".subtitle_section").hide();
  // $("#main_promourl").show();
  $(".url_section").hide();

}


}

function booking(){

  var cat = $("#Category_consumer").val();

  // alert(cat);

  if(cat=='79' || cat=='80'){

    $("#booking_section").show();
    // alert('code');
  }
  else{

    $("#booking_section").hide();

  }
}

function booktable(){

var book = $("#book_table").val();

  if(book=='1'){

    $("#book_contact").show();
  }
  else{

      $("#book_contact").hide();
  }
}


</script>


<section class="marg-tp-company-compare ">
<section class="container">
<?php echo $this->element('Sidebar_Myaccount'); ?>
<div class="right-acc-new">
<a href="#tab-1" class="custom-accord-head" id="tab_1">
<h3><span class="step_bold">Step <span class="number active">1</span> of 3 - </span>Business Info</h3>
<span class="glyphicon glyphicon-chevron-up"></span>
</a>
<form id="MyaccountBusinessListingsForm"  method="post" enctype="multipart/form-data" action="/myaccount/offer_building">
<div id="tab-1" class="custom-accord-det clearfix show-alw">

<input type="hidden" name="session_id1" id="session1" value="<?=$Session_Id?>"/>
<input type="hidden" name="session_id2" id="session2" value="<?=$session_id?>">
<input type="hidden" name="offer_type_select" id="offer_type_select" value="<?=$offer_type_select?>">
<input type="hidden" id="category_select" name="category_select" value="">
<input type="hidden" id="offer_id" name="offer_id" value="<?=$Offer_Id?>">
<input type="hidden" id="subcatval_selecting" value="1">
<input type="hidden" id="area_selecting" value="1">
<input type="hidden" id="promo_url_select" value="0">
<input type="hidden" id="category_booking" value="<?=$Data['OfferListingDetail']['category_id']?>">
<input type="hidden" id="booking_for" value="<?=$Data['OfferListingDetail']['offer_for']?>">
<div class="col-xs-12"> 
<!-- <h4>Select Article</h4> -->
<span class="radio radio_store">
        <label>
          <input type="radio" name="article_for" id="optionsRadios1" value="1"  onclick="upload();" class="store_radio" checked="checked" >Upload Promo</label>
      </span>
<span class="radio radio_store">
        <label>
          <input type="radio" name="article_for" id="optionsRadios2" value="2" onclick="preload();" class="store_radio">Preload Promo</label>
      </span>

</div>
<div class="col-xs-12 storevaluelist" style="display:none;">
<h4>Select Promo to Preload</h4>
<div class="main-section">
  <select  data-live-search="true" class="selectpicker StoreList" id="OfferNames" style="display: none;"onchange="getOfferId();" name="register[Category]" title="Select Store">
  <?php echo $this->element('offer_listings', array('from'=>'','selected'=>$Offer_Id)); ?>
  </select>

</div>
</div>
<div id="loadpage">

 <div class="col-md-4 col-sm-6 custotype">
<h4>Customer Type <span class="error_msg" id="error_customer">(Select Customer Type)</span></h4>
<div class="main-section ">
                    <select  class="selectpicker " id="customer_type" style="display: none;" name="customer_type">
                    <option>Select</option>
                    <option value="1" onclick="show_consumer();"<? if($Data['OfferListingDetail']['offer_for']==1){?> selected="selected"<? }?>>Individuals</option>
                    <option value="2" onclick="show_coporate();"<? if($Data['OfferListingDetail']['offer_for']==2){?> selected="selected"<? }?>>Businesses</option>
                    
                  </select>
                    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-4 col-sm-6">
<h4>City  <span class="error_msg" id="error_city_offer">(Select City)</span></h4>
<div class="main-section ">
                     <select data-live-search="true" class="selectpicker" id="CityCmpySelect" name="register[City_id]" onchange="GetArea(); GetAreaOptions();GetAreaOptions3();">
                      <?php echo $this->element('City_Options', array('from'=>'','selected'=>$city_name)); ?>
                  </select>
                    </div>
</div>

<? if(!empty($Data)){?>
    

<div class="col-sm-6 col-md-4 col-xs-12">
<h4>Location  <span class="option_store" id="option_loc_store">(very important for customers)</span><span class="error_msg" id="error_area">(Select Location)</span></h4>
<div class="main-section" id="area_id_select">
              
                
                  <select  class="selectpicker Area_Select" id="AreaSelect" data-live-search="true" style="display: none;" name="register[Area_id]">
                      <?php echo $this->element('Area_Select_Options', array('from'=>'','selected'=>$area_name)); ?>
                  </select>
                
                    </div>
                    </div>

<?}else{?>
      

<div class="col-sm-6 col-md-4 col-xs-12" id="main_location">
<h4>Location  <span class="option_store" id="option_loc_store">(very important for customers)</span><span class="error_msg" id="error_area">(Select Location)</span></h4>
<div class="main-section" id="area_id_select">
              
                
                  <select  class="selectpicker Area_Select" id="AreaSelect" data-live-search="true" title="Select" name="register[Area_id]" multiple>
                      <?php echo $this->element('Area_Select_Options', array('from'=>'','selected'=>"")); ?>
                  </select>
                
                    </div>
</div>
<!--<div class="clearfix"></div>-->
                    
<?}?>
      <div class="clearfix"></div>
          <?  if(!empty($Data)){

              if($Data['OfferListingDetail']['offer_for']=1){

                $Category_Name1= $Data['Cat']['category_name'];
              }
              else{

                $Category_Name2 = $Data['Category']['category_name'];
              }
            }
          ?>
    

<div class="col-sm-6 col-md-4 col-xs-12" id="coporate_category">
<h4>Category <span class="error_msg" id="error_category2">(Select Category)</span></h4>
<div class="main-section">
                    <select  data-live-search="true" class="selectpicker"id="Category" onchange="GetSubCategoryProfile();GetSubcategory();GetSubCategoryProfile3();"name="register[Category]">
                     <?php echo $this->element('Category_Options', array('from'=>'','selected'=>$Category_Name2)); ?>
                  </select>
                    </div>
</div>
<div class="col-sm-6 col-md-4 col-xs-12" id="consumer_category" style="display:none;">
<h4>Category <span class="error_msg" id="error_category1">(Select Category)</span></h4>
<div class="main-section">
                    <select data-live-search="true" onchange="booking()" class="selectpicker"id="Category_consumer" name="register[offer_Category_id]">
                     <?php echo $this->element('Category_Offer_Options_New', array('from'=>'','selected'=>$Category_Name1)); ?>
                  </select>
                    </div>
</div>
<div class="col-sm-6 col-md-4 col-xs-12" id="coporate_subcategory" >
<h4>Sub-Category  <span class="error_msg" id="error_subcategory">(Select Sub-Category)</span></h4>
<div class="main-section" id="subcategory_profile">
                   
                 <?php //echo $this->element('SubCategory_Options_Myaccount', array('from'=>'','selected'=>"")); ?> 
                     <select  data-live-search="true" class="selectpicker SubCategory_select"id="SubCategory_Select" name="register[SubCategory]" title="Select" multiple>
                   <?php echo $this->element('Subcategory_Select_Options', array('from'=>'','selected'=>$Data['Subcategory']['sub_category_name'])); ?>
                 </select>
                    </div>
                     <!-- <input type="hidden" id="SubCategory" name="register[SubCategoryCmpySelect]"> -->
</div>
<div class="col-sm-6 col-md-4 col-xs-12" id="consumer_subcategory"style="display:none;">
<h4>Sub-Category </h4>
<div class="main-section" id="subcategory_profile">
                   
                <input type="text" class="form-control" disabled="disabled" value='Not Applicable'>
                    </div>
                     <!-- <input type="hidden" id="SubCategory" name="register[SubCategoryCmpySelect]"> -->
</div>
</div>
<div class="clearfix"></div>
<!-- <div class="col-md-4 col-sm-6">
<h4>Country</h4>
<div class="main-section ">
                    <select  class="selectpicker " id="id_select" style="display: none;">
                    <option value="1" "selected">India</option>
                   </select>
                    </div>
</div> 
<div class="col-sm-6 col-md-4 col-xs-12" id="consumer_subcategory">
<h4>Country</h4>
<div class="main-section" id="subcategory_profile">
                   
                <input type="text" class="form-control" disabled="disabled" value='India'>
                    </div>
                      <input type="hidden" id="SubCategory" name="register[SubCategoryCmpySelect]">
</div>
-->


<!-- <div class="clearfix"></div> -->
<?
if(!empty($UserCat_Datas)) {
?>


<div class="col-sm-6 col-md-4 col-xs-12">
<h4>Create Combos</h4>
<input type="hidden" value="<?=$count_usercat?>" id="combo_number">  
<div style="margin-bottom:66px;margin-top:-10px;"><a href="javascript:;"  onclick="AddMoreCity3()" class="add-comb">SELECT (above) & ADD COMBO</a></div>

<div class="display_combo2"></div>
<div  class="display_combo not_show">



            <?    
              $totalCats = count($UserCat_Datas); //to stop deleting the 1 combo
              if($Data['OfferListingDetail']['offer_for']==1){

                $Category_name= $Data['Cat']['category_name'];
                $Subcategory= 'All';
                $customer = "Individuals";
              }
              else if($Data['OfferListingDetail']['offer_for']){

                $Category_name= $Data['Category']['category_name'];
                $Subcategory=   $Data['Subcategory']['sub_category_name'];
                $customer   =   "Businesses";
              }

              
              foreach($UserCat_Datas as $data){

                 if($data['OfferListingCity']['area_id']==0){

                  $Area= 'All';

                }
                else{

                  $Area=$data['Area']['area_name'];
                }

                if($data['OfferListingCity']['city_id']==0){

                  $City= 'All';
                }
                else{

                  $City =$data['City']['city_name'];
                }


 
          ?>

<div class="combo-offer" id="combo_detail" name="<?=$data['StoreListingCity']['id']?>">
<input type="hidden" name="user_city[]" value="<?=$data['OfferListingCity']['city_id']?>">
<input type="hidden" name="user_area[]" value="<?=$data['OfferListingCity']['area_id']?>">
<h5>Combo <?=$count_usercat?>:</h5> 
<p>Customer Type: <?=$customer?></p>
<p>Location: <?=$Area?>, <?=$City?>, India</p>
<p>Category: <?=$Category_name?> </p>
<p>Sub-Category: <?=$Subcategory?></p>
<span class="MT_ten" style="cursor:pointer; color:#E04A3F;"><span style="font-size:14px;font-weight:bold;">X</span></span><span class="txt_light_blue" style="cursor:pointer; color:#0099cc;" onclick="DelComboCatStore('<?=$data['OfferListingCity']['id']?>');"> <span style="font-size:12px;font-weight:bold;color:#E04A3F;">Delete  Combo</span></span></li></div>
 <? $count_usercat--;} ?>
</div>
      <input type="hidden" value="<?=$totalCats?>" id="totalCats">
<a href="javascript:;"  onclick="show_combo();" class="add-comb show_combo">SHOW ALL COMBOS</a>
<!-- <a href="javascript:;"  onclick="AddMoreCity2()" class="add-comb">ADD COMBO</a> -->

</div>

<? }else{ 

  ?>

<div class="col-sm-6 col-md-4 col-xs-12" id="combowidth">
<h4>Create Combos</h4>
 <input type="hidden" value="0" id="totalCats">
<div style="margin-bottom:66px;margin-top:-10px;"><a href="javascript:;"  onclick="select_add_combo_offers(); initAutocomplete();" class="add-comb">SELECT (above) & ADD COMB</a></div>



</div>
<? } ?>
<div class="clearfix"></div>

        <div style="display:none;" id="step_two_offer">
           
                        <div class="google map"> 

                        <span id="mapbtn"><p>
                            <strong>Pin on Your Company Location:</strong><br>
                             If you want more Locations click on the Map. </p><br>
                             </span>
                            <input id="Autocomp" type="text" placeholder="Search Your Company Name">
                        </div>
                             
                        <div id="mapCanvas" name="other1">

                        </div>
                        <div id="fieldsetw" style="display:none;"><input type="button" id="delete_marker" value="Delete" onclick="deleteMarkers1();">
                        <textarea class="field" id="address1" disabled="true" rows="3" cols="37"> </textarea>
                        </div>
                            
                        <div id="right" class='top-to-bottom'>  
                        </div>
                       
                    </div>
                    <div class="clearfix"></div>
<!--                     <div class="display_combo">
 
</div> -->

<!-- <a href="javascript:;"  onclick="AddMoreCity()" class="add-comb">ADD COMBO</a>
  style="display:none;padding-top:10px;" id="step_two_offer1"
 -->

 <div style="display:none;padding-top:10px;" id="view_all_combos789">
<!-- <a href="javascript:;"  onclick="show_all_combo();" class="show_combo view_all_combos">Show All Combos</a> -->
 <div class="box">
  <a class="button" onclick="show_all_combo();" href="#all_combos">Show all combos</a>
</div>

<div id="all_combos" class="overlay">
  <div class="popup">
    <h2>Your All Combos</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
    <!--   <a href="javascript:;"  onclick="show_all_combo();" class="show_combo view_all_combos">Show All Combos</a> -->

 <!--  <input type="button" value="close" id="close_popup"> -->
      <div class="display_combo">
       </div>

     

                        </div>
    </div>
  </div>
</div>

 <div style="display:none;padding-top:10px;" id="view_all_pins">
<!-- <a href="javascript:;"  onclick="show_all_combo();" class="show_combo view_all_combos">Show All Combos</a> -->
 <div class="box">
  <a class="button-pins" onclick="initializepins();" href="#your_all_pins">Show all Pins</a>
</div>

<div id="your_all_pins" class="overlay">
  <div class="popup-pins">
    <h2>Your All Pins</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
    <!--   <a href="javascript:;"  onclick="show_all_combo();" class="show_combo view_all_combos">Show All Combos</a> -->

 <!--  <input type="button" value="close" id="close_popup"> -->
      
     <div id="map_canvas1">
      
    
    </div> 
    </div>
  </div>
</div>
</div>
  <div class="clearfix"></div>


<div style="display:none;padding-top:10px;" id="step_two_offer1">

 

        <!--add one more combo-->

  <button id="add_one_more_combo" class="scroll-top_sort" onclick="addonemorecombo()">ADD ONE MORE COMBO</button>
  
<button  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="form-control custom-save step_button offer_submit-1"  onclick="AddMoreCity()">CONTINUE TO STEP 2</button>

<div style="display:none;padding-top:10px;" id="combo_pack_1">
  <a href="#tab-1" class="custom-accord-head-pack1" id="tab_1">
<h3><span class="step_bold">COMBO PACK <span class="number active">1</span></span></h3>
<span class="glyphicon glyphicon-chevron-up"></span>
</a>

   <!--add one more combo 1-->





</div>
 </div>

 <!--COM PACK 1 END-->

</div>

<? if(!empty($Data)){?>
<div class="step-2" style="display:block;">
<?}else{?>
<div class="step-2" style="display:block;">
<? } ?>



<a href="#tab-3" class="custom-accord-head" id="tab_3">
<h3><span class="step_bold">Step <span class="number active">2</span> of 3 - </span>Contact Info</h3>
<span class="glyphicon glyphicon-chevron-down"></span>
</a>



<div id="tab-3" class="custom-accord-det clearfix">

<div class="col-xs-12" style="width:100%;padding:1px;">
 <div class="col-sm-6 col-md-4 col-xs-12">
        <h4>Brand Name <span class="error_msg" id="error_brand">(Enter Brand Name)</span></h4>
        <input class="form-control"  type="text" name="register[CompanyName]" value="<?=$Data['OfferListingDetail']['company_name']?>">
        </div>
 
<div class="col-sm-6 col-md-4 col-xs-12 land-hold">
<h4>Landline / Toll-Free Number <span class="error_msg" id="error_Number">(Enter Landline / Toll-Free Number)</span></h4>
<input class="form-control too-small" disabled placeholder="+91">
<input class="form-control too-small"  placeholder="" name="office_std_code" id="Std_code" value="<?=$Data['OfferListingDetail']['office_std_code']?>">
<input class="form-control"  type="text" name="office_number" id="Office_Number" value="<?=$Data['OfferListingDetail']['office_phone_number']?>">
</div>
<div class="col-sm-6 col-md-4 col-xs-12">
<h4>Email Id <span class="error_msg" id="error_Email">(Enter Email Id)</span></h4>
<input id="Offer_Email" class="form-control" type="text" name="register[Business_Email]"  value="<?=$Data['OfferListingDetail']['business_email']?>">
</div>

</div>
<!--
<div class="col-sm-6 col-md-4 col-xs-12" id="consumer_subcategory">
<h4>Country</h4>
<div class="main-section" id="subcategory_profile">
                   
                <input type="text" class="form-control" disabled="disabled" value='India'>
                    </div>
                   
</div>

<div class="col-sm-3 col-md-1 col-xs-12">
<h4>Title</h4>
<div class="name-hold title-main">
                      <div class="main-section select-hold">
                      <select  class="selectpicker day" id="id_select" style="display: none;" name="register[NamePrfx]">
                            <option value="1"<? if($Data['OfferListingDetail']['name_title']==1){?> selected="selected"<? }?>>Mr.</option>
                            <option value="2"<? if($Data['OfferListingDetail']['name_title']==2){?> selected="selected"<? }?>>Ms.</option>
                            <option value="3" <? if($Data['OfferListingDetail']['name_title']==3){?> selected="selected"<? }?>>Mrs.</option>
                           
                    </select>
                      </div>
                    </div>
</div>
<div class="col-sm-6 col-md-3 col-xs-12">

<h4>First Name <span class="option_store">(optional)</span></h4>
<input class="form-control"  type="text" name="first_name" value="<?=$Data['OfferListingDetail']['first_name']?>">
</div>
<div class="col-sm-6 col-md-4 col-xs-12">
<h4>Last Name <span class="option_store">(optional)</span></h4>
<div class="main-section">
 <input class="form-control"  type="text" name="last_name" value="<?=$Data['OfferListingDetail']['last_name']?>">
</div>
</div>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold">
<h4> Contact Person Photo  <span class="option_store">(optional)</span></h4>
 <input id="Profile" class="upload-file-new" placeholder="Select" disabled="disabled" value="<?=$Data['OfferListingDetail']['profile_photo'] ?>" />
    <div class="fileUpload margin-0 btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileProfile" onchange="javascript: document.getElementById ('Profile').value = this.value;document.getElementById ('Profile').style.display = 'block';"/>
</div>
</div>
<div class="col-sm-6 col-md-4 col-xs-12" >
<h4>Designation  <span class="option_store">(optional)</span></h4>
<input class="form-control"  type="text" name="designation" value="<?=$Data['ArticleDetail']['designation']?>">
</div>
<div class="col-sm-6 col-md-4 col-xs-12 land-hold">
<h4>Mobile Number  <span class="option_store" id="mobile-option">(optional)</span></h4>
<input class="form-control too-small" disabled placeholder="+91">

<input class="form-control marketing_mobile"  type="text" name="register[MoblNo]" value="<?=$Data['OfferListingDetail']['mobile_number']?>">
</div>
-->



<!-- <div class="col-sm-6 col-md-4 col-xs-12 land-hold" id="book_contact">
<h4>Booking Mobile Number  <span class="option_store">(optional)</span></h4>
<input class="form-control too-small" disabled placeholder="+91">article_description
 <input class="form-control too-small" placeholder="11"> -->
<!-- <input class="form-control marketing_mobile"  type="text" name="book_mobile" value="<?=$Data['OfferListingDetail']['mobile_number']?>">
</div> -->

<? $address = str_replace("<p>", "",$Data['OfferListingDetail']['address']); $address = str_replace("</p>", "", $address); $address = str_replace("\n", "", $address);?>
<div class="col-xs-12">
<h4>Contact Address <span class="error_msg" id="error_address">(Enter Contact Address)</span></h4>
<textarea class="form-control" type="text" name="address" id="address"><?=$address?></textarea>
</div>

<!--
<div class="col-sm-6 col-md-4 col-xs-12 offer_submit-2">
  <button  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="form-control custom-save step_button offer_submit-1" onclick="offer_step1()">CONTINUE TO STEP 3</button>
  </div>-->
<div class="col-sm-6 col-md-4 col-xs-12 offer_submit-2" id="continue_step3">
  <button id="continue_step3" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="form-control custom-save step_button" onclick="offer_step1()">CONTINUE TO STEP 3</button>
  </div>

</div>


<? if(!empty($Data)){?>
<div class="step-2" style="display:block;">
<?}else{?>
<div class="step-2" style="display:block;">

<? } ?>
<a href="#tab-2" class="custom-accord-head" id="tab_2">
<h3><span class="step_bold">Step <span class="number active">3</span> of 3 - </span>Promo Info</h3>
<span class="glyphicon glyphicon-chevron-down"></span>
</a>


<div id="tab-2" class="custom-accord-det clearfix">

<!-- <div class="col-md-4 col-sm-6">
<h4>Offer For <span class="error_msg" id="error_offer_for">(Select Offer For)</span></h4>
<div class="main-section ">
                    <select  class="selectpicker " id="offer_for" style="display: none;" name="offer_for">
                    <option>Select Offer For</option>
                    <option value="1">Consumer</option>
                    <option value="2">Coporates</option>
          
                  </select>
                    </div>
</div> -->
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold">
<h4>Brand Logo <span class="error_msg" id="error_logo">(Upload Brand Logo)</span></h4>
 <input id="logo" class="upload-file-new" placeholder="Select" readonly="readonly" value="<?=$Data['OfferListingDetail']['company_logo']?>" name="company_logo"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileLogo" onchange="javascript: document.getElementById ('logo').value = this.value;document.getElementById ('logo').style.display = 'block';"/>
</div>
</div>

<div class="col-sm-6 col-md-4 col-xs-12">
<h4>Promo Title <span class="error_msg" id="error_heading">(Enter Promo Title)</span><span class="option_store" id="option_title">(max. 100 characters)</span><span class="error_msg" id="option_title_error">(max. 100 characters)</span></h4>
<input class="form-control"  type="text" name="register[titlename]" value="<?=$Data['OfferListingDetail']['title']?>" maxlength="100">
</div>
<div class="clearfix"></div>

<div class="col-xs-12" style="width:100%;padding:1px;">
<div class="col-md-4 col-sm-6">
<h4>Promo Type <span class="error_msg" id="error_offer_type">(Select Promo Type)</span></h4>
<div class="main-section offer_dropdown">
                    <select  class="selectpicker " id="offer_type" style="display: none;" name="offer[Type]" onchange="getOffer(1);getPromo();">
       <?php echo $this->element('Offer_Type_Options', array('from'=>'','selected'=>$Data['OfferType']['offer_type'])); ?>
                  </select>
                   
</div>
</div>

<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;">
<h4>Discount Value <span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="register[offervalue]" id="OfferValue" value="<?=$Data['OfferListingDetail']['offer_value']?>">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
</div> -->
<div class="col-md-4 col-sm-6">
<h4>Promo Use  <span class="error_msg" id="error_offer_use">(Select Promo Use)</span></h4>
<div class="main-section offer_dropdown">
                    <select  class="selectpicker " id="offer_where" style="display: none;" name="offer_where">
                    <option>Select</option>
                    <option value="1"<? if($Data['OfferListingDetail']['offer_where']==1 ){?>selected="selected"<? }?>>Online</option>
                    <option value="2"<? if($Data['OfferListingDetail']['offer_where']==2 ){?>selected="selected"<? }?>>Offline</option>
          
                  </select>
                    </div>
</div>


</div>
<!-- <div class="clearfix"></div> -->

<!-- <div class="col-sm-6 col-md-4 col-xs-12">
<h4>Promo Code <span class="option_store">(optional)</span></h4>
<input class="form-control"  type="text" name="register[offercode]" value="<?=$Data['OfferListingDetail']['offer_code']?>" >
</div> -->

<div class="col-xs-12" style="width:100%;padding:1px;">


<div class="col-sm-6 col-md-4 col-xs-12" id="start_date">
<h4>Promo Start Date <span class="option_store">(mm/dd/yy)</span> <span class="error_msg" id="error_sdate">(Select Promo Start Date)</span></h4>
<input type="text" name="popupDatepicker" placeholder="Calendar" required class="date-new  datepicker_form"   value="<?=$Data['OfferListingDetail']['offer_start'] ?>" id="dpd1" onchange="getDate();">
</div>
<div class="col-sm-6 col-md-4 col-xs-12">
<h4> Promo End Date <span class="option_store">(mm/dd/yy)</span> <span class="error_msg" id="error_edate">(Select Promo End Date)</span></h4>
<input type="text" name="popupDatepicker1" placeholder="Calendar" required class="date-new  datepicker_form" value="<?=$Data['OfferListingDetail']['offer_end'] ?>" id="dpd2" >
</div>

</div>

<!-- <div class="clearfix"></div>

<div class="clearfix"></div> -->
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold">

<input id="cnt_val_portfolio" type="hidden" value="1" />

<div id="PromoImage1" style="display:block;">
<h4>Promo Image 1 <span class="option_store">(optional)</span></h4>
 <input id="ImageAd1" class="upload-file-new" placeholder="Select" name="offer_ad" readonly="readonly" value="<?=$Data['OfferListingDetail']['offer_or_ad']?>"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileAd1" onchange="javascript: document.getElementById ('ImageAd1').value = this.value;document.getElementById ('ImageAd1').style.display = 'block';"/>
</div>

</div>


<div id="PromoImage2" style="display:none;">
<h4 class="offer_keys">Promo Image 2 <span class="option_store">(optional)</span></h4>
 <input id="ImageAd2" class="upload-file-new" placeholder="Select" name="offer_ad" readonly="readonly" value="<?=$Data['OfferListingDetail']['offer_or_ad']?>"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileAd2" onchange="javascript: document.getElementById ('ImageAd2').value = this.value;document.getElementById ('ImageAd2').style.display = 'block';"/>
</div>

</div>


<div id="PromoImage3" style="display:none;">
<h4 class="offer_keys">Promo Image 3 <span class="option_store">(optional)</span></h4>
 <input id="ImageAd3" class="upload-file-new" placeholder="Select" name="offer_ad" readonly="readonly" value="<?=$Data['OfferListingDetail']['offer_or_ad']?>"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileAd3" onchange="javascript: document.getElementById ('ImageAd3').value = this.value;document.getElementById ('ImageAd3').style.display = 'block';"/>
</div>

</div>

<div id="PromoImage4" style="display:none;">
<h4 class="offer_keys">Promo Image 4 <span class="option_store">(optional)</span></h4>
 <input id="ImageAd4" class="upload-file-new" placeholder="Select" name="offer_ad" readonly="readonly" value="<?=$Data['OfferListingDetail']['offer_or_ad']?>"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileAd4" onchange="javascript: document.getElementById ('ImageAd4').value = this.value;document.getElementById ('ImageAd4').style.display = 'block';"/>
</div>

</div>


<div id="PromoImage5" style="display:none;">
<h4 class="offer_keys">Promo Image 5 <span class="option_store">(optional)</span></h4>
 <input id="ImageAd5" class="upload-file-new" placeholder="Select" name="offer_ad" readonly="readonly" value="<?=$Data['OfferListingDetail']['offer_or_ad']?>"/>
    <div class="fileUpload btn btn-primary">
    <span>Browse Image</span>
    <input id="uploadBtn" type="file" class="upload" name="ImageFileAd5" onchange="javascript: document.getElementById ('ImageAd5').value = this.value;document.getElementById ('ImageAd5').style.display = 'block';"/>
</div>

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->
<div id="" class="plus-btn plus-5">+</div>
</div>


<div class="col-sm-6 col-md-4 col-xs-12" id="main_promourl">
<h4>Promo URL <span class="option_store">(website)</span> <span class="error_msg" id="error_url">(Enter Promo URL)</span></h4>
<input class="form-control"  type="text" name="Shop_Url" value="<?=$Data['OfferListingDetail']['shopping_url']?>">
</div>


<?

  if($Data['OfferListingDetail']['offer_type']==12){


    if(!empty($NewPromo['PromoCode']['promocode1'])){ ?>
  
  
  


  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width  promo_code_section">

<?  for($t=1;$t<=5;$t++){

    if(!empty($NewPromo['PromoCode']['promocode'.$t])){
  ?>

  <div id="PromoCode<?=$t?>" style="display:block;">
<h4 class="key_feature">Promo Code <?=$t?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode<?=$t?>"  value="<?=$NewPromo['PromoCode']['promocode'.$t]?>" / >

</div>
  

<?
  $val2 = $t;
}}?>
<input id="cnt_val_promocode" type="hidden" value="<?=$val2?>" />






<!-- <div id="PromoCode2" style="display:none;">
<h4 class="key_feature">Promo Code 2 <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode2"  value="" / >

</div> -->


<div id="PromoCode<?=$val2+1?>" style="display:none;">
<h4 class="key_feature">Promo Code <?=$val2+1?> <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode<?=$val2+1?>"  value="" / >

</div>

<div id="PromoCode<?=$val2+2?>" style="display:none;">
<h4 class="key_feature">Promo Code <?=$val2+2?> <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode<?=$val2+2?>"  value="" / >

</div>


<div id="PromoCode<?=$val2+3?>" style="display:none;">
<h4 class="key_feature">Promo Code <?=$val2+3?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode<?=$val2+3?>"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->
<div id="" class="plus-btn plus-8">+</div>
</div>

<?}?>








<?if(!empty($NewPromo['PromoCode']['subtitle1'])){?>
  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width subtitle_section">

 <? for($e=1;$e<=5;$e++){

    if(!empty($NewPromo['PromoCode']['subtitle'.$e])){
  ?>

<div id="Subtitle<?=$e?>" style="display:block;">
<h4 class="key_feature">Subtitle <?=$e?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle<?=$e?>"  value="<?=$NewPromo['PromoCode']['subtitle'.$e]?>" / >

</div>

<?
  $val3 = $e;
}}?>

<!-- <div id="Subtitle2" style="display:none;">
<h4 class="key_feature">Subtitle 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle2"  value="" / >

</div> -->


<div id="Subtitle<?=$val3+1?>" style="display:none;">
<h4 class="key_feature">Subtitle <?=$val3+1?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle<?=$val3+1?>"  value="" / >

</div>

<div id="Subtitle<?=$val3+2?>" style="display:none;">
<h4 class="key_feature">Subtitle <?=$val3+2?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle<?=$val3+2?>"  value="" / >

</div>


<div id="Subtitle<?=$val3+3?>" style="display:none;">
<h4 class="key_feature">Subtitle <?=$val3+3?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle<?=$val3+3?>"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->

</div>

<?}?>




<?if(!empty($NewPromo['PromoCode']['promourl1'])){?>
  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width url_section">

 <? for($f=1;$f<=5;$f++){

    if(!empty($NewPromo['PromoCode']['promourl'.$f])){
  ?>

<div id="Subtitle<?=$f?>" style="display:block;">
<h4 class="key_feature">Promo URL <?=$f?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url<?=$f?>"  value="<?=$NewPromo['PromoCode']['promourl'.$f]?>" / >

</div>

<?
  $val4 = $f;
}}?>


<!-- <div id="PromoURL2" style="display:none;">
<h4 class="key_feature">Promo URL 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url2"  value="" / >

</div> -->



<div id="PromoURL<?=$val4+1?>" style="display:none;">
<h4 class="key_feature">Promo URL <?=$val4+1?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url<?=$val4+1?>"  value="" / >

</div>

<div id="PromoURL<?=$val4+2?>" style="display:none;">
<h4 class="key_feature">Promo URL <?=$val4+1?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url<?=$val4+2?>"  value="" / >

</div>


<div id="PromoURL<?=$val4+3?>" style="display:none;">
<h4 class="key_feature">Promo URL <?=$val4+1?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url<?=$val4+3?>"  value="" / >

</div>

</div>
<?}}?>


<?if($Data['OfferListingDetail']['offer_type']==3|| $Data['OfferListingDetail']['offer_type']==4 || $Data['OfferListingDetail']['offer_type']==5){?>

<?if(!empty($NewPromo['PromoCode']['promocode1'])){

    ?>
  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width discount_code_section">


 <?
    // echo $number;die;
  for($h=1;$h<=5;$h++){

    if(!empty($NewPromo['PromoCode']['promocode'.$h])){
  ?>
<div id="DiscountCode<?=$h?>" style="display:block;">
<h4>Discount Value <?=$h?><span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value<?=$h?>" id="OfferValue" value="<?=$NewPromo['PromoCode']['promocode'.$h]?>">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">

</div>

<?
  $val5 = $h;
}}?>

<input id="cnt_val_discountcode" type="hidden" value="<?=$val5?>" />
<div id="DiscountCode<?=$val5+1?>" style="display:none;">
<h4>Discount Value <?=$val5+1?><span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value<?=$val5+1?>" id="OfferValue" value="">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
</div>

<div id="DiscountCode<?=$val5+2?>" style="display:none;">
<h4>Discount Value <?=$val5+2?><span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value<?=$val5+2?>" id="OfferValue" value="">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
</div>

<div id="DiscountCode<?=$val5+3?>" style="display:none;">
<h4>Discount Value <?=$val5+3?><span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value<?=$val5+3?>" id="OfferValue" value="">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
</div>
<div id="" class="plus-btn plus-9">+</div>
</div>

<?}?>



<?if(!empty($NewPromo['PromoCode']['subtitle1'])){?>
  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_subtitle_section">

 <? for($k=1;$k<=5;$k++){

    if(!empty($NewPromo['PromoCode']['subtitle'.$k])){
  ?>

<div id="DisSubtitle<?=$k?>" style="display:block;">
<h4 class="key_feature">Discount Subtitle <?=$k?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle<?=$k?>"  value="<?=$NewPromo['PromoCode']['subtitle'.$k]?>"  / >

</div>

<?
  $val6 = $k;
}}?>
  
  <div id="DisSubtitle<?=$val6+1?>" style="display:none;">
<h4 class="key_feature">Discount Subtitle <?=$val6+1?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle<?=$val6+1?>" / >
</div>

  <div id="DisSubtitle<?=$val6+2?>" style="display:none;">
<h4 class="key_feature">Discount Subtitle <?=$val6+2?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle<?=$val6+2?>" / >
</div>

<div id="DisSubtitle<?=$val6+3?>" style="display:none;">
<h4 class="key_feature">Discount Subtitle <?=$val6+3?>  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle<?=$val6+3?>" / >

</div>
</div>

<?}?>







<?if(!empty($NewPromo['PromoCode']['promourl1'])){?>
  <div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_url_section">

 <? for($n=1;$n<=5;$n++){

    if(!empty($NewPromo['PromoCode']['promourl'.$n])){
  ?>

<div id="DisURL<?=$n?>" style="display:block;">
<h4 class="key_feature">Discount URL <?=$n?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url<?=$n?>"  value="<?=$NewPromo['PromoCode']['promourl'.$n]?>"  / >

</div>

<?
  $val7 = $n;
}}?>

<div id="DisURL<?=$val7+1?>" style="display:none;">
<h4 class="key_feature">Discount URL <?=$val7+1?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url<?=$val7+1?>"/ >
</div>

<div id="DisURL<?=$val7+2?>" style="display:none;">
<h4 class="key_feature">Discount URL <?=$val7+2?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url<?=$val7+2?>"/ >
</div>

<div id="DisURL<?=$val7+3?>" style="display:none;">
<h4 class="key_feature">Discount URL <?=$val7+3?> <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url<?=$val7+3?>"/ >
</div>
</div>
<?}}?>


<?if($offer_type_select!=12 || empty($NewPromo)){?>

<?if($offer_type_select==12){?>

<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width  promo_code_section" style="display:block;">

<?}else{?>

<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width  promo_code_section" style="display:none;">
<?}?>

<input id="cnt_val_promocode" type="hidden" value="2" />

<div id="PromoCode1" style="display:block;">
<h4 class="key_feature">Promo Code 1 <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode1"  value="" / >

</div>


<div id="PromoCode2" style="display:block;">
<h4 class="key_feature">Promo Code 2 <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode2"  value="" / >

</div>


<div id="PromoCode3" style="display:none;">
<h4 class="key_feature">Promo Code 3 <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode3"  value="" / >

</div>

<div id="PromoCode4" style="display:none;">
<h4 class="key_feature">Promo Code 4 <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode4"  value="" / >

</div>


<div id="PromoCode5" style="display:none;">
<h4 class="key_feature">Promo Code 5  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promocode5"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->
<div id="" class="plus-btn plus-8">+</div>
</div>
<?if($offer_type_select==12){?>

<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width subtitle_section" style="display:block;">
<?}else{?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width subtitle_section" style="display:none;">
<?}?>


<div id="Subtitle1" style="display:block;">
<h4 class="key_feature">Subtitle 1 <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle1"  value="" / >

</div>


<div id="Subtitle2" style="display:block;">
<h4 class="key_feature">Subtitle 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle2"  value="" / >

</div>


<div id="Subtitle3" style="display:none;">
<h4 class="key_feature">Subtitle 3  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle3"  value="" / >

</div>

<div id="Subtitle4" style="display:none;">
<h4 class="key_feature">Subtitle 4  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle4"  value="" / >

</div>


<div id="Subtitle5" style="display:none;">
<h4 class="key_feature">Subtitle 5  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="subtitle5"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->

</div>
<?if($offer_type_select==12){?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width url_section" style="display:block;">
<?}else{?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width url_section" style="display:none;">
<?}?>


<div id="PromoURL1" style="display:block;">
<h4 class="key_feature">Promo URL 1 <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url1"  value="" / >

</div>


<div id="PromoURL2" style="display:block;">
<h4 class="key_feature">Promo URL 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url2"  value="" / >

</div>


<div id="PromoURL3" style="display:none;">
<h4 class="key_feature">Promo URL 3  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url3"  value="" / >

</div>

<div id="PromoURL4" style="display:none;">
<h4 class="key_feature">Promo URL 4  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url4"  value="" / >

</div>


<div id="PromoURL5" style="display:none;">
<h4 class="key_feature">Promo URL 5  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="promo_url5"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->

</div>

<?}?>

<!--    Discount Section for the offer  -->
<?if($offer_type_select!=3 && $offer_type_select!=4 && $offer_type_select!=5 || empty($NewPromo)){?>

<?if($offer_type_select==3 || $offer_type_select==4 || $offer_type_select==5){?>

<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width discount_code_section" style="display:block;">
<?}else{?>


<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width discount_code_section" style="display:none;">

<?}?>



<input id="cnt_val_discountcode" type="hidden" value="2" />

<div id="DiscountCode1" style="display:block;">
<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;"> -->
<h4>Discount Value 1<span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value1" id="OfferValue" >
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
<!-- </div> -->

</div>


<div id="DiscountCode2" style="display:block;">
<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;"> -->
<h4>Discount Value 2<span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value2" id="OfferValue">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
<!-- </div> -->

</div>


<div id="DiscountCode3" style="display:none;">
<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;"> -->
<h4>Discount Value 3<span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value3" id="OfferValue">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
<!-- </div> -->

</div>

<div id="DiscountCode4" style="display:none;">
<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;"> -->
<h4>Discount Value 4<span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value4" id="OfferValue" >
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
<!-- </div> -->

</div>


<div id="DiscountCode5" style="display:none;">
<!-- <div class="col-md-4 col-sm-6 land-hold" id="ValueField" style="display:none;"> -->
<h4>Discount Value 5<span class="error_msg" id="error_offer_type_select">(Enter Discount Value)</span></h4>
<input class="form-control too-small"  type="text" name="offer_value5" id="OfferValue">
<input class="form-control too-small" id="rups" disabled placeholder="Off (Rs.)" style="display:none;">
<input class="form-control too-small" id="pers" style="display:none;" disabled placeholder="% Off">
<!-- </div> -->

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->
<div id="" class="plus-btn plus-9">+</div>
</div>
<?if($offer_type_select==3 || $offer_type_select==4 || $offer_type_select==5){?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_subtitle_section" style="display:block;">
<?}else{?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_subtitle_section" style="display:none;">
<?}?>



<div id="DisSubtitle1" style="display:block;">
<h4 class="key_feature">Discount Subtitle 1 <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle1"  value="" / >

</div>


<div id="DisSubtitle2" style="display:block;">
<h4 class="key_feature">Discount Subtitle 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle2"  value="" / >

</div>


<div id="DisSubtitle3" style="display:none;">
<h4 class="key_feature">Discount Subtitle 3  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle3"  value="" / >

</div>

<div id="DisSubtitle4" style="display:none;">
<h4 class="key_feature">Discount Subtitle 4  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle4"  value="" / >

</div>


<div id="DisSubtitle5" style="display:none;">
<h4 class="key_feature">Discount Subtitle 5  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dissubtitle5"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->

</div>

<?if($offer_type_select==3 || $offer_type_select==4 || $offer_type_select==5){?>
<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_url_section" style="display:block;">
<?}else{?>

<div class="col-sm-6 col-md-4 col-xs-12  plus-btn-hold custm-width dis_url_section" style="display:none;">

<?}?>


<div id="DisURL1" style="display:block;">
<h4 class="key_feature">Discount URL 1 <span class="error_msg" id="error_portfolio">(Upload Portfolio)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url1"  value="" / >

</div>


<div id="DisURL2" style="display:block;">
<h4 class="key_feature">Discount URL 2  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url2"  value="" / >

</div>


<div id="DisURL3" style="display:none;">
<h4 class="key_feature">Discount URL 3  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url3"  value="" / >

</div>

<div id="DisURL4" style="display:none;">
<h4 class="key_feature">Discount URL 4  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url4"  value="" / >

</div>


<div id="DisURL5" style="display:none;">
<h4 class="key_feature">Discount URL 5  <span class="option_store">(optional)</span></h4>
<input  class="form-control margb-0 store_feature" name="dis_url5"  value="" / >

</div>



<!-- <div id="" class="plus-btn-bottom plus-2">Add More</div> -->

</div>

<?}?>

<div class="clearfix"></div>

<div class="col-sm-6 col-md-4 col-xs-12" id="booking_section" style="display:none;">
<h4>Book  Table</h4>
<div class="main-section">
                    <select   class="selectpicker" id="book_table" style="display:none;" onchange="booktable();" name="book_table">
                    <option>Select</option>
                     <option value="1">Yes</option>
                     <option value="2">No</option>
                    
                  </select>
                    </div>
</div>




<div class="clearfix"></div>
<? $content = str_replace("<p>", "",$Data['OfferListingDetail']['terms_and_conditions']); $content = str_replace("</p>", "", $content); $content = str_replace("\n", "", $content);?>

<div class="col-xs-12">
<h4>Promo Details  <span class="error_msg" id="error_detail">(Enter Promo Details)</span></h4>
<textarea class="form-control"  type="text" name="Offer_Terms" id="offer_terms"><?=$content?></textarea>
</div>

<div class="col-sm-4 offer_save" id="submit">
<button class="form-control custom-save" id="submit_offer" onclick="offer_step2()">SUBMIT PROMO</button>
<div id="loading_store" align="center" style="font-size:14px; color:#DFB55E; margin-top:15px;  padding-top:10px; display:none; "><img src="/img/loading_company.gif" alt="loading"  title="loading"/></div>
</div>

</div>
</div>
</div>

</form>
</div>
</div>
</section>
</section>


<script type="text/javascript">


function preload(){

// alert("preload")
$(".storevaluelist").show();


}
function upload(){

// alert("upload");
$(".storevaluelist").hide();
window.location= "/myaccount/create_offer";
}

function getOfferId(){

var offer= $("#OfferNames").val();

// alert(offer);

window.location = "/myaccount/create_offer/"+offer;
// var newUrl = 

}
</script>

 <script type="text/javascript">


//  $("#dpd2").click(function(){


// alert(dateTypeVar);
// $.datepicker.formatDate('dd-mm-yy', dateTypeVar);

// });
// function getDate(){

//   alert('its working');
// }

 </script>

   <script type="text/javascript">
       var config = {
        '#Category, #SubCategory_Select, #CityCmpySelect, #AreaSelect': {},
    
      }
      for (var selector in config) {
      
       $(selector).chosen(config[selector]);
      }
   </script>