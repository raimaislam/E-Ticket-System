<?php
session_start();
include("../model/MyDB2.php");
$Fname=$Lname=$Email=$Password=$DOB=$Phone="";
$Fmerror="";
 $Toerror="";
 $Dojerror="";
 $error=0;
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


$mydb1= new MyDB();
$conObj1 = $mydb1->openCon();
$data1 = $mydb1->getSchedules($conObj1,"schedule");








