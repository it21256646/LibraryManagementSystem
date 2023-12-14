<?php
	  
	//create the connection
	//$con = new mysqli(server_name , user_name ,password ,database_name)
	

	define ("DB_HOST" , "localhost");
	define ("DB_USER" , "root");
	define ("DB_PASSWORD" , "");
	define ("DB_DATABASE" , "feedback");
	
	$con = new mysqli(DB_HOST , DB_USER , DB_PASSWORD  , DB_DATABASE);
	
    
	if($con -> connect_error) 
	{	
		die("Connection Failed , " .$con -> connect_error);	
	
    }

	
	
	
?>