
    <div class="menu">
        <div class="form">
        <form action="<?= site_url('servis/edit/'.$servis['id_servis']);?>" method="post">
            <label for="jenis_servis">Jenis Servis</label>
            <input type="text" name="jenis_servis" id="jenis_servis" value="<?php echo $servis['jenis_servis']; ?>">
            <label for="biaya_servis">Biaya Servis</label>
            <input type="text" inputmode="numeric" name="biaya_servis" id="biaya_servis" value="<?php echo $servis['biaya_servis']; ?>">
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
    <!--Form-->