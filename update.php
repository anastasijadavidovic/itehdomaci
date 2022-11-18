<?php

include 'connect.php';

extract($_POST);

$name="";
$email="";
$mobile="";
$place="";

if(isset($_POST['name']))
{
$name=$_POST['name'];
}
if(isset($_POST['email']))
{
$email=$_POST['email'];
}
if(isset($_POST['mobile']))
{
$mobile=$_POST['mobile'];
}
if(isset($_POST['place']))
{
$place=$_POST['place'];
}
if(isset($_POST['updateid']))
{
$updateid=(int)$_POST['updateid'];
$sql = "update crud set name='$name', email='$email', mobile='$mobile', place='$place' WHERE id=$updateid";
if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

}


?>