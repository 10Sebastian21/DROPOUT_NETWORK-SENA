

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar usuario</h1>
		<form action="index.php?c=trimestre&m=updateTrimesterExecute" method="POST">
				<input class="form-control" type="text" name="id_trimestre" value="<?php echo $_GET['id_trimestre'] ?>">
				<input class="form-control" type="text" name="num_trimestre" value="<?php echo $_GET['num_trimestre'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

