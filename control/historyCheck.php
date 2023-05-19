<?php
session_start();
include("../model/MyDB2.php");
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

$mydb= new MyDB();
        $conObj = $mydb->openCon();
        $data1 = $mydb->CheckHistory("cusschedule",$_SESSION["phone"],$conObj);

        if(isset($_REQUEST['DelHis']))

{

    $data2=$mydb->DeleteHistory("cusschedule",$_SESSION["phone"],$conObj);
    header("location:../view/history.php");

}

