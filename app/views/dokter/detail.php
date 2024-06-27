<?php $harga = number_format($data['dokter']['harga_psikolog'], 0, ',', '.'); ?>
<div class="detail-dokter">
    <div class="detail-dokter-wrapper">
        <div class="detail-dokter-card">
            <div class="detail-dokter-title">
                <div class="detail-dokter-img">
                    <img src="<?= BASEURL ?>/img/7f866345d14fc027b9add8f66ab6b2c6-removebg-preview 2.png" alt="" />
                </div>
                <div class="detail-dokter-name"><?= $data['dokter']['nama_psikolog'] ?></div>
                <div class="detail-dokter-kategori">Category : <?= $data['dokter']['nama_kategori'] ?></div>
                <div class="detail-dokter-harga">
                    Rp : <?= $harga ?>
                </div>
                <div class="detail-dokter-ahli">
                    Bidang Keahlian :
                    <br>
                    <?= $data['dokter']['keahlian_psikolog'] ?>
                </div>
                <div class="detail-dokter-deskripsi">
                <?= $data['dokter']['deskripsi_psikolog'] ?>
                </div>
            </div>
        </div>
        <!-- Button -->
        <a href="<?= BASEURL ?>/dokter/jadwal/<?=$data['dokter']['id_psikolog']?>"><button class="detail-dokter-btn">Bikin Jadwal</button></a>

    </div>
</div>