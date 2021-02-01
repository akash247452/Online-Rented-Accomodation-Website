
<?php

	$fristname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email =$_POST['e-mail'];
	$dobe=$_POST['date'];
	$gender=$_POST['Gender'];
	$user=$_POST['Username'];
	$pass=$_POST['Password'];

if(!empty($user)||!empty($pass)){

		$host = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "Akash";

		$conn = new mysqli($host,$username,$password,$dbname);

		if($conn->connect_error)
		{
			echo "Error";
		}

		else {
      echo "<script>window.alert ('you have successfully signup')</script>";


			$sql = "insert into registration
			VALUES('$fristname','$lastname','$email','$dobe','$gender','$user','$pass',0);";

			$result = mysqli_query($conn, $sql);
		echo "<script>window.open('signin.html','_self')</script>";
		}
}

else{
	echo "All Fields Required";
	echo "<script>window.open('signup.html','_self')</script>";
}
?>
