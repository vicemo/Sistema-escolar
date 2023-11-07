<?php
   session_start();

  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Sistema Escolar</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../Assets/css/bootstrap-1.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../../Assets/css/custom.css">
        <link rel="stylesheet" href="../../Assets/css/card.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../../Assets/img/umg.png">
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
       <link href="../../Assets/DataTables/css/datatables.css" rel="stylesheet">
  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../Assets/img/umg.png" class="img-fluid"/><span>Sistema escolar</span></h3>
            </div>


            <ul class="list-unstyled components">

<li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          
          <span><?php echo ucfirst($_SESSION['nombre']); ?></span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="../profile/mostrar.php">Perfil</a>
                        </li>
                        <li>
                            <a href="#">Configuración</a>
                        </li>
                        <li>
                            <a href="../pages-logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>

    
			<li  class="active">
                    <a href="pages-admin.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Inicio</span></a>
      </li>
      <li class="dropdown">
    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span>Módulo de Inscripciones</span>
    </a>
    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
              
				
				 <li  class="">
                    <a href="../users/mostrar"><i class="material-icons">person_outline</i><span>Usuarios

					</span></a>
                </li>



                <li  class="">
                    <a href="../students/mostrar"><i class="material-icons">sentiment_very_satisfied</i><span>Alumnos

                    </span></a>
                </li>




               
                </ul>
</li>
<li class="dropdown">
    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span>Módulo de RRHH</span>
    </a>
    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
 
                <li  class="">
                    <a href="../teachers/mostrar"><i class="material-icons">psychology</i><span>CATEDRATICOS

                    </span></a>
                </li>
                <li  class="">
                    <a href="../fathers/mostrar"><i class="material-icons">supervisor_account</i><span>personal administrativo

                    </span></a>
                </li>
                </ul>
</li>
                <li class="dropdown">
    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span>Módulo de Asignaciones</span>
    </a>
    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                <li  class="">
                    <a href="../groups/mostrar"><i class="material-icons">card_membership</i><span>asignaciones

                    </span></a>
                    <li  class="">
                    <a href="../careers/mostrar"><i class="material-icons">school</i><span>Cursos

                    </span></a>
                </li>
                <li class="">
                    <a href="../period/mostrar"><i class="material-icons">calendar_month</i><span>Periodo escolar</span></a>
                </li>
                <li  class="">
                    <a href="../grade/mostrar"><i class="material-icons">diversity_3</i><span>Grado academico

                    </span></a>
                </li>

                <li  class="">
                    <a href="../subgrade/mostrar"><i class="material-icons">dynamic_feed</i><span>Subgrados 

                    </span></a>
                </li>
                
                </ul>
</li>
                <li class="dropdown">
    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span>Módulo de pagos</span>
    </a>
    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                <li  class="">
                    <a href="../pagos/mostrar"><i class="material-icons">payment</i><span>pagos
                    </span></a>
</li>
 
                
               
               
                </ul>
</li>      


            <li class="dropdown">
    <a href="#pageSubmenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <span>Módulo de Gestiones</span>
    </a>
    <ul class="collapse list-unstyled menu" id="pageSubmenu8">
    <li  class="">
                    <a href="../notas/mostrar"><i class="material-icons">dynamic_feed</i><span>notas

                    </span></a>
                </li>
                <li class="">
    <a href="../reportes/mostrar"> <i class="material-icons">report</i> <span>Reportes</span></a>
</li>
                <li  class="">
                    <a href="../assists/mostrar"><i class="material-icons">assignment_turned_in</i><span>Asistencias

                    </span></a>
                </li>
   
            </ul>
</li>
  

        </nav>
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">GO</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                                  
                                </ul>
                            </li>
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="../../Assets/img/yo.jpg" style="width:40px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="../profile/mostrar.php">
										  <span class="material-icons">
person_outline
</span>Perfil

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
settings
</span>Configuración</a>
                                    </li>
                                    <li>
                                        <a href="../pages-logout.php"><span class="material-icons">
