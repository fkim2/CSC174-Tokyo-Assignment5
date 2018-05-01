<?php  
 $connect = mysqli_connect("localhost", "roots", "coffee", "table");  
 $sql = "INSERT INTO surv(SeeTrash, PickTrash, PrevTrash) VALUES('".$_POST["SeeTrash"]."', '".$_POST["PickTrash"]."', '".$_POST["PrevTrash"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 