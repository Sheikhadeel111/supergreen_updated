
<div class="app-content content">
  <div class="content-wrapper">
    <!-- Breadcrum -->
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Password</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a> </li>
              <li class="breadcrumb-item"><a href="javascript:;">Password</a> </li>
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
              <h4 class="card-title" id="bordered-layout-basic-form">Password Change</h4> <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                <form class="form-horizontal form-bordered" novalidate enctype="multipart/form-data" action="<?php echo base_url('admin/login/change_password'); ?>" method="POST" >
                  <div class="form-body">
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="password">New Password</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="New Password" name="password" id="password" required data-validation-required-message="This field is required" > </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="confirm_password">Retype Password</label>
                      <div class="col-md-9">
                        <input type="text" data-validation-match-match="password" required  class="form-control" placeholder="Retype Password" name="confirm_password" id="confirm_password" > </div>
                    </div>

 
                    
                  

                  </div>
                 
                  <div class="form-actions">
                  
                    <button type="button" class="btn btn-warning mr-1"> <i class="ft-x"></i> Cancel </button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-check-square-o"></i> Save </button>
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

