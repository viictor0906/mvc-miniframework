<?php
namespace app\models;


class Product{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getProducts(){
        $query = "select id, description, price from products";
        return $this->db->query($query)->fetchAll();
    }
}
?>