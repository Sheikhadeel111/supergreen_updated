
<style type="text/css">
	.center-text{
		text-align: center;
    justify-content: center;
    display: flex;
  }

  .btn-circle.btn-xl {

    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
  }

  .btn-circle {
    color:white;
    background-color: #e5acbc;
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    border:none;
    outline: none !important;
  }
  .otherbtn{
    width: 67px !important;
    height: 67px !important;
    border-radius: 100% !important;
    font-size: 10px !important;
    outline: none !important;
  }
  .otherbtn:hover{
    background-color: #189271 !important;
  }
 
  .ci_dressing{
    width: 220px;
    height: 220px!important;
    max-width: 220px!important;
    background: none;
    border: 0;
    box-sizing: border-box;
    padding: 1em 2em;
    font-size: inherit;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 50%;
    box-shadow: none;
  }
  .ci_dressing::before, .ci_dressing::after {
    box-sizing: inherit;
    content: '';
    position: absolute;
    height: 220px!important;
    max-width: 220px!important;
    border-radius: 50%;
    box-shadow: none;
  }
  .btn-circle-top{
      color:white;
    background-color: #e5acbc;
    padding: 0px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    border:none;
    padding:5px;
  }
  .sczrbtn{
    position: absolute;
    top: 186px;
   left: 90px;

  }

  .sczrbtn button{
    height:auto;
    display:inline-block;
  }


  /*newwwwwwwwwwwwww*/
  body { 
    background: url('assets/images/background2.png') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-color: rgba(48,194,131,0.5019607843137255);
    height: 100%;
  }
  .center-text{
    font-family: Lato-Black, AdobeInvisFont, MyriadPro-Regular;
    color: white;
    font-size: 42px;
    font-weight: bold;      
  }
  .circles {
    width: 315px;
    height: 315px;
    border-radius: 224px;
    /*margin-left: 43px;*/
    background-color: rgba(48,194,131,0.5019607843137255);
    border: 5px solid #ffffff;
  }

  .textstyle {
    color: white;
    font-size: 34px;
    font-weight: bold;
    margin-top: 111px;
  }
  .inside-text{
    font-size: 17px;
    color: white;

  }
  .float-right{
    float: right !important;
  }
  a:focus, a:hover{
    text-decoration: none;
  }
  
  .bottom-button{
  /* background-color: #e5acbc;
    border:none;
    color: white;
    font-size: 20px;
    margin-bottom: 28px;
    margin-right:10px;
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 4px;*/
    margin-bottom: 28px;
    background-color: #e5acbc;
    border: 1px solid #e5acbc;
    padding: 10px 30px !important;
    border-radius: 3px;
    margin-right: 18px;
    font-size: 15px!important;
    font-weight: 400!important;
    text-transform: capitalize!important;
    width:156px;
    color:white !important;
    outline: none !important;
  }
  .bottom-button:hover{
      background-color: #F292AE !important;
    }
  .card{
    margin-left: 53px;
    margin-right: 53px;
    border-radius: 3px;
    padding-top: 0px;
    padding-left: 12px;
    padding-right: 0px;
    padding-bottom: 0px;
    /*overflow-x: hidden;
    overflow-y: hidden;*/
    height: 768px;

  }
  .card-title{
    text-align: center;
    font-weight: bold;
    margin-top: 46px;
  }
  .width-20{
    width: 25%;
    text-align: center;
  }
  .round-border-select{
   padding-top: 9px;
   border-radius: 109px;
   height: 205px;
   width: 205px;
   border: 1px solid #4db68a;
 }
 .round-border:hover {
  border: 1px solid #4db68a;
}
.round-border:hover .plus-minus{
  display: block;
}
.round-border{
  padding-top: 9px;
  border-radius: 109px;
  height: 205px;
  width: 205px;
}
.span-text{
  color:#4db68a;
  font-weight: bold;
  font-size: 17px;
}
.glyphicon-plus{
  background-color: #4db68a;
  padding: 5px 6px 6px 7px;
  color: white;
  font-weight: bold;
  cursor: pointer;
}

