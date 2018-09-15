<?php

class TrimestreModel{
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
            $stm=$this->pdo->prepare("INSERT INTO trimestres (num_trimestre,fecha_inicio,fecha_fin) VALUES (?,?,?)");
            $stm->execute([
                $data['num_trimestre'],
                $data['fecha_inicio'],
                $data['fecha_fin']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM trimestres WHERE id_trimestre = ?");
            $stm->execute([$data['id_trimestre']]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }


 public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM trimestres");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM trimestres WHERE id_trimestre = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE trimestres SET num_trimestre = ?, fecha_inicio = ?, fecha_fin = ? WHERE id_trimestre = ?");
            $stm->execute([
                $data['num_trimestre'],
                $data['fecha_inicio'],
                $data['fecha_fin'],
                $data['id_trimestre']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>