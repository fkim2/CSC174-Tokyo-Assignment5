<?php  
 $connect = mysqli_connect("localhost", "roots", "coffee", "roots");  
 $sql = "INSERT INTO users(SeeTrash, PickTrash, PrevTrash) VALUES('".$_POST["SeeTrash"]."', '".$_POST["PickTrash"]."', '".$_POST["PrevTrash"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 