.glyphicon-minus{
  background-color: #4db68a;
  padding: 5px 6px 6px 7px;
  color: white;
  font-weight: bold;
  cursor: pointer;
}
.custom-height{
  height: 153px;
}
.show{
  display: block;
}
.price-column{
  background-color: #ececec;
  height: 100%;
}
.centeraline{
  text-align: center; 
  justify-content: center; 
  display: flex;

}
.extracls{
  position: absolute !important;
    top: 71px !important;
    left: 195px !important;
}
.mediumcls{
  position: absolute !important;
    top: -27px !important;
    left: 90px  !important;  
}
.largecls{
  position: absolute !important;
    top: 71px !important;
    left: -12px !important;
}

.left_pd{
  margin-left: 4%;
}

@media (min-width: 1024px)  {
.qtybtn {
    position: absolute !important;
    top: 178px !important;
   /* left: 53px  !important;*/
    }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .left_pd{
      margin-left: 0% !important;
display: flex;
justify-content: center;
    }
     .ci_dressing::before, .ci_dressing::after {
  
    content: none !important;
   
  }
   /*Awais .col-md-3{
      z-index: 999999999;
      justify-content: center;
    display: grid;
    }*/
    .display_flex{
          display: flex;
      justify-content: center;
    }
    .btn-circle {
        z-index: 9999999999999;
        color:white;
        background-color: #e5acbc;
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
        border:none;
        outline: none !important;
    }
    .fa{
      z-index: 9999999999999;
    }
    .price-column {
    background-color: #ececec;
    height: auto;
    padding-top: 2px;
    padding-bottom: 20px;
    }
   .qtybtn {
    position: absolute !important;
    top: 178px !important;
   /* left: 42px  !important;*/
    }
}

  @media (min-width: 320px) and (max-width: 812px) {
    .left_pd{
      margin-left: 0% !important;
      display: block;
    }
    .ci_dressing{
       width: 220px !important;
    }
    .posrelivt{
      position: relative;
    }
    .displayflex {
         margin-left:auto !important;
         display: block !important; 
    }
    .bottom-button{
      margin-right: 0px !important;
    }
    .ci::before, .ci::after{
      content: none !important;
    }
      .basemenuimage {
          width: 120px;
        }
        .basemenuimagedress{
          width: 120px;
          height: 120px;
        }
      .sczrbtn{
        position: absolute;
        top: 186px;
        left: 34% !important;
      }
      .mediumcls{
          position: absolute !important;
          top: -27px !important;
          left: 34% !important;
      }

      .extracls{
        position: absolute !important;
          top: 71px !important;
          left: 80% !important;
      }

      .largecls{
        position: absolute !important;
         top: 71px !important;
         left: -14% !important;
      }


      .ci_dressing::before, .ci_dressing::after {
        content: none !important;
      }
    .mobileseting{
      justify-content: center!important;
      display: flex!important;
      margin-bottom:10% !important;
     /* margin-left:18% !important;*/
      max-width: 100% !important;
    }
    .qtybtn {
    position: absolute !important;
    top: 170px !important;
    left: auto !important
    }
    .price-column {
    background-color: #ececec;
    height: auto;
    padding-top: 2px;
    padding-bottom: 20px;
    margin-bottom:30px;
    }
    .card {

    margin-left: 5px;
    margin-right: 5px;
    border-radius: 3px;
    padding-top: 0px;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
   /* overflow-x: hidden; Awais
    overflow-y: hidden;*/
    /*height: wrap-content;Awais*/ 
    .centeraline{
      display: block;
    }
}
    .col-xs-12{
      z-index: 999999999;
      justify-content: center;
      display: grid;
    }
    .btn-circle {
      z-index: 9999999999999;
    }
    .fa{
      z-index: 9999999999999;
    }
  
    .sczrbtn{
      left:137px;
    }
    .centeraline{
      display: block;
    }
  }
  @media (min-width: 360px) and (max-width: 384px) {
  .qtybtn {
    position: absolute !important;
   /* top: 51px !important;*/
    /*left: 143px !important;*/
    }
    .price-column {
    background-color: #ececec;
    padding-top: 2px;
  }
  .centeraline{
      display: block;
    }
}

</style>

<?php

$order = $this->session->userdata("order_cart");

