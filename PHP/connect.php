 <?php

try
{
	// Connect to DB
	$dbh = new PDO('mysql:host=localhost;dbname=isclub;charset=utf8','root','njitis1234');
	echo $dbh;
}
catch(PDOException $e)
{
	// Display Errors
	echo $e->getMessage();
}

?>