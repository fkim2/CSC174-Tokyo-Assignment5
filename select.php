<?php  
 $connect = mysqli_connect("localhost", "roots", "coffee", "table");  
 $output = '';  
 $sql = "SELECT * FROM surv ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">SeeTrash</th>  
                     <th width="40%">PickTrash</th>  
                     <th width="10%">PrevTrash</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="SeeTrash" data-id1="'.$row["id"].'" contenteditable>'.$row["SeeTrash"].'</td>  
                     <td class="PickTrash" data-id2="'.$row["id"].'" contenteditable>'.$row["PickTrash"].'</td> 
                     <td class="PrevTrash" data-id3="'.$row["id"].'" contenteditable>'.$row["PrevTrash"].'</td>  
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="SeeTrash" contenteditable></td>  
                <td id="PickTrash" contenteditable></td>
                <td id="PrevTrash" contenteditable></td>  
  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>