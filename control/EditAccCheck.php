<?php
include("../model/mydb.php");
session_start();
if(empty($_SESSION['email']))
{
    header("location: ../view/EmpLogin.php");
}
$selected="";
$mydb= new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->getUserEmail($conObj,"emp",$_SESSION['email']);
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
if(isset($_REQUEST['update']))
{
    if($_FILES['file']['name'])
    {
        $file='../resources/'.$name.'.jpg';
        move_uploaded_file($_FILES['file']['tmp_name'],$file);
    }
    $name=$_REQUEST["name"];
    $email=$_SESSION["email"];
    $phone=$_REQUEST["phone"];
    $address=$_REQUEST["address"];
    $gender=$_REQUEST["gender"];
    $DoB=$_REQUEST["dob"];
    $password=$_REQUEST["password"];
    
    $mydb1= new MyDB();
    $conObj1 = $mydb1->openCon();
    $result = $mydb1->UpdateEmp($conObj1,"emp",$name,$phone,$email,$address,$password,$gender,$DoB,$file);
   

}
