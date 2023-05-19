<?php
include("../model/mydb.php");
session_start();
$train=$_REQUEST["train"];
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
$mydb1= new MyDB();
$conObj1 = $mydb1->openCon();
$data1 = $mydb1->getSearchSchedules($conObj1,"schedule",$train);
if($data1->num_rows>0)
{
    
    while($row=$data1->fetch_assoc())
    {
        $train=$row["train"];
        $from=$row["fromstation"];
        $to=$row["tostation"];
        $date=$row["date"];
        $time=$row["time"];
        $seats=$row["seats"];
        $price=$row["price"];
        echo "<br>Train : ".$train."<br>Source : ".$from."<br>Destination : ".$to."<br>Date : ".$date."<br>Time : ".$time."<br>Seats : ".$seats."<br>Price : ".$price;
    }
}
else{
    echo "no results";
}
?>