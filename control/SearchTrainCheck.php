<?php
include("../model/MyDB2.php");


$train=$_REQUEST['train'];
$mydb1= new MyDB();

$conObj1 = $mydb1->openCon();

$data1 = $mydb1->getSchedules2($conObj1,"schedule",$train);

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

 echo "<br>Train : ".$train."<br>Source : ".$from."<br>Destination : ".$to."<br>Date : ".$date."<br>Time : ".$time."<br>Seats : ".$seats;

 }

}

else{

echo "no results";

}
?>