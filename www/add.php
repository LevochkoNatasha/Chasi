<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Додати дані</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$middlename = $_POST['middlename'];
	$login = $_POST['login'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
		
	// checking empty fields
	if(empty($name) || empty($surname) || empty($middlename) || empty($login) || empty($country) || empty($city) || empty($email) || empty($phone) || empty($password)) 
	{
				
		if(empty($name)) 
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($surname)) 
		{
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		
		if(empty($middlename)) 
		{
			echo "<font color='red'>Middlename field is empty.</font><br/>";
		}
		
		if(empty($login)) 
		{
			echo "<font color='red'>Login field is empty.</font><br/>";
		}
		
		if(empty($country)) 
		{
			echo "<font color='red'>Country field is empty.</font><br/>";
		}
		
		if(empty($city)) 
		{
			echo "<font color='red'>City field is empty.</font><br/>";
		}
		
		if(empty($email)) 
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($phone)) 
		{
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($password)) 
		{
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO users(name,surname,middlename,login,country,city,email,phone,password) VALUES ('$name','$surname','$middlename','$login','$country','$city','$email','$phone','$password')");
		
		//display success message
		echo "<font color='green'>Дані додано успішно!";
		echo "<br/><a href='index.php'>Переглянути результат</a>";
	}
}
?>
</body>
</html>