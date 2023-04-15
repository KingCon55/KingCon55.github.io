<html>
<head>

</head>


<body>
<h1> User Database</h1>

<h3> Adding data to User_data table. Enter Username, Password, account creation date, and epiration date. </h3>
<form action="insert.php" method="post">
  <table>
    <tr>
      <td>Username:</td>
      <td><input type="text" name="uname_data" id="uname_data" ></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="text" name="pass_data" id="pass_data" ></td>
    </tr>
    <tr>
      <td>Creation Date:</td>
      <td><input type="text" name="cdate_data" id="cdate_data" ></td>
    </tr>
	<tr>
      <td>Expiration Date:</td>
      <td><input type="text" name="edate_data" id="edate_data" ></td>
    </tr>
    <tr>
      <td><input name="submitBtn" type="submit" id="submitBtn"
		value="Submit">
      </td>
    </tr>
  </table>
</form>


<?php
//variables
$servername = "localhost";
$username = "webedit";
$password = "343Vpnedittable";
$database_in_use = "vpnUsers";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_in_use);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully". "<br>";
?>


<?php
//displays current values in table
$sql = "SELECT id, username, email, created_at, userLocations, lastLogin FROM userConfig";
$result = $conn->query($sql);

echo "<table>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " ID: " . $row["id"]. " Username: " . $row["username"]. " Email: " . $row["email"]. " Created At: " . $row["created_at"]. " User Locations: " . $row["userLocations"]. " Last Login: " . $row["lastLogin"]. "<br>";
  }
} else {
  echo "0 results";
}
echo "</table>";

$conn->close();
?>

</body>
</html>