<?php
class Logout extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . BASEURL . '/login');
        }
    }
    public function index()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        header('location: '.BASEURL.'/home');
    }
}