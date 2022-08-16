<!DOCTYPE html>
<html style="background-image: url('backgrnd.jpg');">
<head>
<title>BugHound - New Bug Page</title>
</head>
<body style="Color:rgb(242, 237, 237)">

<h1>New Bug Report Entry Page</h1>

</br>
<form action="report.php" method="post">
<label for="Prgname">Program</label>
<select id="Prgname" name="ProgramName" style="width:20%;">
  <option value="ADA95 Coder">ADA95 Coder</option>
  <option value="Bughound">Bughound</option>
  <option value="COBOL Coder 1 1">COBOL Coder 1 1</option>
  <option value="COBOL Coder 1 2">COBOL Coder 1 2</option>
  <option value="COBOL Coder 2 1">COBOL Coder 2 1</option>
  <option value="Pascal Coder 1 1">Pascal Coder 1 1</option>
  <option value="Word Writer 2019">Word Writer 2019</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="Prversion">Program version</label>
<input type="text" id="Prversion" name="Prgversion">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="rpType">Report Type</label>
<select id="rpType" name="ReportType">
  <option value="Coding Error">Coding Error</option>
  <option value="Design Issue">Design Issue</option>
  <option value="Suggestion">Suggestion</option>
  <option value="Documentation">Documentation</option>
  <option value="Hardware">Hardware</option>
  <option value="Query">Query</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="Severity">Severity</label>
<select id="Severity" name="Severitylevel">
  <option value="Fatal">Fatal</option>
  <option value="Serious">Serious</option>
  <option value="Minor">Minor</option>
</select>

</br></br></br>

<label for="PrSummary">Problem Summary</label>
<input type="text" id="PrSummary" name="PrbSummary" style="width:30%;">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="reproducible">Reproducible?</label>
<select id="reproducible" name="Reproducible">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</br></br></br>

<label for="Prblm">Problem Statement</label>
<input type="text" id="Prblm" name="Problem" style="width:30%;">

</br></br></br>


<label for="RpBy">Reported By</label>
<input type="text" id="RpBy" name="ReportedBy" style="width:30%;">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label for="rpDate">Report Date</label>
<input type="date" id="rpDate" name="rpDate">

</br></br></br>

<input type="submit" value="Submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="admin.php?Empname=Yoshi">Cancel</a>

</form>
</body>
</html>