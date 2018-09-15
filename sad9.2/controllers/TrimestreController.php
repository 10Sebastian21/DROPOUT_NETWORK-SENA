<?php 
class TrimestreController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('trimestre');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewTrimester(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/trimestre/consultarTrimestre.php';
		 include_once 'views/all/footer.php';

	}
	public function registerTrimester(){
		$r='';
		$this->viewU('trimestre','registrarTrimestre',$r);
	}
	public function updateTrimester(){
		$r='';
		$this->viewU('trimestre','actualizarTrimestre',$r);
	}
	public function deleteTrimester(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=trimestre&m=viewTrimester');
	}
	public function registerTrimesterExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=trimestre&m=viewTrimester');
	}
	public function updateTrimesterExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=trimestre&m=viewTrimester');
	}
}
 ?>