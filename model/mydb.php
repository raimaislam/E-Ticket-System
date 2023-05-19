<?php 
class MyDB{
    function openCon(){
        $con = new mysqli("localhost","root","","eticket");
        return $con;
    }
    function insertData($con, $table,$username,$phone,$email,   $address, $password, $gender, $dob, $nid)
    {
        $sql = "INSERT INTO $table (username, phone,email,address,password,gender,dob, nid) VALUES ('$username', '$phone','$email', '$address','$password','$gender',   '$dob', '$nid' )";
        $db=$con->query($sql);
        return $db;
    }
    function checkUser($con,$table,$email,$password)
    {
        $sql="SELECT * FROM $table WHERE email='$email' AND password='$password'";
        $db=$con->query($sql);
        return $db;
    }
    function getUserEmail($con,$table,$email)
    {
        $sql="SELECT * FROM $table WHERE email='$email'";
        $db=$con->query($sql);
        return $db;
    }
    function getUserName($con,$table,$name)
    {
        $sql="SELECT * FROM $table WHERE username='$name'";
        $db=$con->query($sql);
        return $db;
    }
    function UpdateEmp($con, $table,$username,$phone, $email,$address, $password, $gender, $dob,$file)
    {
        $sql="UPDATE $table SET username='$username',phone='$phone', address='$address', password='$password', gender='$gender', dob='$dob', nid='$file' WHERE email='$email'";
        $db=$con->query($sql);
        return $db;
    }
    function insertSchedule($con, $table,$train,$fromstation,$tostation,   $date, $time, $seats,$price)
    {
        $sql = "INSERT INTO $table (train, fromstation,tostation,date,time,seats,price) VALUES ('$train', '$fromstation','$tostation', '$date','$time','$seats','$price')";
        $db=$con->query($sql);
        return $db;
    }
    function getSchedules($con,$table)
    {
        $sql="SELECT train,date,time,fromstation,tostation,seats,price FROM $table";
        $db=$con->query($sql);
        return $db;
    }
    function UpdateSchedule($con, $table,$train,$fromstation,$tostation,   $date, $time, $seats,$price)
    {
        $sql="UPDATE $table SET train='$train',fromstation='$fromstation', tostation='$tostation', date='$date', time='$time', seats='$seats',price='$price' WHERE train='$train'";
        $db=$con->query($sql);
        return $db;
    }
    function deleteSchedules($con,$table,$train)
    {
        $sql="DELETE FROM $table WHERE train='$train'";
        $db=$con->query($sql);
        return $db;
    }
    function deleteCusSchedule($con,$table)
    {
        $sql="DELETE FROM $table";
        $db=$con->query($sql);
        return $db;
    }
    function getCusSchedule($con,$table)
    {
        $sql="SELECT * FROM $table";
        $db=$con->query($sql);
        return $db;
    }
    function getVendors($con,$table)
    {
        $sql="SELECT * FROM $table";
        $db=$con->query($sql);
        return $db;
    }
    function deleteVendor($con,$table,$name,$code)
    {
        $sql="DELETE FROM $table WHERE VendorName='$name' AND TrainCode='$code'";
        $db=$con->query($sql);
        return $db;
    }
    function getSearchSchedules($con,$table,$train)
    {
        $sql="SELECT train,date,time,fromstation,tostation,seats,price FROM $table WHERE train='$train'";
        $db=$con->query($sql);
        return $db;
    }



   

}
?>