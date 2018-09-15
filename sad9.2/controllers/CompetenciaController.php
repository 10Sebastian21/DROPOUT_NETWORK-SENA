<?php 
class CompetenciaController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('competencia');
		}
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewCompetition(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/competencia/consultarCompetencia.php';
		 include_once 'views/all/footer.php';

	}
	public function registerCompetition(){
		$r='';
		$this->viewU('competencia','registrarCompetencia',$r);
	}
	public function updateCompetition(){
		$r='';
		$this->viewU('competencia','actualizarCompetencia',$r);
	}
	public function deleteCompetition(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=competencia&m=viewCompetition');
	}
	public function registerCompetitionExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=competencia&m=viewCompetition');
	}
	public function updateCompetitionExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=competencia&m=viewCompetition');
	}
}
 ?>