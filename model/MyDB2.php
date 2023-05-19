<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","eticket");
return $conn;
}

function insertData($tablename,$Fname,$Lname,$Email,$Password,$DOB,$Phone,$conn){
$sql="INSERT INTO $tablename (FirstName,LastName, Email,Password,DateOfBirth,Phone) VALUES ('$Fname','$Lname','$Email','$Password','$DOB','$Phone')";
$rs=$conn->query($sql);
return $rs;
}
function checkUser($tablename,$Phone,$Password,$conn)
{
    $sql="SELECT * FROM $tablename WHERE Phone='$Phone' AND Password='$Password'";
    $rs=$conn->query($sql);
    return $rs;
}
function getUserInfo($tablename,$Phone,$conn)
{
    $sql="SELECT * FROM $tablename WHERE Phone='$Phone'";
    $rs=$conn->query($sql);
    return $rs;
}
function UpdateInfo($tablename,$Fname,$Lname,$Email,$Password,$DOB,$Phone,$conn){
    $sql="UPDATE $tablename SET FirstName='$Fname',LastName='$Lname', Email='$Email',Password='$Password',DateOfBirth='$DOB' WHERE Phone='$Phone'";
    $rs=$conn->query($sql);
    return $rs;


}

function searchTicket($tablename,$From,$To,$Date,$conn)
{
    $sql="SELECT * FROM $tablename WHERE fromstation='$From' AND tostation='$To' AND date='$Date'";
    $rs=$conn->query($sql);
    return $rs;
}
function insertCusSchedule($tablename,$Phone,$train,$From,$To,$Date,$payment,$conn){
    $sql="INSERT INTO $tablename (phone,train,fromstation,tostation,date,payment) VALUES ('$Phone','$train','$From','$To','$Date','$payment')";
    $rs=$conn->query($sql);
    return $rs;
    }


function UpdateSeat($tablename,$train,$date,$conn){
    $sql="UPDATE $tablename SET booked=booked+1 WHERE train='$train' AND date='$date'";
    $rs=$conn->query($sql);
    return $rs;
}

function getSchedules($con,$tablename){
     $sql="SELECT train,date,time,fromstation,tostation,seats FROM $tablename";
     $db=$con->query($sql);
     return $db;

}
function CheckHistory($tablename,$Phone,$conn){
    $sql="SELECT train,fromstation,tostation,date FROM $tablename WHERE phone='$Phone'";
    $rs=$conn->query($sql);
    return $rs;
 }

 function DeleteHistory($tablename,$Phone,$conn){
    $sql="DELETE FROM $tablename WHERE phone='$Phone'";
    $rs=$conn->query($sql);
    return $rs;
 }
 function getSchedules2($con,$tablename,$train){
    $sql="SELECT train,date,time,fromstation,tostation,seats FROM $tablename WHERE train='$train'";
    $db=$con->query($sql);
    return $db;

}


  
}

?>