<?php
session_start();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<style>
  		.container{
	  		padding-top:50px; 
	  		padding-right: 300px;
	  		padding-left: 300px;
  		}
  		a{
  			text-decoration: none !important;
  		}
  </style>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;"><span style="color: #ffc107">HELIOPOLIS</span> Hospital <i class="fa fa-h-square"></i></h1>
		<form method="post" action="page2.php" style="margin-top: 40px">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Phone number:</label>
			    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
			  </div>
			  <button type="submit" class="btn btn-warning btn-block">Enter <i class="fa fa-sign-in"></i></button>
			  <?php
			  	if(isset($_SESSION['msg'])){
			  		echo $_SESSION['msg'];
			  	}
			  	if(isset($_SESSION['msg2'])){
			  		echo $_SESSION['msg2'];
			  	}
			   ?>
		</form>
	</div>
</body>
</html>