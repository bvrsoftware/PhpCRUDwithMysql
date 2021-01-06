<?php
if($_REQUEST['act'])
{
  $_REQUEST['act']();
}

// Insert data

function insertUpdate()
{
include("../include/myconnect.php");
$R=$_REQUEST;
$msg="Saved Successfully....";
$sql;
if($R['id'])
$sql="UPDATE `student` SET `name`='$R[name]',`number`='$R[num]',`email`='$R[email]',`password`='$R[pass]' WHERE `id`='$R[id]'";
else
$sql="INSERT INTO `student`(`name`, `number`, `email`, `password`) VALUES ('$R[name]','$R[num]','$R[email]','$R[pass]')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
header("Location:../index.php?msg=$msg");
}
function deleteStudentData()
{
include("../include/myconnect.php");
$R=$_REQUEST;
$msg="Saved Successfully....";
$sql="DELETE FROM `student` WHERE `id`='$R[id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
header("Location:../pages/students.php?msg=$msg");
}
?>