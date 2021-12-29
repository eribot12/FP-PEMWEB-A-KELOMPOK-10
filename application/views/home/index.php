

<!--View Nota Pembelian-->
<p>View Nota Transaksi Sparepart</p>
<br>
<table class="table">
            <tr>
                <th>ID Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Customer</th>
                <th>Nama Part</th>
                <th>Harga Part</th>
                <th>Jumlah Beli</th>
                <th>Total Bayar</th>
                <th>Opsi</th>
            </tr>
            <?php
                foreach($trans as $row):
                ?>
                    <tr>
                        <td><?php echo $row['id_trans']; ?></td>
                    <td><?php echo $row['tgl_trans']; ?></td>
                        <?php foreach($customer as $rowcustomer): 
                            if ($row['id_cust']==$rowcustomer['id_cust']):
                            ?>
                        <td><?php echo $rowcustomer['nama_cust']; ?></td>

                        <?php endif;
                    endforeach; ?>
                        <?php foreach($sparepart as $rowsparepart): 
                            if ($row['kode_part']==$rowsparepart['kode_part']):
                                ?>
                        <td><?php echo $rowsparepart['nama_part']; ?></td>
                        <td><?php echo $rowsparepart['harga_jual']; ?></td>
                        
                        <?php endif;
                    endforeach; ?>
                    <td><?php echo $row['jumlah_beli']; ?></td>
                    <td><?php echo $row['total_bayar']; ?></td>
                        
            
                        <td>
                        <center>
                            <a href="<?php echo site_url('transaksi/cetak_part/'.$row['id_trans'])  ?>"> <button class="buttoncetak button1">Cetak</button></a></a>
                            </center>
                        </td>
                    </tr>

              <?php  endforeach; ?>
        </table>
<!--View Nota Pembelian-->
<hr>
<br> <br>
<!--View Nota Servis-->
<p>View Nota Transaksi Servis</p>
<br>
        <table class="table">
            <tr>
                <th>ID Transaksi Servis</th>
                <th>Nama Karyawan</th>
                <th>Nama Customer</th>
                <th>Tanggal Servis</th>
                <th>Jenis Servis</th>
                <th>Biaya Servis</th>
                <th>Nama Part</th>
                <th>Harga Part</th>
                <th>Total Bayar</th>
                <th>Opsi</th>
            </tr>
            <?php
                foreach($trans_servis as $row):
                ?>
                    <tr>
                        <td><?php echo $row['id_trans_servis']; ?></td>
                        <?php foreach($karyawan as $rowkaryawan): 
                            if ($row['id_karyawan']==$rowkaryawan['id_karyawan']):
                            ?>
                        <td><?php echo $rowkaryawan['nama_karyawan']; ?></td>

                        <?php endif;
                            endforeach; ?>
                        <?php foreach($customer as $rowcustomer): 
                            if ($row['id_cust']==$rowcustomer['id_cust']):
                            ?>
                        <td><?php echo $rowcustomer['nama_cust']; ?></td>

                        <?php endif;
                    endforeach; ?>
                        <td><?php echo $row['tgl_servis']; ?></td>
                        <?php foreach($servis as $rowservis): 
                            if ($row['id_servis']==$rowservis['id_servis']):
                                ?>
                        <td><?php echo $rowservis['jenis_servis']; ?></td>
                        <td><?php echo $rowservis['biaya_servis']; ?></td>

                        <?php endif;
                    endforeach; ?>
                        <?php foreach($sparepart as $rowsparepart): 
                            if ($row['kode_part']==$rowsparepart['kode_part']):
                            ?>
                        <td><?php echo $rowsparepart['nama_part']; ?></td>
                        <td><?php echo $rowsparepart['harga_jual']; ?></td>

                        <?php endif;
                    endforeach; ?>
                        <td><?php echo $row['bayar_total']; ?></td>
                        <td>
                        <center>
                            <a href="<?php echo site_url('transaksi/cetak_servis/'.$row['id_trans_servis'])  ?>"> <button class="buttoncetak button1">Cetak</button></a></a>
                            </center>
                        </td>
                    </tr>

              <?php  endforeach; ?>
        </table>
<!--View Nota Servis-->