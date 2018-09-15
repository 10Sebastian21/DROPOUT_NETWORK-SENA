 <script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
    </script>
 <div class='col-10 justify-content-center text-center mt-5'>

    <table id="table" class="display table-responsive" style="width:100%">
        <thead>
            <th>nombres</th>
            <th>apellidos</th>
            <th>tipo de documento</th>
            <th>numero de documento</th>
            <th>celular</th>    
            <th>telefono</th>
            <th>correo institucional</th>
            <th>correo personal</th>
            <th>rol</th>
            <th>Eliminar</th>
            <th>Actulizar</th>
        </thead>
        <tbody>
           <?php foreach ($r as $fila) { 
                    echo "<tr><td>".$fila->nombres."</td>".
                            "<td>".$fila->apellidos."</td>".
                            "<td>".$fila->Tip_doc.
                            "</td><td>".$fila->num_documento.
                            "</td><td>".$fila->cel_usuario.
                            "</td><td>".$fila->tel_usuario.
                            "</td><td>".$fila->correo_instu.
                            "</td><td>".$fila->correo_perso.
                            "</td><td>".$fila->tip_rol."</td>".
                            "</td><td>
                                <a href='index.php?c=usuario&m=deleteUser&delete=".$fila->id_usuario."' class='btn btn-danger'><i class='fa fa-trash'></i> Eliminar</a>
                                </td>".
                            "</td><td>
                                <a href='index.php?c=usuario&m=updateUser&id_usuario=".$fila->id_usuario."&nombres=".$fila->nombres."&apellidos=".$fila->apellidos."&id_doc=".$fila->id_doc."&num_documento=".$fila->num_documento."&cel_usuario=".$fila->cel_usuario."&tel_usuario=".$fila->tel_usuario."&correo_instu=".$fila->correo_instu."&correo_perso=".$fila->correo_perso."&id_rol=".$fila->id_rol."' class='btn btn-primary'><i class='fa fa-cog'></i> Actualizar</a>
                                </td>".
                            "</tr>";

                    }
                ?>
           </tbody>
       </table>   
       <a href="index.php?c=usuario&m=registerUser" class="btn btn-primary"> Agregar</a>
    
        
            <script>
                $(document).ready(function(){
                    $('#masivo').click(function(){
                    $('#masivoContenedor').css('display','block');
                    console.log('Entro');
                    });
                });
            </script>   
            <button class="btn btn-primary" id="masivo">Masivo</button>
                <div style="display: none;" id="masivoContenedor" class="mt-2"> 
                    <form action="index.php?c=usuario&m=cargoMasivo" class="formulariocompleto" method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="btn btn-info "/>
                    <input type="submit" value="SUBIR ARCHIVO" class="btn btn-primary " name="enviar">
                    </form>
                </div>
</div>

