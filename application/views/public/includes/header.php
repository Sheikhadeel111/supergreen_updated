<!DOCTYPE html>
<html>
<head>

	<title><?php echo $title; ?></title>
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>app-assets/images/ico/favicon.ico">
	<base href="<?php echo base_url();?>">
    <script>
    var base_url = '<?php echo base_url(); ?>';
    </script>
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
     -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
    <script src="assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/customcss1.css" >
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
	
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	
    <link rel="stylesheet" type="text/css" href="app-assets/plugins/jqueryConfirm/jquery-confirm.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/custom/customScript.js"></script>

	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.css">
    
	<script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
	<script src="app-assets/js/scripts/extensions/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="app-assets/plugins/jqueryConfirm/jquery-confirm.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
 rel='stylesheet' type='text/css'>
 <style type="text/css">
     .jconfirm.jconfirm-supervan .jconfirm-box .jconfirm-buttons button{
        background-color: #e5acbc!important;
        border-radius:4px !important;
        min-width: 156px !important;
     }
     .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default:hover{
        background-color: #F292AE!important;
        color:white !important;
     }
     .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button, .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button{
        text-transform:capitalize !important;
     }
      .jconfirm.jconfirm-supervan .jconfirm-bg{
        background-color:#189271 !important;
        opacity: 0.9 !important;
    }
    .jconfirm .jconfirm-box{
      background-color: #189271 !important;
    }
    .jconfirm-title{
      color: white !important;
    }
    .toast-error{
        background-color: #e5acbc !important;
     }
     .toast-container > .toast-error{
        background-image: none !important;
     }
 </style>


	<script type="text/javascript">
     


      function toasterOptions() {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "2000",
            "timeOut": "3000",
            "extendedTimeOut": "2000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
      };
      
      toasterOptions();

    </script>
	
</head>
<style type="text/css">
    .text-white{
        color: #fff;
    }
</style>
<body style="overflow-x: hidden;">