<?php
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Colegio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
       
        <li class="nav-item">
          <a class="nav-link" href="?pag=_asignaturasView.php">Asignaturas</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="?pag=_cursosView.php">Cursos</a>
        </li>
    
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profesorado</a>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="?pag=_profesoresView.php">Alta Profesor</a>
            
              <a class="dropdown-item" href="?pag=_profeAsignaView.php">Asignar Asignaturas</a>
            </div>
        </li>
        
        
        
        
        
         <li class="nav-item">
          <a class="nav-link" href="?pag=_calendarioView.php">Calendario</a>
        </li>
     
        
        
        <li class="nav-item">
          <a class="nav-link" href="?pag=_userConfigView.php">Configuración</a>
        </li>
        
           <li class="nav-item">
          <a class="nav-link" href="?pag=salir">Salir</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
<script>
   $('.dropdown-toggle').dropdown()
</script>
