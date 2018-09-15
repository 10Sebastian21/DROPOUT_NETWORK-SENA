<?php

class ProgramaModel{
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
            $stm=$this->pdo->prepare("INSERT INTO programas (nom_programa,estado_programa,nvl_programa) VALUES (?,?,?)");
            $stm->execute([
                $data['nom_programa'],
                $data['estado_programa'],
                $data['nvl_programa']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM programas WHERE id_programa = ?");
            $stm->execute([$data['id_programa']]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }


 public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM programas");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM programas WHERE id_programa = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE programas SET nom_programa = ?, estado_programa = ?, nvl_programa = ? WHERE id_programa = ?");
            $stm->execute([
                $data['nom_programa'],
                $data['estado_programa'],
                $data['nvl_programa'],
                $data['id_programa']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>