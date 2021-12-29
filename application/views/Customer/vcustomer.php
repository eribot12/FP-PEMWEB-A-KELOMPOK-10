<!--View-->
<br><br>
        <table class="table">
            <tr>
                <th>ID Customer</th>
                <th>Nama Customer</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Customer</th>
                <th>Opsi</th>
            </tr>
            <?php 
                 foreach($customer as $row):    
                    ?>
                    <tr>
                        <td><?php echo $row['id_cust']; ?></td>
                        <td><?php echo $row['nama_cust']; ?></td>
                        <td><?php echo $row['jk_cust']; ?></td>
                        <td><?php echo $row['alamat_cust']; ?></td>
                        <td> <center>
                        <a href="<?php echo site_url('customer/view_edit/'.$row['id_cust']); ?>"><button class="buttonedit button1">Edit</button></a> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('customer/delete/'.$row['id_cust']); ?>"><button class="buttondelete button1">Delete</button></a>
                        </center>
                        </td>
                    </tr>
              <?php endforeach; ?>
        </table>
<!--View-->
</body>
</html>