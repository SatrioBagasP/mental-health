<?php

class Product_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getItems($offset, $limit) {
        $query = "SELECT * from list_product limit $offset,$limit";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getTotalItems() {
        $query = "SELECT COUNT(*) as total FROM list_product";
        $this->db->query($query);
        return $this->db->single();
    }
    
}
