<?php

$database="book_db_store";
$password="429230b4";
$username="be22a528375bbb";
$host="in-cdbr-azure-south-c.cloudapp.net3306";
$con = mysql_connect($host,$username,$password) or die("Unable to log into database");
@mysql_select_db($database,$con) or die("Unable to connect");

if(!empty($_POST['Bnam']) && !empty($_POST['Anam']) && !empty($_POST['Pric'])){
$inputbname = $_POST['Bname'];
$inputAname = $_POST['Aname'];
$inputPrice = $_POST['Price'];
$inputFormat = $_POST['Frmt'];
$inputCopies = $_POST['Copies'];
$inputCategory = $_POST['Category'];
$inputRating = $_POST['Ratin'];

$query = "INSERT INTO details VALUES ('$inputbname','$inputAname','$inputPrice','$inputFormat','$inputCopies','$inputCategory','$inputRating')";

echo mysql_error();
$result = mysql_query($query) or die(mysql_error());

if($result == FALSE){echo "False";}
else{
	//$result = mysql_query($query);
	//$row = mysql_fetch_array($result);
	echo "You have added the book successfully<br>";?>
	<br><form><button formaction="Seller.html" type="submit">HOME</button></form></br>
<?php
  }
}

if(!empty($_POST['bkname']) && !empty($_POST['newprice'])){
	$bookname = $_POST['bkname'];
$new_price = $_POST['newprice'];
$query="UPDATE details SET Price='$new_price' WHERE bname='$bookname'";
mysql_query($query) or die(mysql_error());
echo "Book price has been successfully updated";?>
<br><form><button formaction="Seller.html" type="submit">HOME</button></form></br>
<?php
}

mysql_close();
?>