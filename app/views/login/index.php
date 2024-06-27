<div class="login-container">
    <form action="<?= BASEURL; ?>/login/ceklogin" method="post" class="login-form" id="login-pegawai">
        <h1>
            Login User
        </h1>
        <?php Flasher::flashLogin(); ?>
        <input type="email" name="email" placeholder="Username" required> <br>
        <input type="password" name="password" placeholder="Password" required>
        <div class="btn-container">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</div>