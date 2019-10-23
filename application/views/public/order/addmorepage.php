
	<style type="text/css">
		body { 
			background: url('assets/images/background2.png') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color: rgba(48,194,131,0.5019607843137255);
			width: 100%;
			height: 100%;
		}
		.margin{
			height: 60px;
		}
		.circles {
			width: 280px;
  	height: 280px;
		}
		.imgset{
			margin-top:-20px;
			margin-right:0px;
			width:60px;
				height:60px;
		}
		.plateimage{
			
			width: 240px; 
  	height: 250px;
			background-size: 290px 290px;
		}
		.textcolor{
			color:white;
			font-size:24px;
			font-weight: bold;
			text-transform: capitalize!important;
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
		    margin-top: 83px;
		    outline: none !important;
			    /*background-color: #e5acbc;
			    border: none;
			    color: white;
			    font-size: 25px;
			    margin-bottom: 28px;
			    padding-left: 25px;
			    padding-right: 25px;
			    padding-top: 15px;
			    padding-bottom: 15px;
			    font-weight: bold;
			    border-radius: 4px;
			    margin-top: 83px;*/
		}
		.bottom-button:hover{
   		   background-color: #F292AE !important;
   		 }

		@media (max-width: 991px) and (min-width: 768px){
			
			.bottom-button {

			    background-color: #e5acbc;
			    color: white;
			    font-size: 24px;
			    margin-bottom: 28px;
			    padding-left: 15px;
			    padding-right: 15px;
			    padding-top: 5px;
			    padding-bottom: 8px;
			    font-weight: bold;
			    border-radius: 4px;
			    margin-top: 83px;

}
		}
		@media (max-width: 650px) and (min-width: 320px){
			.mobileleft{
				margin-left: 30px !important;	
			}
			body{
				overflow: scroll;
				margin:10px;
			}
			.textstyle{
				font-size:18px !important;
			}
			.circles {
			width: 120px !important;
  			height: 120px !important;
			}
			.imgset {
			    margin-top: -15px !important;
			    margin-right: 0px !important;
			    width:40px;
				height:40px;
			}
			.textcolor{
				color:white;
				font-size:13px !important;
				font-weight: bold;
				text-transform: capitalize!important;
			}


			.bottom-button {
			    background-color: #e5acbc;
			    color: white;
			    font-size: 16px;
			    margin-bottom: 28px;
			    padding-left: 15px;
			    padding-right: 10px;
			    padding-top: 5px;
			    padding-bottom: 8px;
			    font-weight: bold;
			    margin-right: 0px !important;
			    border-radius: 4px;
			    margin-top: 83px;

			}
			
		}

		
	</style>

<div class="container">
		<div class="col-lg-12" style="margin-top:-50px;">
			<div class="row">
				<div class="col-lg-12"><center><div class="textstyle">Would you like to add anything else?</div></center></div>
			</div>
		</div>

		<div class="col-lg-12">&nbsp;</div>

		<div class="col-lg-12">
			<div class="row">
				<div class="custom_row displayflex" style="text-align: center; justify-content: center; ">
		<?php
			$count = count($categories);
			  $drinks = array("name"=>"Drinks");
			    $addToArray = arrayToObj($drinks);	
			    $categories[$count] = $addToArray;
			    $newcount = count($categories);
			    $i = 1;	
			    $saladid = 0;
			foreach ($categories as $key => $value) { 
				 if($key == 0) {$saladid = $value->cat_id;}
			if(!empty($value->cat_id)){ ?> 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
					<center>
						<a href="<?php echo base_url('order/subcategory/').$value->cat_id; ?>">
							<div class="col-lg-2 circles hovercircle pl0sm" style="float: none !important;">
								<div class="plateimage">
									<div class="vertical_center">
									<img src="<?php echo PRODUCT_IMAGE_UPLOAD_CETAGORY.$value->cat_image;  ?>" class="imgset">
									<div class="textcolor"><?php echo $value->name; ?></div>
									</div>
								</div>
							</div>
						</a>
					</center>
				</div>
				
				<?php if($i % 2 == 0){?>
					</div>
					<div class="custom_row displayflex" style="text-align: center; justify-content: center;  ">
				<?php } ?>
			<?php $i++; } }?>
			
			
					
			
			
							
			</div>
		</div>
		<!-- end -->
		
		<!-- end -->
</div>
	<div class="col-lg-12 mt20">
		<div class="row">
					<div class="custom_row displayflex" style="text-align: center; justify-content: center; ">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
								<center>
									<a href="<?php echo base_url('order/drinks/'); ?>">
										<div class="col-lg-2 circles hovercircle pl0sm" style="float: none !important;">
											<div class="plateimage">
												<div class="vertical_center">
												<img src="<?php echo base_url('assets/images/'); ?>bottles.png" class="imgset">
												<div class="textcolor">Drinks</div>
												</div>
											</div>
										</div>
									</a>
								</center>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
							<center>
								<a href="<?php echo base_url('order/product/'.$saladid) ?>">
									<div class="col-lg-2 circles hovercircle" style="float: none !important;">
										<div class="vertical_center">
									<img src="<?php echo base_url(); ?>assets/new.png" class="imgset">
									<div class="textcolor">Make Your Own</div>
									</div>
									</div>
								</a>
							</center>
						</div>
					</div>
		    </div>
	</div>
</div>
<div class="col-lg-12">

				
				<center>
					<a href="<?php echo base_url('order/view_cart'); ?>"><button type="button" class="bottom-button" style="">No Thanks</button>
					</a>
				</center>
				
			

</div>
<br/><br/><br/>
<!-- <div class="container">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center text-white">WOULD YOU LIKE TO ADD ANYTHING?</h2>
	</div>
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	<div class="row center-div d-flex justify-content-around"> 
		<?php
			$count = count($categories);
			  $drinks = array("name"=>"Drinks");
			    $addToArray = arrayToObj($drinks);	
			    $categories[$count] = $addToArray;
			    $newcount = count($categories);	
			foreach ($categories as $key => $value) { 
			if(!empty($value->cat_id)){ ?> 
				<a href="<?php echo base_url('order/subcategory/').$value->cat_id; ?>" class="hovicon bighovicons  effect-8">
					<span class="content"><?php echo $value->name; ?></span>
				</a>
				<?php } else { ?>
					<a href="<?php echo base_url('order/drinks/'); ?>" class="hovicon bighovicons  effect-8">
					<span class="content"><?php echo $value->name; ?></span>
				</a>
				<?php } 
} ?>
		

		
		<a href="<?php echo base_url('order/view_cart'); ?>" class="nothankscircle hovicon effect-8" >
			<span class="content">no thanks</span>
			
		</a>
		







</div>
	</div>

</div>



</div>
 -->



