<?php

class DesercionModel{
private $pdo;
    public function __construct(){
    	try {
    		$this->pdo=DataBase::connect();	
    	} catch (Exception $e) {
    		die($e->getMessage());
    	}
    }
    public function insert($data){
        try {
            $stm=$this->pdo->prepare("INSERT INTO deserciones (fecha_reporte,fecha_desercion1,fecha_desercion2,fecha_desercion3,observaciones) VALUES (?,?,?,?,?)");
            $stm->execute([
                date('Y-m-d',time()),
                $data['fecha_desercion1'],
                $data['fecha_desercion2'],
                $data['fecha_desercion3'],
                $data['observaciones']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM deserciones WHERE id_desercion = ?");
            $stm->execute([$data['id_desercion']]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM deserciones");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM deserciones WHERE id_desercion = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE deserciones SET fecha_desercion1 = ?, fecha_desercion2 = ?, fecha_desercion3 = ? WHERE id_desercion = ?");
            $stm->execute([
                $data['fecha_desercion1'],
                $data['fecha_desercion2'],
                $data['fecha_desercion3'],
                $data['id_desercion']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }

    public function updateState(){
        try {
            $stm = $this->pdo->prepare("UPDATE usuarios SET estado = 'Se encuenta en proce de desercion' WHERE id_usuario = ?");
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>