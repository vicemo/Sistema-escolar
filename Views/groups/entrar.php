
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
        <title>Sección | Sistema Escolar</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../Assets/css/bootstrap-1.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../../Assets/css/custom.css">
        <link rel="stylesheet" href="../../Assets/css/check.css">
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
		
               <li class="">
                    <a href="../period/mostrar"><i class="material-icons">calendar_month</i><span>Periodo escolar</span></a>
                </li>
				
				 <li  class="">
                    <a href="../users/mostrar"><i class="material-icons">person_outline</i><span>Usuarios

					</span></a>
                </li>

                <li  class="">
                    <a href="../fathers/mostrar"><i class="material-icons">supervisor_account</i><span>Padres

                    </span></a>
                </li>

                <li  class="">
                    <a href="../teachers/mostrar"><i class="material-icons">psychology</i><span>Docentes

                    </span></a>
                </li>

                <li  class="">
                    <a href="../students/mostrar"><i class="material-icons">sentiment_very_satisfied</i><span>Alumnos

                    </span></a>
                </li>

                <li  class="">
                    <a href="../careers/mostrar"><i class="material-icons">school</i><span>Cursos

                    </span></a>
                </li>

                <li  class="">
                    <a href="../subgrade/mostrar"><i class="material-icons">dynamic_feed</i><span>Subgrados 

                    </span></a>
                </li>

                <li  class="">
                    <a href="../grade/mostrar"><i class="material-icons">diversity_3</i><span>Grados

                    </span></a>
                </li>
                <li  class="active">
                    <a href="../groups/mostrar"><i class="material-icons">card_membership</i><span>Sección

                    </span></a>
                </li>

                <li  class="">
                    <a href="../assists/mostrar"><i class="material-icons">assignment_turned_in</i><span>Asistencias

                    </span></a>
                </li>
               
            </ul>
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
          <h2 class="ml-lg-2">Sección</h2>
        </div>

        <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
         
 <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i> </a>

        </div>

      </div>
    </div>

   
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin/pages-admin.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../groups/mostrar">Sección</a></li>
              <li class="breadcrumb-item active" aria-current="page">Secciones alumnos</li>
            </ol>
          </nav>
          <!-- /Breadcrumb ------------>
    <?php 
require '../../Config/config.php';
$id = $_GET['id'];
$sql= "SELECT seccion.idsec, seccion.nomsec, subgrade.idsub, subgrade.nomsub, teachers.idtea, teachers.dnite, teachers.nomte, teachers.correo, teachers.telet, teachers.usuario,teachers.foto,teachers.sexte, course.idcur, course.nomcur, seccion.capa, seccion.state, GROUP_CONCAT(degree.iddeg, '..', degree.nomgra, '..' SEPARATOR '__') AS degree FROM seccion INNER JOIN subgrade ON seccion.idsub =subgrade.idsub INNER JOIN teachers ON seccion.idtea = teachers.idtea INNER JOIN course ON seccion.idcur = course.idcur INNER JOIN degree ON subgrade.iddeg =degree.iddeg  WHERE idsec= '$id'  GROUP BY seccion.idsec"; 
$stmt = $connect->prepare($sql);
$statement->bindParam(':Idsec', $Idsec, PDO::PARAM_INT);

$stmt->bindParam(':idsec', $idsec, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
     ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../../Assets/img/subidas/<?php echo $obj->foto;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $obj->nomte;?></h4>
                      <p class="text-secondary mb-1"><strong>Docente</strong></p>
                      <p class="text-secondary mb-1">Curso:&nbsp;<span class="badge bg-danger text-white"><?php echo $obj->nomcur;?></span></p>
                      <p class="text-muted font-size-sm"><?php echo $obj->correo;?></p>
                      <?php foreach(explode("__", $obj->degree) as $periodoConcatenados){ 
                                $degree = explode("..", $periodoConcatenados)
                                ?>
                               <p class="text-muted font-size-sm">Grado:&nbsp;<span class="badge bg-dark text-white"><?php echo $degree[1] ?></span></p>
                               
                <?php } ?>
                    <p class="text-muted font-size-sm">Sugrado:&nbsp;<span class="badge bg-success text-white"><?php echo $obj->nomsub;?></span></p>



                     <br>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DNI</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $obj->dnite;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $obj->nomte;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Correo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $obj->correo;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Teléfono</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $obj->telet;?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Usuario</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $obj->usuario;?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Género</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $obj->sexte;?>
                    </div>
                  </div>
                 
                  
                </div>
              </div>
            </div>
          </div>
          <?php ?>
<!-- /Breadcrumb ------------------------------------------>
        </div>
    </div>

<section style="background-color: #eee;">
  <div class="container py-5">
    <!-- COMIENZA------------------------- -->
    <?php
    $id = $_GET['id'];  
     $productosPorPagina = 5;
        $pagina = 1;
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                }
        $limit = $productosPorPagina;
        $offset = ($pagina - 1) * $productosPorPagina;


