<?php
namespace mini\model;

abstract class Model{
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }
}
?>