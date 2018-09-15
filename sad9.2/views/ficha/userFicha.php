    <div class='col-10 justify-content-center text-center'>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item">
            	<a href="index.php?c=ficha&m=viewFile">Fichas</a>
            </li>
            <li class="breadcrumb-item active"><?=$_GET['ficha']?></li>
          </ol>
			<?php foreach ($r2 as $fila) {
				echo "<div class='row'><p class='col text-left'>Fecha de inicio: ".$fila->fecha_inicio."</p>"."<p class='col text-center' id='programa'></p><p class='col text-right'>Fecha de fin: ".$fila->fecha_fin."</p></div>";
			} ?>
			<div class="card mb-3">
            <div class="card-header bg-info text-white">
              <i class="fas fa-table"></i>
              Ficha <?=$_GET['ficha']?> </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<div class="table-responsive">
						<table class='table table-fluid table table-bordered table-white table-hover'>				
							<thead>
							<th>Apellidos</th>
							<th>Nombres</th>
							<th>Documento</th>
							<th>Tipo de documento</th>
							<th>Correo Institucional</th>
							</thead>

			<?php foreach ($r as $fila) { 
				$programa=$fila->nom_programa;
					echo    "<tr><td>".$fila->apellidos."</td>".
							"<td>".$fila->nombres."</td>".
							"<td>".$fila->num_documento."</td>".
							"<td>".$fila->Tip_doc."</td>".
							"<td>".$fila->correo_instu."</td></tr>";

					}
				?>
				<script>
					$(document).ready(function(){
						$('#programa').html('<?= $programa;?>');
					});
				</script>
				
		</table>
	</div>
	
 </div>

			     