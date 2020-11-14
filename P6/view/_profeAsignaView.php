<?php
include MOD.'_profeAsignaModel.php';
include CONT.'_profeAsignaController.php';
?>
<br>
 <div class="container-fluid">
    <form class="asignatio">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Asginaciones</label>
                            <select multiple class="form-control" id="exampleFormControlSelect1">
                            <option>Doña Urraca - Matematicas 2</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary mb-2">Borrar Asignación</button>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
    <br>
    <hr>
      
   <br>
    <form class="asignatio">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Profesor</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Asignatura</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Matematicas 2</option>
                      <option>Fisica 1</option>
                      <option>Sociología</option>
                      <option>Historia</option>
                      <option>Optativa 1</option>
                    </select>
                   
                </div>
            </div>
          </div>   
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 
                <button type="submit" class="btn btn-primary mb-2">Asignar</button>
                </div>
            </div>
        </div>
    </form>
</div>
