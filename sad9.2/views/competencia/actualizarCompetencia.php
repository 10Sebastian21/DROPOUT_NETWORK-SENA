

	<div class="col-8 ml-5 text-center">
		<h1>Actualizar usuario</h1>
		<form action="index.php?c=competencia&m=updateCompetitionExecute" method="POST">
			<input class="form-control" type="text" name="id_competencia" value="<?php echo $_GET['id_competencia'] ?>">
			<input class="form-control" type="text" name="nom_competencia" value="<?php echo $_GET['nom_competencia'] ?>">
			<input class="form-control" type="text" name="ver_competencia" value="<?php echo $_GET['ver_competencia'] ?>">
			<input class="form-control" type="text" name="desc_competencia" value="<?php echo $_GET['desc_competencia'] ?>">
			<input class="form-control" type="text" name="id_programa" value="<?php echo $_GET['id_programa'] ?>">
			<button type="submit" class="btn btn-success m-1">Actualizar</button>
		</form>
	</div>

