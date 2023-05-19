<?php
session_start();
include("../model/MyDB2.php");
$berror="";
$error=0;
$Fname=$Lname=$Email=$Password=$DOB=$Phone="";

if(empty($_SESSION['phone'])){
    header("Location: ../view/login.php");
}
$mydb = new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->checkUser('cusdata',$_SESSION["phone"],$_SESSION["password"],$conObj);
if($data->num_rows>0)
{
    while($row=$data->fetch_assoc())
    {
        $Fname=$row['FirstName'];
        $Lname=$row['LastName'];
        $Email=$row['Email'];
        $Password=$row['Password'];
        $DOB=$row['DateOfBirth'];
        $Phone=$row['Phone'];
        
    }
}
if(isset($_REQUEST['bkashsubmit']))
{
    if($_REQUEST["bkashnum"]=="")
    {
        $berror="please insert your bkash number";
        $error=1;
    }
    if($error==0)
    {
    $data1 = $mydb->insertCusSchedule('cusschedule',$_SESSION["phone"],$_GET['train'],$_GET['from'],$_GET['to'],$_GET['date'],'Paid',$conObj);
    $data2 = $mydb->UpdateSeat('schedule',$_GET['train'],$_GET['date'],$conObj);
    if($data1==TRUE)
    {
        header("location:../view/successmsg.php");
    }
}
}