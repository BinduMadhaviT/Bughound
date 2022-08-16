<html>

<body>
<a style="float:right"; href="Logout.php">Logout</a>
</body>

<?php
include_once("dbconfig.php");
$EmployeeName = $_GET['Empname'];

if($EmployeeName==NULL){
  header("Location: ./unauthorised.php?Empname=NULL");
}

$sql = "select * from employee";
$sql1 = "select * from functionalarea";
$sql2 = "select * from user";
$sql3 = "select * from programtable";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
?>

<body>
  
    </br>
    <?php
    if($EmployeeName=="Bob" || $EmployeeName=="Yoshi"){
    ?>
    <a  href="Addprogram.php" style="color: blue">Add Program</a>
    </br></br>
    <a  href="Addarea.php" style="color: blue">Add Area</a>
    </br></br>
    <a  href="userform.php" style="color: blue">Add New Bug</a>
    </br></br>
    <?php
    }
    ?>
    <a href="employeeregistration.php" style="color: blue">Add Employee</a>
    </br></br>
    <a href="admindataretrieval.php" style="color: blue">See All Bug reports</a>
    </br></br>
    <a href="selectbug.php" style="color: blue">Search for bug?</a>
    </br></br>
    <form action="select.php" method="post">
    <label for="prname">Enter Program Name to view its areas:</label>
    <input type="text" name="prgname" id="prname">
    <input type="submit" value="Submit">
    </br>
    </form>

    
</body>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  echo '<table border="1" cellspacing="5" cellpadding="6"> 
      <tr> 
          <td> <font face="Arial">Employee ID</font> </td> 
          <td> <font face="Arial">Employee Name</font> </td> 
          <td> <font face="Arial">Username</font> </td>
          <td> <font face="Arial">Employee access level</font> </td>
      </tr>';

  while($row = $result->fetch_assoc()) {
    $field1name = $row["EmpID"];
    $field2name = $row["Empname"];
    $field3name = $row["Username"];
    $field5name = $row["EmpLevel"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>  
                  <td>'.$field5name.'</td>
                  <td><button onclick='.'"'.'location.href='."'".'./deleteemp.php?EmpID='.$field1name."'".'">Delete</button></td>
                  <td><button onclick='.'"'.'location.href='."'".'./Updateemp.php?EmpID='.$field1name."'".'">Update</button></td>
              </tr>';
  }
} 
else {
  echo "No data found";
}


  echo nl2br("\n");


if($EmployeeName=="Bob" || $EmployeeName=="Yoshi"){
if ($result3->num_rows > 0) {
    // output data of each row
    
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
        <tr> 
            <td> <font face="Arial">Program Name</font> </td> 
            <td> <font face="Arial">Program Level</font> </td> 
            <td> <font face="Arial">Employee Level</font> </td>
        </tr>';
        echo nl2br("\n\n");
    while($row = $result3->fetch_assoc()) {
      $field14name = $row["ProgramName"];
      $field15name = $row["ProgramLevel"];
      $field16name = $row["Employeelevel"];
  
          echo '<tr> 
                    <td>'.$field14name.'</td> 
                    <td>'.$field15name.'</td> 
                    <td>'.$field16name.'</td>
                    <td><button onclick='.'"'.'location.href='."'".'./deleteprg.php?ProgramName='.$field14name."'".'">Delete</button></td>
                    <td><button onclick='.'"'.'location.href='."'".'./updateprg.php?ProgramName='.$field14name."'".'">Update</button></td>                
                </tr>';
    }
  } 
  else {
    echo "No data found";
  }
}
else{
  if ($result3->num_rows > 0) {
    // output data of each row
    
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
        <tr> 
            <td> <font face="Arial">Program Name</font> </td> 
            <td> <font face="Arial">Program Level</font> </td> 
            <td> <font face="Arial">Employee Level</font> </td>
        </tr>';
        echo nl2br("\n\n");
    while($row = $result3->fetch_assoc()) {
      $field14name = $row["ProgramName"];
      $field15name = $row["ProgramLevel"];
      $field16name = $row["Employeelevel"];
  
          echo '<tr> 
                    <td>'.$field14name.'</td> 
                    <td>'.$field15name.'</td> 
                    <td>'.$field16name.'</td>
                    </tr>';
    }
  } 
  else {
    echo "No data found";
  }

}
  echo nl2br("\n");

if($EmployeeName=="Bob" || $EmployeeName=="Yoshi"){
if ($result1->num_rows > 0) {
    // output data of each row
    
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
        <tr> 
            <td> <font face="Arial">Functional Area ID</font> </td> 
            <td> <font face="Arial">Functional Area Name</font> </td> 
            <td> <font face="Arial">FA Expert</font> </td>
        </tr>';
        echo nl2br("\n\n");
    while($row = $result1->fetch_assoc()) {
      $field6name = $row["ID"];
      $field7name = $row["ProgramName"];
      $field8name = $row["Areaname"];
  
          echo '<tr> 
                    <td>'.$field6name.'</td> 
                    <td>'.$field7name.'</td> 
                    <td>'.$field8name.'</td>
                    <td><button onclick='.'"'.'location.href='."'".'./deleteFA.php?Areaname='.$field8name."'".'">Delete</button></td>
                    <td><button onclick='.'"'.'location.href='."'".'./UpdateFA.php?Areaname='.$field8name."'".'">Update</button></td>                                
                </tr>';
    }
  } 
  else {
    echo "No data found";
  }
}
else{
  if ($result1->num_rows > 0) {
    // output data of each row
    
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
        <tr> 
            <td> <font face="Arial">Functional Area ID</font> </td> 
            <td> <font face="Arial">Functional Area Name</font> </td> 
            <td> <font face="Arial">FA Expert</font> </td>
        </tr>';
        echo nl2br("\n\n");
    while($row = $result1->fetch_assoc()) {
      $field6name = $row["ID"];
      $field7name = $row["ProgramName"];
      $field8name = $row["Areaname"];
  
          echo '<tr> 
                    <td>'.$field6name.'</td> 
                    <td>'.$field7name.'</td> 
                    <td>'.$field8name.'</td>
                    </tr>';
    }
  } 
  else {
    echo "No data found";
  }

}

  if ($result2->num_rows > 0) {
    // output data of each row
    echo '<table border="1" cellspacing="5" cellpadding="6"> 
        <tr> 
            <td> <font face="Arial">user ID</font> </td> 
            <td> <font face="Arial">Full Name</font> </td> 
            <td> <font face="Arial">Username</font> </td> 
            <td> <font face="Arial">Password</font> </td> 
            <td> <font face="Arial">User DOB</font> </td>
        </tr>';
        echo nl2br("\n\n");
    while($row = $result2->fetch_assoc()) {
      $field9name = $row["userID"];
      $field10name = $row["nameofuser"];
      $field11name = $row["Username"];
      $field12name = $row["Password"];
      $field13name = $row["userDOB"];
  
          echo '<tr> 
                    <td>'.$field9name.'</td> 
                    <td>'.$field10name.'</td> 
                    <td>'.$field11name.'</td> 
                    <td>'.$field12name.'</td> 
                    <td>'.$field13name.'</td>
                    <td><button onclick='.'"'.'location.href='."'".'./deleteusr.php?userID='.$field9name."'".'">Delete</button></td>
                    <td><button onclick='.'"'.'location.href='."'".'./Updateusr.php?EmpID='.$field1name."'".'">Update</button></td>
                </tr>';
    }
  } 
  else {
    echo "No data found";
  }

$conn->close();
?>
</html>