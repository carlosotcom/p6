<?php
include MOD.'_profesoresModel.php';
include CONT.'_profesoresController.php';
?>
<br>
<div class="container-fluid">
    
    <form class="asignatio" action="?pag=_profesoresView.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Crear Profesor</label>
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" name ="surname" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="tel" class="form-control" name="telephone" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1">
                           </div>
                            <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nif" placeholder="NIF" aria-label="NIF" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="emaiil" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                        <button type="submit" class="btn btn-primary mb-2">Crear Profesor</button>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    <br>

    <hr>
        <br>

        <form class="asignatio" action="?pag=_profesoresView.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Profesores</label>
                            <select name="borra-id-profs" multiple class="form-control" id="exampleFormControlSelect1">
                            <?php
                            for ( $a = 0; $a<$totalProfesores; $a++){?>
                                <option value="<?php echo $arrayProfes[$a][0]?>"><?php echo $arrayProfes[$a][1].' '.$arrayProfes[$a][2]?></option>    
                            <?php
                            }
                            ?>
                                
                           
                        </select>
                        <br>
                       <?php /* <input type="submit" name="Borrar" value="Borrar">
                        <input type="submit" name="Editar" value="Editar">*/ ?>
                        <button type="submit" class="btn btn-primary mb-2">Borrar Profesor</button>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    <br>

    <hr>

<br>

   


</div>

</div>