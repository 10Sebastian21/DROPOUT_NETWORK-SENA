

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar usuario</h1>
		<form action="index.php?c=usuario&m=updateUserExecute" method="POST">
			<input class="form-control" type="text" name="id_usuario" value="<?php echo $_GET['id_usuario'] ?>">
			<input class="form-control" type="text" name="nombres" value="<?php echo $_GET['nombres'] ?>">
			<input class="form-control" type="text" name="apellidos" value="<?php echo $_GET['apellidos'] ?>">
			<input class="form-control" type="text" name="id_doc" value="<?php echo $_GET['id_doc'] ?>">
			<input class="form-control" type="text" name="num_documento" value="<?php echo $_GET['num_documento'] ?>">
			<input class="form-control" type="text" name="cel_usuario" value="<?php echo $_GET['cel_usuario'] ?>">
			<input class="form-control" type="text" name="tel_usuario" value="<?php echo $_GET['tel_usuario'] ?>">
			<input class="form-control" type="text" name="correo_instu" value="<?php echo $_GET['correo_instu'] ?>">
			<input class="form-control" type="text" name="correo_perso" value="<?php echo $_GET['correo_perso'] ?>">

			<input class="form-control" type="text" name="id_rol" value="<?php echo $_GET['id_rol'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

