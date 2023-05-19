<?php
     include "../control/EmpRegCheck.php";
 
?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <script src="../js/myjs.js"></script>
    <table height=90 width=1500>
            <tr>
                <td width=7% align="center"><img src="../resources/train2.png" width=80px height=70px></td>
                <td width=73%><h2><font color="#5D8896">E-ticket Platform</font></h2></td>
               
            </tr>
        </table>
      
        
       <div class="wrapperreg">
        <table height=700 width=1500>
            <tr>
                <td align="center" width=40%>

        <h1 align="center">JOIN US</h1>
        <h5>Book tickets,save your searches and plan trips<br>
        unlock promotions and other discounts and enjoy other benefits</h5>
</td>
</div>

<td align="center">
       <div class="wrapperreg2">
        <h2>Register</h2>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return regValidation()">
    
            <table width=100%>
                
                
                <tr>
                    <td width=100%><div class="reginput"><i class="fa fa-user"></i><input type="text" id="empname" size="50" name="name" value="" placeholder="User name"></div><font color="red"><?php echo $Nerror; ?><p id="nameerror"></p></font></td>
                </tr>
                <tr>
                    <td><div class="reginput"><i class="fa fa-phone"></i><input type="text" id="empphone" size="50" name="phone" value="" placeholder="Phone number"> </div><font color="red"><?php echo $Perror; ?><p id="phoneerror"></p></font></td>
                </tr>
                <tr>
                    <td><div class="reginput"><i class="fa fa-envelope"></i><input type="email" id="empemail" size="50" name="email" value="" placeholder="Email"><font color="red"></div> <?php echo $Eerror; ?><p id="emailerror"></p></font></td>
                </tr>
                <tr>
                    <td><div class="reginput"><i class="fa fa-address-card"></i><input type="text" id="empaddress" size="50" name="address" value="" placeholder="Address"> </div><font color="red"><?php echo $Aderror; ?><p id="addresserror"></p></font></td>
                </tr>
            </table>
            <table align="left" width="90%">
                <tr>
                    <td><div class="reginput"><i class="fa fa-key"></i><input type="password" id="emppass" size="50" name="password" value="" placeholder="Password"></div> <font color="red"><?php echo $Passerror; ?><p id="passerror"></p></font></td>
                </tr>
                <tr>
                    <td><div class="reginput"><i class="fa fa-key"></i><input type="password" id="empcpass" size="50" name="Cpassword" value="" placeholder="Confirm Password"></div></td>
                </tr>
                </table>
            <table width=80%% align="left">
                <tr>
                   <td width="45%"><div class="reginput2"> Gender :</td></div>
                    <td width="60%">
                  <input type="radio" id="empgender" name="gender" value="male">Male
                      <input type="radio" id="empgender" name="gender" value="female">Female
                    <input type="radio" id="empgender" name="gender" value="others">Others
                        <font color="red"> <?php echo $Gerror; ?><p id="gendererror"></p></font>
                    </td>
              
                </tr>
                 
                <tr>   
                    <td><div class="reginput2"> Date of Birth :</td></div>
                    <td><div class="reginput2"> <input type="date" id="empdob" name="DoB" value="date"></div><font color="red"> <?php echo $Derror; ?><p id="doberror"></p></font></td>
                   
                </tr>
              
                <tr> 
                    <td><div class="reginput2"> Photo of NID :</td>
                    <td><div class="reginput2"> <input type="file" id="empnid" name="myfile" value=""></div> <font color="red"><?php echo $NIDerror; ?><p id="niderror"></p></font></td>
                     
                </tr>
            </table>
            
                <table width="100%">
                <tr>
                    <td></td>
                    <td align="center"><input class="loginbutton" type="submit" name="signup" value="sign up"></td>
                </tr>
                </table>

                
            

                <div class="loginregister"><p>Already have an account?<a href="EmpLogin.php">Sign in</a></p></div>
        </form>
</div>
</td>
</tr>
        
</table>
<?php include('../view/footer2.php'); ?>
    </body>
    
</html>