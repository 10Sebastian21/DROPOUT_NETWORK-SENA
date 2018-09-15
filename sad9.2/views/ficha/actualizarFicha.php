

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar usuario</h1>
		<form action="index.php?c=ficha&m=updateFileExecute" method="POST">
			<input class="form-control" type="text" name="id_ficha" value="<?php echo $_GET['id_ficha'] ?>">
			<input class="form-control" type="text" name="num_ficha" value="<?php echo $_GET['num_ficha'] ?>">
			<input class="form-control" type="date" name="fecha_inicio" value="<?php echo $_GET['fecha_inicio'] ?>">
			<input class="form-control" type="date" name="fecha_fin" value="<?php echo $_GET['fecha_fin'] ?>">
			<input class="form-control" type="text" name="id_programa" value="<?php echo $_GET['id_programa'] ?>">
			<input class="form-control" type="text" name="id_trimestre" value="<?php echo $_GET['id_trimestre'] ?>">
			<input class="form-control" type="text" name="id_jornada" value="<?php echo $_GET['id_jornada'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

