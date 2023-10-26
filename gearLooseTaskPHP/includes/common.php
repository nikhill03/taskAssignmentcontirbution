
<?php
//Start the session


$server = "localhost";
$username = "root";
$password = "";
$db = "store";
$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("Connection to the database failed due to " . mysqli_connect_error());
}
?>

