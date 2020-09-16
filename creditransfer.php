<?php
 session_start();
 $con=mysqli_connect('localhost','root','','credits',"3308");
 $q="select name from usertable";
 $result=mysqli_query($con,$q);
 $_SESSION['to']=$_POST["transfer"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/style.css">
 	<title>Credits</title>
</head>
<body>
	<div class="box">
		<header><!-- header -->
			<div class="header">
				<a>Credit Management</a>
			</div>
			<div class="clearfix"></div>
			<nav class="main-menu">
				<ul>
					<li><a href="#">Select User</a></li>
				</ul>
			</nav>
		</header><!-- header -->
		<div class="view">
  			<form action="check.php" method="post"  style="position: relative; top:20%; ">
     				<div>
         				<strong>Enter credits:</strong>
         				<br><br>
        				<input type="text" name="transfer"><br>
         				<br>
        				<input type="submit">
     				</div>
  			</form>
		</div>
		<footer class="main-footer">
			<div>
     				<address>
					<h3>Tarun Kumar Bhati</h3>
					<p>G.T.B Nagar, Sion-Koliwada, Mumbai-400037</p>
					<p>Email:<a href="mailto:tkbhati986@yahoo.com">tkbhati986@yahoo.com</a></p>
					<p>Ph:<a href="tel:8652823412">8652823412</a></p>	
				</address>
			</div>
  		</footer>

		<div class="copy">
			<p><small>Copyright &copy; 2020. All Rights Reserved.</small></p>
		</div>
	</div>
</body>
</html>