if(isset($product)){

  $pro_items = json_decode($product->product_items);
  $names = [];
  $proIds = [];

  foreach ($pro_items as $k2 => $v2) {
   foreach ($v2 as $k3 => $v3) {
    $pro = ingredients_price($v3->product);
    $newarr = $pro->cat_pro_name;
    array_push($names, $newarr);
  }
}

foreach ($pro_items as $k3 => $v2) {
 foreach ($v2 as $k3 => $v3) {
   $idArr = $v3->product;
   array_push($proIds, $idArr);
 }
}

$namesArray = array_combine($proIds,$names);

}



?>


<?php 
//$price = "<h3>Price : $0 </h3> ";
?>
<div class="container-fluid scrollup">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
  <div class="row">
    <div class="card text-center">
      <div class="col-lg-9 scrolltop" style="height: 100%;background-color: white;overflow-y: auto;
overflow-x: hidden;">


        <div class="row">
          <div id="products" style="height: 963px;"></div>
        </div>

      </div>

      <div class="col-lg-3 text-center price-column" style="">
        <h3 class="card-title">Make Your Own</h3>
        <br>
        <h5>Fill Your Bowl</h5>
        <h5><b><div id="pricetag"><?php echo $price; ?></div></b></h5><br>
        <h5>
          <div id="myDIV"> <p class="ptext text-center" style="line-height: 1.5;"></p></div></h5>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- <div class="row">
      <div class="col-lg-3 text-center" style="background-color: #ececec;height: 100%;">
        <h3 class="card-title">SPEICY THAI SALAD</h3>
        <br>
        <h5>Fill your Bowl</h5>
        <h5><b><div id="pricetag"><?php echo $price; ?></div></b></h5><br>
        <h5>
          <div id="myDIV"></div></h5>
      </div></div> -->
<!-- 
<div class="container-fluid">
  <div class="row ">
   <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12 bg-dark hide ">
   </div>
   <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  left_border_round" id="border-radius-left">
    <div class="center-text div1 tmgn50" id="products">

    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="rightsidebar text-center d-none d-lg-block d-xl-block d-md-block">
     <h1 class="pt50">Custom Salad</h1>
     <h1>Fill your Bowl</h1>
     <div id="pricetag">
      <?php echo $price; ?>
    </div>
    <div id="myDIV" >
      <p class="ptext text-center"></p>
    </div>	
  </div>
</div>


</div>
</div> -->


<!-- Modal -->
<!-- <div class="modal" id="bowlModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Fill Your Bowl</h5>



        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="myDIV" >
        <p class="ptext text-center"></p>	
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>



<div class="bowlicon bowlround d-md-none d-lg-none d-xl-none">
  <a href="#"  data-toggle="modal" data-target="#bowlModal">
   <p class="mini_content">Bowl</p>

 </a>
</div> -->

<?php
$price = 0;
$info = categoryInfo($category);
?>

<input type="hidden" id="price" value="<?=$price?>">

</body>

<script type="text/javascript">

	var addclass = 'color';
	var removeclass = 'spin';
  var products = [];
  <?php 
  if(isset($product)){
    echo "var newProducts =".$product->product_items; //json of db product items

  }else{
    echo "var newProducts = {
     base: [],
     top: [],
     pre: [],
     dress: []

};"; //initialize newPorduct array
}

?>

var names = [];

$(document).ready(function() {

  var category_id = <?php echo $category; ?>;
  var productId = "";
  var skip = 0;
  var flag = 0;
  <?php 
  if(isset($product)){ ?>
    productId = "<?php echo $product->product_id; ?>";
    <?php echo "names = ".json_encode($namesArray).";"; ?>
    $.each( names, function( key, value ) {
        $('.ptext').append("<div data-salad-id='" + key + "'>" + value + "</div>"); //get array of product name and id only
      });
  <?php } ?>

  $.ajax({
    method:'POST',
      url:"<?php echo base_url('order/get_products');?>", //get products
      data:{id:category_id,selected:newProducts,productId:productId,skip:skip,flag:flag},
      dataType:'text',

      success:function(res)
      {
        $("#products").html(res);

      },

    });

  $(".color").click(function() {
    $(".ptext").empty();
  });


});


