<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Byahero</title>

    <!-- Bootstrap -->
    <link href="<?= base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/css/fontawesome.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/custom/backend/css/dashboard.css">
    <!-- Scripts -->
    <script src="<?= base_url() ?>assets/vendor/js/sweetalert.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js/ajax.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/custom/backend/js/backend.js"></script>
    
  </head>
  <body>
 

<?php $this->load->view("backend/includes/navbar"); ?>


<div class="container-fluid">
  <div class="row">

    <?php $this->load->view("backend/includes/sidebar"); ?>


    
