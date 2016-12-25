<?php  
 $output = '';  
 $service_id = '';  
 sleep(1);  
 $connect = mysqli_connect("localhost", "root", "", "booksmart");  
 $sql = "SELECT * FROM services WHERE services_id > ".$_POST['last_video_id']." LIMIT 10";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $service_id_id = $row["service_id_id"];  
           $output .= '  
                <tbody>  
                <tr>  
                     <td>'.$row["service_details"].'</td>  
                </tr>
				</tbody>';  
      }  
      $output .= '  
                <tbody><tr id="remove_row">  
                     <td><button type="button" name="btn_more" data-vid="'. $service_id_id .'" id="btn_more" class="btn btn-success form-control">more</button></td>  
                </tr></tbody>  
      ';  
      echo $output;  
 }  
 ?>  
