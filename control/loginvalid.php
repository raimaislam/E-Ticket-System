<?php
session_start();
include("../model/MyDB2.php");

if(!empty($_SESSION['phone'])){
   header('location: ../view/home.php');
}

 $Pherror="";
 $Passerror="";
 $error=1;
 $Eerror="";

 if(isset($_REQUEST['signup']))
 {
    if(empty($_REQUEST["phone"]))
    {
        $Pherror="*Pleaase insert your phone number";
    }
    if(empty($_REQUEST["password"]))
    {
        $Passerror="*Pleaase insert your password";
    }
    else
    {
        $mydb = new MyDB();
        $conObj = $mydb->openCon();
        $result = $mydb->checkUser("cusdata",$_REQUEST["phone"],$_REQUEST["password"],$conObj);
        if($result->num_rows>0)
        {
            $_SESSION['phone']=$_REQUEST['phone']; 
            $_SESSION['password']=$_REQUEST['password'];           
            if(isset($_REQUEST['checkbox']))
            {
                setcookie("Phone",$_REQUEST['phone'],time()+3600,"/");
                setcookie("Password",$_REQUEST['password'],time()+3600,"/");
            }
            header('location: ../view/home.php');
        }
        else{
            $Eerror="* your email and password was incorrect";
        }

    }
       /*$GetData = file_get_contents("../data/EmpJsonData.json");
       $GetPhpData = json_decode($GetData);
       foreach($GetPhpData as $data){
       if($data->phone == $_REQUEST["phone"] && $data->Password == $_REQUEST["password"]){
     $Name = $data->FirstName;
     $LName = $data->LastName;
     $Email = $data->Email;
     $Password = $data->Password;
     $DateOfBirth = $data->DateofBirth;
     $Phone = $data->phone;
     $error=0;
     break;

       }
       }

    
    if ($error==0)
    {
        $_SESSION['Name']=$Name;
        $_SESSION['LName']=$LName;
        $_SESSION['Email']=$Email;
        $_SESSION['Password']=$Password;
        $_SESSION['DOB']=$DateofBirth;
        $_SESSION['phone']=$phone;
        header("Location:../view/home.php");

    }
    else
    {
        $Eerror="Incorrect Phone or Password";
    }

    }*/

}
    
?>
 






