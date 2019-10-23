	<style type="text/css">
		body { 
			background: url('assets/images/background2.png') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color: white !important;
		  	height: auto;
		  	width: 100%;
		  	clear: both;
		}
		.margin{
			height: 60px;
		}
		.circles {
			width: 300px;
			height: 300px;
		}
		.imgset{
			margin-top:-20px;
			margin-right:0px;
			width:60px;
				height:60px;
		}
		.plateimage{
			
			height: 320px;
			width: 275px;
			background-size: 290px 290px;
		}
		.textcolor{
			color:white;
			font-size:24px;
			font-weight: bold;
			text-transform: capitalize!important;
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
		.crettoppadng{
  	margin-top:-10px;
  	font-size:20px;
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
				height: 400px !important;

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
				text-transform: capitalize !important;
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
			.circles {
				width: 130px !important;
				height: 130px !important;
			}
			
		}

		
	</style>
	
<?php 
$count = count($categories);
if($count==0){
	?>

	<div class="overly overDiv" style="display: grid">
		<div class="container" style="display: grid;align-items: center; text-align: center;">
			<div class="row">
				<div class="col-md-12">
					<h4 style="color: #fff; text-align: center;">No Category Available</h4>
					<hr class="colorgraph">
					<div class="col-xs-12 col-md-12">
						<a href="<?php echo base_url(); ?>" class="btn btn-success btn-lg">Go Back</a></div>
					</div>	
				</div>
			</div>

		</div>

	<?php } ?>
<!-- <section class="menu-section pt50" >
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " >	
		<div class="" >	
			<div class="row center-div">

				

			<?php
			    foreach ($categories as $key => $value) { ?>
			    		<a href="<?php echo base_url('order/subcategory/').$value->cat_id; ?>">
			    			<div class="round sidebar-margin hovicon effect-8">
			    				<span class="content marginy0"><?php echo $value->name; ?></span>
			    			</div>
			    		</a>
			    		<?php
			    } 
    		?>
			</div>
		</div>
	</div>
</section>	 -->

<!-- <div class="row mt20 mb70 margin custom_margin mt20 mb70" >
			<button type="button" class="pull-right btns btnhover"><i class="fa fa-times"></i> Cancel</button>
			<button type="button" class="pull-left btns btnhover"><i class="fa fa-arrow-left"></i> Back</button>
		</div> -->
<div class="container">
		

		<div class="col-lg-12">&nbsp;</div>

		<div class="col-lg-12">
			<div class="row">
				<div class="custom_row displayflex" style="text-align: center; justify-content: center;">
		<?php
		$i = 1;
		$saladid = 0;
		 foreach ($categories as $key => $value) { ?>
		 	<?php if($key == 0) {$saladid = $value->cat_id;} ?>
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
					<div class="custom_row displayflex" style="text-align: center; justify-content: center;">
				<?php } ?>
			<?php $i++; } ?>
					
			
			
							
			</div>
		</div>
		<!-- end -->
		
		<!-- end -->
</div>
<div class="col-lg-12 mt20">
					<div class="row">
						<div class="col-lg-4">&nbsp;</div>
						<div class="col-lg-4">
							<center>
								<a href="<?php echo base_url('order/product/'.$saladid) ?>">
									<div class="col-lg-2 circles hovercircle" style="width: 280px; height: 280px;">
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
<br/>

<!-- 		<div class="container">
				<div class="col-lg-12">
						<div class="row" style="text-align: center; justify-content: center;display: flex;">
							<center>

							<?php foreach ($categories as $key => $value) {
								
							 ?>
								<a href="<?php echo base_url('order/subcategory/').$value->cat_id; ?>">
									<div class="col-lg-2  circles hovercircle"><center>
				<img src="<?=base_url().'assets/images/category/'.$value->cat_image?>" class="imgset"/>
										<div class="textstyle"><?php echo $value->name;  ?></div>

									</div>
								</a>
							<?php } ?>
							</center>
							
						</div>
				</div>
		</div> -->


						<!-- <a href="" class="mt20"><div class="col-lg-2 mt30sm circles hovercircle" style="margin-left:10px;"><center><img src="assets/images/cupimage.png" class="imgset" /><div class="textstyle">WARM BOWLS</div></center></div></a> -->