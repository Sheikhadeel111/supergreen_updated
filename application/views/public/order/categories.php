<style type="text/css">
	.overly{
		position: absolute;
		background: rgba(0,0,0,0.7);
		height: 100%;
		width: 100%;
	}
	.overDiv{
		vertical-align: middle;

	}
	.abc{
		cursor: pointer;
	}
	/*
	.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  */
  body { 
  	background: url('assets/images/background2.png') no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
  	background-color: white !important;
  	height: 100%;
  	width: 100%;
  }
  .margin{
  	height: 60px;
  }
  .circles {
  	width: 280px;
  	height: 280px;
  }
  .imgset{
  	margin-top:0px;
  	margin-right:0px;
  }
  .plateimage{
  	width: 240px; 
  	height: 250px; 
  	margin-top:10px; 
  	border-radius:50%;
  	
  	background-size: 290px 290px;
  }

  .textcolor{
  	color:white;
  	font-size:24px;
  	font-weight: bold;
  	text-transform: capitalize!important;
  }
  .crettoppadng{
  	margin-top:-10px;
  	font-size:20px;
  }
  .basetextsize{
  	font-size: 16px;
  }
 
  @media (max-width: 1024px) and (min-width: 768px){
  	.plateimage{
  	width: 225px !important; 
  	height: 225px !important; 
  	margin-top:10px; 
  	border-radius:50%;
  	
  	background-size: 290px 290px;
  }
  .crettoppadng{
  			font-size:14px !important;
	  }
	  .basetextsize{
  	font-size: 14px !important;
  }
	 
  }
   @media (max-width: 1366px) and (min-width: 1024px){
  	.plateimage{
  	width: 240px !important; 
  	height: 250px !important; 
  	margin-top:10px; 
  	border-radius:50%;
  	
  	background-size: 290px 290px;
  }
	 
  }
  @media (max-width: 570px) and (min-width: 320px){
  	body{
  		overflow: scroll;
  		margin:10px;
  	}
  	.crettoppadng{
  			margin-top:-35px;
  			font-size:12px !important;
	  }
	  .basetextsize{
  	font-size: 12px !important;
  }

	  .plateimage{
		  	width: 110px !important; 
		  	height: 110px !important; 
		  	margin-top:10px; 
		  	border-radius:50%;
		  	background-size: 290px 290px;
  		}

  		 .circles {
		  	width: 120px !important;
		  	height: 120px !important;
		  }
	 
  }



</style>

<?php 
$count = count($products);
if($count==0){
	?>

	<div class="overDiv" style="display: grid">
		<div class="container" style="display: grid;align-items: center; text-align: center;">
			<div class="row">
				<div class="col-md-12">
					<h4 style="color: #fff; text-align: center;">No Product Available</h4>
					<hr class="colorgraph">
					<div class="col-xs-12 col-md-12">
						
						<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn btn-success btn-lg">Go Back</a></div>
					</div>	
				</div>
			</div>
			
		</div>
		<style type="text/css">
			.deactive{
				cursor: not-allowed;
				opacity: 0.5;
			}
		</style>

	<?php return; } ?>
<!-- <section class="menu-section pt50">
	<div class="  col-xs-8 col-md-8 container ">
		<div class="row	center-div">
			<?php 
			$i = 0;
			foreach ($products as $key => $value) {
				if($value->product_status == 1){ ?>
				<a class="bigcircles effect-8 customlink" style="cursor: not-allowed; opacity: 0.5;">
					<div class=" col-lg-offset-4 ">
						<p class="content text-center">
							<?php echo $value->product_name; ?>
								<br>$
								<?php echo $value->product_price; ?>
						</p>
					</div>
				</a>

				<?php }else{ ?>
				<a <?php if($value->product_custom == 1){ ?> href="<?php echo base_url('order/readymade/').$value->product_slug."/".$value->product_id; ?>" <?php } ?> data-category = "<?php echo $value->product_category; ?>" data-id = "<?php echo $value->product_id; ?>" data-slug ="<?=$value->product_slug?>" data-name="<?php echo $value->product_name; ?>" data-selected = "<?php echo $value->product_items; ?>" data-custom = "<?=$value->product_custom?>"  class="bigcircles effect-8 customlink <?php if($value->product_custom == 0){ echo 'abc'; } ?>">
					<div class=" col-lg-offset-4 ">
						<p class="content text-center">
							<?php echo $value->product_name; ?>
								<br>$
								<?php echo $value->product_price; ?>
						</p>
					</div>
				</a>
			<?php } ?>
				<?php if($i == 0){ if(isset($create)){?>
					<a href="<?php echo base_url('order/product/').$category; ?>" class="bigcircles effect-8 customlink">
						<div class="col-lg-offset-4 ">
							<p class="content">CREATE YOUR OWN 
						</div>
					</a>
					<?php 
				} }
			 	$i++; 
			 } 

		?>
		</div>
	</div>
