<?php
class Login extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
      
        }
        else
        {
            header('location: ' . BASEURL . '/main');
        }
    }
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('template/header-login', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }
    public function ceklogin()
    {
        if($this->model('Login_model')->cekLogin($_POST) > 0)
        {
            //jika berhasil maka create session dan redirect ke halaman dashboard
            $user = $this->model('Login_model')->getUserData();
            $_SESSION['id'] = $user['id_akun'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['lvl'];
            header('location: '.BASEURL.'/main');
            exit;
        }
        else
        {
            Flasher::setFlash('Tidak','Ditemukan','danger');
            header('location: '.BASEURL.'/login');
            exit;
        }
    }
}