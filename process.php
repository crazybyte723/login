<?php
	$username=$_POST['user'];
	$password=$_POST['pass'];
/*
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
*/
//	mysql_connect("localhost","root","");
//	mysql_select_db("login");
	$conn = mysqli_connect("localhost","root","","login");
	//echo "connected successfully";

	$result = mysqli_query($conn,"select * from users where username='$username' and password='$password'")
				or die("failed to query database".mysql_error());
	$row = $result->fetch_assoc();
	if($row['username']==$username and $row['password']==$password){
		echo "success\t".$row['username'];
	}
	else{
		echo "failed";
	}
?>