</section> -->

<div class="container">
	<div class="col-lg-12" style="margin-top:-100px;">
		<div class="row">
			<?php $nameofcat = categoryInfo($category);?>
			<div class="col-lg-11"><center><div class="textstyle"><?php echo ucfirst($nameofcat->name); ?></div></center></div>
		</div>
		<div class="row ">
			<div class="custom_row displayflex" style="text-align: center; justify-content: center; ">
				<?php 
				$i = 1;
				foreach ($products as $key => $value) {
							//echo $i % 3;
					if($value->product_status == 1){ 
						?>
						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0">
							<center>
								<a href="">
									<div class="col-lg-2 circles hovercircle pl0sm" >
										<div class="plateimage" style="background: url('assets/images/products/<?php echo $value->product_image; ?>') no-repeat center center; background-size: cover;">
											<div class="vertical_center">
												<div class="textcolor"><?php echo $value->product_name; ?></div>
												<div class="textcolor" ><?php echo MONEY_SIGN; ?><?php echo $value->product_price; ?></div>
											</div>
										</div>
									</div>
								</a>
							</center>
						</div>
						<?php if($i % 3 == 0){?>
						</div>
						<div class="custom_row displayflex" style="text-align: center; justify-content: center; ">
						<?php } ?>

					<?php }else{ ?>
						<?php if(sizeof($products) == 1){ ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt20 plr0" >
						<?php }else{ 	?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt20 plr0" >	
						<?php } ?>
							<center>
								<a <?php if($value->product_custom == 1){ ?> href="<?php echo base_url('order/readymade/').$value->product_slug."/".$value->product_id; ?>" <?php }  ?> data-category = "<?php echo $value->product_category; ?>" data-id = "<?php echo $value->product_id; ?>" data-slug ="<?=$value->product_slug?>" data-name="<?php echo $value->product_name; ?>" data-selected = '<?php echo $value->product_items; ?>' data-custom = "<?=$value->product_custom?>"  class="effect-8 customlink <?php if($value->product_custom == 0){ echo 'abc'; } ?>">

									<div class="col-lg-2 circles hovercircle pl0sm">
										<div class="plateimage" style=" background: url('assets/images/products/<?php echo $value->product_image; ?>') no-repeat center center; background-size: cover;">
											<div class="vertical_center">
												<div class="textcolor">
													<?php echo $value->product_name; ?></div>
													<div class="textcolor"><?php echo MONEY_SIGN; ?><?php echo $value->product_price; ?></div>
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
							
						<?php } ?>
						
						
						<?php $i++; } ?>
						
					</div>
					
				</div>
				<div class="col-lg-12 mt20">
					<div class="row">
						<div class="col-lg-4">&nbsp;</div>
						<div class="col-lg-4">
							<center>
								<a href="<?php echo base_url('order/product/').$category; ?>">
									<div class="col-lg-2 circles hovercircle" style="width: 270px; height: 270px; ">
										<div class="vertical_center">
								<center><div class="textcolor crettoppadng">Make Your Own<br/><?php echo MONEY_SIGN; ?> 8.25<div class="basetextsize">2 Bases + 4 Toppings + Dressing</div></div></center>
										</div>
									</div>
								</a>
							</center>
						</div>
					</div>
				</div>
				<!-- end -->
			</div>
			<div class="col-lg-12">&nbsp;</div>
		</div>
			<script type="text/javascript">

				$(document).ready(function(){
					$(".abc").click(function(){
						var category_id = $(this).attr('data-category');
						var name = $(this).attr('data-name');
						var product_id = $(this).attr('data-id');
						var slug = $(this).attr('data-slug');
						var custom = $(this).attr('data-custom');
						var selected2 = $(this).attr('data-selected');
						var selected = JSON.parse(selected2);
						
						$.ajax({
							method:'POST',
							url:"<?php echo base_url('order/order_now');?>",
							data:{selected:selected,id:category_id,name:name,flag:1,productid:product_id,slug:slug,custom:custom},
							dataType:'json',

							success:function(res)
							{
								if(res.status){
									var url = "<?php echo base_url("order/add_more"); ?>";
									window.location = url;
									toastr.success(res.msg);
								}
								else
								{
									toasterOptions();
									toastr.error(res.msg);

								}
							}
						}); 

					});
				});

			</script>