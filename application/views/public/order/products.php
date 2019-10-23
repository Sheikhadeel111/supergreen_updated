<style type="text/css">
	.active{
		background-color: #189271 !important;
	}
	.counter{
		width: 10px;
		background: transparent;
		border: none;
	}

	.qtybtn{
		position: absolute;
		top: 169px;
		left: 50px;
	}

</style>
<?php

$productItems = [];
$productSize = [];
if(isset($selected)){
	foreach ($selected as $key => $value) {
		foreach ($value as $key2 => $value2) {
			//if($key == "dress"){
			$array =  array('product' => $value2['product'], 'size' =>$value2['size'],'quantity' => $value2['quantity']);
			array_push($productSize,$array);
			//}
				array_push($productItems,$value2['product']); //sort the selected items in array
			}
		}
	}
	//debug($productSize);
	?> 
	<!-- animated fadeInDown -->
	<div class="animated fadeInDown">
		<h3 class="card-title"><?php echo $subcategories->name; ?></div>
			<h5 class="sub-title" style="padding-right: 5px; padding-left: 5px;">
			<?php if($subcategories->name == 'Bases'){?>
			 Choose a green, grain or both 
			<?php }else if($subcategories->name == 'Toppings'){?>
			 Pick your favorite topping, addons are priced as shown upon
			<?php }else if($subcategories->name == 'Premiums'){?>	
			Pick your favorite premium! Priced as shown upon selection
			<?php }else if($subcategories->name == 'Dressings'){?>	
			 Choose your dressing. Tell us how much, mixed or on the side?
			<?php } ?>	
			</h5>
			<br/>

			<div class="row left_pd" style="text-align: center;">
				<?php 

				$counter = 0;
				if(isset($productID))
				{
					$productIng = getProductIngredients($productID,$subcategories->cat_id);
					$counter = count($productIng);
				}

				if($flag == 1)
				{
					$counter = $ingsCount;
				}


				if(strtolower($subcategories->name) == "toppings"){
					$arrayIndex = "top";
				}

				if(strtolower($subcategories->name) == "premiums"){
					$arrayIndex = "pre";
				}

				if(strtolower($subcategories->name) == "bases"){
					$arrayIndex = "base";
				}

				if(strtolower($subcategories->name) == "dressings"){
					$arrayIndex = "dress";
				}


				$category = categoryInfo($subcategories->parent);

				$allProducts = ingredients($subcategories->cat_id); 
				$count = 1;
				$vale = 1;
				$qtycount = 0;
				foreach ($allProducts as $key => $value) { 

					$qtyval = 1;
					foreach($productSize as $val){
						if(@$value->cat_pro_id == @$val['product']){
							$qtyval = (int)$val['quantity'];
							$qtycount = $qtycount + $qtyval;
						}
					}
					 $rowlen = 5;
					if(strtolower($subcategories->name) == "dressings"){
						$rowlen = 4;
					}
					if($count % $rowlen == 0){
						$count = 1;
						echo '</div><br/><br/>';
						echo '<div class="row left_pd" style="text-align: center;">';
					}

					if($value->status == 1){ 

						?>
						<div class="col-lg-2 col-sm-12 col-xs-12 col-md-2 ci " style="cursor: not-allowed; opacity: 0.5;"> <img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
							<p class="menu_text">
								<?php echo $value->cat_pro_name ?>
							</p>
						</div>

					<?php }
					if(strtolower($subcategories->name) == "dressings"){ ?>
						<?php $done_button = true; 
							  $next_button = false;
							  
						?>

						<div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12 option left_pd" style=" !important; padding-right:0px !important; z-index: 999;">
							<div class="posrelivt">
							<div class="ci_dressing <?php if (in_array($value->cat_pro_id, $productItems)) { echo "color"; }else{ echo "spindressing"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
								<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
								<p class="menu_text">
									<?php echo $value->cat_pro_name ?>
								</p>
								<!-- <p class="menu_text inc"></p> -->
							</div>
							
							<div class="sczrbtn" style=" <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>">
								<input type="hidden" id="ingServing<?php echo $value->cat_pro_id; ?>" value = "">

								<button type="button" id="<?= $value->cat_pro_id?>side" class="btn-circle-top otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'On The Side')"><img src="<?php echo base_url(); ?>/assets/bowl.png" style="width:27px"><br/>On The Side</button>
								<!-- <button type="hidden" class="btn-circle-top" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value->cat_pro_id; ?>,'Mixed')">Mixed</button> -->
							</div>
							
			<div class="extracls inbtn"  style="<?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">

				<button type="button" id="<?= $value->cat_pro_id?>extra" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'Extra')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:33px"><br/>Extra</button>
			</div>

			<div class="mediumcls inbtn" id="<?= $value->cat_pro_id?>"  style="<?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">

				<button type="button" id="<?= $value->cat_pro_id?>medium" data-id="<?= $value->cat_pro_id?>" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'Medium')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:27px"><br/>Medium</button>
			</div>

			<div class="largecls inbtn" id="<?= $value->cat_pro_id?>"  style="<?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">

				<button type="button" id="<?= $value->cat_pro_id?>light" class="btn-circle otherbtn" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'Light')"><img src="<?php echo base_url(); ?>/assets/dropicon.png" style="width:18px"><br/>Light</button>

				<input type="hidden" id="ingSize<?php echo $value->cat_pro_id; ?>" value = "">
			</div>
							
				<center>

							<div class="qtybtn" style="display: none;" style="<?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>";>
								<button style="display: none;" type="button"  data-index= "<?=$arrayIndex?>"class="btn-circle" onclick="plus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
								<input class="counter" style="display: none;" id="<?=$value->cat_pro_id?>" value="<?= $qtyval ?>">
								<input style="display: none;" type="hidden" id="<?=$value->cat_pro_id?>Qty" value=''>
								<button style="display: none;" type="button"  data-index= "<?=$arrayIndex?>" class="btn-circle" onclick="minus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
							</div>
				</center>

							<br/><br/><br/>
						</div>
					</div>

					<?php } else { ?>
						<!-- <div class="col-md-3 width-20  option" >
							<div class=" ">
								<div class="ci circle <?php if (in_array($value->cat_pro_id, $productItems)) { echo "color"; }else{ echo "spin"; }?>"  
									onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>"
									>
									<div class="custom-height">
										<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>" />
									</div>


								<span class="span-text">Aspargus</span>
								</div>
								<div class="qtybtn" style=" <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">
									<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn mybtn btn-circle" onclick="plus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
									<input class="counter" id="<?=$value->cat_pro_id?>" 
									value="<?= $qtyval ?>" />
									<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn mybtn btn-circle" onclick="minus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
									<input type="hidden" id="<?=$value->cat_pro_id?>Qty" value=''>
								</div>
							</div>
						</div>  -->
					 <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-xs-12 option mobileseting" style="padding-left:0px !important; padding-right:0px !important;  z-index: 999;">
						<div class="ci circle <?php if (in_array($value->cat_pro_id, $productItems)) { echo "color"; }else{ echo "spin"; }?> " onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
							<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
							<p class="menu_text">
								<?php echo $value->cat_pro_name ?>
							</p>
							 <p class="menu_text inc" style="margin-top:-15px">
								<?php 
									if (in_array($value->cat_pro_id, $productItems)) { 
										if($count <= 4){
												echo "Included"; 

											}else{
												echo MONEY_SIGN.$value->cat_pro_price;
												
											}
										}
									
								
								?>
							</p> 
						</div>

						<div class="qtybtn" style=" <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">
							<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="plus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
							<input class="counter" id="<?=$value->cat_pro_id?>" 
							value="<?= $qtyval ?>" />
							<button type="button"  data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="minus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
							<input type="hidden" id="<?=$value->cat_pro_id?>Qty" value=''>
						</div>
						
					</div> 

					<?php if(in_array($value->cat_pro_id, $productItems)) {?>
						<script> cout(); </script> 
					<?php } ?>
				<?php } 
				$count++;
			}?>

				<input type="hidden" id="allcountvalue<?=@$arrayIndex?>" value="<?= $qtycount ?>" />

				<input type="hidden" id="countervalue<?=@$arrayIndex?>" value="<?= $qtycount ?>">

			</div>

				
				<div class="row" style="justify-content: center;">
					<div class="col-lg-12">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 text-center">
						<br/><br/><br/><br/>
						<?php if ($perv_button === TRUE): ?>
							<button class="bottom-button"   onclick="change_page(<?php echo $skip-1 ?>);">Previous</button>
						<?php endif; ?>
						<?php if ($next_button === TRUE): ?>

							<button type="button"  class="bottom-button"  onclick="change_page(<?php echo $skip+1 ?>);">Next</button>
						<?php endif; ?>
						<?php if ($done_button === TRUE): ?>
							<button type="button"   class="bottom-button" onclick="order_now();">Done </button>
						<?php endif; ?>
					</div>
					<div class="col-lg-3">
					</div>
				</div>
				<input type="hidden" id="maxQty" value="<?=$subcategories->maxQty?>">
				<input type="hidden" id="minQty" value="<?=$subcategories->minQty?>">
				<input type="hidden" id="subCat" value="<?=$subcategories->cat_id?>">
				<input type="hidden" id="counter" value="<?=$counter?>">
				</div>
		</div>