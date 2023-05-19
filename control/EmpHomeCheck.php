<?php
include("../model/mydb.php");
session_start();
$name=$email=$gender=$dob=$address=$phone=$file=$password="";
if(empty($_SESSION['email']))
{
    header("location: ../view/EmpLogin.php");
}
$mydb = new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->checkUser($conObj,'emp',$_SESSION['email'],$_SESSION['password']);
if($data->num_rows>0)
{
    while($row=$data->fetch_assoc())
    {
        $name=$row['username'];
        $email=$row['email'];
        $gender=$row['gender'];
        $address=$row['address'];
        $phone=$row['phone'];
        $dob=$row['dob'];
        $file=$row['nid'];
        $password=$row['password'];
    }
}
$data1=$mydb->getCusSchedule($conObj,"cusschedule");
if(isset($_REQUEST['DelHis']))
{
    $data2=$mydb->deleteCusSchedule($conObj,"cusschedule");
    header("location:../view/Reservations.php");
}
?>