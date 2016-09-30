<?php
// mysql procedure (deprecated):

$servername = "localhost";
$username = "root";
$password = "";
$db = "cm";

/*
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn)
  {
	die("Failed to connect to MySQL: " . mysql_error());
  }
 //else echo "Db connection successfull"."<br/>" ; // this line should be deleted.  just check korte add korsi
$db = mysql_select_db('cm');
if(!$db)
die("Database selescetion failed" . mysql_errno());
//else echo "database selected succesfully"; // this line should be deleted.  just check korte add korsi
*/
?>



<?php
// mysqli procedure:

$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 