<?php 
 session_start();
 $con=mysqli_connect('localhost','root','','credits');
 $q="select * from usertable";
 $result=mysqli_query($con,$q) or die(mysqli_error($con));
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/style.css">
   	<title>User Information</title>
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
					<li>
						<a href="#">User Detail</a>
					</li>
				</ul>
			</nav>
		</header><!-- header -->
		<div>
			<div>
  				<h1 align="center">User Information</h1>
 				
<table border="1" class="center">
  					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Credit</th>
  					</thead>
  <?php  
		$i=0;
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  ?>
  					<tr>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["emailid"]; ?></td>
						<td><?php echo  $row["curentcredit"]; ?></td>
					</tr>
	<?php
		$i++;
		}
	?>
				</table>
</div>
			</div>
			<form action="detail.php" method="post">        
				<div>
					<table border="1" class="center">

<?php
  $q="select name from usertable";
  $result=mysqli_query($con,$q);
?>
 						<div class="view">
							<h4>Select user from below to get information:</h4>
  							<select name="name" onchange="this.form.submit()" >
   								<option>Select-here</option>
    <?php  
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
      { 
    ?>
    								<option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
    <?php 
    }
    ?>
 							</select>
						</div>
 					</table>
 				</div>
			</form>

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

