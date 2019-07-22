
	<style type="text/css">
		body { 
			background: url('assets/images/backgroundimgae.png') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color: rgba(48,194,131,0.5019607843137255);
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
		}
		.bottom-button{
			    background-color: #fba7b0;
			    border: 2px solid white;
			    color: white;
			    font-size: 29px;
			    margin-bottom: 28px;
			    padding-left: 15px;
			    padding-right: 15px;
			    padding-top: 5px;
			    padding-bottom: 8px;
			    font-weight: bold;
			    border-radius: 4px;
			    margin-top: 83px;
		}

		@media (max-width: 991px) and (min-width: 768px){
			
			.bottom-button {

			    background-color: #fba7b0;
			    border: 2px solid white;
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
		@media (max-width: 570px) and (min-width: 320px){
			body{
				overflow: scroll;
				margin:10px;
			}
			.imgset {
			    margin-top: -15px !important;
			    margin-right: 0px !important;
			    width:50px;
				height:50px;
			}

			.bottom-button {
			    background-color: #fba7b0;
			    border: 2px solid white;
			    color: white;
			    font-size: 16px;
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

		
	</style>

<div class="container">
		<div class="col-lg-12" style="margin-top:-50px;">
			<div class="row">
				<div class="col-lg-12"><center><div class="textstyle">WOULD YOU LIKE TO ADD ANYTHING?</div></center></div>
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
			foreach ($categories as $key => $value) { 
			if(!empty($value->cat_id)){ ?> 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
					<center>
						<a href="<?php echo base_url('order/subcategory/').$value->cat_id; ?>">
							<div class="col-lg-2 circles hovercircle pl0sm">
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
				
				<?php if($i % 3 == 0){?>
					</div>
					<div class="custom_row displayflex" style="text-align: center; justify-content: center;  margin-left:50px;">
				<?php } ?>
			<?php $i++; } }?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
					<center>
						<a href="<?php echo base_url('order/drinks/'); ?>">
							<div class="col-lg-2 circles hovercircle pl0sm">
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
					
			
			
							
			</div>
		</div>
		<!-- end -->
		
		<!-- end -->
</div>
<div class="col-lg-12">
	<div class="row">
			
				
				<center>
					<a href="<?php echo base_url('order/view_cart'); ?>"><button type="button" class="bottom-button" style="">NO THANKS</button>
					</a>
				</center>
				
			
</div>
</div>
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



