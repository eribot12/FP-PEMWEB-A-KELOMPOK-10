
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
    
        echo 'ID Transaksi : '.$trans_part['id_trans'];
        echo '<br>';
        echo '<br>';
        foreach($customer as $rowcust){
            if($rowcust['id_cust'] == $trans_part['id_cust']){
                echo 'Nama Customer : '.$rowcust['nama_cust'];
            }
        }
        echo '<br>';
        echo '<br>';
        foreach($sparepart as $rowpart){
            if($rowpart['kode_part'] == $trans_part['kode_part']){
                echo 'Sparepart     : '.$rowpart['nama_part'];
            }
        }
        echo '<br>';
        echo '<br>';
        echo 'Tanggal Beli : '.$trans_part['tgl_trans'];
        echo '<br>';
        echo '<br>';
        foreach($sparepart as $rowpart){
            if($rowpart['kode_part'] == $trans_part['kode_part']){
                echo 'Harga Satuan     : '.$rowpart['harga_jual'];
            }
        }
        echo '<br>';
        echo '<br>';
        echo 'Jumlah Beli : '.$trans_part['jumlah_beli'];
        echo '<br>';
        echo '<br>';
        echo 'Total Bayar : Rp. '.$trans_part['total_bayar'];
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
