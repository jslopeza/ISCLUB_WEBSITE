 <?php

try
{
	// Connect to DB
	$dbh = new PDO('mysql:host=localhost;dbname=isclub;charset=utf8','root','njit1234');
}
catch(PDOException $e)
{
	// Display Errors
	echo $e->getMessage();
}

?>