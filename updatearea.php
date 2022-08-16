<?php
include_once("dbconfig.php");

$prgname = $_REQUEST['prgname'];
$arname = $_REQUEST['arname'];


$sql = "UPDATE functionalarea
SET Areaname='$arname'
WHERE ProgramName='$prgname'";



if(mysqli_query($conn, $sql)){
    echo "<h3>data updated in a database successfully.";

    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

$conn->close();
?>