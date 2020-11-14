<?php
include MOD.'_userConfigModel.php';
include CONT.'_userConfigController.php';
?>
<?PHP
   echo '<script>alert("Exito de actualizacion")</script>';
?>

<div class="container-md">
    <form class="col-sm-8 col-lg-6 col-md-6 offset-sm-2 offset-md-3 offset-lg-3 border login" action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="text" class="form-control" name="user" id="usuario" aria-describedby="emailHelp">
            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
        
            <button type="submit" class="btn btn-primary text-center">Enviar</button>
    </form>
</div>