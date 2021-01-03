<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  	<style>
  		.container{
	  		padding-top:50px; 
	  		padding-right: 150px;
	  		padding-left: 150px;
  		}
  		a{
  			text-decoration: none !important;
  		}
  </style>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;"><span style="color: #ffc107">HELIOPOLIS</span> Hospital <i class="fa fa-h-square"></i></h1>
		<?php
    if(!empty($_POST)){
      $_SESSION['phone'] = $_POST['phone'];
      if(!is_numeric($_SESSION['phone'])){
				header('Location:page1.php');
				$msg = "<div class='alert alert-danger' style='margin-top:20px'>Please enter a correct number</div>";
				$_SESSION['msg'] = $msg;
			}
			if(strlen($_SESSION['phone']) != 11){
				header('Location:page1.php');
				$msg2 =  "<div class='alert alert-danger' style='margin-top:20px'>Please enter a complate number with 11 digit</div>";
				$_SESSION['msg2'] = $msg2;
			}
    }
	
			
		 ?>
		<form method="post" action="page3.php" style="margin-top: 40px">
			<?php 
			if(isset($_SESSION['msg3'])){
			  		echo $_SESSION['msg3'];
			  	}
		 ?>
		  <table class="table table-bordered" style="text-align: center;">
  <thead style="font-size: 18px">
    <tr >
      <th scope="col">QUESTON <i class="far fa-question-circle"></i></th>
      <th scope="col">Bad <i class="far fa-frown"></i></th>
      <th scope="col">Good <i class="far fa-meh"></i></th>
      <th scope="col">Very Good <i class="far fa-smile"></i></th>
      <th scope="col">Excellent <i class='far fa-grin-hearts'></i></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Are you satisfied with the level of hygiene?</td>
      <td><input name="radio1" name="radio" value="0" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio1" value="3" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio1" value="5" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio1" value="10" type="radio" aria-label="Radio button for following text input"></td>
    </tr>
    <tr>
      <td scope="row">Are you satisfied with the prices of services?</td>
      <td><input name="radio2"  value="0" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio2" value="3" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio2" value="5" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio2" value="10" type="radio" aria-label="Radio button for following text input"></td>
    </tr>
    <tr>
      <td scope="row">Are you satisfied with the nursing services?</td>
      <td><input name="radio3" value="0" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio3" value="3" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio3" value="5" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio3" value="10" type="radio" aria-label="Radio button for following text input"></td>
    </tr>
    <tr>
      <td scope="row">Are you satisfied with the level of doctors?</td>
      <td><input name="radio4" value="0" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio4" value="3" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio4" value="5" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio4" value="10" type="radio" aria-label="Radio button for following text input"></td>
    </tr>
    <tr>
      <td scope="row">Are you satisfied with the calm of the hospital?</td>
      <td><input name="radio5" value="0" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio5" value="3" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio5" value="5" type="radio" aria-label="Radio button for following text input"></td>
      <td><input name="radio5" value="10" type="radio" aria-label="Radio button for following text input"></td>
    </tr>
  </tbody>
</table>
		
		  <button type="submit" class="btn btn-warning">Review <i class="fa fa-file-pdf-o"></i></button>
		</form>
	</div>
  </div>

</body>

</html>
</body>
</html>


