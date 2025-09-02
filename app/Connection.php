<?php
namespace app;

class Connection{
    public static function getDatabase(){
        try{
            $conn = new \PDO( //"\PDO" é uma classe nativa do php, definir desta forma fará ele procurar no PHP e não no namespace definido.
                "mysql:host=127.0.0.1;dbname=mvc;charset=utf8",
                "root",
                ""
            );
            return $conn;
        }catch(\PDOException $e){
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}
?>