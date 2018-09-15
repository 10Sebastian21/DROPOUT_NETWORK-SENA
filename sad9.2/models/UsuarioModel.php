<?php

class UsuarioModel{
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
            $stm=$this->pdo->prepare("INSERT INTO usuarios (nombres,apellidos,id_doc,num_documento,cel_usuario,tel_usuario,correo_instu,correo_perso,contrasenia,id_rol,estado) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $stm->execute([
                $data['nombres'],
                $data['apellidos'],
                $data['id_doc'],
                $data['num_documento'],
                $data['cel_usuario'],
                $data['tel_usuario'],
                $data['correo_instu'],
                $data['correo_perso'],
                md5($data['contrasenia']),
                $data['id_rol'],
                $data['estado'] = "No se encuentra en proceso"
            ]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
     public function insertMasivo($data){
        try {
            $stm=$this->pdo->prepare("INSERT INTO `usuarios`(`nombres`, `apellidos`, `id_doc`, `num_documento`, `cel_usuario`, `tel_usuario`, `correo_instu`, `correo_perso`, `contrasenia`, `id_rol`) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $stm->execute([
                $data[0],
                $data[1],
                $data[2],
                $data[3],
                $data[4],
                $data[5],
                $data[6],
                $data[7],
                $data[8],
                $data[9],
            ]);
            return $stm;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultOne($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM usuarios WHERE num_documento = ? AND contrasenia = ?");
            $stm->execute([$data['num_documento'], md5($data['contrasenia'])]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function showEstado($data){
        try {
            $stm=$this->pdo->prepare("SELECT * FROM usuarios WHERE num_documento = ?");
            $stm->execute([$data]);
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }


    public function consultAll(){
        try {    
            $stm= $this->pdo->prepare("SELECT * FROM usuarios INNER JOIN tipo_documento ON usuarios.id_doc=tipo_documento.id_doc INNER JOIN roles ON roles.id_rol=usuarios.id_rol");
            $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }   
    }

    public function delete($data){
        try {
            $stm = $this->pdo->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data){
        try {
            $stm = $this->pdo->prepare("UPDATE usuarios SET nombres = ?, apellidos = ?, id_doc = ?, num_documento = ?, cel_usuario = ?, tel_usuario = ?, correo_instu = ?, correo_perso = ?, id_rol = ? WHERE id_usuario = ?");
            $stm->execute([
                $data['nombres'],
                $data['apellidos'],
                $data['id_doc'],
                $data['num_documento'],
                $data['cel_usuario'],
                $data['tel_usuario'],
                $data['correo_instu'],
                $data['correo_perso'],
                $data['id_rol'],
                $data['id_usuario']
            ]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }

    public function updateState($data){
        try {
            $stm = $this->pdo->prepare("UPDATE usuarios SET estado = 'Se encuenta en proce de desercion' WHERE id_usuario = ?");
            $stm->execute([$data]);
        } catch (Exception $e) {
            die($e->getMessage());  
        }
    }
}
?>