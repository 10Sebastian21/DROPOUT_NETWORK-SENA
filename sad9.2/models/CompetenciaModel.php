<?php

class CompetenciaModel{
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
            $stm=$this->pdo->prepare("INSERT INTO competencias (nom_competencia,ver_competencia,desc_competencia,id_programa) VALUES (?,?,?,?)");
            $stm->execute([
                $data['nom_competencia'],
                $data['ver_competencia'],
                $data['desc_competencia'],
                $data['id_programa']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM competencias WHERE id_competencia = ?");
            $stm->execute([$data['id_competencia']]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }


 public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM competencias");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM competencias WHERE id_competencia = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE competencias SET nom_competencia = ?, ver_competencia = ?, desc_competencia = ?, id_programa = ? WHERE id_competencia = ?");
            $stm->execute([
                $data['nom_competencia'],
                $data['ver_competencia'],
                $data['desc_competencia'],
                $data['id_programa'],
                $data['id_competencia']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>
