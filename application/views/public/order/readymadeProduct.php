<style type="text/css">
	.downicon{
    bottom: 0;
    right: 0;
    float: right;
    position: sticky;
    z-index: 9999;
    cursor: pointer;
  }

	.qtybtn{
		position: absolute;
		top: 178px;
   		 left: 70px;
	}

	.sczrbtn{
		display: block;
		position: absolute;
    top: 186px;
    left: 97px;
	}

	.inbtn{
		display: block;
		position: absolute;
		top: 193px;
		left: 55px;
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
	    height: 220px!important;
	    max-width: 220px!important;
	  }

  .centeraline{
	text-align: center; 
	justify-content: center; 
	display: flex;
	   margin-left: 70px;
          margin-right: 70px;
  }

	.option{
		margin-top: 100px;
	}
	.active{
		background-color: #189271 !important;
	}
	.counter{
		width: 10px;
		background: transparent;
		border: none;
	}
	/*body{
		overflow: hidden;
		}*/
		
		.hidden{
			display: none;
		}
		.animate{
			overflow-y: hidden;
			max-height: 500px; /* approximate max height */

			transition-property: all;
			transition-duration: .5s;
			transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
		}

		.hovicon_small{
			display: grid;
			align-items: center;
			text-align: center;
			margin-right: 0px;
			width: 150px;
			height: 150px;
			border-radius: 50%;
			border: 4px solid #ffff;
			align-items: center;
			cursor: pointer;
			position: relative;
		}
		.overly{
			position: absolute;
			background: rgba(0,0,0,0.7);
			height: 100%;
			width: 100%;
		}
		.overDiv{
			vertical-align: middle;

		}
		.dotted_hovicon{
			border: 4px dotted #fff;
		}
		.border_curve{
			border-radius: 100%/149px 149px 0 0;
			margin-top: 7px;

		}
		.btm-center{
			bottom: 0;
			position: fixed;
		}
		.vl {
			border-left: 4px solid #fff;
			height: 35px;
		}
		.left_pd5{
			padding-left:5%;
		}
		
	</style>
	<style type="text/css">
		body { 
			background: url('assets/images/background2.png') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color: rgba(48,194,131,0.5019607843137255);
			height: auto;
		}
		.center-text{
			color: white;
			font-size: 42px;
			font-weight: bold;	
			text-transform: capitalize;		
		}
		.circles {
		    width: 315px;
		    height: 315px;
		    border-radius: 224px;
		    margin-left: 43px;
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
			background-color: #e5acbc;
			border: 1px solid #e5acbc;
			padding: 10px 30px !important;
			border-radius: 3px;
			font-size: 15px!important;
			font-weight: 400!important;
			text-transform: capitalize!important;
			width:156px;
			color:white !important;
			outline:none !important;
		}
		.bottom-button:hover{
			background-color: #F292AE!important;
		}
		.card{
			background-color: white;
			margin-left: 53px;
			margin-right: 53px;
			border-radius: 3px;
			padding-top: 12px;
			padding-left: 12px;
			padding-right: 12px;
			padding-bottom: 36px;
			display: none;
			overflow-x: hidden;
			overflow-y: auto;
			height: 693px
		}
		.card-title{
			text-align: center;
			font-weight: bold;
		}
		.width-20{
			width: 20%;
			text-align: center;
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
		.plus-minus{
			display: none;
		}
		.custom-height{
			height: 153px;
		}
		.show{
			display: block;
		}
		.custom_margin{
			margin-left: 50px;
			margin-right: 50px;
		}
		.mt20{
			margin-top: 20px!important;
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
  .items_div{
  	font-size: 16px;
  }

.extracls{
  position: absolute !important;
    top: 71px !important;
    left: 195px !important;
}
.mediumcls{
  position: absolute !important;
    top: -27px !important;
    left: 93px  !important;  
}
.largecls{
  position: absolute !important;
    top: 71px !important;
    left: -14px !important;
}

@media (min-width: 900px) and (max-width: 1440px) {
		.circles {
				    width: 115px;
				    height: 115px;
				    border-radius: 224px;
				    margin-left: 43px;
				    background-color: rgba(48,194,131,0.5019607843137255);
				    border: 5px solid #ffffff;
				  }
				  .items_div{
				  	font-size: 14px;
				  }
			.all_center {
				
				text-align: center;
				justify-content: center;
				
			}
			.width-20{
				width: 25%;
				margin-bottom: 32px;
			}

			.round-border{
				border: 1px solid #4db68a;
				padding-top: 9px;
				border-radius: 109px;
				height: 146px;
				width: 145px;
			}
			.custom-height {
				height: 67px;
				margin-top: 27px;
			}
			.btns{
				width: 130px;

				height: 53px;
			}
			.custom_margin{
				margin-right: 0px!important;
			}
			.all_center{
				text-align: center;
				justify-content: center;
				display: grid;
				padding-left: 7px !important;
			}

			.circles {
				width: 269px;
				height: 269px;
				border-radius: 224px;
				margin-left: 0px !important;
				background-color: rgba(48,194,131,0.5019607843137255);
				border: 5px solid #ffffff;
				margin-bottom: 32px;

			}
			.plus-minus{
				display: block !important;
			}
			.textstyle {
				color: white;
				font-size: 24px;
				font-weight: bold;
				margin-top: 60px;
			}
			.text1{
				margin-top: 77px !important;
			}
			.text2{
				margin-top: 76px !important;
			}
			img.images{
				width: 93px;
			}
		
}
@media (min-width: 1025px) and (max-width: 1200px){
	.downicon{
		display: none !important;
	}
	.custom_col{
	     width: 18.66666667% !important; 
	}
	.custom_col_dressing{
		width: 20.66666667% !important; 
	}
}
@media (min-width: 1200px) and (max-width: 1440px){
	.custom_col{
	     width: 18.66666667% !important; 
	}
	.custom_col_dressing{
		width: 20.66666667% !important; 
	}
}

@media (min-width: 800px) and (max-width: 1280px) {
	.downicon{
		display: none !important;
	}
				.qtybtn{
					    top: 178px;
    					left: 70px;
				}
					.circles {
				    width: 115px;
				    height: 115px;
				    border-radius: 224px;
				    margin-left: 43px;
				    background-color: rgba(48,194,131,0.5019607843137255);
				    border: 5px solid #ffffff;
				  }
				  .items_div{
				  	font-size: 14px;
				  }
			.all_center {

				text-align: center;
				justify-content: center;
				display: grid;

			}
			.centerinmobile{
				display: flex !important;
    			justify-content: center !important;
			}
			.width-20{
				width: 25%;
				margin-bottom: 32px;
			}

			.round-border{
				border: 1px solid #4db68a;
				padding-top: 9px;
				border-radius: 109px;
				height: 146px;
				width: 145px;
			}
			.custom-height {
				height: 67px;
				margin-top: 27px;
			}
			.btns{
				width: 130px;

				height: 53px;
			}
			.custom_margin{
				margin-right: 0px!important;
			}
			.all_center{
				text-align: center;
				justify-content: center;
				
				-padding-left: 7px !important;
			}

			.circles {
				width: 269px;
				height: 269px;
				border-radius: 224px;
				margin-left: 0px !important;
				background-color: rgba(48,194,131,0.5019607843137255);
				border: 5px solid #ffffff;
				margin-bottom: 32px;

			}
			.plus-minus{
				display: block !important;
			}
			.textstyle {
				color: white;
				font-size: 24px;
				font-weight: bold;
				margin-top: 60px;
			}
			.text1{
				margin-top: 77px !important;
			}
			.text2{
				margin-top: 76px !important;
			}
			img.images{
				width: 93px;
			}
			

}

		@media (min-width: 768px) and (max-width: 1024px) {
			.downicon{
		display: none !important;
	}
			.custom_col_tab{
				float: none !important;
			}
				.left_pd5{
				padding-left:0% !important;
			}
			.centerinmobile{
				display: flex;
    			justify-content: center;
			}
				.ci::before, .ci::after{
	      		content: none !important;
	  		}
			.textstyle {
				color: white;
				font-size: 24px;
				font-weight: bold;
				margin-top: 23px;
			}
			.respns{
				text-align: center!important;
				justify-content: center!important;
				display: flex!important;
			}
			.centeraline{
				text-align: center !important; 
				justify-content: center !important; 
				display: block !important;
			  }
			.width-20{
				width: 50%;
				margin-bottom: 32px;
			}

			.round-border{
				border: 1px solid #4db68a;
				padding-top: 9px;
				border-radius: 109px;
				height: 146px;
				width: 145px;
			}
			.custom-height {
				height: 67px;
				margin-top: 27px;
			}
			.btns{
				width: 130px;
				height: 53px;
			}
			.custom_margin{
				margin-right: 0px!important;
			}
			.all_center{
				text-align: center;
				justify-content: center;
				display: grid;
				
			}

			.circles {
				width: 269px !important;
				height: 269px !important;
				border-radius: 224px;
				margin-left: 0px !important;
				background-color: rgba(48,194,131,0.5019607843137255);
				border: 5px solid #ffffff;
				margin-bottom: 32px;
				display: flex;
				text-align: center; 
				justify-content: center;

			}
			.plus-minus{
				display: block !important;
			}
			
			.text1{
				margin-top: 77px !important;
			}
			.text2{
				margin-top: 76px !important;
			}
			img.images{
				width: 93px;
			}
			.card {
				background-color: white;
				margin-left: 6px;
				margin-right: 6px;
				border-radius: 3px;
				padding-top: 12px;
				padding-left: 12px;
				padding-right: 12px;
				padding-bottom: 36px;
				display: none;
				overflow-x: hidden;
				overflow-y: auto;
				height: 693px;
				width: 330px;
			}
			
		}

		@media (min-width: 320px) and (max-width: 812px) {
			.downicon{
				display: none !important;
			}
			.left_pd5{
				padding-left:0% !important;
			}
			.centerinmobile{
				display: flex;
    			justify-content: center;
			}
			.ci::before, .ci::after{
      content: none !important;
    }
			.textstyle {
				color: white;
				font-size: 24px;
				font-weight: bold;
				margin-top: 23px;
			}
			.respns{
				text-align: center; 
				justify-content: center; 
				display: flex;
			}
			.centeraline{
				text-align: center; 
				justify-content: center; 
				display: block;
			  }
			.width-20{
				width: 50%;
				margin-bottom: 32px;
			}

			.round-border{
				border: 1px solid #4db68a;
				padding-top: 9px;
				border-radius: 109px;
				height: 146px;
				width: 145px;
			}
			.custom-height {
				height: 67px;
				margin-top: 27px;
			}
			.btns{
				width: 130px;
				height: 53px;
			}
			.custom_margin{
				margin-right: 0px!important;
			}
			.all_center{
				text-align: center;
				justify-content: center;
				display: grid;
				
			}

			.circles {
				width: 269px !important;
				height: 269px !important;
				border-radius: 224px;
				margin-left: 0px !important;
				background-color: rgba(48,194,131,0.5019607843137255);
				border: 5px solid #ffffff;
				margin-bottom: 32px;
				display: flex;
				text-align: center; 
				justify-content: center;

			}
			.plus-minus{
				display: block !important;
			}
			
			.text1{
				margin-top: 77px !important;
			}
			.text2{
				margin-top: 76px !important;
			}
			img.images{
				width: 93px;
			}
			.card {
				background-color: white;
				margin-left: 6px;
				margin-right: 6px;
				border-radius: 3px;
				padding-top: 12px;
				padding-left: 12px;
				padding-right: 12px;
				padding-bottom: 36px;
				display: none;
				overflow-x: hidden;
				overflow-y: auto;
				height: 693px;
				width: 330px;
			}

		}

	</style>
	
	<?php

	$counter = 0;
	$info = categoryInfo($category_id);

	$base = [];
	$top = [];
	$premium = [];
	$dress = [];

	$searchValue = 'product';


	$itemsArray =  json_decode($re_product->product_items);
	foreach ($itemsArray as $k => $v) {
		foreach ($v as $k2 => $v2) {
			if($k == "dress"){
				$productName = ingredients_price($v2->product);
				$array =  array('product' => $v2->product, 'product_name' => $productName->cat_pro_name, 'size' =>'Medium','serving'=>'On The Side','qty'=>$v2->quantity);
				array_push($dress, $array);
			} elseif($k == "pre"){
				$productName = ingredients_price($v2->product);
				$PreArray =  array('product' => $v2->product, 'product_name' => $productName->cat_pro_name, 'qty'=>$v2->quantity);
				array_push($premium, $PreArray);
			} elseif($k == "top"){
				$productName = ingredients_price($v2->product);
				$TopArray =  array('product' => $v2->product, 'product_name' => $productName->cat_pro_name, 'qty'=>$v2->quantity);
				array_push($top, $TopArray);
			} elseif($k == "base"){
				$productName = ingredients_price($v2->product);
				$BaseArray =  array('product' => $v2->product, 'product_name' => $productName->cat_pro_name, 'qty'=>$v2->quantity);
				array_push($base, $BaseArray);
			}
		}
	}
	?>  
<!-- style="align-items: end!important;" 
	menu-section-->
	<div class="container-fluid" style="overflow-y: hidden; overflow-x:hidden;">

		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<center>
					<span class="center-text"><?=$re_product->product_name;?> <br> 
						<div style="display: inline;" id="price"><?php echo MONEY_SIGN ?><?php echo $re_product->product_price; ?></div></span>
				</center>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="row all_center" >
				<div class="row centeraline" >
				<input id="price1" type="hidden" value="<?php echo $re_product->product_price	; ?>">
				<?php foreach ($categories as $key => $value) { 

					if($value->name == "TOPPINGS"){ ?>
						<a class="show_items top clicked" style data-id = "<?=$value->cat_id?>">
							<div class="col-lg-2 col-sm-6 respns" style="text-align: center; justify-content: center;">
								<div class="circles hovercircle">
									<center><div class="textstyle clicked"><?=$value->name?></div>

										<p class="items_div" style="color: #fff; text-align: center;">

										</p> 
									</center>

								</div>
							</div>
						</a>
					<?php }else{ 

						if(strtolower($value->name) == "toppings"){
							$arrayIndex = "top";
						}

						if(strtolower($value->name) == "premiums"){
							$arrayIndex = "pre";
						}

						if(strtolower($value->name) == "bases"){
							$arrayIndex = "base";
						}

						if(strtolower($value->name) == "dressings"){
							$arrayIndex = "dress";
						}
						?>
						<a  class="show_items  <?php echo $arrayIndex; ?>"  data-id = "<?=$value->cat_id?>">
							<div class="col-lg-3 respns" style="text-align: center; justify-content: center;">

								<div class="circles hovercircle">
									<center><div class="textstyle "><?=$value->name?></div>

										<p class="items_div" style="color: #fff; text-align: center;">

										</p> 
									</center>
								</div>

							</div>
						</a>
					<?php } } ?>
				</div>	 
				<div class="row">
					<div class="col-lg-12">&nbsp;
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">&nbsp;
					</div>
				</div>


				<!-- end top -->
	<div class="row all_center">
		<div class="card text-center scrollmain">
			<h3 class="card-title"></h3>
			
				<?php foreach ($categories as $key1 => $value1) { 

					if(strtolower($value1->name) == "toppings"){
						$arrayIndex = "top"; 
						$searchArray =  $top;
						?>
						<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($top); ?>"><?php 
					}

					if(strtolower($value1->name) == "premiums"){
						$searchArray =  $premium;
						$arrayIndex = "pre";?>
						<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($premium); ?>"><?php 
					}

					if(strtolower($value1->name) == "bases"){
						$searchArray =  $base;
						$arrayIndex = "base";?>
						<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($base); ?>"><?php 
					}

					if(strtolower($value1->name) == "dressings"){
						$searchArray =  $dress;
						$arrayIndex = "dress";?>
						<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($dress); ?>"><?php 
					}?>

					<div class="row left_pd5 centerinmobile">
					<div class=" bg-white animated slideInUp items  hidden <?=$value1->cat_id?>" data-max = "<?=$value1->maxQty?>" data-min = "<?=$value1->minQty?>" >

						<div>
							<input type="hidden" id="maxQty<?=$arrayIndex?>" value="<?=$value1->maxQty?>">
							<input type="hidden" id="minQty<?=$arrayIndex?>" value="<?=$value1->minQty?>">
							<input type="hidden" id="counter<?=$arrayIndex?>" value="<?=$counter?>">
							<?php 
							$ingredients = has_ingredeients($value1->cat_id); 
							foreach ($ingredients as $key2 => $value2) { 
								if(strtolower($value1->name) == "dressings"){ ?>
									
									<div class="col-lg-2 col-md-12 col-sm-12 custom_col_dressing option custom_col_tab" style="padding-bottom:25px;">
										<div class="ci circle ci_dressing <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'color':'spindressing'; ?>" onclick="encirecl(this,<?=$value1->cat_id?>);" data-name="<?php echo $value2->cat_pro_name ?>" data-price = "<?=$value2->cat_pro_price?>" data-id="<?php echo $value2->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
											<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value2->cat_pro_image  ?>">
											<p class="menu_text">
												<?php echo $value2->cat_pro_name ?>
											</p>
										</div>
		<div class="extracls inbtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">

			<button type="button" id="<?= $value2->cat_pro_id?>extra" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'Extra')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:33px"><br/>Extra</button>
		</div>
		<div class="mediumcls inbtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">	
			<button type="button" id="<?= $value2->cat_pro_id?>medium" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'Medium')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:27px"><br/>Medium</button>
		</div>
		<div class="largecls inbtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">
			<button type="button" id="<?= $value2->cat_pro_id?>light" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'Light')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:18px"><br/>Light</button>
		
			
			<input type="hidden" id="ingSize<?php echo $value2->cat_pro_id; ?>" value = "<?php foreach ($dress as $k => $v) {echo $v['size'];} ?>">
		</div>

				<div class="sczrbtn" style="display: <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">
					<input type="hidden" id="ingServing<?php echo $value2->cat_pro_id; ?>" value = "<?php foreach ($searchArray as $k => $v) {echo "On The Side";} ?>">
					<button type="button" id="<?= $value2->cat_pro_id?>side" class="btn-circle-top otherbtn " data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'On The Side')"><img src="<?php echo base_url(); ?>/assets/bowl.png" style="width:27px"><br/>On The Side</button>
					<!-- <button type="button" class="btn-circle-top <?php foreach ($searchArray as $kx => $vx) {
						if($vx['product'] ==  $value2->cat_pro_id && $vx['serving'] == 'Mixed'){
							echo 'active';
						}
					} ?>" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value2->cat_pro_id; ?>,'Mixed')">Mixed</button> -->

				</div>

