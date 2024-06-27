<?php

class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekLogin($input)
    {
        $this->db->query('SELECT * FROM akun where email=:email AND password=:password');
        $this->db->bind('email', $input['email']);
        $this->db->bind('password', $input['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getUserData()
    {
        $this->db->query('SELECT * FROM akun where email=:email');
        $this->db->bind('email', $_POST['email']);
        $this->db->execute();
        return $this->db->single();
    }
}
