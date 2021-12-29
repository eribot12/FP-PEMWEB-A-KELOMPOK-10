<!--Form-->
<div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?= site_url('karyawan/submit_absensi')?>" method="post">
            <label for="id">Nama Karyawan</label>
            <select name="id" id="id">
                <option value="0">Pilih Nama Karyawan</option>
                <?php
                   foreach($karyawan as $row): ?>
                        <option value="<?php echo $row['id_karyawan']; ?>"><?php echo $row['nama_karyawan']; ?>  </option>
                   <?php endforeach; ?>
            </select>
            <label for="tgl">Tanggal Kehadiran</label>
            <input type="date" name="tgl" id="tgl">
            <label for="kehadiran">Kehadiran</label>
            <br><br>
            <input type="radio" name="kehadiran" id="kehadiran" value="hadir">Hadir
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="kehadiran" id="kehadiran" value="tidak">Tidak Hadir
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>

    <!--Form-->