<?php
include_once("dbconfig.php");

$EmployeeID = $_GET['EmpID'];
$sql = "SELECT Empname FROM employee WHERE EmpID = '$EmployeeID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $field1name = $row["Empname"];
    }
}

?>
<!DOCTYPE html>
<html style="background-image: url('backgrnd.jpg');">
<head>
    <title>Edit Employee Details!</title>
</head>
<body>
<main>
    <form action="updateemployee.php" method="post">
        <h1 style="color: white">Employee Edit</h1>
        

            <label for="empname" style="color: white">Employee Name</label>
            <input type="text" name="empname" id="empname" value="<?php echo($field1name)?>">
        
            </br></br></br>

            <label for="emplevel" style="color: white">Employee Level</label>
            <input type="text" name="emplevel" id="emplevel">

            </br></br></br>

        <button type="submit">Update</button>
        </br></br></br>
    </form>
</main>
</body>
</html>