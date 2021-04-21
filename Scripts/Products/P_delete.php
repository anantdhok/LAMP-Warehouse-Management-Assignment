<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{   die("Connection failed: " . mysqli_connect_error());   }

// sql to delete a record
$sql = "DELETE FROM product WHERE PRODUCT_ID = '$_POST[DP_id]'";

if (mysqli_query($conn, $sql))
{	echo "Record removed successfully.";	  }
else
{   echo "Error: " . $sql . "<br>" . $conn->error;   }

mysqli_close($conn);
?>