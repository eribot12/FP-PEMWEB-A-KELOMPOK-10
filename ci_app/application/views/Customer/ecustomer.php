<!--Form-->
<div class="menu">
        <div class="form">
        <form action="<?= site_url('customer/edit/'.$customer['id_cust']);?>" method="post">
            <label for="nama_cust">Nama Customer</label>
            <input type="text" name="nama_cust" id="nama_cust" placeholder="Masukkan Nama Customer" value="<?=  $customer['nama_cust']; ?>">
            <label for="jk_cust">Jenis Kelamin</label>
            <br><br>
            <label for="jk_cust">Jenis Kelamin</label>
            <select name="jk_cust" id="jk_cust">
                <option value="Laki-Laki" <?=  $customer['jk_cust'] == 'Laki-Laki' ? 'selected' : ''; ?>>Laki-Laki</option>
                <option value="Perempuan" <?=  $customer['jk_cust'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
            <br><br>
            <label for="alamat">Alamat Customer</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Customer" value="<?=  $customer['alamat_cust']; ?>">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>

</div>
    <!--Form-->