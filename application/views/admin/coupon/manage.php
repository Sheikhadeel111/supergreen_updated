<style>
  .errors {
      color: red;
   }

</style>
<div class="app-content content">
  <div class="content-wrapper">
    <!-- Breadcrum -->
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Coupon</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a> </li>
              <li class="breadcrumb-item"><a href="javascript:;">Coupon</a> </li>
            </ol>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Breadcrum End -->
    <section id="basic-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="bordered-layout-basic-form">Coupon Info</h4> <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collpase show">
              <div class="card-body">
                <div class="card-text">
                  <p></p>
                </div>
                <form class="form-horizontal form-bordered"  action="<?php echo base_url('admin/Coupon/manage'); ?>" id="formcategory" method="POST" >
                  <div class="form-body">
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="name">Coupon Code</label>
                      <div class="col-md-9">
                        <input type="text" id="name" class="form-control" placeholder="Coupon Code" name="code" value="<?php if(isset($coupon)){ echo $coupon->code;} ?>" > </div>
                    </div>

                    <div class="form-group row ">
                      <label class="col-md-3 label-control" for="name">Type</label>
                      <div class="col-md-9">
                      <select class="form-control" name="type" id="type">
                        <option></option>
                        <option value="1" <?php if(isset($coupon)){ if( $coupon->type == "1"){echo "selected";} }?> >As per Percentage</option>
                        <option value="2" <?php if(isset($coupon)){ if( $coupon->type == "2"){echo "selected";} }?>>As per Amount</option>
                      </select>
                    </div>
                    </div>

                    <div id="persentage" style="display: <?php if(isset($coupon)){ if( $coupon->type == "1"){echo "block";}else{echo "none";} }else{echo "none";}?>">
                       <div class="form-group row">
                        <label class="col-md-3 label-control" for="name">Percentage</label>
                        <div class="col-md-9">
                          <input type="number" id="persentage" class="form-control" placeholder="%" name="persentage" value="<?php if(isset($coupon)){ echo $coupon->persentage;} ?>" > </div>
                        </div>
                    </div>

                    <div id="amount" style="display: <?php if(isset($coupon)){ if( $coupon->type == "2"){echo "block";}else{echo "none";} }else{echo "none";}?>">
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="name">Amount Per Total</label>
                        <div class="col-md-9">
                          <input type="number" id="amount" class="form-control" placeholder="Amount" name="amount" value="<?php if(isset($coupon)){ echo $coupon->amount;} ?>" > </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="name">Enter Coupon Limit</label>
                      <div class="col-md-9">
                        <input type="number" id="limit" class="form-control" placeholder="Limit" name="limit" value="<?php if(isset($coupon)){ echo $coupon->limit;} ?>" > </div>
                    </div>
                   
                   <div class="form-group row">
                      <label class="col-md-3 label-control" for="name">Enter Start Date</label>
                      <div class="col-md-9">
                        <input type="date" id="stard_date" class="form-control" placeholder="Date" name="stard_date" value="<?php if(isset($coupon)){ echo $coupon->stard_date;} ?>" > </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="name">Enter End Date</label>
                      <div class="col-md-9">
                        <input type="date" id="expired_at" class="form-control" placeholder="Date" name="expired_at" value="<?php if(isset($coupon)){ echo $coupon->expired_at;} ?>" > </div>
                    </div>
                  
                    
                  </div>
                 
                  <input type="hidden" name="cop_id" value="<?php if(isset($coupon)){ echo $coupon->id;} ?>">
               
                  <div class="form-actions">
                    <a href="<?php echo base_url(); ?>admin/coupon"><button type="button" class="btn btn-warning mr-1"> <i class="ft-x"></i> Cancel </button></a>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Save"> <i class="fa fa-check-square-o"></i> Save </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $('#formcategory').validate({ // initialize the plugin
        errorClass: 'errors',
        rules: {
            code: {
                required: true,
                minlength: 5,
                maxlength: 25
            },
            persentage: {
                required: true,
                min:0,
                max:100,
                number:true
            },
            amount: {
                required: true,
                min:0,
                max:999,
                number:true
            },
            limit: {
                required: true,
                min:0,
                max:1000,
                number:true
            },
            type: {
               required: true
            },
            expired_at: {
               required: true
            },
            stard_date: {
              required: true
            }
        }
        
    });



   
    $("#type").on("change",function(){
      if($("#type").val() == "")
      {
        $("#persentage").slideUp()
        $("#amount").slideUp();
      }else if($("#type").val() == 1){

        $("#persentage").slideDown();
        $("#amount").slideUp();

      }else if($("#type").val() == 2){

         $("#persentage").slideUp();
         $("#amount").slideDown();

      }

    })


  })
</script>