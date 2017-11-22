<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sistem Informasi Penjualan Maksudas</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/') ?>css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/') ?>css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/') ?>css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/') ?>css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/') ?>img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo site_url('beranda'); ?>" class="simple-text">
                <img src="<?php echo base_url ('assets/img/maka2.png" width="200" height=150" class="user-image img-responsive"');?>"/>
                   
                </a>
            </div>

            <ul class="nav">
             <li class="active">
                    <a href="<?php echo site_url('beranda'); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('pembeli'); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Data Pembeli</p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('beli'); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Data Pembelian</p>
                    </a>
                </li>
                </li>
               
                <li>
                    <a href="<?php echo site_url('produk'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('jual'); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Data Penjualan</p>
                    </a>
                </li>
               <?php
                $status = $this->session->userdata('status');
                if($status == 'admin') {
                    ?>
                <li>
                    <a href="<?php echo site_url('cabang'); ?>">
                        <i class="pe-7s-science"></i>
                        <p>Data Cabang</p>
                    </a> 
             </li> <?php } ?>
               
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                          
                            </a>
                        </li>
                       
                       
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                           <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </a>
                        </li>
                    </ul>
                


