<!DOCTYPE html>
<?php
include_once("dbconfig.php");
?>
<html style="background-image: url('backgrnd.jpg');">
<head>
<title>BugHound - New Bug Page</title>
</head>
<body style="Color:rgb(242, 237, 237)">
<pre>
<h1>New Bug Report Entry Page</h1> <a style= "float: right; color:red"; href="Logout.php">Logout</a>
</pre>
</br>
<form action="devreport.php" method="post">

<?php
$reportID = $_GET['reportID'];
$sql = "SELECT * FROM devbugreport WHERE devbugreport.reportid=$reportID";

$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {
    $field1name = $row["functionalarea"];
    $field2name = $row["assignedto"];
    $field3name = $row["comments"];
    $field4name = $row["reportstatus"];
    $field5name = $row["reportpriority"];
    $field6name = $row["resolutionstatus"];
    $field7name = $row["resolvedby"];
    $field8name = $row["resolveddate"];
    $field9name = $row["testedby"];
    $field10name = $row["testdate"];
    $field11name = $row["treatasdeferred"];
    $field12name = $row["Programname"];
    $field13name = $row["Suggestedfix"];
}
}

else{
  $field1name = NULL;
    $field2name = NULL;
    $field3name = NULL;
    $field4name = NULL;
    $field5name = NULL;
    $field6name = NULL;
    $field7name = NULL;
    $field8name = NULL;
    $field9name = NULL;
    $field10name = NULL;
    $field11name = NULL;
    $field12name = NULL;
    $field13name = NULL;
}

?>

<input type="text" id="Comments" name="reportID" value="<?php echo("$reportID")?>">

</br></br></br>

<label for="Farea">Functional Area</label>
<input type="text" id="Farea" name="FunctionalArea" style="width:30%"; value="<?php echo($field1name)?>"> 

<label for="Prg">Program</label>
<input type="text" id="Prg" name="Prn" style="width:30%"; value="<?php echo($field12name)?>"> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="Assignedto">Assigned To</label>
<select id="Assignedto" name="Assignedto">
  <option <?php if($field2name == 'Bob') echo("selected")?> value="">Bob</option>
  <option <?php if($field2name == 'Sue') echo("selected")?> value="">Sue</option>
  <option <?php if($field2name == 'Habib') echo("selected")?> value="">Habib</option>
  <option <?php if($field2name == 'Yoshi') echo("selected")?> value="">Yoshi</option>
  <option <?php if($field2name == 'Francois') echo("selected")?> value="">Francois</option>
  <option <?php if($field2name == 'Becky') echo("selected")?> value="">Becky</option>
  <option <?php if($field2name == 'Felix') echo("selected")?> value="">Felix</option>
</select>

</br></br></br>

<label for="Comments">Comments</label>
<input type="text" id="Comments" name="Comments" style="width:30%"; value="<?php echo($field3name)?>">

</br></br></br>

<label for="sfix">Suggested Fix</label>
<input type="text" id="sfix" name="Suggfix" style="width:30%"; value="<?php echo($field13name)?>">

</br></br></br>

<label for="status">Report Status</label>
<select id="status" name="RpStatus">
  <option <?php if($field4name == 'Open') echo("selected")?> value="">Open</option>
  <option <?php if($field4name == 'Closed') echo("selected")?> value="">Closed</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="Priority">Report Priority</label>
<select id="priority" name="RpPriority">
  <option <?php if($field5name == 1) echo("selected")?> value="">1</option>
  <option <?php if($field5name == 2) echo("selected")?> value="">2</option>
  <option <?php if($field5name == 3) echo("selected")?> value="">3</option>
  <option <?php if($field5name == 5) echo("selected")?> value="">4</option>
  <option <?php if($field5name == 5) echo("selected")?> value="">5</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="res">Resolution Status</label>
<select id="res" name="Resolution">
  <option <?php if($field6name == "") echo("selected")?> value="">Select</option>
  <option <?php if($field6name == 'Pending') echo("selected")?> value="">Pending</option>
  <option <?php if($field6name == 'Fixed') echo("selected")?> value="">Fixed</option>
  <option <?php if($field6name == 'Irreproducible') echo("selected")?> value="">Irreproducible</option>
  <option <?php if($field6name == 'Deferred') echo("selected")?> value="">Deferred</option>
  <option <?php if($field6name == 'As Designed') echo("selected")?> value="">As Designed</option>
  <option <?php if($field6name == 'Can\'t Be Fixed') echo("selected")?> value="">Can't Be Fixed</option>
  <option <?php if($field6name == 'Withdrawn By Reporter') echo("selected")?> value="">Withdrawn By Reporter</option>
  <option <?php if($field6name == 'Need More Information') echo("selected")?> value="">Need More Information</option>
  <option <?php if($field6name == 'Disagree With Suggestion') echo("selected")?> value="">Disagree With Suggestion</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</br></br></br>

<label for="Resolvedby">Resolved By</label>
<select id="Resolvedby" name="Resolutionby">
  <option value="NULL">Select</option>
  <option <?php if($field7name == 'Bob') echo("selected")?> value="">Bob</option>
  <option <?php if($field7name == 'Sue') echo("selected")?> value="">Sue</option>
  <option <?php if($field7name == 'Habib') echo("selected")?> value="">Habib</option>
  <option <?php if($field7name == 'Yoshi') echo("selected")?> value="">Yoshi</option>
  <option <?php if($field7name == 'Francois') echo("selected")?> value="">Francois</option>
  <option <?php if($field7name == 'Becky') echo("selected")?> value="">Becky</option>
  <option <?php if($field7name == 'Felix') echo("selected")?> value="">Felix</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="resDate">Resolution Date</label>
<input type="date" id="resDate" name="resDate" value="<?php echo($field8name)?>">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="Testedby">Tested By</label>
<select id="Testedby" name="Testby">
  <option value="NULL">Select</option>
  <option <?php if($field9name == 'Bob') echo("selected")?> value="">Bob</option>
  <option <?php if($field9name == 'Sue') echo("selected")?> value="">Sue</option>
  <option <?php if($field9name == 'Habib') echo("selected")?> value="">Habib</option>
  <option <?php if($field9name == 'Yoshi') echo("selected")?> value="">Yoshi</option>
  <option <?php if($field9name == 'Francois') echo("selected")?> value="">Francois</option>
  <option <?php if($field9name == 'Becky') echo("selected")?> value="">Becky</option>
  <option <?php if($field9name == 'Felix') echo("selected")?> value="">Felix</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="TestDate">Test Date</label>
<input type="date" id="TestDate" name="TestDate" value="<?php echo($field10name)?>">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="TasDef">Treat as deferred?</label>
<input type="checkbox" id="TasDef" name="Treatasdef" value="<?php echo($field11name)?>">

</br></br></br>

<input type="submit" value="Submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</form>
</body>
</html>