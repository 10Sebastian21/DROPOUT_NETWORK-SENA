    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tabla programas</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Tabla de programas</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>										<thead>
							<th>id</th>
							<th>nombre</th>
							<th>estado</th>
							<th>nivel</th>
							</thead>

			<?php foreach ($r as $fila) { 
					echo "<tr><td>".$fila->id_programa."</td>".
							"<td>".$fila->nom_programa."</td>".
							"<td>".$fila->estado_programa."</td>".
							"<td>".$fila->nvl_programa."</td>".
							"</td><td>
								<a href='index.php?c=programa&m=deleteProgram&delete=".$fila->id_programa."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
								</td>".
							"</td><td>
								<a href='index.php?c=programa&m=updateProgram&id_programa=".$fila->id_programa."&nom_programa=".$fila->nom_programa."&estado_programa=".$fila->estado_programa."&nvl_programa=".$fila->nvl_programa."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
								</td>".
							"</tr>";

					}
				?>
				
				
		</table>
					
		      <form action="index.php?c=programa&m=registerProgram" method="POST">
			<button class="btn btn-primary">Agregar</button>
	<form>
	</div>
	
 </div>

			     