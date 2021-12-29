<!--View-->
<br><br>
        <table class="table">
            <tr>
                <th>ID Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat Supplier</th>
                <th>Opsi</th>
            </tr>
            <?php 
                 foreach($supplier as $row):    
                    ?>
                    <tr>
                        <td><?php echo $row['id_supplier']; ?></td>
                        <td><?php echo $row['nama_supplier']; ?></td>
                        <td><?php echo $row['alamat_supplier']; ?></td>
                        <td> <center>
                        <a href="<?php echo site_url('supplier/view_edit/'.$row['id_supplier']); ?>"><button class="buttonedit button1">Edit</button></a> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('supplier/delete/'.$row['id_supplier']); ?>"><button class="buttondelete button1">Delete</button></a>
                        </center>
                        </td>
                    </tr>
              <?php endforeach; ?>
        </table>
<!--View-->
</body>
</html>