var counter = 0;
var flag = 0;
function cout(){
  counter++;
}
  function change_page(skip)  //get next products
  { 

    counter = 0;
    var category_id = <?php echo $category; ?>;

    $.ajax({
      method:'POST',
      url:"<?php echo base_url('order/get_products');?>", 
      data:{id:category_id,skip:skip,selected:newProducts,flag:flag},
      dataType:'text',
      success:function(data){
        document.documentElement.scrollTop = 0;
        $(".scrolltop").animate({ scrollTop: 0 }, "slow");
        $("#products").html(data);
      }
    }); 

  }



  function addToArray(name, value) { //add products to array
    newProducts[name].push(value);
    console.log(newProducts);
  }
  
  function encirecl(ele,remove = false) 
  {
    var maxQty = $("#maxQty").val(); //get max quantity of category
    var addCounter = parseInt($("#counter").val())+parseInt(1);  //count added
    var minQty = $("#minQty").val(); //get min quantity of category
    var abc = $(ele).data("index"); // category index name
    var selectedCount = newProducts[abc].length; //selected items count
    var newCounter = parseInt(selectedCount)+parseInt(addCounter); //new counter set
    var totlco = $("#countervalue"+abc).val();

    if(remove == false){
      if(newCounter > maxQty || totlco == maxQty) //max quantity reach return false
      { 
        if (!$(ele).hasClass('color')) {
          toasterOptions();
          toastr.error('You Reached Maximum Limit');
          return false;
        }
      }
    } 
    
    $(ele).toggleClass(addclass);

    if ($(ele).hasClass('color') && remove == false) { //if selected
      counter++;
      var item = $(ele).data('id'); //product id
      var n = item.toString();
      $('.ptext').append("<div data-salad-id='" + $(ele).data('id') + "'>" + $(ele).data('name') + "</div>");
      $(ele).removeClass(removeclass); //remove class selected
      var addeddata = {'product':$(ele).data('id'),'quantity':1,'size':"",'serving':''}; //create object of product
      addToArray(abc,addeddata);
      $(ele).parent().find(".inbtn").fadeIn();
      $(ele).parent().find(".sczrbtn").fadeIn();
      
      $(ele).parent().find(".qtybtn").fadeIn();
      var prc = $(ele).data('price');

      

      $(ele).find(".inc").html('Included');
      $("#countervalue"+abc).val(parseInt($("#countervalue"+abc).val())+parseInt(1));
      var currentPrice = $("#price").val();

      var updatedPrice = 0;

      if(minQty < 1 || totlco >= 4){
        $(ele).find(".inc").html('<?php echo MONEY_SIGN; ?>'+prc);
        updatedPrice = parseFloat(prc)+parseFloat(currentPrice);
      }else{
        updatedPrice = parseFloat(<?php echo $info->basePrice ?>);
      }
      $("#pricetag").html("Price : <?php echo MONEY_SIGN; ?>"+updatedPrice+"");
      $("#price").val(updatedPrice);
     

    } else {
        // remove form array
        counter--;
        var item11 = $(ele).data('id');
        $("#"+item11).val(parseInt(1));

        var allvalue = $("#countervalue"+abc).val();
        var qty = 0;
        $(newProducts[abc]).each(function( index, element ) {
          if(element.product == item11){
            var val = parseInt($("#countervalue"+abc).val()) - parseInt(element.quantity);
            $("#countervalue"+abc).val(parseInt(val + 1));
            totlco = totlco - parseInt(element.quantity);
            qty = parseInt(element.quantity);
          }
        });

        var prc = $(ele).data('price');
        var currentPrice = $("#price").val();
        var updatedPrice = 0;
        if(minQty < 1 || totlco >= 4){
          updatedPrice = parseFloat(currentPrice) - prc; 
        }else{
          updatedPrice = currentPrice;
        }
      // if(parseInt(allvalue) > parseInt(minQty) && parseInt(qty) > parseInt(minQty))
      // {
      //     var looprun = (parseInt(allvalue) + parseFloat(1) ) - parseInt(minQty) ;
      //     if(parseInt(looprun) > parseInt(minQty)){
      //     for(var i = 1; i < looprun; i++){
      //         //alert(i);
      //         updatedPrice = updatedPrice - parseFloat(1) ; 
      //       }
      //     }
      //  }
      if(remove == true){
         $(ele).parent().prev().addClass(removeclass);
         $(ele).parent().prev().removeClass(addclass);
         $(ele).parent().css({'display': 'none'});
      }

      $("#pricetag").html("Price : <?php echo MONEY_SIGN; ?>"+updatedPrice+"");
      $("#price").val(updatedPrice);
     
      $(ele).addClass(removeclass);
      var item = $(ele).data('id');
      var n = item.toString();
      $(".ptext").children("div[data-salad-id='" + $(ele).data('id') + "']").remove(); //remove form list
      $(ele).parent().find(".inbtn").fadeOut();
      $(ele).parent().find(".sczrbtn").fadeOut();
      $(ele).parent().find(".qtybtn").fadeOut();


      
      $(newProducts[abc]).each(function( index, element ) {
        if(element.product == item){
         newProducts[abc].splice(index, 1); //remove form array
         return false;
       }

     });
      $("#countervalue"+abc).val(parseInt($("#countervalue"+abc).val())-parseInt(1));
      
      $(ele).find(".inc").html('');
    }

  }


  function plus(ele,id){
    var abc = $(ele).data("index");
    var count =   $(ele).parents(".qtybtn").find("input").val();
    ///alert(count);
    var updatedCount = parseInt(count)+parseInt(1);
    var minQty = $("#minQty").val();
    var maxQty = $("#maxQty").val(); //get max quantity of category

    var totlco = $("#countervalue"+abc).val();
    var countqty = $("#allcountvalue").val();

    if(count == maxQty || totlco == maxQty){
     toasterOptions();
     toastr.error('You Reached Maximum Limit');
     return false;
   }
   $("#countervalue"+abc).val(parseInt($("#countervalue"+abc).val())+parseInt(1));
   $(ele).parents(".qtybtn").find(".counter").val(updatedCount);
   $(ele).parents(".qtybtn").find("#counting"+id).val(updatedCount);
   $(newProducts[abc]).each(function( index, element ) {
    if(element.product == id){
         newProducts[abc].splice(index, 1); //remove form array
         return false;
       }

     });

   var size;
   var serving;
   if(typeof $("#ingSize"+id).val() === "undefined"){
     size = '';
   }else{
    size = $("#ingSize"+id).val();
  }

  if(typeof $("#ingServing"+id).val() === "undefined"){
    serving = '';
  }else{
    serving = $("#ingServing"+id).val();
  }

  $("#"+id+"Qty").val(updatedCount);
   var addeddata = {'product':id,'quantity':updatedCount,'size':size,'serving':serving}; //create object of product
   addToArray(abc,addeddata);
   var category_id = <?php echo $category; ?>;
   var currentPrice = $("#price").val();
      $.ajax({ //get price if ingredients
        method:'POST',
        url:"<?php echo base_url('order/getIngPrice');?>",
        data:{ing:id},
        dataType:'json',
        success:function(res)
        {

          var updatedPrice = 0;
          var currentPrice = $("#price").val();
          if(totlco == minQty || totlco > minQty){
            updatedPrice = parseFloat(res.price)+parseFloat(currentPrice);
          }else{
            updatedPrice = parseFloat(currentPrice);
          }
          
          
          $("#pricetag").html("Price : <?php echo MONEY_SIGN; ?>"+updatedPrice+"");
          $("#price").val(updatedPrice);

        }
      }); 




    }

    function minus(ele,id){
     var abc = $(ele).data("index");
     var minQty = $("#minQty").val();
     var count =   $(ele).parents(".qtybtn").find("input").val();
     if(count<=1){
            encirecl(ele,true);
            $(ele).parent().prev().find(".inc").html('');
            return false;
    }else{
      var updatedCount = parseInt(count)-parseInt(1);
      $(ele).parents(".qtybtn").find("input").val(updatedCount);
      $(ele).parents(".qtybtn").find("#counting"+id).val(updatedCount);
      $(newProducts[abc]).each(function( index, element ) {

        if(element.product == id){
         newProducts[abc].splice(index, 1); //remove form array
         return false;
       }

     });

      $("#"+id+"Qty").val(updatedCount);
      var size;
      var serving;
      if(typeof $("#ingSize"+id).val() === "undefined"){
       size = '';
     }else{
      size = $("#ingSize"+id).val();
    }

    if(typeof $("#ingServing"+id).val() === "undefined"){
      serving = '';
    }else{
      serving = $("#ingServing"+id).val();
    }
    var countinput =  $(ele).parent().find(".qtybtn").find("input").val();
    $("#countervalue"+abc).val(parseInt($("#countervalue"+abc).val())-parseInt(1));
     var addeddata = {'product':id,'quantity':updatedCount,'size':size,'serving':serving}; //create object of product
     addToArray(abc,addeddata);
     var category_id = <?php echo $category; ?>;
      $.ajax({ //get price if ingredients
        method:'POST',
        url:"<?php echo base_url('order/getIngPrice');?>",
        data:{ing:id},
        dataType:'json',
        success:function(res)
        {

          var updatedPrice = 0;
          var currentPrice = $("#price").val();
          var totlco = $("#countervalue"+abc).val();
          //alert(totlco+" "+minQty);
          if(totlco == minQty || totlco > minQty){
            updatedPrice = parseFloat(currentPrice) - parseFloat(res.price);
          }else{
            updatedPrice = parseFloat(currentPrice);
          }
          
          
          $("#pricetag").html("Price : <?php echo MONEY_SIGN; ?>"+updatedPrice+"");
          $("#price").val(updatedPrice);

        }
      }); 

    }
    
  }



    function toppingSize(ele,id,size){ //topping size

      if($(ele).closest("div .inbtn").children().hasClass("active")){
         $(ele).closest("div .inbtn").children().removeClass("active");
         return false;
      }
     
      if($("#"+id+"side").hasClass("active")){
          $("#"+id+"side").removeClass("active");
      }
      if($("#"+id+"extra").hasClass("active")){
        $("#"+id+"extra").removeClass("active");
      }
      if($("#"+id+"medium").hasClass("active")){
         $("#"+id+"medium").removeClass("active");
      }

     if($("#"+id+"light").hasClass("active")){
        $("#"+id+"light").removeClass("active");
      }
      
      var abc = $(ele).data("index");

      $(newProducts[abc]).each(function( index, element ) {
        if(element.product == id) {
          newProducts[abc].splice(index, 1);
          return false;
        }
        
      });

      var qunty =  $("#"+id+"Qty").val();

      $("div[data-salad-id='" + id + "']").children("div[data-size-id='" + id + "']").remove();

      $(".ptext").children("div[data-salad-id='" + id + "']").append("<div style='display:inline' data-size-id='" + id + "'> (" + size + ")</div>");

      
      // var serving;
      // if(typeof $("#ingServing"+id).val() === "undefined"){
      //   serving = '';
      // }else{
      //   serving = $("#ingServing"+id).val();
      // }
      $(ele).addClass("active");
      var addeddata = {'product':id,'quantity':qunty,'size':size};
      addToArray(abc,addeddata);
      $("#ingSize"+id).val(size);

    }

    function serving(ele,id,serve){ //serving side

      if($(ele).hasClass("active")){
        $(ele).removeClass("active");
      }


      $(ele).parents().find(".qtybtn").find("input").addClass("a");
      var size = $("#ingSize"+id).val();
      if(size == ""){

        toasterOptions();
        toastr.error("Please select the size first");
        return false;

      }
      var abc = $(ele).data("index");
      $(newProducts[abc]).each(function( index, element ) {
        if(element.product == id) {
          newProducts[abc].splice(index, 1);
          return false;
        }
        
      });
      $(ele).addClass("active");
      var qunty =    $("#"+id+"Qty").val();

      var addeddata = {'product':id,'quantity':qunty,'size':size,'serving':serve};
      addToArray(abc,addeddata);
      $("#ingServing"+id).val(serve);



    }

function order_now() { //order now
  var category_id = <?php echo $category; ?>;
  var name = "<?php echo $title; ?>";
  var price = $("#price").val(); 
  var slug = 'custom-salad';
  var edit = 1;
   
  $.ajax({
    method:'POST',
    url:"<?php echo base_url('order/order_now');?>",
    data:{id:category_id,name:name,selected:newProducts,price:price,slug:slug,edit:edit},
    dataType:'json',

    success:function(data)
    {
      if(data.status){
        var url = "<?php echo base_url("order/add_more"); ?>";
        window.location = url;
      } else{
        toasterOptions();
        toastr.error(data.msg);
      }
    }
  }); 
}


$(document).ready(function () {
 var height = $(window).height();
 $('.rightsidebar').css("height",height+"px");
})
</script>

