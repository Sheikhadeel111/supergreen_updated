	<style>
   .btnswidth{
    /*width: 136px;
    font-size: 15px !important;
    color:white !important;
    height: 40px !important;
    padding-left: 16px!important;
    padding-top: 10px!important;
    */
    background-color: #e5acbc;
    border: 1px solid #e5acbc;
    padding: 10px 0px !important;
    border-radius: 3px;
    margin-right: 18px;
    font-size: 15px!important;
    font-weight: 400!important;
    text-transform: capitalize!important;
    width:156px;
    color:white !important;
   } 
   .btnswidth:hover{
    background-color: #F292AE !important;
   }
  </style>
  <div id="mySidenav" class="sidenav leftsidecontentmiddle" style="z-index: 9999">
		<a href="javascript:void(0)" class="closebtn" style="color: white !important;" onclick="closeNav()">&times;</a>
		<div class=" ">
			<h2 style="color: #fff;     text-align: center;">Cancel Your Order</h2>
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="content leftsidecontentmiddle">
			<!-- <a href="javascript:;" class="btn btn-default btn-block cancelOrder btn-w"><i class="fas fa-times"></i> CANCEL ORDER</a> -->
			<a href="javascript:;" class="btnswidth btn-block cancelOrder">
			Start Over</a>
	  
			<a href="<?php echo base_url(); ?>/new" class="btn-block btnswidth">
			Return To Home</a>
		</div>
  </div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function () {
		 $('.cancelOrder').on('click', function(){
          $.confirm({
          title: 'Cancel Order',
          content: 'Are You Sure ?',
          icon: 'fa fa-trash-o',
          theme: 'supervan',
          closeIcon: true,
          animation: 'scale',
          type: 'orange',
            buttons: {
            Delete: function () {
              $.ajax({
              type:"post",
              url: base_url+"order/cancelOrder",
              dataType:'json',
              success:function(res){
              {

              	if (res.status) {
              		toasterOptions();
              		toastr.error(res.msg);
              		setTimeout(function() {
                    window.location.replace(base_url+"order");
              		}, 2000);

              	}
              }
            }
          });
        },
          Cancel: function () {
            location.reload();
          }
       }
                        });
                    });
	})
</script>