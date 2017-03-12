<?php

$userreg=$_POST['user'];
$passreg=$_POST['pass'];

//Create few varaibles
$database="book_db_store";
$password="429230b4";
$username="be22a528375bbb";
$host="in-cdbr-azure-south-c.cloudapp.net3306";
//main if statement
if($userreg&&$passreg){
	//Connect to database
	$con = myseql_connect($host,$username,$password) or die("Unable to log into database");
	@mysql_select_db($database,$con) or die("Unable to connect");
mysql_query("INSERT INTO 'users' VALUES('','$userreg','$passreg')") or die("Strange error");
echo "Account Created";

mysql_close($con);

header("Location:hello.html");
}
else{
	echo "You Need to have both username and password";
}

?>