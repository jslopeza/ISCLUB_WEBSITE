<?php include '../PHP/connect.php';
	
	// Getting the data
	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];

	// Insert 
	$sth = $dbh->prepare("INSERT INTO Contact(name, company, email, comments)
						  VALUES(:name, :company, :email, :comments)");


	// Bind Values
	$sth->bindParam(':name',$name);
	$sth->bindParam(':company',$company);
	$sth->bindParam(':email',$email);
	$sth->bindParam(':comments',$comments);

	// Execute
	$sth->execute();

	// Mail
	$to = "binoypatel14@gmail.com";
	$from = "admin@njitisclub.org";
	$subject = "Someone Contacted";
	$replyto = "njitisclub@gmail.com";

	$headers = "From: " . $from . "\r\n";
	$headers = "Reply-To ".$replyto."\r\n";
	$headers = "MIME-Version: 1.0\r\n";
	$headers = "Content-Type: text/html; charset=ISO-8850-1\r\n";

	$message = "<html><body>";
	$message = "<h1>Someone Contacted</h1>";
	$message = "<p>Name: ".$name."<br>Company: ".$company."<br>Email".$email."<br>Comments: ".$comments."</p>";

	mail($to, $subject, $message, $headers);

	// Redirect
	header('Location: ../index.html');
?>
