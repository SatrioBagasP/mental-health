<?php
//Semua class yang dibuat pada controllers harus extends controller
class Apointment extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . BASEURL . '/home');
        }
    }
    public function index()
    {
        $data['id_akun'] =  $_SESSION['id'];
        $data['judul'] = 'Jadwal';
        if($_SESSION['level'] == 1)
        {
            $data['jadwal'] = $this->model('Jadwal_model')-> getJadwalById($data);
        }
        if($_SESSION['level'] == 2)
        {
            $data['jadwal'] = $this->model('Jadwal_model')-> getJadwalByIdDokter($data);
        }
        $this->view('template/header', $data);
        $this->view('apointment/index', $data);
        $this->view('template/footer');
    }
    public function acc($id)
    {   
        $data['id'] = $id;
        $data ['status'] = "Accepted";
        if($this->model('Jadwal_model')->accJadwal($data) > 0)
        {
            header('location: '.BASEURL.'/Apointment');
            exit;
        }
    }
    public function reject($id)
    {   
        $data['id'] = $id;
        if($this->model('Jadwal_model')->rejectJadwal($data) > 0)
        {
            header('location: '.BASEURL.'/Apointment');
            exit;
        }
    }
}
