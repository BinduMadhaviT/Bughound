<html>

<?php
include_once("dbconfig.php");


$prgname = $_REQUEST['prgname'];
$arname = $_REQUEST['Arname'];

if($arname==NULL){
    echo("Name field cannot be empty");
}
else{
$sql = "INSERT INTO functionalarea(ProgramName,Areaname) VALUES ('$prgname','$arname')";

if(mysqli_query($conn, $sql)){
    echo "Data added successfully";
    } 
else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
}
$conn->close();
?>