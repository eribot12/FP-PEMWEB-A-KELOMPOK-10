<!--Form-->
<div class="menu">
    <div class="column">
        <div class="form">
        <form action="<?= site_url('karyawan/submit_gaji')?>" method="post">
            <label for="id">Nama Karyawan</label>
            <select name="id" id="id" onchange="getDataHadir()">
            <option value="0">Pilih Nama Karyawan</option>
            <?php foreach($karyawan as $row): ?>
                        <option value="<?php echo $row['id_karyawan']; ?>"><?php echo $row['nama_karyawan']; ?>  </option>
                   <?php endforeach; ?>
            </select>
            <label for="upah">Upah Per Hari</label>
            <input type="text" inputmode="numeric" name="upah" id="upah" placeholder="Masukkan Upah Per Hari" onchange="total_gaji()">
            <label for="hadir">Jumlah Kehadiran</label>
            <input type="text" name="hadir" id="hadir" readonly>
            <label for="total">Total Gaji</label>
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

        function getDataHadir(){
            var id_karyawan = document.getElementById('id');
            var hadir = document.getElementById('hadir');
            $.ajax({
                method:"get",
                url: "<?= base_url('index.php/C_Karyawan/getDataAbsensi/')?>"+id_karyawan.value, 
                success: function(result){
                    hadir.value=result;
                }
            });
        }

        function total_gaji(){
            var hadir = document.getElementById('hadir');
            var upah = document.getElementById('upah');
            var total = document.getElementById('total');
            let jumlah = 0;
            jumlah = parseInt(hadir.value) * parseInt(upah.value);
            total.value = jumlah;
        }
    </script>