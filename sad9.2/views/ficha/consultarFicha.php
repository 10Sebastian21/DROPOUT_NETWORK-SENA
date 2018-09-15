    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tabla fichas</li>
          </ol>
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Tabla de fichas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>				
							<thead>
							<th>numero de la ficha</th>
							<th>programas</th>
							<th>trimestre</th>	
							<th>jornada</th>
							</thead>

			<?php foreach ($r as $fila) { 
					echo    "<tr><td><a href='index.php?c=ficha&m=viewFileUser&ficha=".$fila->num_ficha."'>".$fila->num_ficha."</a></td>".
							"<td>".$fila->id_programa."</td>".
							"<td>".$fila->id_trimestre."</td>".
							"<td>".$fila->id_jornada."</td>".
							"</td><td>
								<a href='index.php?c=ficha&m=deleteFile&delete=".$fila->num_ficha."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
								</td>".
							"</td><td>
								<a href='index.php?c=ficha&m=updateFile&num_ficha=".$fila->num_ficha."&fecha_inicio=".$fila->fecha_inicio."&fecha_fin=".$fila->fecha_fin."&id_programa=".$fila->id_programa."&id_trimestre=".$fila->id_trimestre."&id_jornada=".$fila->id_jornada."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
								</td>".
							"</tr>";
					}
				?>
		</table>
		    <form action="index.php?c=ficha&m=registerFile" method="POST">
				<button class="btn btn-primary">Agregar</button>
			<form>
			<a class="btn btn-primary" href="index.php?c=usuarioFicha&m=registerUserFile">Asignar Estudiantes</a>
	</div>
	
 </div>