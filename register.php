<?php
include_once("dbconfig.php");



$empname = $_REQUEST['empname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password2 = $_REQUEST['password2'];

$Elevel = $_REQUEST['emplevel'];

if($empname==NULL){
    echo("Name field cannot be empty");
}

else{
    if($password!=$password2){
        echo("Passwords don't match");
    }
    else{
        $sql = "INSERT INTO employee(Empname,Username,Password,Emplevel) VALUES ('$empname','$username','$password','$Elevel')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    }
}
$conn->close();
?>