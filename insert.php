<?php

include 'connect.php';

extract($_POST);

$nameSend="";
$emailSend="";
$mobileSend="";
$placeSend="";
if(isset($_POST['nameSend']))
{
$nameSend=$_POST['nameSend'];
}
if(isset($_POST['emailSend']))
{
$emailSend=$_POST['emailSend'];
}
if(isset($_POST['mobileSend']))
{
$mobileSend=$_POST['mobileSend'];
}
if(isset($_POST['placeSend']))
{
$placeSend=$_POST['placeSend'];
}

    $sql = "insert into crud(name,email,mobile,place) values ('$nameSend','$emailSend','$mobileSend','$placeSend')";
    
    $result = mysqli_query($con,$sql);

 var_dump($_POST,"123");
?>