<?php
	if (isset($_POST['name'])){
    $server ="localhost";
    $username= "root";
    $password ="";
    $database ="credits";
    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection failed:".connect_error());
    }

	$name=$_POST['name'];
    $email=$_POST['email'];
    $credit=$_POST['credit'];

    $sql= "INSERT INTO `usertable` ( `name`,`emailid`,`curentcredit`) VALUES ('$name','$email','$credit')";
    if($con ->query(($sql))== true)
    {
     $insert=true;
    }
    else
    {
     echo 'Error :'. $sql .'<br>'. $con ->error;
    }
    $con->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/style.css">
	<title>Credit Management</title>
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
<a href="#">Home</a>
</li>
</ul>
</nav>
</header><!-- header -->

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/credit.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/credit1.jpg" alt="Chicago" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div>
        <div class="view">
          <a href="userdetail.php">View all Users</a>
        </div>
        <br>
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
