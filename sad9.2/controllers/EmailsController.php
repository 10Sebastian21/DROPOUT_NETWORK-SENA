<?php 
class EmailsController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			//$this->modeloUsuario=$this->model('competencia');
		}
	}
	
	public function index()
	{
		$r='';
		$this->view('usuario','usuario',$r);

	}

	public function viewFormEmail(){
		//$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		include_once 'views/emails/index.php';
		include_once 'views/all/footer.php';
		

	}

	public function emails(){
		require_once 'assets/vendor/PHPMailer-master/index2.php';
	}
}
 ?>
