<?php 
session_start();
$con=mysqli_connect('localhost','root','','credits',"3308");
$name=$_POST['name'];
$q="select * from usertable where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>

<!DOCTYPE html>
<html>
	<head>
   		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/style.css">
   		<title>View User</title>
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
						<li><a href="#">View User</a></li>
					</ul>
				</nav>
			</header><!-- header -->
    			<div>
				<div>
        				<h2 align="center">User Information</h2>
       					<table border="1" class="center">
         					<thead>
           						<th>Name</th>
           						<th>Email</th>
           						<th>Credit</th>
         					</thead>
             <?php 
              $row=mysqli_fetch_array($result);
             ?>
						<tr>
            						<td><?php echo  $row["name"]; ?></td>
            						<td><?php echo  $row["emailid"]; ?></td>
            						<td><?php echo  $row["curentcredit"]; ?></td>
           					</tr>
					</table>
        			</div><br>
        			<div class="view">
            				<a href="transfer.php">Transfer Credit</a>
        			</div>
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