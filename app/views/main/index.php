<div class="konten">
    <h1>
        Hallo, <?php echo $_SESSION['username'] ?> !
    </h1>
    <?php if ($_SESSION['level'] == 1) { ?>
        <div class="greatting">
            <img src="<?= BASEURL; ?>/img/good-morning 3.png" alt="">
        </div>
        <h2>
            How are you feeling today ?
        </h2>
        <div class="mood-wrapper">
            <div class="mood">
                <div class="moodimg">
                    <button class="mood-happy">
                        <img src="<?= BASEURL; ?>/img/Happy.png" alt="">
                    </button>
                </div>
                <div class="moodtext">
                    Happy
                </div>
            </div>
            <div class="mood">
                <div class="moodimg">
                    <button class="mood-calm">
                        <img src="<?= BASEURL; ?>/img/Calm - Icon.png" alt="">
                    </button>
                </div>
                <div class="moodtext">
                    Calm
                </div>
            </div>
            <div class="mood">
                <div class="moodimg">
                    <button class="mood-relax">
                        <img src="<?= BASEURL; ?>/img/Relax.png" alt="">
                    </button>
                </div>
                <div class="moodtext">
                    Relax
                </div>
            </div>
            <div class="mood">
                <div class="moodimg">
                    <button class="mood-angry">
                        <img src="<?= BASEURL; ?>/img/fa6-solid_face-angry.png" alt="">
                    </button>
                </div>
                <div class="moodtext">
                    Angry
                </div>
            </div>
        </div>
        <div class="pembatas">
            <hr>
        </div>
        <div class="menu-wrapper">
            <div class="list">
                <a href="<?= BASEURL; ?>/apointment">
                    <button class="menu">
                        <div class="menu-img">
                            <img src="<?= BASEURL; ?>/img/calendar (1) 2.png" alt="">
                        </div>
                        My<br>Appointment
                    </button>
                </a>
            </div>
            <div class="list">
                <a href="<?= BASEURL; ?>/dokter">
                    <button class="menu">
                        <div class="menu-img">
                            <img src="<?= BASEURL; ?>/img/dct.png">
                        </div>
                        Psychologist <br>Appointment
                    </button>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <button class="menu">
                        <div class="menu-img">
                            <img src="<?= BASEURL; ?>/img/quotes 2.png" alt="">
                        </div>
                        Daily<br>Quotes
                    </button>
                </a>
            </div>
        </div>
    <?php } ?>
    <?php if ($_SESSION['level'] == 2) { ?>
        <div class="menu-wrapper">
            <div class="list">
                <a href="<?= BASEURL; ?>/apointment">
                    <button class="menu">
                        <div class="menu-img">
                            <img src="<?= BASEURL; ?>/img/calendar (1) 2.png" alt="">
                        </div>
                        My<br>Appointment
                    </button>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <button class="menu">
                        <div class="menu-img">
                            <img src="<?= BASEURL; ?>/img/quotes 2.png" alt="">
                        </div>
                        Daily<br>Quotes
                    </button>
                </a>
            </div>
        </div>
    <?php } ?>
</div>

select * from list_jadwal join akun on akun.id_akun = list_jadwal.id_akun join psikolog on list_jadwal.id_psikolog = psikolog.id_psikolog where list_jadwal id_akun = 1 ;