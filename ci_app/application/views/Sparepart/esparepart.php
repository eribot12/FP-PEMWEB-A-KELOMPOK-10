        <div class="menu">
        <div class="form">
        <form action="<?= site_url('sparepart/edit/'.$sparepart['kode_part']);?>" method="post">
        <label for="jenis_part">Jenis Sparepart</label>
            <input type="text" name="jenis_part" id="jenis_part" value="<?php echo $sparepart['jenis_part'] ;?>">
            <label for="nama_part">Nama Sparepart</label>
            <input type="text" name="nama_part" id="nama_part" value="<?php echo $sparepart['nama_part'] ;?>">
            <label for="harga_beli">Harga Beli</label>
            <input type="text" inputmode="numeric" name="harga_beli" id="harga_beli" value="<?php echo $sparepart['harga_beli'] ;?>">
            <label for="harga_jual">Harga Jual</label>
            <input type="text" inputmode="numeric" name="harga_jual" id="harga_jual" value="<?php echo $sparepart['harga_jual'] ;?>">
            <label for="stok">Stok</label>
            <input type="text" inputmode="numeric" name="stok" id="stok" value="<?php echo $sparepart['stok'] ;?>">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>