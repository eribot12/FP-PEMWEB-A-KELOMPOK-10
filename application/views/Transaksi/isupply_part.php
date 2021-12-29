
    <!--Form-->
    <div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?php echo site_url('supply/submit') ?>" method="post">
            <label for="id_sup">ID Supplier</label>
            <select name="id_sup" id="id_sup">
            <?php foreach($supplier as $rowsupplier):?>
                <option value="<?= $rowsupplier['id_supplier']?>"><?= $rowsupplier['nama_supplier']?></option>
                <?php endforeach;?>
            </select>
            <label for="kode_part">Kode Sparepart</label>
            <select name="kode_part" id="kode_part">
            <?php foreach($sparepart as $rowsparepart):?>
                <option value="<?= $rowsparepart['kode_part']?>"><?= $rowsparepart['nama_part']?></option>
                <?php endforeach;?>
            </select>
            <label for="tgl">Tanggal Datang</label>
            <input type="date" name="tgl" id="tgl">
            <label for="jumlah">Jumlah Part</label>
            <input type="text" inputmode="numeric" name="jumlah" id="jumlah">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>

    <!--Form-->
