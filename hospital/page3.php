<?php
ob_start();

session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Final Reviwe</title>
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
     if (!isset($_POST['radio1']) or !isset($_POST['radio2']) or !isset($_POST['radio3']) or !isset($_POST['radio3']) or !isset($_POST['radio4']) or !isset($_POST['radio5']) ){
         $msg3= '<div class="alert alert-danger" style ="margin-top:30px">Please enter a complate evaluation</div>';
         $_SESSION['msg3']=$msg3;
        header('Location:page2.php');
       }
    
    
     ?>
		<table class="table table-bordered" style="text-align: center; margin-top: 40px">
  <thead>
    <tr class="bg-warning" style="font-size: 18px">
      <th scope="col">QUESTION <i class="fas fa-question"></th>
      <th scope="col">REVIEWS <i class="fa fa-file-pdf-o"></i></th>
    </tr>
  </thead>
  <tbody>
    <?php
  
    $questions = [
        'Are you satisfied with the level of hygiene?',
        'Are you satisfied with the prices of services?',
        'Are you satisfied with the nursing services?',
        'Are you satisfied with the level of doctors?',
        'Are you satisfied with the calm of the hospital?'
    ];
  
    $i  =0;
    $total = 0;
    foreach($_POST as $k1 => $v1){
      switch ($v1) {
        case 0:
          $rate = 'bad';
        break;
        case 3:
          $rate = 'good';
        break;
        case 5:
          $rate = 'very good';
        break;
        case 10:
          $rate = 'excellent';
        break;
        
     
      }
      $total += $v1; 
      ?>
    <tr>
      <td scope="row"><?php echo $questions[$i]; ?></td>
      <td><?php echo $rate; ?></td>
    </tr>
    <?php
    $i++; 
      }
         
    if ($total < 25){
      $totalRev = 'Bad';
      $totalmsg =  '<div class="alert alert-danger" style="text-align: center;font-size: 20px"><b>Please contact the patient to find out the reason for the bad evaluation <br>'. $_SESSION["phone"].'</b></div>';
    }
    else{
      $totalRev = 'Good';
      $totalmsg ='<div class="alert alert-success" style="text-align: center;font-size: 20px"><b>Thank you</b></div>';
    }
    ?>
   <tr class="bg-warning" style="font-size: 18px">
      <th scope="col">TOTAL REVIEW</th>
      <th scope="col"><?php echo $totalRev; ?></th>
    </tr>
  </tbody> 
</table>
<?php
echo $totalmsg;
     ?>
	</div>
</body>
</html>
<?php
ob_end_flush();
 ?>