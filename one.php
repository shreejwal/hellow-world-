<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form </title>
</head>

<body>

<?php 
	
	$root = "root" ;
	$localhost = "localhost";  
	$password = "";
	$db = "store";
	
	$conn = mysql_connect($localhost,$root,$password);
	
	if (!$conn) 
	{
		die ("cannoct connect to the localhost ". mysql_error()) ;
	}     
	

	
	$sql = "Select *from user_password";
	mysql_select_db($db);
	
	$go = mysql_query($sql,$conn); 
	
	while ($row = mysql_fetch_array($go)) 
	{
		$user = $_POST['userf'];
		$password = $_POST['passf'];
		
		if ($row[1] == $user && $row[2]==$password) 
		{
				echo "connection sucessfull "; 
		} 
		
		else 
		{
			die ("Error in values ". mysql_error()) ; 
		} 
	}  
	 

?>

	
</body>
</html>
