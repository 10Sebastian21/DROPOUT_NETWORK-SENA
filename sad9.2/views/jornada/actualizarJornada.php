

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar usuario</h1>
		<form action="index.php?c=jornada&m=updateJourneysExecute" method="POST">
			<input class="form-control" type="text" name="id_jornada" value="<?php echo $_GET['id_jornada'] ?>">
			<input class="form-control" type="text" name="nom_jornada" value="<?php echo $_GET['nom_jornada'] ?>">
			<input class="form-control" type="text" name="siglas_jornada" value="<?php echo $_GET['siglas_jornada'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

