
<div class="col-8 justify-content-center text-center ml-5">
	
		<h1>Registrar usuario</h1>
		<form action="index.php?c=ficha&m=registerFileExecute" method="POST">
			<input class="form-control" type="text" name="num_ficha" placeholder="numero de la ficha">
			<input class="form-control" type="date" name="fecha_inicio" placeholder="fecha de inicio de la ficha">
			<input class="form-control" type="date" name="fecha_fin" placeholder="fecha que acaba la ficha">
			<input class="form-control" type="text" name="id_programa" placeholder="programa que vera la ficha">
			<input class="form-control" type="text" name="id_trimestre" placeholder="trimestre que cursa la ficha">
			<input class="form-control" type="text" name="id_jornada" placeholder="jornada que pertenece la ficha">
			<button type="submit" class="btn btn-primary m-1">Registrar</button>
		</form>

</div>
