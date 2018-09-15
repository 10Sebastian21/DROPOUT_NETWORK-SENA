<?php 
class JornadaController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('jornada');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewJourneys(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/jornada/consultarJornada.php';
		 include_once 'views/all/footer.php';

	}
	public function registerJourneys(){
		$r='';
		$this->viewU('jornada','registrarJornada',$r);
	}
	public function updateJourneys(){
		$r='';
		$this->viewU('jornada','actualizarJornada',$r);
	}
	public function deleteJourneys(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=jornada&m=viewJourneys');
	}
	public function registerJourneysExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=jornada&m=viewJourneys');
	}
	public function updateJourneysExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=jornada&m=viewJourneys');
	}
}
 ?>