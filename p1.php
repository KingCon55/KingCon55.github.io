<html>
<head>

</head>


<body>
<h1> User Database</h1>



<?php
//variables
$servername = "orion.cs.unh.edu";
$username = "la1060";
$password = "Sem=guHp7u";
$database_in_use = "user_db";

//create connection
$mysqli = new mysqli($servername, $username, $password, $database_in_use);

//display values in table one at a time
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

//$sql = "SELECT uname, creationdate, expirationdate, password FROM user_info";
//$result = $mysqli->query($sql);

//if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    //echo "username: " . $row["uname"]. " creation date: " . $row["creationdate"]. " experation date " . $row["experationdate"]. " Password: " . $row["password"] . "<br>";
  //}
//} else {
  //echo "0 results";
//}
//$mysqli->close();
?>

</body>
</html>