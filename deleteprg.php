<?php
include_once("dbconfig.php");

$PrgName = $_GET['ProgramName'];

$sql = "DELETE FROM programtable WHERE ProgramName='$PrgName'";

if(mysqli_query($conn, $sql)){
    echo "Deletion successful";
    }
else{
    echo"delete failed";
}

?>