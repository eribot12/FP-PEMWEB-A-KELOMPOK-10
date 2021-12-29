<!--Form-->
<div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?= site_url('karyawan/edit/'.$karyawan['id_karyawan']);?>" method="post">
            <label for="nama_kar">Nama Karyawan</label>
            <input type="text" name="nama_kar" id="nama_kar" placeholder="Masukkan Nama Karyawan" value="<?= $karyawan['nama_karyawan']?>">
            <label for="jabatan">Jabatan Karyawan</label>
            <input type="text" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan Karyawan" value="<?= $karyawan['jabatan']?>">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
</div>
    <!--Form-->