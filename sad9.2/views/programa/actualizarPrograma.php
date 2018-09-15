

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar programa</h1>
		<form action="index.php?c=programa&m=updateProgramExecute" method="POST">
			<input class="form-control" type="text" name="id_programa" value="<?php echo $_GET['id_programa'] ?>">
			<input class="form-control" type="text" name="nom_programa" value="<?php echo $_GET['nom_programa'] ?>">
			<input class="form-control" type="text" name="estado_programa" value="<?php echo $_GET['estado_programa'] ?>">
			<input class="form-control" type="text" name="nvl_programa" value="<?php echo $_GET['nvl_programa'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

