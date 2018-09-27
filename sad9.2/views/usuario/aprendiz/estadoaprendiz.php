  <div class="col-10 justify-content-center text-center">
      <?php foreach ($data as $fila): ?>
	  
        <p><?= $fila->estado ?></p>
      <?php endforeach ?>
      <div>
        <script>
				$(document).ready(function(){
					$('#detalles').click(function(){
					$('#detallecontenedor').css('display','block');
					});
				});
			</script>	
			<i class="far fa-eye" id="detalles"></i>
				<div style="display: none;" id="detallecontenedor" class="mt-2">	
					<form action="index.php?c=usuario&m=cargoMasivo" class="formulariocompleto" method="post" enctype="multipart/form-data">
					<label>Primera fecha:</label><br>
					<label>Segunda fecha:</label><br>
					<label>Tercera fecha:</label>
	 				</form>
	 			</div>    
      </div>
  </div>
