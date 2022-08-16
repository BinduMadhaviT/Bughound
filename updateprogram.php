<?php
include_once("dbconfig.php");

$prgname = $_REQUEST['prgname'];
$prname = $_REQUEST['prname'];


$sql = "UPDATE programtable
SET ProgramName='$prname'
WHERE ProgramName='$prgname'";



if(mysqli_query($conn, $sql)){
    echo "<h3>data updated in a database successfully.";

    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

$conn->close();
?>