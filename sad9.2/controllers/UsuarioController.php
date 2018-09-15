<?php 
class UsuarioController extends IndexController
{
	//Se selecciona el modelo que se desee
	private $modeloUsuario;
	public function __construct(){
		if (!isset($_SESSION['usuario'])) {
			header('Location:index.php');
		} else {
			$this->modeloUsuario=$this->model('usuario');
		}
		
	
	//	$this->modelo=$this->model('nombre del modelo');
	}
	
	public function index()
	{
			$r='';
		$this->view('usuario','usuario',$r);

	}
	public function viewApren(){
		$r=$this->modeloUsuario->showEstado($_SESSION['usuario'][0]);
		$this->view('usuario','usuarioAprendiz',$r);
	}
	public function viewInstr(){
		$this->view('usuario','usuarioInstructor');
	}
	public function viewEnfer(){
		$this->view('usuario','usuarioEnfermera');
	}

	public function viewUser(){
		$r = $this->modeloUsuario->consultAll();
		include_once 'views/all/header.php';	
		include_once 'views/usuario/usuario.php';	
		 include_once 'views/usuario/consultarUsuario.php';
		 include_once 'views/all/footer.php';
	}

	public function registerUser(){
		$r='';
		$this->viewU('usuario','registrarUsuario',$r);
	}
	public function updateUser(){
		$r='';
		$this->viewU('usuario','actualizarUsuario',$r);
	}
	public function deleteUser(){
		$this->modeloUsuario->delete($_GET['delete']);
		header('Location:index.php?c=usuario&m=viewUser');
	}
	public function registerUserExecute(){
		$this->modeloUsuario->insert($_POST);
		header('Location:index.php?c=usuario&m=viewUser');
	}
	public function updateUserExecute(){
		$this->modeloUsuario->update($_POST);
		header('Location:index.php?c=usuario&m=viewUser');
	}
	public function cargoMasivo(){
	
		    $archivo = $_FILES["archivo"]["name"];
			$archivo_copiado = $_FILES["archivo"]["tmp_name"];
			$archivo_guardado = "copia_".$archivo;

			if (copy($archivo_copiado ,$archivo_guardado )) {
				//echo "se copeo correctamente el archivo temporal a nuestra carpeta de trabajo <br/>";
			}
			$info = new SplFileInfo($archivo_guardado);
			if ($info->getExtension() == 'csv') {	
				if (file_exists($archivo_guardado)) {
			    	 
			    	 $fp = fopen($archivo_guardado,"r");
			         $rows = 0;
			         while ($datos = fgetcsv($fp , 1000 , ";")) {
			         	    $rows ++;
			         	if ($rows > 1) {
			         		if($this->modeloUsuario->insertMasivo($datos)){
			         			header('Location: index.php?c=usuario&m=viewUser');
			         			//echo "se inserto los datos correctamente<br/>";
			         		}
			         	}
			         }
			    }
			}
	}
}
 ?>