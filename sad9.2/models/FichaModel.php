<?php

class FichaModel{
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
            $stm=$this->pdo->prepare("INSERT INTO fichas (num_ficha,fecha_inicio,fecha_fin,id_programa,id_trimestre,id_jornada) VALUES (?,?,?,?,?,?)");
            $stm->execute([
                $data['num_ficha'],
                $data['fecha_inicio'],
                $data['fecha_fin'],
                $data['id_programa'],
                $data['id_trimestre'],
                $data['id_jornada']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultUserFicha($ficha){
        try {
            $stm=$this->pdo->prepare(prepared::Consulta_ficha_usuarios);
            $stm->execute([$ficha]);
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM fichas");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }
    public function consultAllWhere($data){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM fichas where num_ficha=?");
            $stm->execute([$data]);
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM fichas WHERE num_ficha = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE fichas SET num_ficha = ?, fecha_inicio = ?, fecha_fin = ?, id_programa = ?, id_trimestre = ?, id_jornada = ? WHERE id_ficha = ?");
            $stm->execute([
                $data['num_ficha'],
                $data['fecha_inicio'],
                $data['fecha_fin'],
                $data['id_programa'],
                $data['id_trimestre'],
                $data['id_jornada'],
                $data['id_ficha'] 
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }


}
?>