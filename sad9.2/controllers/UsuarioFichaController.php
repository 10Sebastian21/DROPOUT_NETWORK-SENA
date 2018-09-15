<?php 
class UsuarioFichaController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('usuarioficha');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}
	public function registerUserFile(){
		$r='';
		$this->viewU('fichaestudiante','registrarUsuarioFicha',$r);
	}
	public function registerUserFileExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=ficha&m=viewFile');
	}
}
 ?>