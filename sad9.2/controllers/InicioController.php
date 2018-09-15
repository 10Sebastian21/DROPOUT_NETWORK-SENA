<?php 
class InicioController extends IndexController
{
	private $modeloUsuario;
	public function __construct(){
		$this->modeloUsuario=$this->model('usuario');
	}
	
	public function index()
	{	
		$r='';
		$this->view('index','index',$r);
	}
	public function validate(){

		if ($this->modeloUsuario->consultOne($_POST)) {
			$r=$this->modeloUsuario->consultOne($_POST);
			$_SESSION['usuario']=[];
			$_SESSION['usuario'][0]=$r->num_documento;
			echo $_SESSION['usuario'][1]=$r->nombres.' '.$r->apellidos;
			switch ($r->id_rol) {
				case 1:
					header('Location: index.php?c=usuario&m=index');
					break;
				case 2:
					header('Location: index.php?c=usuario&m=index');
					break;
				
				case 3:
					header('Location: index.php?c=usuario&m=viewInstr');
					break;
				
				case 4:
					header('Location: index.php?c=usuario&m=viewApren');
					break;
				case 5:
					header('Location: index.php?c=usuario&m=viewEnfer');
					break;
				case 6:
					break;
				default:
					break;
			}
		
		}
		else{
			header('Location: index.php?c=inicio&m=index');
			echo "<script>alert('Usuario o Contraseña Incorrecta')</script>";
		}
	}
	public function closeSesion(){
		session_destroy();
		header('Location: index.php?c=inicio&m=index');
	}
}
 ?>