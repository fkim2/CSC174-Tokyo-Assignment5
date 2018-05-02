<?php
	include "config.php"; 
 $sql = "INSERT INTO surv(SeeTrash, PickTrash, PrevTrash) VALUES('".$_POST["SeeTrash"]."', '".$_POST["PickTrash"]."', '".$_POST["PrevTrash"]."')";  
 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 