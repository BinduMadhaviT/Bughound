<?php
include_once("dbconfig.php");

$Areaname = $_GET['Areaname'];
$sql = "SELECT ProgramName FROM functionalarea WHERE Areaname = '$Areaname'";
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
    <title>Edit Area Details!</title>
</head>
<body>
<main>
    <form action="updatearea.php" method="post">
        <h1 style="color: white">Area update</h1>
        

            <label for="prname" style="color: white">Program Name</label>
            <input type="text" name="prgname" id="prname" value="<?php echo($field1name)?>">
        
            </br></br></br>

            <label for="areaname" style="color: white">Area Name</label>
            <input type="text" name="arname" id="areaname">

            </br></br></br>

        <button type="submit">Update</button>
        </br></br></br>
    </form>
</main>
</body>
</html>