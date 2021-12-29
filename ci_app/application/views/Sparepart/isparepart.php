<!--Navbar-->

    <!--Form-->
    <div class="menu">
        <div class="form">
        <form action="<?= site_url('sparepart/submit') ?>" method="post">
            <label for="jenis_part">Jenis Sparepart</label>
            <input type="text" name="jenis_part" id="jenis_part" placeholder="Masukkan Jenis Sparepart">
            <label for="nama_part">Nama Sparepart</label>
            <input type="text" name="nama_part" id="nama_part" placeholder="Masukkan Nama Sparepart">
            <label for="harga_beli">Harga Beli</label>
            <input type="text" inputmode="numeric" name="harga_beli" id="harga_beli">
            <label for="harga_jual">Harga Jual</label>
            <input type="text" inputmode="numeric" name="harga_jual" id="harga_jual">
            <label for="stok">Stok</label>
            <input type="text" inputmode="numeric" name="stok" id="stok">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>

    <!--Form-->