<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
  
<?php
include_once("dbconfig.php");

$Program = $_REQUEST['ProgramName'];
$programversion = $_REQUEST['Prgversion'];
$reporttype = $_REQUEST['ReportType'];
$severity = $_REQUEST['Severitylevel'];
$problemsummary = $_REQUEST['PrbSummary'];
$reproducible = $_REQUEST['Reproducible'];
$problemstatement = $_REQUEST['Problem'];
$reportedby = $_REQUEST['ReportedBy'];
$reportdate = $_REQUEST['rpDate'];

if($Program==NULL||$programversion==NULL||$reporttype==NULL||$severity==NULL||$problemsummary==NULL||
$problemstatement==NULL||$reportedby==NULL||$reportdate==NULL||$reproducible==NULL){
    echo("One or more data fields are empty!");
}
else{
$sql = "INSERT INTO bugreport (Program,programversion,reporttype,severity,problemsummary,
reproducible,problemstatement,reportedby,reportdate) VALUES ('$Program',
'$programversion','$reporttype','$severity',
'$problemsummary','$reproducible','$problemstatement','$reportedby','$reportdate')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully."
          . " Please browse your localhost php my admin"
          . " to view the updated data</h3>";
          header("Location: ./userform.php");
      
  } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
  }
}
$conn->close();
?>

</body>
 
</html>