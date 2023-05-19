<?php
include("../model/mydb.php");
session_start();
$error=0;
$mydb= new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->getUserEmail($conObj,"emp",$_SESSION['email']);
if($data->num_rows>0)
{
    
    while($row=$data->fetch_assoc())
    {
        $name=$row['username'];
        $file=$row['nid'];
    }
}
$Terr="";
$Ferr="";
$Toerr="";
$Derr="";
$Tierr="";
$Perr="";
$Serr="";

if(isset($_REQUEST['Sadd']))
{
    if(empty($_REQUEST['Tname']))
{
    $Terr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['from']))
{
    $Ferr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['to']))
{
    $Toerr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['Tdate']))
{
    $Derr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['Ttime']))
{
    $Tierr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['seats']))
{
    $Serr="*This field is required";
    $error=1;
}
if(empty($_REQUEST['price']))
{
    $Perr="*This field is required";
    $error=1;
}
if($error==0)
{
    $mydb1 = new MyDB();
    $conObj1 = $mydb1->openCon();
    $data1 = $mydb1->insertSchedule($conObj1,"schedule",$_REQUEST['Tname'],$_REQUEST['from'],$_REQUEST['to'],$_REQUEST['Tdate'],$_REQUEST['Ttime'],$_REQUEST['seats'],$_REQUEST['price']);
    header("location: ../view/Schedule.php");
}
}
if(isset($_REQUEST['Supdate']))
{
    if(empty($_REQUEST['Tname']))
    {
        $Terr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['from']))
    {
        $Ferr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['to']))
    {
        $Toerr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['Tdate']))
    {
        $Derr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['Ttime']))
    {
        $Tierr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['seats']))
    {
        $Serr="*This field is required";
        $error=1;
    }
    if(empty($_REQUEST['price']))
    {
        $Perr="*This field is required";
        $error=1;
    }
    if($error==0)
    {
    $mydb1 = new MyDB();
    $conObj1 = $mydb1->openCon();
    $data1 = $mydb1->updateSchedule($conObj1,"schedule",$_REQUEST['Tname'],$_REQUEST['from'],$_REQUEST['to'],$_REQUEST['Tdate'],$_REQUEST['Ttime'],$_REQUEST['seats'],$_REQUEST['price']);
    header("location: ../view/Schedule.php");
    }
}
