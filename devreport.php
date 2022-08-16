<?php
include_once("dbconfig.php");

$reportid = $_REQUEST['reportID'];
$Prname = $_REQUEST['Prn'];
$functionalarea = $_REQUEST['FunctionalArea'];
$assignedto = $_REQUEST['Assignedto'];
$comments = $_REQUEST['Comments'];
$reportstatus = $_REQUEST['RpStatus'];
$reportpriority = $_REQUEST['RpPriority'];
$resolutionstatus = $_REQUEST['Resolution'];
$resolvedby = $_REQUEST['Resolutionby'];
$resolveddate = $_REQUEST['resDate'];
$testedby = $_REQUEST['Testby'];
$testdate = $_REQUEST['TestDate'];
$treatasdeferred = $_REQUEST['Treatasdef'];
$suggestedfix = $_REQUEST['Suggfix'];


$sql1 = "SELECT * from devbugreport WHERE reportid='$reportid'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
$sql = "UPDATE devbugreport
SET comments='$comments',
reportstatus='$reportstatus', reportpriority='$reportpriority', resolutionstatus='$resolutionstatus',
resolveddate=$resolveddate, testedby='$testedby', testdate=$testdate, treatasdeferred='$treatasdeferred',Suggestedfix='$suggestedfix'
WHERE reportid=$reportid";
} else{
$sql = "INSERT INTO devbugreport VALUES ('$reportid','$functionalarea','$Prname','$assignedto','$comments',
'$reportstatus',
'$reportpriority','$resolutionstatus','$resolvedby','$resolveddate',
'$testedby','$testdate','$treatasdeferred','$suggestedfix')";
}

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$reportid\n$functionalarea\n $assignedto\n "
        . "$comments\n $reportstatus\n $reportpriority \n $resolutionstatus \n$resolvedby \n$resolveddate \n$testedby \n$testdate \n$treatasdeferred");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

$conn->close();
?>