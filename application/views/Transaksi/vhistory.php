<!--Navbar-->
    
<!--View Supply-->
<br><br>
<p>HISTORY SUPPLY PART</p>
<br>
        <table class="table">
            <tr>
                <th>ID Transaksi Part</th>
                <th>ID Supplier</th>
                <th>Kode Part</th>
                <th>Tanggal Datang</th>
                <th>Jumlah Sparepart</th>
            </tr>
            <?php foreach($trans_part as $row): ?>

                    <tr>
                        <td><?php echo $row['id_trans_part']; ?></td>
                        <td><?php echo $row['id_supplier']; ?></td>
                        <td><?php echo $row['kode_part']; ?></td>
                        <td><?php echo $row['tgl_datang']; ?></td>
                        <td><?php echo $row['jumlah_part']; ?></td>
                    
                    </tr>

              <?php  endforeach; ?>
        </table>
<!--View Supply-->
<hr>
<br> <br>
<!--View Pembelian-->
<p>HISTORY PEMBELIAN PART</p>
<br>
        <table class="table">
            <tr>
                <th>ID Pembelian</th>
                <th>ID Customer</th>
                <th>Kode Part</th>
                <th>Tanggal Transaksi</th>
                <th>Jumlah Beli</th>
                <th>Total Bayar</th>
                <th>Detail</th>
            </tr>
            <?php foreach($transaksi as $row): ?>
                        <td><?php echo $row['id_trans']; ?></td>
                        <td><?php echo $row['id_cust']; ?></td>
                        <td><?php echo $row['kode_part']; ?></td>
                        <td><?php echo $row['tgl_trans']; ?></td>
                        <td><?php echo $row['jumlah_beli']; ?></td>
                        <td><?php echo $row['total_bayar']; ?></td>
                        <td>
                            <center>
                            <a href="<?= site_url('home')?>"> <button class="buttonedit button1">Detail</button></a></a>
                            </center>
                        </td>
                       
                    </tr>

              <?php  endforeach; ?>
        </table>
<!--View Pembelian-->
<hr>
<br> <br>
<!--View Pembelian-->
<p>HISTORY SERVIS</p>
<br>
        <table class="table">
            <tr>
                <th>ID Transaksi Servis</th>
                <th>ID Servis</th>
                <th>ID Karyawan</th>
                <th>ID Customer</th>
                <th>Kode Part</th>
                <th>Tanggal Servis</th>
                <th>Total Bayar</th>
                <th>Detail</th>
            </tr>
            <?php foreach($trans_servis as $row): ?>
                <tr>
                        <td><?php echo $row['id_trans_servis']; ?></td>
                        <td><?php echo $row['id_servis']; ?></td>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['id_cust']; ?></td>
                        <td><?php echo $row['kode_part']; ?></td>
                        <td><?php echo $row['tgl_servis']; ?></td>
                        <td><?php echo $row['bayar_total']; ?></td>
                        <td>
                            <center>
                            <a href="<?= site_url('home')?>"> <button class="buttonedit button1">Detail</button></a></a>
                            </center>
                        </td>
                    </tr>

              <?php endforeach; ?>
        </table>
<!--View Pembelian-->