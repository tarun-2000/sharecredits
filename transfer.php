<?php
 session_start();
 $con=mysqli_connect('localhost','root','','credits');
 $name1=$_SESSION['name'];
 $q="select name from usertable where not name='$name1'";
 $result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html>
<head>
   	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/style.css">
	<title>Select User</title>
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
	<div>
		<div>
    			<h2>Select user to transfer to</h2>
    			<form action="creditransfer.php" method="post" class="center">
     				<table border="1" class="center">
       					<thead>
						<h1>Name</h1>
					</thead>
        <?php  
          while($row = $result->fetch_assoc()) { ?>
          				<tr>
            					<td > 
            						<div>
            							<input type="radio" name="transfer" value="<?php echo $row["name"]; ?>">
              <?php echo $row["name"]; ?>
              						</div>
             					</td>
            				</tr>
            <?php 
            }
           ?>     
         				<tr>
          					<td><input type="submit" value="credit"/></td>
        				</tr>
       				</table>
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
