
    <!--Form-->
    <div class="menu">
        <div class="form">
        <form action="<?= site_url('supplier/submit') ?>" method="post">
            <label for="nama_supplier">Nama Supplier</label>
            <input type="text" name="nama_supplier" id="nama_supplier" placeholder="Masukkan Nama Supplier">
            <br><br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Supplier">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>

    <!--Form-->