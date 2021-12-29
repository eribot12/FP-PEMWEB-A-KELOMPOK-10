
    <!--Form-->
    <div class="menu">
        <div class="form">
        <form action="<?= site_url('customer/submit') ?>" method="post">
            <label for="nama_cust">Nama Customer</label>
            <input type="text" name="nama_cust" id="nama_cust" placeholder="Masukkan Nama Customer">
            <br><br>
            <label for="jk_cust">Jenis Kelamin</label>
            <select name="jk_cust" id="jk_cust">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br><br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Customer">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>

    <!--Form-->