$stmt = $connect->query("SELECT alum_secc.idaluse, seccion.idsec, seccion.nomsec, seccion.capa, students.idstu, students.dnist, students.nomstu, students.edast, students.direce, students.correo, students.sexes, students.fenac, students.foto, count(*) AS conteo FROM alum_secc INNER JOIN  seccion ON alum_secc.idsec = seccion.idsec INNER JOIN students ON alum_secc.idstu =students.idstu WHERE alum_secc.idsec= '$id'");

$conteo = $stmt->fetchObject()->conteo;
$paginas = ceil($conteo / $productosPorPagina);


$stmt = $connect->prepare("SELECT alum_secc.idaluse, seccion.idsec, seccion.nomsec, seccion.capa, students.idstu, students.dnist, students.nomstu, students.edast, students.direce, students.correo, students.sexes, students.fenac, students.foto FROM alum_secc INNER JOIN  seccion ON alum_secc.idsec = seccion.idsec INNER JOIN students ON alum_secc.idstu =students.idstu WHERE alum_secc.idsec= '$id' LIMIT ? OFFSET ?");


$stmt->bindParam(':idsec', $idsec, PDO::PARAM_INT); 

$stmt->execute([$limit, $offset]);

$data =  array();
if($stmt){
  while($r = $stmt->fetchObject()){
    $data[] = $r;
  }
}
    ?>

    <?php if(count($data)>0):?>
    <?php foreach($data as $d):?> 
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="../../Assets/img/subidas/<?php echo $d->foto;?>"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5><?php echo $d->nomstu;?></h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
               
                </div>
                <div class="mt-1 mb-0 text-muted small">
                  <span>Estudiante</span>
                 
                </div>
                
                <p class="text-truncate mb-4 mb-md-0">
                  <?php echo $d->nomsec;?>
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-primary btn-sm" type="button">Detalles</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>
    <?php else:?>
      
      <div class="alert alert-warning" style="position: relative;
    margin-left: 705px;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay alumnos para esta sección!</strong>
        </div>
    <?php endif; ?> 
        

        <nav aria-label="Page navigation example">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> secciones disponibles</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
                </div>
            </div>
            <ul class="pagination">
                <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
                <?php if ($pagina > 1) { ?>
                    <li>
                        <a href="./entrar?id=<?php echo  $d->idsec; ?>?pagina=<?php echo $pagina - 1 ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php } ?>

                <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                    <li class="<?php if ($x == $pagina) echo "active" ?>">
                        <a href="./entrar?id=<?php echo  $d->idsec; ?>?pagina=<?php echo $x ?>">
                            <?php echo $x ?></a>
                    </li>
                <?php } ?>
                <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
                <?php if ($pagina < $paginas) { ?>
                    <li>
                        <a href="./entrar?id=<?php echo  $d->idsec; ?>?pagina=<?php echo $pagina + 1 ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
<!-- TERMINA------------------------- -->

  </div>
</section>



  </div>

</div>

<!-- add Modal HTML -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  enctype="multipart/form-data" method="POST"  autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fa fa-user mr-1"></i>REGISTRO DEL ALUMNOS
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                <div class="col-sm-6" style="display:none;">
                   <div class="form-group">
                      <label class="control-label">Nombre de la seccion</label>
                        <input type="text" value="<?php echo $obj->idsec;?>" name="idsec" required="" class="form-control">
                    </div>
                </div>  

<div class="col-sm-12" >
    <?php
   
    $sql= "SELECT * FROM students"; 
$stmt = $connect->prepare($sql);
$stmt->execute();

$data =  array();
if($stmt){
  while($r = $stmt->fetchObject()){
    $data[] = $r;
  }
}
    ?> 
<?php if(count($data)>0):?>
    <?php foreach($data as $d):?>
    <label class="image-checkbox">
      <img class="img-responsive" src="../..\Assets\img\subidas/<?php echo $d->foto; ?>" width="50" height="50"/>
      <label style="color:black; text-align: center;  display: block;"><?php echo $d->nomstu; ?></label>
      <input type="checkbox" value="<?php echo $d->idstu; ?>" name="alumno[]" value="" />
      
    </label>

<?php endforeach; ?>
    <?php else:?>
      
      <div class="alert alert-warning" style="position: relative;
    margin-left: 705px;
    margin-top: 14px;
    margin-bottom: 0px;">
            <strong>No hay datos!</strong>
        </div>
    <?php endif; ?>

</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                        <button  name='agregar' class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- Edit Modal HTML -->
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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
 
<?php  

if(isset($_POST['agregar']))
{
    
    $idsec = $_POST['idsec'];
    $alumno = $_POST['alumno'];
    
    foreach($alumno as $item)
    {
        // echo $item . "<br>";
        
        $statement = $connect->prepare("INSERT INTO alum_secc (idsec,idstu) VALUES ('$idsec','$item')");
        //Execute the statement and insert our values.
$inserted = $statement->execute();
    }

    if($inserted){
    echo '<script type="text/javascript">
swal("¡Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "mostrar";
        });
        </script>';
}
}

?>
  

  </body>
  
  </html>


