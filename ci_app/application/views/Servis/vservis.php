<!--View-->
<br><br>
        <table class="table">
            <tr>
                <th>ID Servis</th>
                <th>Jenis Servis</th>
                <th>Biaya Servis</th>
                <th>Opsi</th>
            </tr>
            <?php 
                   foreach($servis as $row):  
            ?>
                    <tr>
                        <td><?php echo $row['id_servis']; ?></td>
                        <td><?php echo $row['jenis_servis']; ?></td>
                        <td><?php echo $row['biaya_servis']; ?></td>
                        <td> <center>
                        <a href="<?php echo site_url ('servis/view_edit/'.$row['id_servis']); ?>"><button class="buttonedit button1">Edit</button></a> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('servis/delete/'.$row['id_servis']); ?>"><button class="buttondelete button1">Delete</button></a>
                        </center>
                        </td>
                    </tr>

              <?php  endforeach ?>
        </table>
<!--View-->
</body>
</html>