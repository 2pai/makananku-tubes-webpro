<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/datatables.min.css'); ?>"/>

    <title>Makananku!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Makananku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('Admin/')?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('Admin/pasien/')?>">Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('Admin/makanan/')?>">Makanan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('Admin/pesanan/')?>">Pesanan</a>
        </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a href="<?php echo base_url('Login/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
    </nav>