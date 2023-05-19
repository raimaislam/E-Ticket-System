<?php
include("../model/MyDB2.php");
session_start();

//$selected="";
$mydb= new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->getUserInfo("cusdata",$_SESSION['phone'],$conObj);
if($data->num_rows>0)
{
    
    while($row=$data->fetch_assoc())
    {
        $Fname=$row['FirstName'];
        $Lname=$row['LastName'];
        $Email=$row['Email'];
        $Password=$row['Password'];
        $Dob=$row['DateOfBirth'];
        $Phone=$row['Phone'];
        
    }
}
if(isset($_REQUEST['update']))
{
    
    $Fname=$_REQUEST["fname"];
    $Lname=$_REQUEST["lname"];
    $Email=$_REQUEST["email"];
    $Password=$_REQUEST["password"];
    $Dob=$_REQUEST["DoB"];
    $Phone=$_SESSION['phone'];
    
    
    
    $mydb1= new MyDB();
    $conObj1 = $mydb1->openCon();
    $result = $mydb1->UpdateInfo("cusdata",$Fname,$Lname,$Email,$Password,$Dob,$Phone,$conObj1);
   

}
