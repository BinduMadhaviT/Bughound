<?php
include_once("dbconfig.php");

$uid = $_GET['userID'];

$sql2 = "DELETE FROM user WHERE userID='$uid'";

if(mysqli_query($conn, $sql2)){
    echo "Deletion successful";
    }
else{
    echo"delete failed";
}
?>