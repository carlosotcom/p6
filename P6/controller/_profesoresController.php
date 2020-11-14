<?php
if (isset($_POST['borra-id-profs'])){
    echo $_POST['borra-id-profs'];
borraProfesor($_POST['borra-id-profs']);
}

if ((isset($_POST['name'])) && (isset($_POST['surname'])) && (isset($_POST['telephone'])) && (isset($_POST['nif'])) && (isset($_POST['email']))) {
     generaProfesor($nombre,$apellidos,$telefono,$nif,$email);
}


?>
