   <!--Create-->
   <?php
            include 'koneksi.php';

            if (isset($_POST['submit'])) {
                $cust = $_POST['cust'];
                $part = $_POST['kode_part'];
                $tgl = $_POST['tgl'];
                $jumlah = $_POST['jumlah'];
                $harga = $_POST['harga'];
                $total = $_POST['total'];

                mysqli_query($connect,"INSERT into transaksi values('','$cust','$part','$tgl','$jumlah','$total')");
                
                $dataa= mysqli_query($connect,"SELECT * from sparepart where kode_part = $part ");
                $isi = mysqli_fetch_array($dataa);
                $stok=$isi['stok'];
                $sisa = $stok - $jumlah;

                mysqli_query($connect,"UPDATE sparepart set stok = '$sisa' where kode_part=$part");
                
                header("location:vhistory.php?msg=transpart");
                ob_end_flush();
            }
        ?>
    <!--Create-->
</body>
</html>