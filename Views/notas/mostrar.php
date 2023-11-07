
<?php
   session_start();
  
  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../home.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Periodo Escolar | Sistema Escolar</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../Assets/css/bootstrap-1.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../../Assets/css/custom.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../../Assets/img/umg.png">
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
       <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="../../Assets/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map">
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

			<li  class="">
                    <a href="../admin/pages-admin.php" class="dashboard"><i class="material-icons">dashboard</i>
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
								  placeholder="Buscar...">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">Buscar</button>
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
              <div class="row">
                
                <div class="col-md-12">
                <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">NOTAS DE ALUMNOS</h2>
        </div>

        <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i>Agregar calificaciones </a>

          <a href="plantilla.php" class="btn btn-danger">
          <i class="material-icons">print</i> </a>
         
        </div>
      </div>


    </div>

    <?php
require '../../Config/config.php';

$sentencia = $connect->prepare("SELECT * FROM notas");
$sentencia->execute();
$notas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Notas</title>
</head>
<body>
<table class="table table-striped table-hover">
      <thead>

    
        <tr>
           
        
            <th>Nombre Estudiante</th>
            <th>carnet </th>
            <th>Primer Parcial</th>
            <th>Segundo Parcial</th>
            <th>Zona</th>
            <th>Examen Final</th>
            <th>nota final</th>
            <th>Estado</th>
        </tr>
        </thead>
        <?php
  

        $stmt = $connect->prepare('SELECT * FROM notas');
        $stmt->execute();
        $notas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($notas as $nota) {
            echo "<tr>";
         
           
            echo "<td>{$nota['nomstu']}</td>";
            echo "<td>{$nota['dnist']}</td>";
            echo "<td>{$nota['primer_parcial']}</td>";
            echo "<td>{$nota['segundo_parcial']}</td>";
            echo "<td>{$nota['zona']}</td>";
            echo "<td>{$nota['examen_final']}</td>";
            echo "<td>{$nota['promedio']}</td>";
            echo "<td>{$nota['estado']}</td>";
            echo "</tr>";
        }
        ?>

        
    </table>
</body>
</html>


<?php 


if (isset($_POST['editar'])){
$idstu = $_POST['idstu'];
$sql= "SELECT * FROM notas WHERE idstu = :idstu"; 
$stmt = $connect->prepare($sql);
$stmt->bindParam(':idstu', $idstu, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input value="<?php echo $obj->idstu;?>" name="idstu" type="hidden">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="primer_parcial">nota primer parcial</label>
      <input value="<?php echo $obj->dnist;?>" maxlength="8"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="dnist" type="text" class="form-control"  placeholder="primer-parcial">
    </div>
    <div class="form-group col-md-6">
      <label for="segundo_parcial">segundo parcial</label>
      <input value="<?php echo $obj->nomstu;?>" name="nomstu" type="text" placeholder="Nombre y apellidos" class="form-control">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="zona">Zona</label>
      <input value="<?php echo $obj->edast;?>" name="edast" type="text" class="form-control" placeholder="zona">
    </div>

     <div class="form-group col-md-6">
      <label for="examen_final">examen final</label>
      <input value="<?php echo $obj->correo;?>" name="correo" type="email" class="form-control" placeholder="final">
    </div>
  </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="promedio">notal final</label>
      <input value="<?php echo $obj->direce;?>" name="direce" type="text" class="form-control" placeholder="notal final">
    </div>

    <div class="form-group col-md-6">
      <label for="estado">estado</label>
      <select required name="sexes" class="form-control">
    <option value="<?php echo $obj->sexes;?>"><?php echo $obj->sexes;?></option>        
    <option value=""><< >></option>
    <option value="Masculino">aprobado </option>
    <option value="Femenino">no aprobado</option>
    
    </select>
    </div>

  </div>



        <div class="form-group">
          <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
        </div>
</form>
    </div>  
<?php }?>

   

