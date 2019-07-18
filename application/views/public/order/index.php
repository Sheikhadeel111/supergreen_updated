<style type="text/css">
	/*.overly{
		position: absolute;
		background: rgba(0,0,0,0.7);
		height: 100%;
		width: 100%;
	}
	.overDiv{
		vertical-align: middle;

	}
	.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);*/

  body { 
  	background: url('assets/images/backgroundimgae.png') no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
  	overflow: hidden;
  	background-color: rgba(48,194,131,0.5019607843137255);

  }
  @media(min-width: 320px) and (max-width: 570px){
  	.circles {
  		width: 250px !important;
  		height: 250px!important;
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
		</div>


						<!-- <a href="" class="mt20"><div class="col-lg-2 mt30sm circles hovercircle" style="margin-left:10px;"><center><img src="assets/images/cupimage.png" class="imgset" /><div class="textstyle">WARM BOWLS</div></center></div></a> -->