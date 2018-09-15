<?php 
class FichaController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('ficha');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewFile(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/ficha/consultarFicha.php';
		 include_once 'views/all/footer.php';

	}

	public function viewFileUser(){
		$r = $this->modeloUsuario->consultUserFicha($_GET['ficha']);
		$r2 = $this->modeloUsuario->consultAllWhere($_GET['ficha']);
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/ficha/userFicha.php';
		 include_once 'views/all/footer.php';

	}

	public function registerFile(){
		$r='';
		$this->viewU('ficha','registrarFicha',$r);
	}
	public function updateFile(){
		$r='';
		$this->viewU('ficha','actualizarFicha',$r);
	}
	public function deleteFile(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=ficha&m=viewFile');
	}
	public function registerFileExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=ficha&m=viewFile');
	}
	public function updateFileExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=ficha&m=viewFile');
	}
}
 ?>