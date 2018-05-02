<?php
	include "config.php"; 
 $sql = "DELETE FROM surv WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connection, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>