<?php
//Extends adalah parentnya controller , jadi clas home ini anak dari class controller yang ada pada controller.php
class Home extends Controller
{
    public function index()
    {
        //paramater
        $data['judul'] = 'Home';

        //memanggil view header di method controller
        $this->view('template/header-home', $data);

        //memanggil method yang ada pada file controller di core
        $this->view('home/index');
        
        //memanggil view footer di method controller
        $this->view('template/footer');
    }
}