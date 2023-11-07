  <?php 
  require '../../Config/config.php'; 
  $pais = $_POST['paises'];
  $stmt = $connect->query("SELECT * FROM subgrade WHERE iddeg = $pais");

  echo '<option value="0">Seleccione el subgrado</option>';

  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{

  echo '<option value="' . $row['idsub']. '">' . $row['nomsub'] . '</option>' . "\n";
}

   ?>
