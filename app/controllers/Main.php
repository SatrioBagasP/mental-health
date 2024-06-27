<?php
//Semua class yang dibuat pada controllers harus extends controller
class Main extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . BASEURL . '/home');
        }
    }
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view('main/index', $data);
        $this->view('template/footer');
    }
    public function dokter($page= 1)
    {
        $itemsPerPage = 6;
       
        $offset = ($page- 1) * $itemsPerPage;
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
        $this->view('main/dokter', $data);
        echo "</div>";
        $this->view('template/footer');
    }
}
