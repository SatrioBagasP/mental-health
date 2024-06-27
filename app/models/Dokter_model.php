<?php

class Dokter_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekJadwal($data)
    {
        $this->db->query('SELECT * FROM list_jadwal where id_psikolog=:id_psikolog AND tanggal_konsul=:inputtanggal');
        $this->db->bind('id_psikolog', $data['id_psikolog']);
        $this->db->bind('inputtanggal', $data['inputtanggal']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function inputJadwal($data)
    {
        $this->db->query('INSERT INTO list_jadwal values (NULL,:id_akun,:id_psikolog, :status, :inputtanggal)');
        $this->db->bind('id_psikolog', $data['id_psikolog']);
        $this->db->bind('inputtanggal', $data['inputtanggal']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_akun', $data['id_akun']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getItemsById($id_psikolog)
    {
        $this->db->query("SELECT * FROM psikolog join kategori on kategori.id_kategori = psikolog.id_kategori where id_psikolog =:id_psikolog ");
        $this->db->bind('id_psikolog', $id_psikolog);

        return $this->db->single();
    }

    public function getItems($offset, $limit)
    {
        $query = "SELECT * FROM psikolog join kategori on kategori.id_kategori = psikolog.id_kategori limit $offset,$limit";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getTotalItems()
    {
        $query = "SELECT COUNT(*) as total FROM psikolog";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getItemsHospital($offset, $limit)
    {
        $query = "SELECT * FROM psikolog join kategori on kategori.id_kategori = psikolog.id_kategori where psikolog.id_kategori = 3 limit $offset,$limit";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getTotalItemsHospital()
    {
        $query = "SELECT COUNT(*) as total FROM psikolog where id_kategori = 3";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getItemsPersonal($offset, $limit)
    {
        $query = "SELECT * FROM psikolog join kategori on kategori.id_kategori = psikolog.id_kategori where psikolog.id_kategori = 2 limit $offset,$limit";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getTotalItemsPersonal()
    {
        $query = "SELECT COUNT(*) as total FROM psikolog where id_kategori = 2";
        $this->db->query($query);
        return $this->db->single();
    }

    public function getItemsUniversity($offset, $limit)
    {
        $query = "SELECT * FROM psikolog join kategori on kategori.id_kategori = psikolog.id_kategori where psikolog.id_kategori = 1 limit $offset,$limit";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getTotalItemsUniversity()
    {
        $query = "SELECT COUNT(*) as total FROM psikolog where id_kategori = 1";
        $this->db->query($query);
        return $this->db->single();
    }
}