logout</span>Cerrar sesión</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Bienvenido&nbsp;<?php echo ucfirst($_SESSION['usuario']); ?></h4>  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><?php echo ucfirst($_SESSION['correo']); ?></li>
                    
                  </ol>                
            </div>
			
		   </div>

           <!--------main-content------------->

    <div class="main-content">

       <div class="container">
            <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
      
        <i class="material-icons">sentiment_very_satisfied</i>
          <?php require '../../Config/config.php'; ?>
         <?php 
        $sql = "SELECT COUNT(*) total FROM students";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Estudiantes</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="material-icons">psychology</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM teachers";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Docentes</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="material-icons">supervisor_account</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM fathers";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Personal</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="material-icons">person_outline</i>
         <?php 
        $sql = "SELECT COUNT(*) total FROM usuarios";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
        <span class="count-numbers"><?php echo  $total; ?></span>
        <span class="count-name">Administrador</span>
      </div>
    </div>
  </div>
 <div class="row">

  <div class="col-sm-6 mb-3 mb-md-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo ucfirst($_SESSION['nombre']); ?></h5>
        <p class="card-text">Nombre de usuario: <?php echo ucfirst($_SESSION['usuario']); ?></p>
        <p class="card-text">Correo: <?php echo ucfirst($_SESSION['correo']); ?></p>
        <p class="card-text">Rol: ADMIN</p>
<a href="../profile/mostrar.php" class="btn btn-primary">Configuración de la cuenta</a>
<a href="../pages-logout.php" class="btn btn-primary">Cerrar Sesión</a>


      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Estudiantes recientes<a href="../students/mostrar" class="btn btn-success btn-sm">Ver todos</a></h5>

        
        <?php  
        $sentencia = $connect->query("SELECT * FROM students ORDER BY dnist ASC LIMIT 3;");
        $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        ?>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>   
                    <th>Apellidos/Nombres</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($personas as $persona){ ?>
                <tr>
                    <td><?php echo $persona->nomstu ?></td>
                    <td>
                       

                        <?php if($persona->state==1)  { ?> 
        <span class="badge badge-success">Solvente</span>

    <?php  }   else {?> 
        <span class="badge badge-danger">No Solvente</span>
        <?php  } ?>  
                            
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>

      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Docentes recientes<a href="../teachers/mostrar" class="btn btn-success btn-sm">Ver todos</a></h5>

     
        <?php  
        $sentencia = $connect->query("SELECT * FROM teachers ORDER BY dnite ASC LIMIT 3;");
        $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        ?>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>   
                    <th>Apellidos/Nombres</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($personas as $persona){ ?>
                <tr>
                    <td><?php echo $persona->nomte ?></td>
                    <td>
                       

                        <?php if($persona->state==1)  { ?> 
        <span class="badge badge-success">Participa</span>
    <?php  }   else {?> 
        <span class="badge badge-danger">No participa</span>
        <?php  } ?>  
                            
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>

      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>

     
        <?php  
        $sentencia = $connect->query("SELECT * FROM students;");
        $personas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        ?>
          
            <?php foreach($personas as $persona){ ?>
              <?php

$hoy = date("m");
$fecha_cumple = $persona->fenac;
$nomstu = $persona->nomstu;


$dianac = date('d', strtotime($fecha_cumple));
$mes_cumple = date('m', strtotime($fecha_cumple));

$hoy2 = strtotime($hoy);

$aniohoy = date('Y', $hoy2);
$nfecha = date($aniohoy.'-'.$mes_cumple.'-'.$dianac);
$diasfaltantes = (strtotime($nfecha)- strtotime($hoy));
$dfalta = $diasfaltantes/(60*60*24);
$diasf = floor($dfalta);

if ($hoy == $mes_cumple) {

  /*echo '<span  class="badge badge-success">
  <strong>Felicidades!</strong> Cumpleaños al alumn@  '.$nomstu.' </span >

  '; */
}


?>
            <?php } ?>
          

      </div>
    </div>
  </div>


</div>
        </div>

    </div>
		   
</div>
</div>
<!----------html code compleate----------->
  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../../Assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../Assets/js/popper.min.js"></script>
   <script src="../../Assets/js/bootstrap-1.min.js"></script>
   <script src="../../Assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../Assets/DataTables/js/datatables.min.js"></script>
  <script type="text/javascript">
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
</script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  
  </body>
  
  </html>


