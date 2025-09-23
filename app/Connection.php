<?php
namespace app;

class Connection{
    public static function getDatabase(){
        try{
            $conn = new \PDO(
                "mysql:host=localhost;dbname=highlighters;charset=utf8",
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