<?php
include_once("dbconfig.php");


$prgname = $_REQUEST['prgname'];
$sql = "SELECT * from functionalarea WHERE ProgramName='$prgname'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
      <tr> 
          <td> <font face="Arial">Area Name</font> </td> 
      </tr>';
      while($row = $result->fetch_assoc()) {
        $field1name = $row["Areaname"];
        echo '<tr> 
                  <td>'.$field1name.'</td>
            </tr>';
    }
}

?>