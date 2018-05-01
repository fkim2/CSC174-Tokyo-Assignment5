<?php  
 $connect = mysqli_connect("localhost", "roots", "coffee", "table");  
 $sql = "DELETE FROM surv WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>