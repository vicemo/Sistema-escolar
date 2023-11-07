<?php 
  require '../../Config/config.php'; 
  $curso = $_POST['cursos'];
  $stmt = $connect->query("SELECT * FROM course WHERE idsub = $curso");

  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{



  echo '<label class="form-check-label"><input class="form-check-input" name="curso[]" type="checkbox"  value="' . $row['idcur']. '" >' . $row['nomcur'] . '</label>'. "\n";
}

   ?>