<!-- 
										<div class="qtybtn" style="display: <?php $checkStatus = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($checkStatus)?'block':'none';  ?>;">
											<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="plus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
											<input class="counter" id="<?=$value2->cat_pro_id?>" value="<?php foreach ($searchArray as $k => $v) {


												if($v['product'] ==  $value2->cat_pro_id){
													echo $v['qty'];
												}
											} ?>">

											<input type="hidden" id="<?=$value2->cat_pro_id?>Qty" value=''>
											<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="minus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
										</div> -->
										
									</div>
								<?php }else{ ?>

									
<div class="col-lg-2 col-md-12 col-sm-12 custom_col custom_col_tab" style="padding-bottom:25px;">	
			<div class="ci circle <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'color':'spin'; ?>" onclick="encirecl(this,<?=$value1->cat_id?>);" data-name="<?php echo $value2->cat_pro_name ?>" data-price = "<?=$value2->cat_pro_price?>" data-id="<?php echo $value2->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
				<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value2->cat_pro_image  ?>">
				<p class="menu_text">
					<?php echo $value2->cat_pro_name ?>
				</p>
				 <p class="menu_text inc" style="margin-top:-15px"><?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'Included':''; ?></p> 
			</div>

			<div class="qtybtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">
				<button type="button"  data-index= "<?=$arrayIndex?>" class="btn-circle" onclick="plus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
				<input class="counter" id="<?=$value2->cat_pro_id?>" value="<?php foreach ($searchArray as $k => $v) {
					if($v['product'] ==  $value2->cat_pro_id){
						echo $v['qty'];
					}
				} ?>">

				<input type="hidden" id="<?=$value2->cat_pro_id?>Qty" value='1'>
				<button type="button" onclick="minus(this,<?=$value2->cat_pro_id?>)"  data-name="<?php echo $value2->cat_pro_name ?>" data-price = "<?=$value2->cat_pro_price?>" data-id="<?php echo $value2->cat_pro_id ?>"   data-index= "<?=$arrayIndex?>" data-catid="<?=$value1->cat_id?>" class="btn-circle" ><i class="fa fa-minus"></i></button>
			</div>

