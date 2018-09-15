    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tabla trimestre</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Tabla de trimestre</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>				<thead>
							<th>id</th>
							<th>numero de trimestre</th>
							</thead>

			<?php foreach ($r as $fila) { 
					echo "<tr><td>".$fila->id_trimestre."</td>".
							"<td>".$fila->num_trimestre."</td>".
							"</td><td>
								<a href='index.php?c=trimestre&m=deleteTrimester&delete=".$fila->id_trimestre."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
								</td>".
							"</td><td>
								<a href='index.php?c=trimestre&m=updateTrimester&id_trimestre=".$fila->id_trimestre."&num_trimestre=".$fila->num_trimestre."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
								</td>".
							"</tr>";

					}
				?>
				
				
		</table>
					
		      <form action="index.php?c=trimestre&m=registerTrimester" method="POST">
			<button class="btn btn-primary">Agregar</button>
	<form>
	</div>
	
 </div>

			     