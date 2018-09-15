<?php 
class DesercionController extends IndexController
{
	//Se selecciona el modelo que se desee
	private $modeloUsuario;
		public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('desercion');
			$this->modeloUsuario2=$this->model('usuario');
		}
	}

	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function registerDesert(){
		$r='';
		$this->viewU('desercion','desercion',$r);
	}
	/*public function updateDesert(){
		$r='';
		$this->viewU('jornada','actualizarJornada',$r);
	}
	public function deleteDesert(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=jornada&m=viewJourneys');
	}*/
	public function registerDesertExecute(){
		try {
					$this->modeloUsuario->insert($_POST);
					$this->modeloUsuario2->updateState($_POST['//']);			
		} catch (Exception $e) {
			die($e);
		}

		//header('Location:index.php?c=desercion&m=registerDesert');
	}
	/*public function updateDesertExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=jornada&m=viewJourneys');
	}*/


}
 ?>