</div>

								<?php } } ?>


							</div>
						</div>
						</div>
						<input type="hidden" id="countervalue<?=@$arrayIndex?>" value="0">
					<?php } ?>
				<img class="downicon" onclick="downscroll()" src="<?php echo base_url(); ?>assets/downerror.png" width="50"/>

			</div>
		</div>
		</div>
		</div>

					<div class="col-lg-12">&nbsp;</div>
					<div class="row">
						<div class="col-lg-4">
						</div>
						<div class="col-lg-4 text-center">
							<button type="button" class="bottom-button" onclick="order_now()">Looks Good</button>
						</div>
						<div class="col-lg-4">
						</div>
					</div>
				
				<br/><br/><br/>

				<!-- end slide -->
			




		<!-- <section class="" style="padding-top:50px !important; display: flex; justify-content: center;"  >
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >	
				<h2 class="" style="text-align: center; color: #fff;"><?=$re_product->product_name;?></h2>
				<h3 class="pt-3" id="price" style="text-align: center; color: #fff;">$<?php echo $re_product->product_price; ?></h3>
				<input id="price1" type="hidden" value="<?php echo $re_product->product_price	; ?>">
				<div class="" >	
					<div class="row center-div">
						<?php foreach ($categories as $key => $value) { 

							if($value->name == "TOPPINGS"){?>
								<a class="show_items top" data-id = "<?=$value->cat_id?>">
									<div class="round sidebar-margin dotted_hovicon effect-8 mr-2" style=" width:150px !important; height: 150px !important;">
										<span class="content marginy0" ><?=$value->name?></span>
										<p  class="items_div"  style="color: #fff; text-align: center;">

										</p> 
									</div>
								</a>
							<?php }else{ 

								if(strtolower($value->name) == "toppings"){
									$arrayIndex = "top";
								}

								if(strtolower($value->name) == "premiums"){
									$arrayIndex = "pre";
								}

								if(strtolower($value->name) == "bases"){
									$arrayIndex = "base";
								}

								if(strtolower($value->name) == "dressings"){
									$arrayIndex = "dress";
								}
								?>
								<a class="show_items <?php echo $arrayIndex; ?>" data-id = "<?=$value->cat_id?>">
									<div class="round sidebar-margin hovicon effect-8 mr-2" style=" width:250px !important; height: 250px !important;">
										<span class="content marginy0"><?=$value->name?></span> 
										<p class="items_div" style="color: #fff; text-align: center;">

										</p> 
									</div>
								</a>
							<?php } } ?>

						</div>
					</div>
				</div>
				<div class=" btm-center">
					<div class="round sidebar-margin hovicon_small effect-8 mr-2" onclick="order_now()">
						<span class="content marginy0">Looks Good</span>
					</div>
				</div>
			</section>	 -->
	<!-- 		<?php foreach ($categories as $key1 => $value1) { 
				if(strtolower($value1->name) == "toppings"){
					$arrayIndex = "top"; 
					$searchArray =  $top;
					?>
					<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($top); ?>"><?php 
				}

				if(strtolower($value1->name) == "premiums"){
					$searchArray =  $premium;
					$arrayIndex = "pre";?>
					<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($premium); ?>"><?php 
				}

				if(strtolower($value1->name) == "bases"){
					$searchArray =  $base;
					$arrayIndex = "base";?>
					<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($base); ?>"><?php 
				}

				if(strtolower($value1->name) == "dressings"){
					$searchArray =  $dress;
					$arrayIndex = "dress";?>
					<input type="hidden" id="countervalue<?=$arrayIndex?>" value="<?php echo count($dress); ?>"><?php 
				}?>
				<div class="container-fluid bg-white animated slideInUp items border_curve hidden <?=$value1->cat_id?>" data-max = "<?=$value1->maxQty?>" data-min = "<?=$value1->minQty?>">
					<div class="container ">
						<section class=" ">
							<div class="row pt-5">
								<input type="hidden" id="maxQty<?=$arrayIndex?>" value="<?=$value1->maxQty?>">
								<input type="hidden" id="minQty<?=$arrayIndex?>" value="<?=$value1->minQty?>">
								<input type="hidden" id="counter<?=$arrayIndex?>" value="<?=$counter?>">
								<?php 
								$ingredients = has_ingredeients($value1->cat_id); 
								foreach ($ingredients as $key2 => $value2) { 
									if(strtolower($value1->name) == "dressings"){ ?>
										<div class="col-lg-3 col-sm-12 col-xs-12 col-md-3 option">
											<div class="ci circle  <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'color':'spin'; ?>" onclick="encirecl(this,<?=$value1->cat_id?>);" data-name="<?php echo $value2->cat_pro_name ?>" data-price = "<?=$value2->cat_pro_price?>" data-id="<?php echo $value2->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
												<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value2->cat_pro_image  ?>">
												<p class="menu_text">
													<?php echo $value2->cat_pro_name ?>
												</p>
											</div>
											<div class="inbtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">

												<button type="button" class="btn mybtn btn-circle <?php foreach ($searchArray as $k => $v) {
													if($v['product'] ==  $value2->cat_pro_id && $v['size'] == 'S'){
														echo 'active';
													}
												} ?>" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'S')">S</button>
												<button type="button" class="btn mybtn btn-circle <?php foreach ($searchArray as $k => $v) {
													if($v['product'] ==  $value2->cat_pro_id && $v['size'] == 'M'){
														echo 'active';
													}
												} ?>" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'M')">M</button>
												<button type="button" class="btn mybtn btn-circle <?php foreach ($searchArray as $k => $v) {
													if($v['product'] ==  $value2->cat_pro_id && $v['size'] == 'L'){
														echo 'active';
													}
												} ?>" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value2->cat_pro_id; ?>,'L')">L</button>

												<input type="hidden" id="ingSize<?php echo $value2->cat_pro_id; ?>" value = "<?php foreach ($dress as $k => $v) {echo $v['size'];} ?>">
											</div>

											<div class="sczrbtn" style="display: <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">
												<input type="hidden" id="ingServing<?php echo $value2->cat_pro_id; ?>" value = "<?php foreach ($searchArray as $k => $v) {echo $v['serving'];} ?>">
												<button type="button" class="btn mybtn btn-circle <?php foreach ($searchArray as $kx => $vx) {
													if($vx['product'] ==  $value2->cat_pro_id && $vx['serving'] == 'Side'){
														echo 'active';
													}
												} ?>" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value2->cat_pro_id; ?>,'Side')">Side</button>
												<button type="button" class="btn mybtn btn-circle <?php foreach ($searchArray as $kx => $vx) {
													if($vx['product'] ==  $value2->cat_pro_id && $vx['serving'] == 'Mixed'){
														echo 'active';
													}
												} ?>" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value2->cat_pro_id; ?>,'Mixed')">Mixed</button>

											</div>


											<div class="qtybtn" style="display: <?php $checkStatus = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($checkStatus)?'block':'none';  ?>;">
												<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn mybtn btn-circle" onclick="plus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
												<input class="counter" id="<?=$value2->cat_pro_id?>" value="<?php foreach ($searchArray as $k => $v) {


													if($v['product'] ==  $value2->cat_pro_id){
														echo $v['qty'];
													}
												} ?>">

												<input type="hidden" id="<?=$value2->cat_pro_id?>Qty" value=''>
												<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn mybtn btn-circle" onclick="minus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
											</div>

										</div>
									<?php }else{ ?>

										<div class="col-lg-3 col-sm-12 col-xs-12 col-md-3 option">
											<div class="ci circle   <?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'color':'spin'; ?>"  onclick="encirecl(this,<?=$value1->cat_id?>);" data-name="<?php echo $value2->cat_pro_name ?>" data-price = "<?=$value2->cat_pro_price?>" data-id="<?php echo $value2->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
												<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value2->cat_pro_image  ?>">
												<p class="menu_text">
													<?php echo $value2->cat_pro_name ?>
												</p>
												<p class="menu_text inc"><?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'Included':''; ?></p>
											</div>

											<div class="qtybtn" style="display:<?php $classChk = searchForValue($value2->cat_pro_id,$searchArray,$searchValue); echo !empty($classChk)?'block':'none'; ?>;">
												<button type="button"  data-index= "<?=$arrayIndex?>" class="btn mybtn btn-circle" onclick="plus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
												<input class="counter" id="<?=$value2->cat_pro_id?>" value="<?php foreach ($searchArray as $k => $v) {
													if($v['product'] ==  $value2->cat_pro_id){
														echo $v['qty'];
													}
												} ?>">

												<input type="hidden" id="<?=$value2->cat_pro_id?>Qty" value=''>
												<button type="button"  data-index= "<?=$arrayIndex?>" class="btn mybtn btn-circle" onclick="minus(this,<?=$value2->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
											</div>

										</div>

									<?php } } ?>


								</div>
							</section>
						</div>

					</div>
					<?php } ?> -->
