 <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Proceso</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              Proceso de deserción</div>
            <div class="card-body">
              <div class="table-responsive">
<div>
	<form action="index.php?c=desercion&m=registerDesertExecute" method="POST">	
		<label>Primera fecha:</label>
			<input class="form-control" type="date" name="fecha_desercion1">
		<label>Segunda fecha:</label>
			<input class="form-control" type="date" name="fecha_desercion2">
		<label>Tercera fecha:</label>
			<input class="form-control" type="date" name="fecha_desercion3">
		<label>Observaciones:</label>
			<input class="form-control" type="text" name="observaciones">
			<br>
		<button type="submit" class="btn btn-dark col-2">Iniciar</button>
	</form>
</div>