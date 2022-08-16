<?php
include_once("dbconfig.php");

$Prgname = $_GET['ProgramName'];
$sql = "SELECT ProgramName FROM programtable WHERE ProgramName = '$Prgname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $field1name = $row["ProgramName"];
    }
}

?>
<!DOCTYPE html>
<html style="background-image: url('backgrnd.jpg');">
<head>
    <title>Edit Program Details!</title>
</head>
<body>
<main>
    <form action="updateprogram.php" method="post">
        <h1 style="color: white">Program update</h1>
        

            <label for="prname" style="color: white">Program Name</label>
            <input type="text" name="prgname" id="prname" value="<?php echo($field1name)?>">
        
            </br></br></br>

            <label for="areaname" style="color: white">New Program Name</label>
            <input type="text" name="prname" id="programname">

            </br></br></br>

        <button type="submit">Update</button>
        </br></br></br>
    </form>
</main>
</body>
</html>