<script>
		// $(document).ready(function(){
		// 	$("body").click(function(e){
		// 		if($(e.target).is(".clicked")){
		// 			var text = $(e.target).closest('.circles').find(".textstyle").text();
		// 			var check = $(".card-title").text();
		// 			$(".card-title").html(text);

		// 			if(text == check || text == ''){
		// 				$(".card").toggle();
		// 				$(".card").removeClass("show");
		// 				scroll();
		// 			}
		// 			else{
		// 				$(".card").addClass("show");
		// 				scroll();	
		// 			}
		// 		}
		// 	});
		// });
		// function scroll(){
		// 	document.querySelector('.card-title').scrollIntoView({ 
		// 		behavior: 'smooth' 
		// 	});
		// }
	</script>


					<script type="text/javascript">

						var addclass = 'color';
						var removeclass = 'spin';
						var products = [];
						var newProductscheck = [];
						<?php 
						echo "var newProducts =".$re_product->product_items.";";
						echo "var newProductscheck =".$re_product->product_items.";";
						?>


						var names = [];	
						var counter = 0;

						$(document).ready(function(){
							var pre_selected = <?php echo json_encode($premium); ?>;
							var base_selected = <?php echo json_encode($base); ?>;
							var dress_selected = <?php echo json_encode($dress); ?>;
							var top_selected  = <?php echo json_encode($top); ?>;
							$.each( pre_selected, function( key, value ) {
        $(".pre").find("p").append("<div data-salad-id='" + value.product + "'>" + value.product_name + "</div>"); //get array of product name and id only
    });
							$.each( base_selected, function( key, value ) {
        $(".base").find("p").append("<div data-salad-id='" + value.product + "'>" + value.product_name + "</div>"); //get array of product name and id only
    });
							$.each( dress_selected, function( key, value ) {
        $(".dress").find("p").append("<div data-salad-id='" + value.product + "'>" + value.product_name + "</div>"); //get array of product name and id only
    });
							$.each( top_selected, function( key, value ) {
        $(".top").find("p").append("<div data-salad-id='" + value.product + "'>" + value.product_name + "</div>"); //get array of product name and id only
    });


							$(".show_items").click(function(e){
								var id = $(this).data("id");
								var text = $(e.target).closest('.circles').find(".textstyle").text();
								if(text == "Bases"){
									$('.downicon').hide();
								}else{
									$('.downicon').show();
								}
								$(".card-title").html(text);
								
								if($("."+id).hasClass("hidden")){
									$(".card").addClass("show");
									scroll();

									$(".items").addClass("hidden");
									$("."+id).removeClass("hidden");
								}else{
									$("."+id).addClass("hidden");
									 	$(".card").toggle();
									 	$(".card").removeClass("show");
									 	scroll();
								}
							});
						});

