 <?php 
 require '../../Config/config.php';
 echo '<option value="0">Seleccione un periodo</option>';
 $stmt = $connect->prepare('SELECT * FROM period');

  $stmt->execute();


  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $idper; ?>"><?php echo $numperi; ?></option>

            <?php
        }

  ?>
