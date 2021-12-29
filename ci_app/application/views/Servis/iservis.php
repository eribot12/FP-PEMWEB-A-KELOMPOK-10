
    <!--Form-->
    <div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?= site_url('servis/submit') ?>" method="post">
            <label for="jenis">Jenis Servis</label>
            <input type="text" name="jenis_servis" id="jenis_servis" placeholder="Masukkan Jenis Servis">
            <label for="biaya">Biaya Servis</label>
            <input type="text" inputmode="numeric" name="biaya_servis" id="biaya_servis" placeholder="Masukkan Biaya Servis">
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>