function scroll(){
		document.querySelector('.scrollmain').scrollIntoView({ 
			behavior: 'smooth' 
		});
}

function downscroll(){
  // $(".scrolltop").animate({ scrollTop: scrollval }, "slow");
  // scrollval = scrollval + scrollval;
  $(".scrollmain").animate({scrollTop:$(document).height()}, 'slow');

}

  function addToArray(name, value) { //add products to array
  	newProducts[name].push(value);

  	console.log(newProducts);
  }


  function plus(ele,id){

  	var id = id.toString();
  	var abc = $(ele).data("index");
  	var count =   $(ele).parents(".qtybtn").find(".counter").val();
  	if(count == ""){
  		count = 1;
  	}
  	var updatedCount = parseInt(count)+parseInt(1);
  	var minQty = $("#minQty"+abc).val();
    var maxQty = $("#maxQty"+abc).val(); //get max quantity of category
    var totlco = $("#countervalue"+abc).val();

    
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
    var category_id = <?php echo $category_id; ?>;
            $.ajax({ //get price if ingredients
            	method:'POST',
            	url:"<?php echo base_url('order/getIngPrice');?>",
            	data:{ing:id},
            	dataType:'json',
            	success:function(res)
            	{
            		
            		var updatedPrice = 0;
            		var currentPrice = $("#price1").val();

            		if(totlco == minQty || totlco > minQty){
            			updatedPrice = parseFloat(res.price)+parseFloat(currentPrice);
            		}else{
            			updatedPrice = currentPrice;
            		}
      
            		$("#price").html("<?php echo MONEY_SIGN ?>"+updatedPrice);
            		$("#price1").val(updatedPrice);

            	}
            }); 


        }

        function minus(ele,id){
        	var id = id.toString();

        	var abc = $(ele).data("index");
        	var minQty = $("#minQty"+abc).val();
        	var count =   $(ele).parents(".qtybtn").find("input").val();
        	if(count<=1){
        		
        		var cat_id = $(ele).data("catid");
        		encirecl(ele,cat_id,true);
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
      var category_id = <?php echo $category_id; ?>;
      $.ajax({ //get price if ingredients
      	method:'POST',
      	url:"<?php echo base_url('order/getIngPrice');?>",
      	data:{ing:id},
      	dataType:'json',
      	success:function(res)
      	{

      		var updatedPrice = 0;
      		var currentPrice = $("#price1").val();
      		var totlco = $("#countervalue"+abc).val();

      		if(totlco == minQty || totlco > minQty){
      			updatedPrice = parseFloat(currentPrice) - parseFloat(res.price);
      		}else{
      			updatedPrice = parseFloat(currentPrice);
      		}


      		$("#price").html("<?php echo MONEY_SIGN ?>"+updatedPrice);
      		$("#price1").val(updatedPrice);

      	}
      });   
  }


}



