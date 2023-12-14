<?php  require "connect.php";

session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


    $sql="INSERT INTO contact123 (name,email,phone,text) VALUES ('$name','$email','$phone','$message')";


	if( $con -> query($sql) )
	{
		echo "<script> alert('your feedback is done!'); window.location.href = 'index.php'; </script>";

	}
	else{

		echo"Oops, Something went wrong!";
	}

?>

