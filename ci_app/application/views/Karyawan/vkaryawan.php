   
<!--View-->
<br><br>
<p>Data Karyawan</p>
        <table class="table">
            <tr>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Opsi</th>
            </tr>
            <?php
                foreach($karyawan as $row):?>
                    <tr>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['nama_karyawan']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>
                        <td> <center>
                        <a href="<?php echo site_url('karyawan/view_edit/'.$row['id_karyawan']); ?>"><button class="buttonedit button1">Edit</button></a> &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('karyawan/delete/'.$row['id_karyawan']); ?>"><button class="buttondelete button1">Delete</button></a>
                        </center>
                        </td>
                    </tr>

              <?php endforeach; ?>
        </table>
<!--View-->
<hr>
<!--View Absensi-->
<br><br>
<p>Presensi Karyawan</p>
        <table class="table">
            <tr>
                <th>ID Absensi</th>
                <th>ID Karyawan</th>
                <th>Tanggal Absensi</th>
                <th>Kehadiran</th>
            </tr>
            <?php
                foreach($absen as $row): ?>
                    <tr>
                        <td><?php echo $row['id_absen']; ?></td>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['tgl_absen']; ?></td>
                        <td><?php echo $row['hadir']; ?></td>
                       
                    </tr>

              <?php  endforeach; ?>
        </table>
<!--View Absensi-->

<!--View Gaji-->
<hr>
<br><br>
<p>Penggajian Karyawan</p>
        <table class="table">
            <tr>
                <th>ID Karyawan</th>
                <th>Jumlah Kehadiran</th>
                <th>Gaji</th>
            </tr>
            <?php
                foreach($gaji as $row):?>
                    <tr>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['jumlah_hadir']; ?></td>
                        <td><?php echo $row['gaji']; ?></td>
                       
                    </tr>

              <?php  endforeach; ?>
        </table>