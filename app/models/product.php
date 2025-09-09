<?php
namespace app\models;

use mini\model\Model;

class Product extends Model{
    public function getProducts(){
        $query = "select id, description, price from products";
        return $this->db->query($query)->fetchAll();
    }
}
?>