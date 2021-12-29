<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bengkel Q</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>style.css">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>

 <!--Navbar-->
 <ul>
    <li><a href="<?= site_url('home')?> ">Home</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Customer</a>
        <div class="dropdown-content">
        <a href="<?= site_url('customer/input')?>">Input Customer</a>
        <a href="<?= site_url('customer/view')?>">View Customer</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Karyawan</a>
        <div class="dropdown-content">
        <a href="<?= site_url('karyawan/input')?>">Input Karyawan</a>
        <a href="<?= site_url('karyawan/view')?>">View Karyawan</a>
        <a href="<?= site_url('karyawan/absensi')?>">Absensi Karyawan</a>
        <a href="<?= site_url('karyawan/penggajian')?>">Penggajian Karyawan</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Supplier</a>
        <div class="dropdown-content">
        <a href="<?= site_url('supplier/input')?>">Input Supplier</a>
        <a href="<?= site_url('supplier/view')?>">View Supplier</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Sparepart</a>
        <div class="dropdown-content">
        <a href="<?= site_url('sparepart/input')?>">Input Sparepart</a>
        <a href="<?= site_url('sparepart/view')?>">View Sparepart</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Servis</a>
        <div class="dropdown-content">
        <a href="<?= site_url('servis/input')?>">Input Servis</a>
        <a href="<?= site_url('servis/view')?>">View Servis</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Transaksi</a>
        <div class="dropdown-content">
        <a href="<?= site_url('transaksi/servis')?>">Transaksi Servis</a>
        <a href="<?= site_url('transaksi/sparepart')?>">Pembelian Sparepart</a>
        <a href="<?= site_url('supply/sparepart')?>">Supply Sparepart</a>     
        <a href="<?= site_url('transaksi/history')?>">History Transaksi</a>   
        </div>
    </li>
</ul>
<!--Navbar-->