<?php
include("../model/mydb.php");
session_start();
if(!empty($_SESSION['email']))
{
    header('location: ../view/EmpHome.php');
}
$errormsg="";
$error=1;

if(isset($_REQUEST['login']))
{
    $logerror=0;
    if(empty($_REQUEST['email']) || empty($_REQUEST['password'])){
         $errormsg= "*please insert your email and password";
    }
    else{
        $mydb = new MyDB();
        $conObj = $mydb->openCon();
        $result = $mydb->checkUser($conObj,'emp',$_REQUEST['email'],$_REQUEST['password']);
        if($result->num_rows>0)
        {
            $_SESSION['email']=$_REQUEST['email'];
            $_SESSION['password']=$_REQUEST['password'];
            if(isset($_REQUEST['remember']))
            {
                setcookie("email",$_REQUEST['email'],time()+3600,"/");
                setcookie("password",$_REQUEST['password'],time()+84600,"/");

            }
            header('location: ../view/EmpHome.php');
        }
        else{
            $errormsg= "* your email and password was incorrect";
        }

        /*$filedata=json_decode(file_get_contents('../data/EmpJsonData.json'));
        foreach($filedata as $data){
            if($data->email==$_REQUEST['email'] && $data->password==$_REQUEST['password'])
            {
                $Ename=$data->username;
                $Email=$data->email;
                $Address=$data->address;
                $Phone=$data->phone;
                $Gender=$data->gender;
                $DoB=$data->DoB;
                $file=$data->file;

                $error=0;
                break;*/
            }
           
      /*  }
        if($error==0){
            $_SESSION['name']=$Ename;
            $_SESSION['email']=$Email;
            $_SESSION['DoB']=$DoB;
            $_SESSION['address']=$Address;
            $_SESSION['phone']=$Phone;
            $_SESSION['gender']=$Gender;
            $_SESSION['file']=$file;
            header("Location: EmpHome.php");
        }
        else{
            $errormsg="*your email and password was incorrect";
        }*/
    
        

   

}
?>