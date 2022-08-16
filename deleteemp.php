<?php
include_once("dbconfig.php");

$EmployeeID = $_GET['EmpID'];

$sql = "DELETE FROM employee WHERE EmpID='$EmployeeID'";

if(mysqli_query($conn, $sql)){
    echo "Deletion successful";
    }
else{
    echo"delete failed";
}

?>