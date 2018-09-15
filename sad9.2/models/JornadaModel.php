<?php

class JornadaModel{
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
            $stm=$this->pdo->prepare("INSERT INTO jornadas (nom_jornada,siglas_jornada) VALUES (?,?)");
            $stm->execute([
                $data['nom_jornada'],
                $data['siglas_jornada']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM jornadas WHERE id_jornada = ?");
            $stm->execute([$data['id_jornada']]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }


 public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM jornadas");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM jornadas WHERE id_jornada = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE jornadas SET nom_jornada = ?, siglas_jornada = ? WHERE id_jornada = ?");
            $stm->execute([
                $data['nom_jornada'],
                $data['siglas_jornada'],
                $data['id_jornada']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>