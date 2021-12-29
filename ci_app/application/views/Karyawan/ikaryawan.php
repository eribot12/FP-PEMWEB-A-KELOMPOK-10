<!--Form-->
<div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?= site_url('karyawan/submit')?>" method="post">
            <label for="nama_kar">Nama Karyawan</label>
            <input type="text" name="nama_kar" id="nama_kar" placeholder="Masukkan Nama Karyawan">
            <label for="jabatan">Jabatan Karyawan</label>
            <input type="text" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan Karyawan">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>

    <!--Form-->