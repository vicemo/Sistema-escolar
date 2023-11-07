<?php

echo '
<div class="col-sm-6" id="periodo">
                                <div class="form-group">
                                    <label for="modal_contact_lastname">Grado</label>
                                    <div class="input-group">
<select name="iddeg" class="form-control">
';
require '../../Config/config.php'; 

$stmt = $connect->prepare('SELECT degree.iddeg, period.idper, period.numperi, period.starperi, period.endperi, period.nomperi, degree.nomgra, degree.fere FROM degree INNER JOIN period ON degree.idper = period.idper');
$stmt->execute();
echo '<option value="0">--Seleccione una grado--</option>';

 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
         {
           
         if($row['idper'] == $_GET['c']){
			echo "<option value='".$row['iddeg']."'>".$row['nomgra']."</option>";;
		}


        	 ?>
       		 
           <?php
        }
        echo '
        </div>
                                </div>
                            </div>
        </select>
        ';
  

 ?>



