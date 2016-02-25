<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #ccc;">
    <div class="mainmenu-area">
        <div class="navbar navbar-fixed-top" style="background-color:#F2EFFB;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url();?>" class="navbar-brand">Canvera</a>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php if($this->session->userdata('name') != null) { ?>
                        <li><a href="<?php echo base_url(); ?>photobooks/create">Create a Photobook</a></li>                        
                        <li><a href="<?php echo base_url(); ?>">My Photobooks</a></li>
                        <li><a href="<?php echo base_url(); ?>">Popular Photobooks</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url(); ?>home/about">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>home/contact">Contact Us</a></li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php if($this->session->userdata('name') != null) { ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('name'); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>photographers/profile">View Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
                            </ul>
                            <?php } else { ?>
                            <a href="<?php echo base_url(); ?>photographers/signin">Login</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
        <!--<div style="height: 30px;"></div>-->
    </div> <!-- End mainmenu area -->
    <div style="height: 60px;"></div>
    
    <div class="container">
        <?php if($this->session->flashdata('success_msg')) { ?>
        <div class="alert alert-success">
            <strong>Success!</strong> <?php echo $this->session->flashdata('success_msg'); ?>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('err_msg')) { ?>
        <div class="alert alert-danger">
            <strong>Failed!</strong> <?php echo $this->session->flashdata('err_msg'); ?>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('warning_msg')) { ?>
        <div class="alert alert-warning">
            <strong>Note: </strong> <?php echo $this->session->flashdata('warning_msg'); ?>
        </div>
        <?php } ?>
    </div>
    
    <div>
        
