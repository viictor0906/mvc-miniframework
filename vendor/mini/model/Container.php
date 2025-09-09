<?php
namespace mini\model;

use app\Connection;

class Container{
    public static function getModel($model){
        $class = "\\app\\models\\".$model;
        $conn = Connection::getDatabase();

        return new $class($conn);
    }
}
?>