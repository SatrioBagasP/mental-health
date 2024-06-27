<?php $harga = number_format($data['dokter']['harga_psikolog'], 0, ',', '.'); ?>
<div class="jadwal-dokter">
    <div class="jadwal-dokter-wrapper">
        <div class="jadwal-dokter-konten">
            <!-- <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <span class="font-medium">Info alert!</span> Change a few things
                up and try submitting again.
            </div> -->
            <?php Flasher::flashJadwal(); ?>
            <div class="jadwal-dokter-profile">
                <div class="jadwal-dokter-img">
                    <img src="<?= BASEURL ?>/img/7f866345d14fc027b9add8f66ab6b2c6-removebg-preview 2.png" alt="" />
                </div>
                <div class="jadwal-dokter-name"><?= $data['dokter']['nama_psikolog'] ?></div>
            </div>
            <div class="jadwal-dokter-harga-wrapper">
                <div class="jadwal-dokter-list-harga">
                    <div class="jadwal-dokter-tipe-harga">Biaya Sesi</div>
                    <div class="jadwal-dokter-harga">Rp <?= $harga ?></div>
                </div>
                <div class="jadwal-dokter-list-harga">
                    <div class="jadwal-dokter-tipe-harga">Biaya Layanan</div>
                    <div class="jadwal-dokter-harga">Rp 0</div>
                </div>
                <div class="jadwal-dokter-list-harga">
                    <div class="jadwal-dokter-tipe-harga">Pembayaranmu</div>
                    <div class="jadwal-dokter-harga">Rp <?= $harga ?></div>
                </div>
            </div>
            <form action="<?= BASEURL ?>/dokter/input/<?= $data['dokter']['id_psikolog']?>" method="post">
                <div class="jadwal-dokter-input">
                    <div class="jadwal-dokter-tanggal">
                        <label for="datepicker">Pilih Tanggal:</label>
                        <input type="text" name="tanggal" id="datepicker"  autocomplete="off" required />
                    </div>
                    <div class="jadwal-dokter-btn">
                        <button type="button" onclick="cekJadwal()">
                            Cek Ketersediaan
                        </button>
                    </div>
                </div>
                <div class="jadwal-dokter-kirim">
                    <button type="submit">KIRIM</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: 0, // Menonaktifkan tanggal kemarin
            beforeShowDay: function(date) {
                var today = new Date();
                var yesterday = new Date(today);
                yesterday.setDate(today.getDate() - 1);
                return [date > yesterday];
            }
        })
    })

    function cekJadwal() {
      // Mendapatkan nilai tanggal dari datepicker
      var tanggal = document.getElementById('datepicker').value;

      // Memeriksa apakah tanggal sudah terisi
      if (tanggal.trim() !== '') {
        // Mengarahkan pengguna ke halaman baru jika tanggal sudah terisi
        window.location.href = "<?= BASEURL ?>/dokter/cekjadwal/<?= $data['dokter']['id_psikolog'] ?>/" + tanggal; // Gantilah dengan path yang sesuai
      } else {
        // Menampilkan pesan atau mengambil tindakan lain jika tanggal belum terisi
        alert("Mohon isi tanggal sebelum melakukan pemeriksaan jadwal.");
      }
    }
</script>