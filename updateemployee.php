<?php
include_once("dbconfig.php");

$empname = $_REQUEST['empname'];
$emplevel = $_REQUEST['emplevel'];


$sql = "UPDATE employee
SET EmpLevel='$emplevel'
WHERE Empname='$empname'";



if(mysqli_query($conn, $sql)){
    echo "<h3>data updated in a database successfully.";

    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

$conn->close();
?>