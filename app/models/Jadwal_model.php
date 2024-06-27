<?php

class Jadwal_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getJadwalById($id)
    {
        $id_akun = $_SESSION['id'];
        
        $this->db->query('SELECT * from list_jadwal join akun on akun.id_akun = list_jadwal.id_akun join psikolog on psikolog.id_psikolog = list_jadwal.id_psikolog where list_jadwal.id_akun =:id_akun');
        $this->db->bind('id_akun', $id_akun);
        return $this->db->resultSet();
    }
    public function getJadwalByIdDokter($id)
    {
        $id_akun = $_SESSION['id'];
        
        $this->db->query('SELECT * from list_jadwal join akun on akun.id_akun = list_jadwal.id_akun join psikolog on psikolog.id_psikolog = list_jadwal.id_psikolog where psikolog.id_akun =:id_akun');
        $this->db->bind('id_akun', $id_akun);
        return $this->db->resultSet();
    }
    public function accJadwal($data)
    {
        $this->db->query('UPDATE list_jadwal set status = "Accepted" where id_jadwal =:id ');
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function rejectJadwal($data)
    {
        $this->db->query('DELETE from list_jadwal where id_jadwal=:id');
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
