<html>
 
<head>
    <title>Insert Confirm Page</title>
</head>
 
<body>
    <center>
        <?php
 
        $conn = mysqli_connect("localhost", "webedit", "343Vpnedittable", "user_db");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        } //else {
			//echo "connected successfully". "<br>";
         
        // Taking all 5 values from the form data(input)
        $uname_data = $_REQUEST['uname'];
        $pass_data = $_REQUEST['password'];
        $cdate_data = $_REQUEST['creationdate'];
		$edate_data = $_REQUEST['experationdate'];
         
        // Performing insert query execution
        // here our table name is user_info
        $sql = "INSERT INTO user_info VALUES ('$uname_data','$cdate_data','$edate_data','$pass_data')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$uname_data\n $pass_data\n "
                . "$cdate_data\n $edate_data\n ");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>