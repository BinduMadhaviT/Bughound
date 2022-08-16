<?php
include_once("dbconfig.php");


$usrname = $_REQUEST['usrname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password2 = $_REQUEST['password2'];
$dob = $_REQUEST['dob'];

if($password!=$password2){
    echo("Passwords don't match");
}
else{
    $sql = "INSERT INTO user(nameofuser,Username,Password,userDOB) VALUES ('$usrname','$username','$password','$dob')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
}
$conn->close();
?>