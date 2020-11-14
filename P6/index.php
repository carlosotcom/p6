<?php
include ('config.php'); 

/* definimos tipo de usuario por defecto*/
if(!isset($_SESSION['rol'])){
    $_SESSION['rol']='visitor';
}


/* forzamos a panel de admin  para pruebas */
//$_SESSION['rol']='admin';




/* detecta si hemos logeado como admin*/
if (($_SESSION['rol']=='admin')){
    include VIEW.'_indexView.php'; 

}

/* detecta si hemos logeado como estudiante*/

if (($_SESSION['rol']=='student')){
    include VIEW.'_studentAdminView.php'; 

}

/* indica si hemos de ir a pagina registro */

if (($_SESSION['rol']=='registrar')){
    include VIEW.'_registerView.php'; 

}

/* si no, somos usuario de entrada, visitors */
if ($_SESSION['rol']=='visitor'){
       include VIEW.'_loginView.php'; 

}

    

