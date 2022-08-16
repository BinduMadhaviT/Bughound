<?php
include_once('./dbconfig.php');
$uname = $_REQUEST['username'];
$empname = $_REQUEST['uname'];
$password = $_REQUEST['password'];

$sql = "SELECT COUNT(1) usercount FROM employee WHERE Username = '$uname' AND Password = '$password'";

$result = $conn->query($sql);
if ($result->num_rows == 1) 
{
    while($row = $result->fetch_assoc()) {
        if ($row['usercount']==1)
        {
            
            if($empname=='Bob' || $empname=='Yoshi' || $empname=='Admin')
            {
                header("Location: ./admin.php?Empname=$empname");
            }
            
            else{
            header("Location: ./reportdataretrieval.php?Empname=$empname");
            }
        }
        else
        {
            header("Location: ./login.php");
        }
    }

 
}
?>