function encirecl(ele,cat_id,remove = false) 
{
	
	var maxQty = $("."+cat_id).data("max");
    var addCounter = parseInt($("#counter").val())+parseInt(1);  // count added
    var minQty = $("."+cat_id).data("min"); // get min quantity of category
    var abc = $(ele).data("index"); // category index name
    var selectedCount = newProducts[abc].length; //selected items count
    var newCounter = parseInt(selectedCount)+parseInt(addCounter); //new counter set
    var totlco = $("#countervalue"+abc).val();
   
    if(remove == false){
	    if(newCounter>maxQty || totlco==maxQty)  //max quantity reach return false
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
      $("."+abc).find("p").append("<div data-salad-id='" + $(ele).data('id') + "'>" + $(ele).data('name') + "</div>");
      $(ele).removeClass(removeclass); //remove class selected
      var addeddata = {'product':n,'quantity':1,'size':""}; //create object of product
      addToArray(abc,addeddata);
      $(ele).parent().find(".inbtn").fadeIn();
      $(ele).parent().find(".sczrbtn").fadeIn();
      $(ele).parent().find(".qtybtn").fadeIn();
      $("#countervalue"+abc).val(parseInt($("#countervalue"+abc).val())+parseInt(1));
      // var prc = $(ele).data('price');
      // $(ele).find(".inc").html("<?php echo MONEY_SIGN ?>"+prc);
      var currentPrice = $("#price1").val();
      var updatedPrice = 0;
      
      if(minQty < 1 || totlco >= 4){
      	var prc = $(ele).data('price');
        $(ele).find(".inc").html("<?php echo MONEY_SIGN ?>"+prc);
      	updatedPrice = parseFloat(prc)+parseFloat(currentPrice);

      }else{
        $(ele).find(".inc").html("Included");
      	updatedPrice = parseFloat(currentPrice);
      }
      
      $("#price").html("<?php echo MONEY_SIGN ?>"+updatedPrice);
      $("#price1").val(updatedPrice);
      $("#"+item).val(parseInt(1));
  } else {
  		
      // remove form array
      counter--;
      var prc = $(ele).data('price');
      var currentPrice = $("#price1").val();
      var updatedPrice = 0;
   //    alert(minQty);
	  // alert(totlco);    
      if(minQty < 1 || totlco > 4){
      	updatedPrice = parseFloat(currentPrice)-parseFloat(prc); 
      }else{
      	updatedPrice = currentPrice;
      }

      $("#price").html("<?php echo MONEY_SIGN ?>"+updatedPrice);
      $("#price1").val(updatedPrice);

      $(ele).addClass(removeclass);
      var item = $(ele).data('id');

      if(remove == true){
      	 $(ele).parent().prev().addClass(removeclass);
      	 $(ele).parent().prev().removeClass(addclass);
      	 $(ele).parent().css({'display': 'none'});
  		}
      var n = item.toString();
     $("."+abc).find("p").children("div[data-salad-id='" + $(ele).data('id') + "']").remove(); //remove form list
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
     
     $(ele).find(".inc").html("");
 }

 var category_id = <?php echo $category_id; ?>;

}

	var sizeother = "";
	var sizeonsize = "";
    function toppingSize(ele,id,size){ //topping size
      
    	var remove = false;
    	if($(ele).closest("div .inbtn").children().hasClass("active")){
         $(ele).closest("div .inbtn").children().removeClass("active");
         $("div[data-salad-id='" + id + "']").children("div[data-size2-id='" + id + "']").remove();
         sizeother = '';
         remove = true;
      }
     
      //if($("#"+id+"side").hasClass("active")){
    	      //$("#"+id+"side").removeClass("active");
    	     // $(ele).toggleClass("active");
      //}
      // alert(size);
      
      if(size == "On The Side"){
      		$(ele).toggleClass("active");

	      	if($("#"+id+"side").hasClass("active")){
	      	$(".items_div").children("div[data-salad-id='" + id + "']").append("<div style='display:inline' data-size-id='" + id + "'> (" + size + ")</div>");
	      	sizeonsize = size;
	      	}else{
	      		$("div[data-salad-id='" + id + "']").children("div[data-size-id='" + id + "']").remove();
	      		sizeonsize = '';
	      	}
      }

      if(size != "On The Side" && remove == false){
      		sizeother = size;
		      if($("#"+id+"extra").hasClass("active")){
		        $("#"+id+"extra").removeClass("active");
		      }

		      if($("#"+id+"medium").hasClass("active")){
		         $("#"+id+"medium").removeClass("active");
		      }

		     if($("#"+id+"light").hasClass("active")){
		        $("#"+id+"light").removeClass("active");
		      }
		     
		      var qunty =  $("#"+id+"Qty").val();

		       $("div[data-salad-id='" + id + "']").children("div[data-size2-id='" + id + "']").remove();

		       $(".items_div").children("div[data-salad-id='" + id + "']").append("<div style='display:inline' data-size2-id='" + id + "'> (" + size + ")</div>");
		       $(ele).addClass("active");
       }else{
       	remove = true;
       }

        	var abc = $(ele).data("index");

		      $(newProducts[abc]).each(function( index, element ) {
		        if(element.product == id) {
		          newProducts[abc].splice(index, 1);
		          return false;
		        }
		        
		      });
      	
      // var serving;
      // if(typeof $("#ingServing"+id).val() === "undefined"){
      //   serving = '';
      // }else{
      //   serving = $("#ingServing"+id).val();
      // }
     	// alert(sizeonsize);
     	// alert(sizeother);
      var sizepass =  sizeother;
      //alert(sizepass);
      var addeddata = {'product':id,'quantity':qunty,'size':sizepass,'serving':sizeonsize};
      //console.log(addeddata);
      addToArray(abc,addeddata);
      $("#ingSize"+id).val(sizepass);
      sizepass = '';
    }

    function serving(ele,id,serve){ //serving side

    	if($(ele).closest("div .sczrbtn").children().hasClass("active")){
    		$(ele).closest("div .sczrbtn").children().removeClass("active");
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

//newProductscheck

function order_now() { //order now
	var customtitel = "";
	var checkary1 = [];
	var checkary2 = [];
	var i = 0;
	var j = 0;

	$.each( newProducts, function( index, value ){
		$.each( value, function( index2,  value2 ){
			checkary1[i] = value2.product;
			i++;
		});
	});
	$.each( newProductscheck, function( index, value ){
		$.each( value, function( index2,  value2 ){
			checkary2[j]  = value2.product;
			j++;
		});
	});

	var edit = 0;
	if(JSON.stringify(checkary1) != JSON.stringify(checkary2)) {
		customtitel = "Custom ";
		edit = 1;
	}

	var category_id = <?php echo $category_id; ?>;
	var name = customtitel + "<?php echo $title; ?>";
	var slug = "<?php echo $re_product->product_slug; ?>";
	var price = $("#price1").val();

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






</script>

