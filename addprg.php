<?php
include_once("dbconfig.php");


$prgname = $_REQUEST['prgname'];
$prglevel = $_REQUEST['prglevel'];
$emplevel = $_REQUEST['emlevel'];

if($prgname==NULL){
    echo("Name field cannot be empty");
}
else{
$sql = "INSERT INTO programtable(ProgramName,ProgramLevel,Employeelevel) VALUES ('$prgname','$prglevel','$emplevel')";


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