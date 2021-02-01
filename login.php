<?php
session_start();
$host="localhost";
$user="root";
$passwor="root";
$db="Akash";
$con=mysqli_connect($host,$user,$passwor);
mysqli_select_db($con,$db);

if(isset($_POST['username']))
{
 $uname=$_POST['username'];
 $passwo=$_POST['pas'];

 $sql="select * from registration where user='".$uname."' AND pass='".$passwo."'
 limit 1";
 $result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==1)
	{
    echo "<script>window.open('home.php','_self')</script>";
$_SESSION['user_name']=$uname;
    exit();



	}





else{
echo "<script>window.alert ('username or passward incorrect')</script>";
echo "<script>window.open('signin.html','_self')</script>";
}
}


?>
