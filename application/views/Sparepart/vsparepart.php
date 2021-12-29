    
<!--View-->
<br><br>
        <table class="table">
            <tr>
                <th>Kode Sparepart</th>
                <th>Jenis Sparepart</th>
                <th>Nama Sparepart</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Opsi</th>
            </tr>
            <?php
                 foreach($sparepart as $row):  
            ?>
                    <tr>
                        <td><?php echo $row['kode_part']; ?></td>
                        <td><?php echo $row['jenis_part']; ?></td>
                        <td><?php echo $row['nama_part']; ?></td>
                        <td><?php echo $row['harga_beli']; ?></td>
                        <td><?php echo $row['harga_jual']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td> <center>
                        <a href="<?php echo site_url ('sparepart/view_edit/'.$row['kode_part']); ?>"><button class="buttonedit button1">Edit</button></a> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url ('sparepart/delete/'.$row['kode_part']); ?>"><button class="buttondelete button1">Delete</button></a>
                        </center>
                        </td>
                    </tr>

                    <?php endforeach; ?>
        </table>
<!--View-->
</body>
</html>