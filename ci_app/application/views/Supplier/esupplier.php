<!--Form-->
<div class="menu">
        <div class="form">
        <form action="<?= site_url('supplier/edit/'.$supplier['id_supplier']);?>" method="post">
            <label for="nama_supplier">Nama supplier</label>
            <input type="text" name="nama_supplier" id="nama_supplier" placeholder="Masukkan Nama Supplier" value="<?=  $supplier['nama_supplier']; ?>">
            <br><br>
            <label for="alamat">Alamat supplier</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Supplier" value="<?=  $supplier['alamat_supplier']; ?>">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>

</div>
    <!--Form-->