<?php
session_start();
$con=mysqli_connect('localhost','root','','credits');
$name1=$_SESSION['name'];
$q="select curentcredit from usertable where name='$name1'";
$result=mysqli_query($con,$q) or die( mysqli_error($con));
$row=mysqli_fetch_array($result);
$var=$row['curentcredit'];
$from=$_SESSION['name'];
$to=$_SESSION['to'];
$q1="select curentcredit from usertable where name='$to'";
$result1=mysqli_query($con,$q1) or die( mysqli_error($con));
$row=mysqli_fetch_array($result1);
$var1=$row['curentcredit'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update usertable set curentcredit='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update usertable set curentcredit='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'index.php';
    $q2="insert into transfers(sender, receiver, credit) values('$from', '$to', ".$_POST['transfer'].")";
    $result2=mysqli_query($con,$q2) or die( mysqli_error($con));
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>
