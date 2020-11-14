<?php
function conectar() {
	$out =  mysqli_connect(HOST_DB, USER_DB, PASS_DB, NAME_DB);
        
        if ($out->connect_error){
            die("Conexion fallida:".$out->connect_error);
        }
return $out;
}

function desconectar($conexion) {
	mysqli_close($conexion);
}

function cargamosProfesores(){
    $conn = conectar();
    $sql = 'SELECT * FROM  teachers';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
return mysqli_fetch_all($result);    
    
}

function borraProfesor($id){
    $conn = conectar();
    $sql = 'DELETE FROM  teachers WHERE id_teacher="'.$id.'"';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);

    
}

function generaProfesor($nombre,$apellidos,$telefono,$nif,$email){
    $conn = conectar();
    $sql = 'INSERT INTO teachers (NULL,'.$nombre.','.$apellidos.','.$telefono.','.$nif.','.$email.')';
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    
}



$arrayProfes = cargamosProfesores();
$totalProfesores = sizeof(cargamosProfesores());