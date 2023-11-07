  
  <?php 
  require '../../Config/config.php'; 
  $el_continente = $_POST['continente'];
  $stmt = $connect->query("SELECT * FROM degree WHERE idper = $el_continente");

  echo '<option value="0">Seleccione el grado</option>';

  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{

  echo '<option value="' . $row['iddeg']. '">' . $row['nomgra'] . '</option>' . "\n";
}

   ?>

  