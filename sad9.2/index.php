<?php 

/*
Se llama al método del controlador
*/

require_once 'core/Core.php';
$c=isset($_REQUEST['c'])?$_REQUEST['c']:'inicio';
$m=isset($_REQUEST['m'])?$_REQUEST['m']:'index';
$p[]=isset($_REQUEST['p'])?$_REQUEST['p']:'';
if (!file_exists('controllers/'.ucwords($c).'Controller.php')) {
	$c='inicio';
}
$c=ucwords($c).'Controller';
require_once 'controllers/'.$c.'.php';
$c=new $c();
if (!method_exists($c, $m)) {
	$m='index';
}
call_user_func_array([$c,$m], $p);
 ?>