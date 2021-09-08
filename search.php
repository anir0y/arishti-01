<?php
ob_start();
session_start();
include("dbconf.php");
ini_set('display_errors', 1);
?>
<html>
<head><title>Find users </title>
</head>
<body>
<style>
html body{
  background-color: whitesmoke;
}

h2{
  color: blue;
}

#id{
  color: red;
  text-align: center;
}
</style>

<center>
<h1> Find users with ID</h1><br><br><br>
    <form method="GET" autocomplete="off">
			<input type="text" id="id" placeholder="Type UserID" name="id">
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p></div>
	</form>
</center>


<?php
$id = (isset($_GET['id']) ? $_GET['id'] : '');
//$id = $_REQUEST[ 'id' ]; 
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$q = "SELECT username FROM userlogin WHERE id = '$id'";
$result = mysqli_query($con,$q);
$row_cnt = mysqli_num_rows($result);

//echo $row_cnt;


if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<center><h2>Your Username is : " . $row["username"].  "<br></center></b>";
  }
} else {
  echo "<center><h2>Enter A valid UserID</center></b>";
}
$con->close();

?>
</body>
</html>
