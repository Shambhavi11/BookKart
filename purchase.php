<html>
<?php

$inputbook = $_POST['Bname'];

$database="book_db_store";
$password="429230b4";
$username="be22a528375bbb";
$host="in-cdbr-azure-south-c.cloudapp.net3306";
//echo "$inputbook";

$con = mysql_connect($host,$username,$password) or die("Unable to log into database");
@mysql_select_db($database,$con) or die("Unable to connect");

$query = "UPDATE details SET Copies=Copies-1 WHERE bname='$inputbook' AND Copies>0";
$result = mysql_query($query) or die(mysql_error());
if($result==TRUE){
	//$row = mysql_fetch_array($result);
	//echo "$row['Bname']";
	echo "YOUR PURCHASE IS SUCCESSFUL! TRANSACTION COMPLETED<br>";?>
	<br><form><button formaction="Client.html" type="submit">Continue Shopping</button></form></br>

	<?php 
	$query = "DELETE FROM details WHERE Bname = '$inputbook' AND Copies=0";
	//echo mysql_query($query) or die(mysql_error()." if");
 }

else{
	$query = "DELETE FROM details WHERE Bname = '$inputbook' AND Copies=0";
	echo mysql_query($query) or die(mysql_error())."else";
}

mysql_close();

?>
</html>