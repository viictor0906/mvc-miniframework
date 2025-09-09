<?php
namespace app\models;

use mini\model\Model;

class Info extends Model{
    public function getInformations(){
        $query = "select id, title, description from info";
        return $this->db->query($query)->fetchAll();
    }
}
?>