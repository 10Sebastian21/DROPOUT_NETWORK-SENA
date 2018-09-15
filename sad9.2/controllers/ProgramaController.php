<?php 
class ProgramaController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('programa');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewProgram(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/programa/consultarPrograma.php';
		 include_once 'views/all/footer.php';

	}
	public function registerProgram(){
		$r='';
		$this->viewU('programa','registrarPrograma',$r);
	}
	public function updateProgram(){
		$r='';
		$this->viewU('programa','actualizarPrograma',$r);
	}
	public function deleteProgram(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=programa&m=viewProgram');
	}
	public function registerProgramExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=programa&m=viewProgram');
	}
	public function updateProgramExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=programa&m=viewProgram');
	}
}
 ?>