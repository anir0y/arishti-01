<?php
$con = new mysqli("127.0.0.1", "dbusername", "dbpassword", "databasename");
if ($con -> connect_error){
    die("Database Not Configured Properly");
}
else{
    //echo ("DB connection is established sir");
}
?>
