<?php
class Controller
{
    //Untuk memlihat file pada app/view
    public function view ($view, $data = [])
    {
        //memanggil file yang ada pada view tergantung dari paramater $view yang dipanggil memalui  file controller
        require_once '../app/views/' . $view . '.php';
    }

    //untuk mengelolah file model, jadi setiap class yang dipanggil pada file controllers harus ada pada controller .php
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        //kenapa return karena dia memanggil class bukan hanya file
        return new $model;
    }
}