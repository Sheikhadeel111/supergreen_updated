<style type="text/css">
	body { 
      background: url('assets/images/backgroundimgae.png') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-color: rgba(48,194,131,0.5019607843137255);

    }
    .margntop{
    	margin-top:100px;
    }
    @media (max-width: 991px) and (min-width: 768px){
    	.margntop{
    	margin-top:70px;
    	}
    	.textstyle{
    		font-size:25px;
    	}
    	.text-white{
    		font-size:24px;
    	}
    }

    @media (min-width: 320px) and (max-width: 484px) {
    	.margntop{
    	margin-top:30px;
    	}
    	.textstyle{
    		font-size:16px;
    	}
    	.text-white{
    		font-size:18px;
    	}
    }

</style>
<div class="row pt-4 mt70 margin0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<h2 class="text-white">SELECT YOUR ORDER TYPE</h2> </div>
	</div><br/><br/>
			<!-- <div class="row">
				<a href="<?php echo base_url('order/paymentMethod/0'); ?>" class="bigcircles effect-8 customlink mr50">
					<div class="col-lg-offset-4"> <span class="fa-icons"><i class="fas fa-utensils"></i></span>
						<p class="content"> Dine In</p>
					</div>
				</a>

				<a class="bigcircles effect-8 customlink mr50" data-toggle="modal" data-target="#myModal">
					<div class="col-lg-offset-4 "> <span class="fa-icons"><i class="fas fa-shopping-bag"></i></span>
						<p class="content">Take Away</p>
					</div>
				</a>
			</div> -->
<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-2"></div>
				<center><a href="<?php echo base_url('order/paymentMethod/0'); ?>"><div class="col-lg-2 circles hovercircle"><center><span class="fa-icons" ><i class="fas fa-utensils margntop"></i></span><div class="textstyle" >Dine In</div></center></div></a>

				<a class="customlink mr50" data-toggle="modal" data-target="#myModal"><div class="col-lg-2 circles hovercircle"><center><span class="fa-icons"><i class="fas fa-shopping-bag margntop"></i></span><div class="textstyle">Take Away</div></center></div></a>
			</center>
			<div class="col-lg-4"></div>
		</div>
	</div>
</div>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel" style="text-align: center;">Order Another Day</h4>
						</div>
						<div class="modal-body">
							<form action="<?php echo base_url('order/paymentMethod/1'); ?>" method = "POST">
								<div class="form-group">
									<label for="email">Select Day:</label>
									<select name="day" required class="form-control select2">
										<option value="monday">Monday</option>
										<option value="tuesday">Tuesday</option>
										<option value="wednesday">Wednesday</option>
										<option value="thrusday">Thrusday</option>
										<option value="friday">Friday</option>
										<option value="saturdaay">Saturday</option>
										<option value="sunday">Sunday</option>
									</select>
								</div>
								<div class="form-group"> 
									<label for="time">Time:</label>
									<input type="text" class="form-control time" name ="time">
								</div>

								<button type="submit" class="btn btn-primary">Order</button>
							</form>

						</div>

					</div>
				</div>
			</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".select2").select2({ width: '100%',height:"auto", });
			$('.time').datetimepicker({

				format: 'HH:mm a',
				defaultDate: moment('2015-01-01'),
				useCurrent:'day',
				stepping: 30,
				icons: {
					time: "fa fa-clock-o",
					date: "fa fa-calendar",
					up: "fa fa-arrow-up",
					down: "fa fa-arrow-down"
				}
			});
		})
	</script>