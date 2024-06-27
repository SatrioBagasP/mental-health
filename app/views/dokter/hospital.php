<div class="list-dokter">
    <div class="list-dokter-heading">
        Doctor's Recommendation
    </div>
    <div class="list-dokter-subheading">
        Online consultation with our on-call doctor
    </div>
    <div class="categori-heading">
        Categories :
    </div>
    <div class="list-dokter-categori">
        <div class="category-button-wrapper">
            <button class="custom-button" onclick="navigateTo('home')" id="homeBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                    <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z" />
                    <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                </svg>
                <div class="categori-desc">Hospital</div>
            </button>
            <button class="custom-button" onclick="navigateTo('about')" id="aboutBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="50
                " height="50
                " fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                </svg>
                <div class="categori-desc" style="margin-left: -9px">
                    University
                </div>
            </button>
            <button class="custom-button" onclick="navigateTo('personal')" id="personalBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="50
                " height="50
                " fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                </svg>
                <div class="categori-desc">Personal</div>
            </button>
        </div>
    </div>
    <div class="list-dokter-wrapper">
        <!-- Tampilkan data -->
        <?php foreach ($data['items'] as $item) : ?>
            <?php $harga = number_format($item["harga_psikolog"], 0, ',', '.'); ?>
            <div class="dokter-card-wrapper">
                <div class="dokter-card-img">
                    <img src="<?= BASEURL; ?>/img/7f866345d14fc027b9add8f66ab6b2c6-removebg-preview 2.png" alt="">
                </div>
                <div class="dokter-card-desc">
                    <div class="dokter-name">
                        <?php echo $item['nama_psikolog']; ?>
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300"> <?php echo $item['nama_kategori']; ?></span>
                    </div>
                    <div class="dokter-desc">
                        <?php echo $item['keahlian_psikolog']; ?>
                    </div>
                    <div class="dokter-card-footer">
                        <div class="dokter-harga">
                            Rp. <?php echo $harga; ?>
                        </div>
                        <div class="dokter-btn">
                            <a href="<?= BASEURL?>/dokter/detail/<?= $item['id_psikolog']?> " class="btn btn-primary tombol-booking"><span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Detail</span></a>
                        </div>  
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="page">
        <ul>
            <!-- Tombol Previous -->
            <?php if ($data['currentPage'] > 1) : ?>
                <li>
                    <a href="<?= BASEURL; ?>/dokter/hospital/<?php echo $data['currentPage'] - 1; ?>">
                        Previous</a>
                </li>
            <?php endif; ?>

            <!-- Tampilkan angka halaman -->
            <li>
                <a href="">
                    <?php echo $data['currentPage']; ?>

                </a>
            </li>
            <!-- Tombol Next -->
            <?php if ($data['currentPage'] < $data['totalPages']) : ?>
                <li>
                    <a href="<?= BASEURL; ?>/dokter/hospital/<?php echo $data['currentPage'] + 1; ?>">
                        Next
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<script>
    function navigateTo(page) {
            // Implementasi navigasi sesuai halaman yang diinginkan
            switch (page) {
                case 'home':
                    window.location.href = '<?= BASEURL ?>/dokter/hospital'; // Ganti dengan halaman home yang sebenarnya
                    break;
                case 'about':
                    window.location.href = '<?= BASEURL ?>/dokter/university'; // Ganti dengan halaman about yang sebenarnya
                    break;
                case 'personal':
                    window.location.href = '<?= BASEURL ?>/dokter/personal'; // Ganti dengan halaman personal yang sebenarnya
                    break;
                default:
                    break;
            }
        }

        // Menandai button aktif sesuai halaman yang sedang dibuka
        document.addEventListener('DOMContentLoaded', function () {
            var currentPage = window.location.pathname; // Mendapatkan nama halaman dari URL
            var homeBtn = document.getElementById('homeBtn');
            var aboutBtn = document.getElementById('aboutBtn');
            var personalBtn = document.getElementById('personalBtn');

            // Memeriksa apakah nama halaman sesuai dan menandai button aktif
            if (currentPage.includes('hospital')) {
                homeBtn.classList.add('active');
            } else if (currentPage.includes('university')) {
                aboutBtn.classList.add('active');
            } else if (currentPage.includes('personal')) {
                personalBtn.classList.add('active');
            }
        });
</script>
