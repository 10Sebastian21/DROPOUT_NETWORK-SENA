    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tabla competencias</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Tabla de competencias</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>				<thead>
							<th>id</th>
							<th>nombre</th>
							<th>versión</th>
							<th>descripción</th>
							<th>programa al que pertenece</th>
							</thead>

			<?php foreach ($r as $fila) { 
					echo "<tr><td>".$fila->id_competencia."</td>".
							"<td>".$fila->nom_competencia."</td>".
							"<td>".$fila->ver_competencia."</td>".
							"<td>".$fila->desc_competencia."</td>".
							"<td>".$fila->id_programa."</td>".
							"</td><td>
								<a href='index.php?c=competencia&m=deleteCompetition&delete=".$fila->id_competencia."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
								</td>".
							"</td><td>
								<a href='index.php?c=competencia&m=updateCompetition&id_competencia=".$fila->id_competencia."&nom_competencia=".$fila->nom_competencia."&ver_competencia=".$fila->ver_competencia."&desc_competencia=".$fila->desc_competencia."&id_programa=".$fila->id_programa."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
								</td>".
							"</tr>";

					}
				?>
				
				
		</table>
					
		      <form action="index.php?c=competencia&m=registerCompetition" method="POST">
			<button class="btn btn-primary">Agregar</button>
	<form>
	</div>
	
 </div>

			     