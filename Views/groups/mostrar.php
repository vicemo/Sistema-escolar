
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
          <h2 class="ml-lg-2">Modulo de asignaciones</h2>
        </div>

        <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
          <i class="material-icons">&#xE147;</i> </a>

          <a href="plantilla.php" class="btn btn-danger">
          <i class="material-icons">print</i> </a>
         
        </div>
      </div>


    </div>

      <?php 
 require '../../Config/config.php';

 $productosPorPagina = 5;
        $pagina = 1;
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                }
        $limit = $productosPorPagina;
        $offset = ($pagina - 1) * $productosPorPagina;

        $sentencia = $connect->query("SELECT seccion.idsec, seccion.nomsec, subgrade.idsub, subgrade.nomsub, teachers.idtea, teachers.dnite, teachers.nomte, teachers.correo, teachers.telet, teachers.usuario, course.idcur, course.nomcur, seccion.capa, seccion.state, GROUP_CONCAT(degree.iddeg, '..', degree.nomgra, '..' SEPARATOR '__') AS degree, count(*) AS conteo FROM seccion INNER JOIN subgrade ON seccion.idsub =subgrade.idsub INNER JOIN teachers ON seccion.idtea = teachers.idtea INNER JOIN course ON seccion.idcur = course.idcur INNER JOIN degree ON subgrade.iddeg =degree.iddeg ;");
    $conteo = $sentencia->fetchObject()->conteo;
    $paginas = ceil($conteo / $productosPorPagina);
    $sentencia = $connect->prepare("SELECT seccion.idsec, seccion.nomsec, subgrade.idsub, subgrade.nomsub, teachers.idtea, teachers.dnite, teachers.nomte, teachers.correo, teachers.telet, teachers.usuario, course.idcur, course.nomcur, seccion.capa, seccion.state, GROUP_CONCAT(degree.iddeg, '..', degree.nomgra, '..' SEPARATOR '__') AS degree FROM seccion INNER JOIN subgrade ON seccion.idsub =subgrade.idsub INNER JOIN teachers ON seccion.idtea = teachers.idtea INNER JOIN course ON seccion.idcur = course.idcur INNER JOIN degree ON subgrade.iddeg =degree.iddeg GROUP BY seccion.idsec LIMIT ? OFFSET ?");
    $sentencia->execute([$limit, $offset]);
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
       ?>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
        
          <th>Docente</th>
          <th>seccion</th>
          <th>Grado</th>
          <th>Subgrado</th>
          <th>Curso</th>
          <th>capacidad de salones</th>
          <th>Estado</th>
          <th>Entrar</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($productos as $persona){ ?>
            <tr>
               <td><?php echo $persona->nomte ?></td>

               <td><span class="badge bg-info text-white"><?php echo $persona->nomsec ?></span></td>
                    <?php foreach(explode("__", $persona->degree) as $periodoConcatenados){ 
                                $degree = explode("..", $periodoConcatenados)
                                ?>
                               <td><span class="badge bg-dark text-white"><?php echo $degree[1] ?></span></td>
                               
                <?php } ?>
                
                <td><?php echo $persona->nomsub ?></td>
               <td><span class="badge badge-danger"><?php echo $persona->nomcur ?></span></td>
               <td><?php echo $persona->capa ?></td>
               <td>
                       

         <?php if($persona->state==1)  { ?> 
        <span class="badge badge-success">Activo</span>
    <?php  }   else {?> 
        <span class="badge badge-danger">No activo</span>
        <?php  } ?>  
                            
                    </td>
        <td><a href="entrar?id=<?php echo  $persona->idsec; ?>"  class="btn btn-primary text-white"><i class='material-icons' data-toggle='tooltip' title='Entrar'>login</i></a></td>
               
               <td>

<form method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='idsec' value="<?php echo  $persona->idsec; ?>">
<button name='editar' class='btn btn-warning text-white'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></button>
</form>
                   
               </td>
               <td>
<form  onsubmit="return confirm('Realmente desea eliminar el registro?');" method='POST' action='<?php $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='idsec' value="<?php echo  $persona->idsec; ?>">
<button name='eliminar' class='btn btn-danger text-white' ><i class='material-icons'  title='Delete'>&#xE872;</i></button>
</form>
               </td>

            </tr>
            <?php } ?>
      </tbody>
    </table>

     <nav aria-label="Page navigation example">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> asignaciones</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
                </div>
            </div>
            <ul class="pagination">
                <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
                <?php if ($pagina > 1) { ?>
                    <li>
                        <a href="./mostrar?pagina=<?php echo $pagina - 1 ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php } ?>

                <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                    <li class="<?php if ($x == $pagina) echo "active" ?>">
                        <a href="./mostrar?pagina=<?php echo $x ?>">
                            <?php echo $x ?></a>
                    </li>
                <?php } ?>
                <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
                <?php if ($pagina < $paginas) { ?>
                    <li>
                        <a href="./mostrar?pagina=<?php echo $pagina + 1 ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

  </div>
</div>

<?php 

if (isset($_POST['editar'])){
$idsec = $_POST['idsec'];
$sql= "SELECT seccion.idsec, seccion.nomsec, subgrade.idsub, subgrade.nomsub, teachers.idtea, teachers.dnite, teachers.nomte, teachers.correo, teachers.telet, teachers.usuario, course.idcur, course.nomcur, seccion.capa, seccion.state FROM seccion INNER JOIN subgrade ON seccion.idsub =subgrade.idsub INNER JOIN teachers ON seccion.idtea = teachers.idtea INNER JOIN course ON seccion.idcur = course.idcur WHERE idsec = :idsec"; 
$stmt = $connect->prepare($sql);
$stmt->bindParam(':idsec', $idsec, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input value="<?php echo $obj->idsec;?>" name="idsec" type="hidden">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Sección</label>

      <select required name="nomsec" class="form-control">
    <option value="<?php echo $obj->nomsec;?>"><?php echo $obj->nomsec;?></option>        
    <option value=""><< >></option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    </select>
      
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Docente </label>
      <select required name="idtea" class="form-control">
    <option value="<?php echo $obj->idtea;?>"><?php echo $obj->nomte;?></option>        
    <option value=""><< >></option>

    <?php 
    $stmt = $connect->prepare('SELECT * FROM teachers');
    $stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $idtea; ?>"><?php echo $nomte; ?></option>
            <?php
        }
        ?>
     ?>
 
    
    </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Capacidad</label>

      <input maxlength="2"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo $obj->capa;?>" name="capa" type="text" class="form-control">
      
    </div>
    
  </div>

        <div class="form-group">
          <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
        </div>
</form>
    </div>  
<?php }?>

<!-- add Modal HTML -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  enctype="multipart/form-data" method="POST"  autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fa fa-user mr-1"></i>NUEVO
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Periodo escolar</label>
                                    <div class="input-group">

                                       <select required id="periodo" class="form-control">
                                            <option value="">Selecciona el periodo</option>
                                      </select>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Grado</label>
                                    <div class="input-group">
                                      <select required id="grado" class="form-control">
                                            <option value="">Seleccione el grado</option>
                                      </select>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Subgrado </label>
                                    <div class="input-group">

                                       <select required name="idsub" id="sub" class="form-control">
                                            <option value="">Selecciona el subgrado</option>
                                      </select>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">seccion</label>
                                    <div class="input-group">
                                      <select required id="grado" name="nomsec" class="form-control">
                                            <option value="">Seleccione la sección</option>
             <option value="A">A</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="D">D</option>
             <option value="E">E</option>
                                      </select>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                        
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Docentes</label>
                                    <div class="input-group">
                                      <select required name="idtea" class="form-control">
                                        <option value="" disabled="" selected="">Selecciona al catedratico</option>
                                       <?php 
                                       $stmt = $connect->prepare('SELECT * FROM teachers');
                                        $stmt->execute();

                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            extract($row);
                                            ?>

                                            <option value="<?php echo $idtea; ?>"><?php echo $nomte; ?></option>
                                            <?php
                                        }
                                        ?>
                                        ?>     

                                      </select>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="modal_contact_firstname">Capacidad de salon</label>
                                    <div class="input-group">
                                       
                                        <input type="text" maxlength="2" name="capa" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required class="form-control" placeholder="cap salon" />
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group pad-ver">
    <div class="form-group">
                <label>Cursos:</label>
    </div>
    <div class="card bg-light" style="width: 100%;">
        <div class="card-body">
            <div class="row">
                
                <div class="col-md-6" id="curso">
                    <div  class="custom-control custom-checkbox mr-sm-2">
                        <label><input type="checkbox" name="idcur[]"></label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 

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
    
    $nomsec = $_POST['nomsec'];
    $idsub = $_POST['idsub'];
    $idtea = $_POST['idtea'];
    $curso =  $_POST['curso'];
    $capa = $_POST['capa'];
    foreach($curso as $item)
    {
        // echo $item . "<br>";
        
        $statement = $connect->prepare("INSERT INTO seccion (nomsec,idsub,idtea,idcur,capa,state) VALUES ('$nomsec','$idsub','$idtea',
            '$item','$capa',1)");
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

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);

});
</script>


