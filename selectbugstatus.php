<?php
include_once("dbconfig.php");

$Bugstatus = $_REQUEST['bugstatus'];
$sql1 = "select * from bugreport br left join devbugreport dbr 
ON dbr.reportid = br.reportid WHERE dbr.reportstatus='$Bugstatus'";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
      <tr> 
          <td> <font face="Arial">Report ID</font> </td> 
          <td> <font face="Arial">Program</font> </td> 
          <td> <font face="Arial">Version</font> </td> 
          <td> <font face="Arial">Report Type</font> </td> 
          <td> <font face="Arial">Severity</font> </td> 
          <td> <font face="Arial">Summary</font> </td>
          <td> <font face="Arial">Reproducible</font> </td>
          <td> <font face="Arial">Reported By</font> </td>
          <td> <font face="Arial">Report Date</font> </td>
          <td> <font face="Arial">Report Status</font> </td>
      </tr>';

  while($row = $result1->fetch_assoc()) {
    $field1name = $row["reportID"];
    $field2name = $row["Program"];
    $field3name = $row["programversion"];
    $field4name = $row["reporttype"];
    $field5name = $row["severity"];
    $field6name = $row["problemsummary"];
    $field7name = $row["reproducible"];
    $field8name = $row["reportedby"];
    $field9name = $row["reportdate"];
    $field10name = $row["reportstatus"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td>
                  <td>'.$field10name.'</td>
                  </tr>';
    }
}
?>