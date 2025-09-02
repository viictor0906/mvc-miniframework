<?php
namespace app\models;

class Info{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getInformations(){
        $query = "select id, title, description from info";
        return $this->db->query($query)->fetchAll();
    }
}
?>