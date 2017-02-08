<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $page_title; ?> | PretMode Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/AdminLTE.min.css'); ?>">
  <!-- Blue skin -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/_all-skins.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url('assets/plugins/iCheck/square/blue.css'); ?>">
  <!-- Token Input -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/token-input.css'); ?>">
  <!-- Token Bootstrap Style -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/token-bootstrap.css'); ?>">
  <!-- Select2 Plugin -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/select2.min.css'); ?>">
  <!-- Custom Sytlesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
  <!-- ColorPicker Sytlesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap-colorpicker.min.css'); ?>">
  <!-- ColorPicker Sytlesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.colorpickersliders.css'); ?>">
  <!-- ColorPicker Sytlesheet -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/daterangepicker-bs3.css'); ?>">  
  <script src="http://cdn.ckeditor.com/4.5.10/standard-all/ckeditor.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
  <script type="text/javascript">
    var existingUser = null;
    var existingProducts = null;
    var existingCoupon = null;
  </script>