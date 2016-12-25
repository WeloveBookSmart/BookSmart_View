<?php  
 $connect = mysqli_connect("localhost", "root", "", "booksmart");  
 $sql = "SELECT sid,service_title,service_location,service_detail,service_category,service_type,service_price FROM service LIMIT 6";  
 $result = mysqli_query($connect, $sql);  
 $sid = '';  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Service Detail</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="view_details_service.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
 <body>
  <div class="container">
	<div class="row">
 	<div class="service_large_image"></div>
	<img align="left" src="http://placehold.it/500x200" alt="img1" class="service_profile"/>
		<div class="profilepic"></div>
			<img align="left" src="http://placehold.it/140x100" alt="img2" class="img-circle">
			<div id="content"> 
			<?php
			while ($row = mysqli_fetch_array($result))
			{  
                 ?>  
                     <tr>  
                         <td><?php echo $row["service_detail"]; ?></td>  
                     </tr>  
                          <?php  
                               $sid = $row["sid"];  
            }   
           ?>
					   		
	<div id="service_title">
		<?php echo $service_title; ?>
	</div>
		<br />
	        <div id="service_location">
				  <a href="view_address.php?id=<?php echo $service_location; ?>"></a>
			   </div>
				   <br />
			<div id="service_detail" name="service_detail">
				  <?php echo $service_detail; ?>
				 <tr id="remove_row">  
                     <td><button type="button" name="btn_more" data-vid="<?php echo $service_details; ?>" id="btn_more" class="btn btn-success form-control">More</button></td>  
                  </tr>  
				</div>
				   <br />
				<div id="service_category">
					<?php echo $service_category; ?>
				</div>
				   <br />
				<div id="service_type">
					<?php echo $service_type; ?>
				</div>
				    <br />
				<div id="service_price">
					<?php echo $service_price; ?>
				</div>
			
			<div class="button">
				<button type="submit" href="" class="btn btn-primary">Book Now!</button>
			</div>
			
			</div>
	</div>
 </div>
			
			
	<script type="text/javascript">  
	window.onclick = function () {
			document.getElementById("service_detail").innerHTML = "";
			 if(XMLHttpRequest) var x = new XMLHttpRequest();
			  else var x = new ActiveXObject("Microsoft.XMLHTTP");
			  x.open("GET", "", true);
			  x.send("");
			  x.onreadystatechange = function () {
				if (x.readyState == 4) {
					if (x.status == 200) document.getElementById("service_detail").innerHTML = x.responseTextl
					else document.getElementById("service_detail").innerHTML = "Error Loading Document";
				}
			}
		}
</script>
<script>
 $(document).ready(function(){  
      $(document).on('click', '#btn_more', function(){  
           var last_video_id = $(this).data("vid");  
           $('#btn_more').html("Loading...");  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{service_details:service_details},  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove_row').remove();  
                          $('#load_data_table').append(data);  
                     }  
                     else  
                     {  
                          $('#btn_more').html("No Data");  
                     }  
                }  
           });  
      });  
 });  
 </script>  
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html> 



