  <!--Form-->
  <div class="menu">
    <div class="column">
        <div class="form">
        <form action="" method="post">
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
            <label for="tgl">Tanggal Beli</label>
            <input type="date" name="tgl" id="tgl">
            <label for="jumlah">Jumlah Beli</label>
            <input type="text" inputmode="numeric" name="jumlah" id="jumlah" onchange="getTotal()">
            <label for="harga">Harga Sparepart</label>
            <input type="text" name="harga" id="harga" readonly>
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
                    getTotal();
                }
            });
        }

        function getTotal(){
            var jumlah = document.getElementById('jumlah');
            var harga = document.getElementById('harga');
            var total = document.getElementById('total');

            total.value = parseInt(jumlah.value) * parseInt(harga.value);
        }
    </script>
