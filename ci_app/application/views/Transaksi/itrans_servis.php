<!--Navbar-->

    <!--Form-->
    <div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?php echo site_url('transaksi/submit_servis')?>" method="post">
            <label for="jenis">Jenis Servis</label>
            <select name="jenis" id="jenis" onchange="getHargaServis()">
            <option value="0">Pilih Jenis Servis</option>
            <?php foreach($servis as $rowServis):?>
                <option value="<?= $rowServis['id_servis']?>"><?= $rowServis['jenis_servis']?></option>
                <?php endforeach;?>
            </select>
            <label for="kar">Nama Karyawan</label>
            <select name="kar" id="kar">
            <option value="0">Pilih Nama Karyawan</option>
            <?php foreach($karyawan as $rowkaryawan):?>
                <option value="<?= $rowkaryawan['id_karyawan']?>"><?= $rowkaryawan['nama_karyawan']?></option>
                <?php endforeach;?>
            </select>
            <label for="cust">Nama Customer</label>
            <select name="cust" id="cust">
            <option value="0">Pilih Nama Customer</option>
            <?php foreach($customer as $rowcustomer):?>
                <option value="<?= $rowcustomer['id_cust']?>"><?= $rowcustomer['nama_cust']?></option>
                <?php endforeach;?>
            </select>
            
            <label for="kode_part">Nama Sparepart</label>
            <select name="kode_part" id="kode_part" onchange="getHargaPart()">
            <option value="0">Pilih Nama Sparepart</option>
            <?php foreach($sparepart as $rowsparepart):?>
                <option value="<?= $rowsparepart['kode_part']?>"><?= $rowsparepart['nama_part']?></option>
                <?php endforeach;?>
            </select>
            
            <label for="tgl">Tanggal Servis</label>
            <input type="date" name="tgl" id="tgl">
            <label for="harga">Harga Sparepart</label>
            <input type="text" name="harga" id="harga" readonly>
            <label for="servis">Harga Servis</label>
            <input type="text" name="servis" id="servis" readonly>
            <label for="total">Total Bayar</label>
            <input type="text" inputmode="numeric" name="total" id="total" readonly>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>

    <!--Form-->

    <script>
        $(document).ready(function(){

        });

        function getHargaPart(){
            var id_part = document.getElementById('kode_part');
            var harga = document.getElementById('harga');
            $.ajax({
                method:"get",
                url: "<?= base_url('index.php/C_Sparepart/getDataSparepart/')?>"+id_part.value, 
                success: function(result){
                    harga.value=result;
                    total();
                }
            });
        }

        function getHargaServis(){
            var id_servis = document.getElementById('jenis');
            var servis = document.getElementById('servis');
            $.ajax({
                method:"get",
                url: "<?= base_url('index.php/C_Servis/getDataServis/')?>"+id_servis.value, 
                success: function(result){
                    servis.value=result;
                    total();
                    
                }
            });
        }

        function total(){
            var servis = document.getElementById('servis');
            var harga = document.getElementById('harga');
            var total = document.getElementById('total');

            total.value = parseInt(servis.value) + parseInt(harga.value);
        }

        
    </script>