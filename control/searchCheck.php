<?php
session_start();
include("../model/MyDB2.php");

 $Fmerror="";
 $Toerror="";
 $Dojerror="";
 $error=0;
 
if(isset($_REQUEST["search"]))
{
    if(empty($_REQUEST["from"]))
    {
        $Fmerror="*Please enter correct station name ";
        $error=1;
    }
    if(empty($_REQUEST["to"]))
    {
        $Toerror="*Please enter destination station. ";
        $error=1;
    }
    if(empty($_REQUEST["DoJ"]))
    {
        $Dojerror="*Please select date of your journey.";
        $error=1;
    }
    if($error==0)
    {
        $mydb= new MyDB();
        $conObj = $mydb->openCon();
        $data1 = $mydb->searchTicket("schedule",$_REQUEST["from"],$_REQUEST["to"],$_REQUEST["DoJ"],$conObj);

        //header('location: ../view/search.php');
    }
    else{
        header('location: ../view/home.php');
    }
}

?>