<?php  
if(isset($_POST['eliminar'])){
////////////// Actualizar la tabla /////////
$consulta = "DELETE FROM `seccion` WHERE `idsec`=:idsec";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':idsec', $idsec, PDO::PARAM_INT);
$idsec=trim($_POST['idsec']);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Eliminado!", "Eliminado correctamente", "success").then(function() {
            window.location = "mostrar";
        });
        </script>';
}
else{
    echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
  


  <?php
    
if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
$idsec=trim($_POST['idsec']); 
$nomsec=trim($_POST['nomsec']);    
$idtea=trim($_POST['idtea']);
$capa=trim($_POST['capa']);


///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
$consulta = "UPDATE seccion
SET `nomsec`= :nomsec, `idtea` = :idtea, `capa` = :capa WHERE `idsec` = :idsec";
$sql = $connect->prepare($consulta);
$sql->bindParam(':nomsec',$nomsec,PDO::PARAM_STR, 25);
$sql->bindParam(':idtea',$idtea,PDO::PARAM_STR, 25);
$sql->bindParam(':capa',$capa,PDO::PARAM_STR, 25);
$sql->bindParam(':idsec',$idsec,PDO::PARAM_INT);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "mostrar";
        });
        </script>';
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
<script src="../../Assets/js/periodo.js"></script>
  </body>
  
  </html>


