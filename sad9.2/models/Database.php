<?php

class DataBase{
    
    public static function connect(){
        try {
			$conexion=new PDO('mysql:host=localhost;dbname=ssad;charset=utf8','root',null);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conexion;
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }
}
?>