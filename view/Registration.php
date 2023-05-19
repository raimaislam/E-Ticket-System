<?php include("../control/Regvalid.php"); ?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
  
       </head>
     <body>
     <script src="../js/Js.js"></script>
     <table width=100% height=90>
            <tr>
                <td width=10% align="center"><img src="../resources/train.png" width=80px height=70px></td>
                <td width=70% align="center"><h1>E-TICKET PLATFORM</h1></td>
                
                <td width=10% align="center" width=10%><a class="signbutton" href="login.php">Login</a></td>

           </tr>
           
        </table>

     
       
        
        <form action="" method="post" enctype="multipart/form-data"  onsubmit="return RegValid()">
        <div class="regbackground">
        <div class="reg">
        <table  align="center"  height=60%>
            <tr>
            <td id="pcus"> First Name :</td>
            <td><input type="text" id="fname" name="fname" value=""><?php echo $Fnerror; ?><p id="fnerror"></p></td>
            </tr>
            <tr>
            <td id="pcus"> Last Name :</td>
            <td><input type="text" id="lname" name="lname" value=""><?php echo $Lnerror; ?><p id="lnerror"></p></td>
            </tr>
            <tr>
            <td id="pcus"> Phone :</td>
            <td><input type="number" id="phone" name="phone" value=""><?php echo $Pherror; ?><p id="perror"></p></td>
            </tr>
            <tr>
            <td id="pcus">Date of Birth :</td>
            <td><input type="date" id="dob" name="DoB" value="date"><?php echo $Derror; ?><p id="derror"></p></td>
            </tr>
            <tr>
            <td id="pcus"> Email :</td>
            <td><input type="email" id="email" name="email" value=""><?php echo $Emerror; ?><p id="emerror"></p></td>
            </tr>
            <tr>
            <td id="pcus"> Password :</td>
            <td><input type="password" id="password" name="password" value=""><?php echo $Passerror; ?><p id="passerror"></p></td>
            </tr>
            <tr>
            <td id="pcus"> Confirm Password :</td>
            <td><input type="password" id="Cpassword" name="Cpassword" value=""></td>
            </tr>
             <tr>
                <td>  </td>
                <td><input type="submit" class="buttonprofile" name="signup" value="Sign up">
               
            </tr>

           

            
            </form>
           </div>
            </td>
        </tr>
        </table>
</div>
         </body>
         </html>

