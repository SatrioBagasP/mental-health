<?php

class Dokter extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . BASEURL . '/home');
        }
    }

    public function cekjadwal($id, $tanggal, $bulan, $tahun)
    {
        $data['id_psikolog'] = $id;
        $tanggalsql = $tahun . "-" . $tanggal . "-" . $bulan;
        $data['inputtanggal'] = $tanggalsql;

        if ($this->model('Dokter_model')->cekJadwal($data) > 0) {
            //jika berhasil maka create session dan redirect ke halaman dashboard
            Flasher::setFlash('Tidak', 'Ditemukan', 'danger');
            header('location: ' . BASEURL . '/dokter/jadwal/' . $id);
        } else {
            Flasher::setFlash('Silahkan membuat jadwal', 'Tersedia', 'alert');
            header('location: ' . BASEURL . '/dokter/jadwal/' . $id);
        }
    }

    public function input($id)
    {

        $data['id_psikolog'] = $id;
        $tanggalFromForm = $_POST["tanggal"];
        $data['id_akun'] =  $_SESSION['id'];
        $data['status'] = "Pending";
        // Konversi format tanggal ke format MySQL DATE (YYYY-MM-DD)
        $tanggalsql = date("Y-m-d", strtotime($tanggalFromForm));
        $data['inputtanggal'] = $tanggalsql;


        if ($this->model('Dokter_model')->cekJadwal($data) > 0) {
            //jika berhasil maka create session dan redirect ke halaman dashboard
            Flasher::setFlash('Tidak', 'Ditemukan', 'danger');
            header('location: ' . BASEURL . '/dokter/jadwal/' . $id);
        } else {
            if ($this->model('Dokter_model')->inputJadwal($data) > 0) {
                //jika berhasil maka create session dan redirect ke halaman dashboard
                Flasher::setFlash('Silahkan mengecek my apointment untuk melihat status anda', 'Ditambahkan', 'alert');
                header('location: ' . BASEURL . '/dokter/jadwal/' . $id);
            }
        }
    }

    public function jadwal($id)
    {
        $data['id_psikolog'] = $id;
        $data['judul'] = 'Jadwal Dokter';
        $data['dokter'] = $this->model('Dokter_model')->getItemsById($id);
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar',);
        $this->view('dokter/jadwal', $data);
        echo "</div>";
        $this->view('template/footer', $data);
    }

    public function index($page = 1)
    {
        $itemsPerPage = 6;
        $offset = ($page - 1) * $itemsPerPage;
        $items = $this->model('Dokter_model')->getItems($offset, $itemsPerPage);
        $totalItems  = $this->model('Dokter_model')->getTotalItems();
        $totalPages = ceil($totalItems['total'] / $itemsPerPage);
        $data['judul'] = 'List Dokter';
        $data['items'] = $items;
        $data['currentPage'] = $page;
        $data['totalPages'] = $totalPages;
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar', $data);
        $this->view('dokter/index', $data);
        echo "</div>";
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Dokter';
        $data['dokter'] = $this->model('Dokter_model')->getItemsById($id);
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar',);
        $this->view('dokter/detail', $data);
        echo "</div>";
        $this->view('template/footer');
    }

    public function hospital($page = 1)
    {
        $itemsPerPage = 6;
        $offset = ($page - 1) * $itemsPerPage;
        $items = $this->model('Dokter_model')->getItemsHospital($offset, $itemsPerPage);
        $totalItems  = $this->model('Dokter_model')->getTotalItemsHospital();
        $totalPages = ceil($totalItems['total'] / $itemsPerPage);
        $data['judul'] = 'List Dokter';
        $data['items'] = $items;
        $data['currentPage'] = $page;
        $data['totalPages'] = $totalPages;
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar', $data);
        $this->view('dokter/hospital', $data);
        echo "</div>";
        $this->view('template/footer');
    }
    public function university($page = 1)
    {
        $itemsPerPage = 6;
        $offset = ($page - 1) * $itemsPerPage;
        $items = $this->model('Dokter_model')->getItemsUniversity($offset, $itemsPerPage);
        $totalItems  = $this->model('Dokter_model')->getTotalItemsUniversity();
        $totalPages = ceil($totalItems['total'] / $itemsPerPage);
        $data['judul'] = 'List Dokter';
        $data['items'] = $items;
        $data['currentPage'] = $page;
        $data['totalPages'] = $totalPages;
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar', $data);
        $this->view('dokter/university', $data);
        echo "</div>";
        $this->view('template/footer');
    }
    public function personal($page = 1)
    {
        $itemsPerPage = 6;
        $offset = ($page - 1) * $itemsPerPage;
        $items = $this->model('Dokter_model')->getItemsPersonal($offset, $itemsPerPage);
        $totalItems  = $this->model('Dokter_model')->getTotalItemsPersonal();
        $totalPages = ceil($totalItems['total'] / $itemsPerPage);
        $data['judul'] = 'List Dokter';
        $data['items'] = $items;
        $data['currentPage'] = $page;
        $data['totalPages'] = $totalPages;
        $this->view('template/header', $data);
        echo "<div class='dokter-wrapper'>";
        $this->view('template/sidebar', $data);
        $this->view('dokter/personal', $data);
        echo "</div>";
        $this->view('template/footer');
    }
}
