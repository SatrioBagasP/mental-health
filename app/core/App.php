<?php
class App
{
    // ../public/home/index/satu/dua = home = controller, index = method, satu++ = params

    protected $controller = 'Home'; //Controller Default karena membuka file utama yaitu Home
    protected $method = 'index'; //Method default karena membuka file index.php dimana itu file default untuk website
    protected $params = []; //Paramater array karena paramaters bisa lebih dari satu tergantung dari penggunaan

    public function __construct()
    {
        //Deklarasi variable url
        $url = $this->parseUrl();

         // Controller url[0] cek jika ada nama controller pada file controllers dan setiap controller dan method harus ada pada file controllers agar bisa berjalam
        if (isset($url[0]))
        {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) 
            {
                //deklarasi variable controller baru sesuai dengan file yang dipanggil nanti
                $this->controller = $url[0];
        
                //menghapus array agar ke reset
                unset($url[0]);
            } 
	    }        
        //Memanggil file controller yang baru
        require_once '../app/controllers/' . $this->controller . '.php';
        
        //Memanggil object seperti pada java
        $this->controller = new $this->controller;

        // Method url [1] cek, jika tidak ada maka method nya default, yang ada di atas, yaitu index
        if (isset($url[1])) 
        {
            if (method_exists($this->controller, $url[1])) 
            {
                //Deklarasi variable method yang baru sesuai dengan method yang dipanggil nanti
                $this->method = $url[1];

                //menghapus array agar ke reset
                unset($url[1]);
            }
        }

        //Deklarasi paramater jika url sudah dihapus tetapi masih ada sisa berarti itu paramater
        if(!empty($url))
        {
            $this->params = array_values($url);
        }

        //Menjalankan controller dan method dan params jika ada
        call_user_func_array ([$this->controller, $this->method], $this->params);

    }

    //Mengambil url
    public function parseURL()
    {
        //Jika Url ada maka dapatkan URL
        if(isset($_GET['url']))
        {
            //Membersihkan URL tanpa tanda slash "/"
            $url = rtrim($_GET['url'], '/');

            //Membersihkan URL dari karakter yang ngaco
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //Memecah URL berdasarkan slash '/' sehigga terbagi menjadi beberapa string 0 = Controleres, 1 = Methodnya, 2++ = paramatersnya
            $url = explode('/', $url);
            return $url;
        }
    }
}