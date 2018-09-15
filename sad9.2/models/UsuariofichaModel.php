<?php

class UsuarioFichaModel{
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
            $stm=$this->pdo->prepare("INSERT INTO fichas_has_usuarios (fichas_num_ficha,usuarios_id_usuario) VALUES (?,?)");
            $stm->execute([
                $data['fichas_num_ficha'],
                $data['usuarios_id_usuario']
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>