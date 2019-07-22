<style type="text/css">
	.active{
		border: #f88f26 2px solid!important;
	}
	.counter{
		width: 10px;
		background: transparent;
		border: none;
	}

	.qtybtn{
		position: absolute;
		top: 169px;
		left: 49px;
	}

</style>
<?php

$productItems = [];
$productSize = [];
if(isset($selected)){
	foreach ($selected as $key => $value) {
		foreach ($value as $key2 => $value2) {
			//if($key == "dress"){
			$array =  array('product' => $value2['product'], 'size' =>$value2['size'], 'serving' => $value2['serving'],'quantity' => $value2['quantity']);
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
			<h5>CHOSE AS MANY AS YOU LIKE</h5>
			<br/>
			<div class="row centeraline">
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
							$qtyval = $val['quantity'];
							$qtycount = $qtycount + $qtyval;
						}
					}
					if($count % 6 == 0){
						echo '</div><br/>';
						echo '<div class="custom_row displayflex" style="text-align: center; justify-content: center;">';
					}

					if($value->status == 1){ 

						?>
						<div class="col-lg-2 col-sm-12 col-xs-12 col-md-2 ci " style="cursor: not-allowed; opacity: 0.5;"> <img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
							<p class="menu_text">
								<?php echo $value->cat_pro_name ?>
							</p>
						</div>

					<?php }if(strtolower($subcategories->name) == "dressings"){ ?>
						<?php $done_button = true; 
							  $next_button = false;
						?>

						<div class="col-lg-2 col-sm-12 col-xs-12 col-md-2 option">
							<div class="ci circle <?php if (in_array($value->cat_pro_id, $productItems)) { echo "color"; }else{ echo "spin"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
								<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
								<p class="menu_text">
									<?php echo $value->cat_pro_name ?>
								</p>
								<!-- <p class="menu_text inc"></p> -->
							</div>
							<div class="sczrbtn" style=" <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>">
								<input type="hidden" id="ingServing<?php echo $value->cat_pro_id; ?>" value = "">

								<button type="button" class="btn-circle-top" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value->cat_pro_id; ?>,'Side')">Side</button>
								<button type="button" class="btn-circle-top" data-index= "<?=$arrayIndex?>" onclick="serving(this,<?php echo $value->cat_pro_id; ?>,'Mixed')">Mixed</button>

							</div>
							<div class="inbtn"  style=" margin-top:20px; <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">

								<button type="button" class="btn-circle" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'S')">S</button>
								<button type="button" class="btn-circle" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'M')">M</button>
								<button type="button" class="btn-circle" data-index= "<?=$arrayIndex?>" onclick="toppingSize(this,<?php echo $value->cat_pro_id; ?>,'L')">L</button>

								<input type="hidden" id="ingSize<?php echo $value->cat_pro_id; ?>" value = "">
							</div>
							


							<div class="qtybtn" style="<?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>";>
								<button type="button"  data-index= "<?=$arrayIndex?>"class="btn-circle" onclick="plus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
								<input class="counter" id="<?=$value->cat_pro_id?>" value="<?= $qtyval ?>">
								<input type="hidden" id="<?=$value->cat_pro_id?>Qty" value=''>
								<button type="button"  data-index= "<?=$arrayIndex?>" class="btn-circle" onclick="minus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-minus"></i></button>

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
					 <div class="col-lg-2 col-sm-12 col-xs-12 col-md-2 option" style="padding-left:0px !important; padding-right:0px !important">
						<div class="ci circle <?php if (in_array($value->cat_pro_id, $productItems)) { echo "color"; }else{ echo "spin"; }?> " onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>" data-price = "<?=$value->cat_pro_price?>" data-id="<?php echo $value->cat_pro_id ?>" data-index= "<?=$arrayIndex?>">
							<img class="basemenuimage" src="<?php echo PRODUCT_IMAGE_UPLOAD.$value->cat_pro_image  ?>">
							<p class="menu_text">
								<?php echo $value->cat_pro_name ?>
							</p>
							<!-- <p class="menu_text inc">
								<?php 
									if (in_array($value->cat_pro_id, $productItems)) { 
										if($count <= 4){
												echo "Included"; 

											}else{
												echo "$".$value->cat_pro_price;
												
											}
										}
									
								$count++;
								?>
							</p> -->
						</div>

						<div class="qtybtn" style=" <?php if (in_array($value->cat_pro_id, $productItems)) { echo ""; }else{ echo "display:none"; }?>"  onclick="encirecl(this);" data-name="<?php echo $value->cat_pro_name ?>">
							<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="plus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-plus"></i></button>
							<input class="counter" id="<?=$value->cat_pro_id?>" 
							value="<?= $qtyval ?>" />
							<button type="button"  data-index= "<?=$arrayIndex?>"	 class="btn-circle" onclick="minus(this,<?=$value->cat_pro_id?>)"><i class="fa fa-minus"></i></button>
							<input type="hidden" id="<?=$value->cat_pro_id?>Qty" value=''>
						</div>
						
					</div> 

					<?php if(in_array($value->cat_pro_id, $productItems)) {?>
						<script> cout(); </script> 
					<?php } ?>
				<?php } }?>

				<input type="hidden" id="allcountvalue<?=@$arrayIndex?>" value="<?= $qtycount ?>" />

				<input type="hidden" id="countervalue<?=@$arrayIndex?>" value="<?= $qtycount ?>">

			</div>

			
				<div class="row" style="justify-content: center;">
					<div class="col-lg-12">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 text-center">
						<br/><br/><br/><br/>
						<?php if ($perv_button === TRUE): ?>
							<button class="bottom-button" onclick="change_page(<?php echo $skip-1 ?>);">PREVIOUS</button>
						<?php endif; ?>
						<?php if ($next_button === TRUE): ?>

							<button type="button" class="bottom-button"  onclick="change_page(<?php echo $skip+1 ?>);">NEXT</button>
						<?php endif; ?>
						<?php if ($done_button === TRUE): ?>
							<button type="button"  class="bottom-button" onclick="order_now();">DONE </button>
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