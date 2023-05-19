<?php
include('../model/mydb.php');
      $Nerror="";
      $Eerror="";
      $Perror="";
      $Aderror="";
      $Gerror="";
      $Derror="";
      $NIDerror="";
      $Passerror="";
      if(isset($_REQUEST['signup']))
      {
      $error=0;
      $Ename=$_REQUEST["name"];
      $email=$_REQUEST["email"];
      $phone=$_REQUEST["phone"];
      $address=$_REQUEST["address"];
 
      
     $mydb1 = new MyDB();
     $conObj1 = $mydb1->openCon();
     $res1 = $mydb1->getUserName($conObj1,'emp',$_REQUEST['name']);
     $mydb2 = new MyDB();
     $conObj2 = $mydb2->openCon();
     $res2 = $mydb2->getUserEmail($conObj2,'emp',$_REQUEST['email']);
      if(empty($Ename)){
          $Nerror= "  *This field is required";
          $error=1;
      }
      else if(is_numeric($Ename)) 
        {
          $Nerror= "  *your name can not contain numbers";
          $error=1;
        }
        else if(is_numeric($Ename[0]))
        {
            $Nerror="* you name can not start with numbers";
            $error=1;
        }
        else if($res1->num_rows>0)
        {
            $Nerror="* this name is already taken";
            $error=1;
        }

      
      
    if(empty($phone)){
        $Perror = " *This field is required";
        $error=1;
    }
    else if(!is_numeric($phone))
    {
        $Perror = " *Number should be formatted correctly";
        $error=1;
    }
    else if(strlen($phone)>11 || strlen($phone)<11)
    {
        $Perror = " *Please insert correct phone number";
        $error=1;
    }
    
    if(empty($email)){
        $Eerror = "  *This field is required";
        $error=1;
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $Eerror = "  *Email format was not correct";
        $error=1;
        
    }
    
    /*else{ 
        $emailData=explode('@',$email);
        $emailChk=current($emailData);
        if(!preg_match('@[a-zA-Z]@',$emailChk))
        {
            $Eerror = "  *your Email should contain alteast one character";
            $error=1;
        }
        
     }*/
 
     else if($res2->num_rows>0)
     {
         $Eerror="* this email is already taken";
         $error=1;
     }

    
    if(empty($address)){
        $Aderror = "*This field is required";
        $error=1;
    }

    if(isset($_REQUEST["gender"]))
    {
        $gender=$_REQUEST["gender"];
    }
    else{
        $Gerror = "*please choose an option";
        $error=1;
    }

    if(empty($_REQUEST["DoB"]))
    {
        $Derror = "*This field is required";
        $error=1;
        
    }
    else{
        $DoB=$_REQUEST["DoB"];
    }
    

    $password=$_REQUEST["password"];
    $Cpassword=$_REQUEST["Cpassword"];
    if(empty($password) || empty($Cpassword))
    {
        $Passerror = "*Your passwords fields were empty";
        $error=1;

    }
    else{
        if(strlen($password)<8 || !preg_match('@[A-Z]@',$password) || !preg_match('@[a-z]@',$password) || !preg_match('@[0-9]@',$password) || !preg_match('@[^\w]@',$password)) 
        {
            $Passerror = "*Your password should have atleast 8 characters, should contain atleast one uppercase letter,one number and one special character";
            $error=1;
        }
        else if($password!=$Cpassword)
        {
            $Passerror = "*Your passwords didn't matched";
            $error=1;
        }
    }
    if(empty($_FILES['myfile']['name']))
    {
        $NIDerror = "*please insert a pic of your nid";
        $error=1;
    }
    else if($_FILES['myfile']['type']!='image/png' && $_FILES['myfile']['type']!='image/jpg' && $_FILES['myfile']['type']!='image/jpeg')
    {
        $NIDerror = "*please insert a picture of correct format(png,jpg,jpeg)";
        $error=1;
    }
    else{
        move_uploaded_file($_FILES['myfile']['tmp_name'],'../resources/'.$email.'.jpg');
    }
    if($error==0)
    {
        $mydb= new MyDB();
        $conObj = $mydb->openCon();
        $result = $mydb->insertData($conObj,"emp",$Ename,$phone,$email,$address,$password,$gender,$DoB,'../resources/user.png');
        if($result===TRUE)
        {
           header("location: ../view/EmpLogin.php");

        }
        else{
            echo "error".$conObj->error;
        }
 /*       $EmpData=json_decode(file_get_contents('../data/EmpJsonData.json'));
        

        $NewData=array(
            "username"=>$Ename,
            "email"=>$email,
            "DoB"=>$DoB,
            "gender"=>$gender,
            "phone"=>$phone,
            "password"=>$password,
            "address"=>$address,
            "file"=>'../resources/'.$Ename.'.jpg',
        );
        $EmpData[]=$NewData;
        $EmpJsonData=json_encode($EmpData,JSON_PRETTY_PRINT);
       file_put_contents('../data/EmpJsonData.json',$EmpJsonData);*/
     //  header("location:../view/EmpLogin.php");

    }

        



}
    
?>