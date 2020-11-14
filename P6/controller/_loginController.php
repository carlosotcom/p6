<?php

/* nada hemos logueado*/
if (!isset($_POST['user']) && (!isset($_POST['pass'])) ){
    $_SESSION['rol']='visitor';
 
}else{


 /* hemos logueado via post*/  
    
$resultado = loguea_estudiante($_POST['user'],$_POST['pass']);
if ($resultado){
    echo 'es estudiante<br>';
    $_SESSION['student']=true;
    $_SESSION['admin']=false;
    $_SESSION['rol']='student';
  
 header("Refresh:0");
}


$resultadoAdmin = loguea_admin($_POST['user'],$_POST['pass']);
if ($resultadoAdmin){
    echo 'es admin<br>';
    $_SESSION['student']=false;
    $_SESSION['admin']=true;
    $_SESSION['rol']='admin';
    header("Refresh:0");
}

}

if (!isset($_SESSION['rol'])){
    $_SESSION['rol']='visitor';
}

/* hemos logeado pero no existe en bs*/
if (isset($_POST['user']) && isset($_POST['pass']) && !$resultado && !$resultadoAdmin){
    $_SESSION['rol']='registrar';
     header("Refresh:0");
}



 