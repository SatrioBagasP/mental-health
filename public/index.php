<?php
if(!session_id()) 
{
    session_start();
}
//Memanggil file init agar new app bisa jalan
require_once '../app/init.php';

//memanggil object seperti pada bahasa java
$app = new App;