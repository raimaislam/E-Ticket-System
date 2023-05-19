<?php
include("../model/MyDB2.php");
 $Fnerror="";
 $Lnerror="";
 $Pherror="";
 $Derror="";
 $Emerror="";
 $Passerror="";

 if(isset($_REQUEST['signup']))
 {
    $error=0;

 $Fname=$_REQUEST["fname"];
 $Lname=$_REQUEST["lname"];
 $Phone=$_REQUEST["phone"];
 $Email=$_REQUEST["email"];
 
 $mydb = new MyDB();
        $conObj = $mydb->openCon();
        $result = $mydb->getUserInfo("cusdata",$_REQUEST["phone"],$conObj);
       

 if(empty($Fname)){
    $Fnerror= "  *This field is required";
    $error=1;
    
 }
 else if(!preg_match ("/^[a-zA-Z-' ]*$/", $Fname)) 
 {
    $Fnerror= "  *Your name can contain only letters";
 }
 if(empty($Lname)){
    $Lnerror= "  *This field is required";
    $error=1;
    
 }
 else if(!preg_match ("/^[a-zA-Z-' ]*$/", $Lname)) 
 {
    $Lnerror= "  *Your name can contain only letters";
 }

if(empty($Phone)){
    $Pherror = " *This field is required";
    $error=1;
 }
 else if(strlen($Phone)>11 || strlen($Phone)<11)
 {
    $Pherror = " *Please insert correct phone number";
    $error=1; 
 }
 else if($result->num_rows>0)
 {
   $Pherror = " *This number is already taken";
   $error=1; 
 }

 /*$GetData = file_get_contents("../data/EmpJsonData.json");
 $GetPhpData = json_decode($GetData);
 foreach($GetPhpData as $data){
if($data->phone == $_REQUEST["phone"])
{
  $Pherror="This Phone number is already exist.Please Try another";
  $error=1;
}
break;
 }*/
if(empty($_REQUEST["DoB"])){
    $Derror = "*This field is required";
    $error=1;
 }
 else{
    $DOB=$_REQUEST["DoB"];
}

if(empty($Email)){
    $Emerror = "  *This field is required";
    $error=1;
 }
 else if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
 {
    $Emerror = "*Email was not correct";
    $error=1;
 }
 $Password=$_REQUEST["password"];
 $Cpassword=$_REQUEST["Cpassword"];
 if(empty($Password) || empty($Cpassword))
    {
        $Passerror = "*Your passwords fields were empty";
        $error=1;

    }
    else{
        if(strlen($Password)<4)
        {
            $Passerror = "*Your password should contain more than 4 characters";
            $error=1;
        }
        else if($Password!=$Cpassword)
        {
            $Passerror = "*Your passwords didn't matched";
            $error=1;
        }
      }
        if($error==0)
    {
      {
         $mydb= new MyDB();
         $conobj= $mydb->openCon();
         $result=$mydb->insertData("cusdata",$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["email"],$_REQUEST["password"],$_REQUEST["DoB"],$_REQUEST["phone"],$conobj);
         if($result===TRUE)
         {
            header('location: ../view/login.php');
         }
         else
         {
             echo "Error".$conobj->error;
         }
      }
   }
}

?>
 






