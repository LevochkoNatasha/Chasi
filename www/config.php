<?php
$conn = mysql_connect("localhost","natasha","987654321mama2") 
			or die("cannot connected");
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("natasha",$conn);
	
?>