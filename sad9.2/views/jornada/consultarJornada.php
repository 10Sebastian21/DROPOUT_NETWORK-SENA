    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tabla jornadas</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Tabla de jornadas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>					<thead>
							<th>id</th>
							<th>nombre</th>
							<th>siglas</th>
							</thead>

			<?php foreach ($r as $fila) { 
					echo "<tr><td>".$fila->id_jornada."</td>".
							"<td>".$fila->nom_jornada."</td>".
							"<td>".$fila->siglas_jornada."</td>".
							"</td><td>
								<a href='index.php?c=jornada&m=deleteJourneys&delete=".$fila->id_jornada."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
								</td>".
							"</td><td>
								<a href='index.php?c=jornada&m=updateJourneys&id_jornada=".$fila->id_jornada."&nom_jornada=".$fila->nom_jornada."&siglas_jornada=".$fila->siglas_jornada."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
								</td>".
							"</tr>";

					}
				?>
				
				
		</table>
					
		      <form action="index.php?c=jornada&m=registerJourneys" method="POST">
			<button class="btn btn-primary">Agregar</button>
	<form>
	</div>
	
 </div>

			     