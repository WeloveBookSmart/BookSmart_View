<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BookSmart Tested</title>

    <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-default navbar-inverse" style="border-radius:0px !important; margin-bottom:0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <img src="lo2.png" width="82" height="72"/>
      <div align="left" style="color:#FFFFFF">BookSmart</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
		<li><a href="career.html">Join Us</a></li>  
		<li class="User">
          <a href="#" class="dropdown-toggle" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Software Developer</a></li>
            <li><a href="#">Hardware Engineer</a></li>
            <li><a href="#">Application Developer</a></li>
			<li><a href="#">Site Reliability Engineer</a></li>
            <li><a href="#">System Management</a></li>
			<li><a href="#">User Experience Architect</a></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Marketing Superstar</a></li>
			<li><a href="#">Operation Engineer</a></li>
			<li><a href="#">Community Leader</a></li>
          </ul>
        </li>
          <li><a href="ui/community.html">Community</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group" style="text-align:center;">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="User">
          <a href="#" class="dropdown-toggle" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile/manage_booking.php">Manage Personal Bookings</a></li>
            <li><a href="profile/manage_services.php">Manage Services</a></li>
            <li><a href="notification/notification.php">Notification</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../authentication/logout.php">Logout</a></li>
          </ul>
        </li>
		<li><a href="test/upload/client.php" class="btn btn-warning" style="color:#FFFFFF">Become Our Client</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
<div class="container" style="width:960px;">
			<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6" style="float:left;">
								<img src="<?php echo $row["client_image"]; ?>" class="img-circle" style="height=160px; width:100%;">
							</div>
							<div class="col-md-6 col-xs-6" style="float:right;">
								<h4><?php echo $row["client_name"]; ?></h4>
								<br />
								<h4>Specialised in: <?php echo $row["client_skills"]; ?></h4>
							</div>
							<div class="repubox" style="border:1px solid #cccc; height: 400px; width: 100%; max-width: 250px;">
								<p><?php echo $row["client_level"]; ?></p>
								<p><?php echo $row["client_rank"]; ?></p>
								<p><?php echo $row["client_repu"]; ?></p>
							</div>
						</div>
						<br />
						<br />
						<div class="desc">
						  <table class="table table-striped" id="tblGrid">
								<thead id="tblHead">
									<tr>
									   <th>Id</th>
									   <th>Name</th>
									   <th>View Package</th>
									   <th class="text-right">Mean</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>Long Island, NY, USA</td>
									<td>3</td>
									<td class="text-right">45001</td>
									</tr>	
									<tr><td>Chicago, Illinois, USA</td>
									<td>5</td>
									<td class="text-right">76455</td>
									</tr>
									<tr><td>New York, New York, USA</td>
									<td>10</td>
									<td class="text-right">39097</td>
									</tr>
								</tbody>
					</table>
						<br />
						</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		  $(".dropdown-toggle").dropdown();
				}).submit();
			});
				$('#myModal').on('show.bs.modal',function() {	// $('#myModal').on('shown.bs.modal',function() {
});	
		});
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html> 