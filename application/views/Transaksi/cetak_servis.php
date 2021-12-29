
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Nota Transaksi</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#show").click(function() {
                $("#back").show();
                $("#print").show();             
            })
        })
    </script>
</head>
<body>
        <center><p id="show"><font color="red" size=12>Bengkel Maju Jaya</font> </p></center>
        <center><p><font  size=11>Sidoarjo</font></p></center>
        <center><p><font  size=3>majujaya@gmail.com        081230998234      Fax : (031)-0989790</font></p></center>
</body>
</html>
<?php
   
       
        echo 'ID Transaksi : '.$trans_servis['id_trans_servis'];
        echo '<br>';
        echo '<br>';
        foreach($karyawan as $rowKaryawan){
            if($rowKaryawan['id_karyawan'] == $trans_servis['id_karyawan']){
                echo 'Nama Karyawan : '.$rowKaryawan['nama_karyawan'];
            }

        }
        echo '<br>';
        echo '<br>';
        foreach($customer as $rowcust){
            if($rowcust['id_cust'] == $trans_servis['id_cust']){
                echo 'Nama Customer : '.$rowcust['nama_cust'];
            }
        }
        echo '<br>';
        echo '<br>';
        echo 'Tanggal Servis : '.$trans_servis['tgl_servis'];
        echo '<br>';
        echo '<br>';
        foreach($servis as $rowservis){
            if($rowservis['id_servis'] == $trans_servis['id_servis']){
                echo 'Servis     : '.$rowservis['jenis_servis'];
            }
        }
        
        echo '<br>';
        echo '<br>';
        foreach($sparepart as $rowpart){
            if($rowpart['kode_part'] == $trans_servis['kode_part']){
                echo 'Sparepart     : '.$rowpart['nama_part'];
            }
        }
        echo '<br>';
        echo '<br>';
        foreach($servis as $rowservis){
            if($rowservis['id_servis'] == $trans_servis['id_servis']){
                echo 'Biaya Servis : Rp. '.$rowservis['biaya_servis'];
            }
        }
        echo '<br>';
        echo '<br>';
        foreach($sparepart as $rowpart){
            if($rowpart['kode_part'] == $trans_servis['kode_part']){
                echo 'Harga Sparepart : Rp. '.$rowpart['harga_jual'];
            }
        }
       
        echo '<br>';
        echo '<br>';
        echo 'Total Bayar : Rp. '.$trans_servis['bayar_total'];
        echo '<br>';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Nota Transaksi</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#print").click(function() {
                $("#back").hide();
                $("#print").hide();
                window.print();               
            })
        })
    </script>
</head>
<body>
<button id="print" class="buttoncetak button1">Print</button>
&nbsp;&nbsp;
    <a href="index.php">
    <input type="button" id="back" class="buttonedit button1" value="Back"></a>
</body>
</html>
