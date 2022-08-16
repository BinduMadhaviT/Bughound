<?php
include_once("dbconfig.php");

$FAID = $_GET['FunctionalAreaID'];

$sql1 = "DELETE FROM functionalarea WHERE FunctionalAreaID='$FAID'";

if(mysqli_query($conn, $sql1)){
    echo "Deletion successful";
    }
else{
    echo"delete failed";
}
?>