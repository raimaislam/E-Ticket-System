<?php
     include "../control/EmploginCheck.php"
?>
<html>
    <head>
        <title>Sign in</title>
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
      
         <section class="loginbg">
         <div class="wrapper">
                <h2>Login</h2>
        <form action="" method="post" enctype="" onsubmit="return logValidation()">
            <table width=100%>
                
                <tr>
                    <td><font color="red"><?php echo $errormsg; ?><p id="error"></p></font> </td>
                </tr>
                
                <tr>
                    <td><div class="inputbox"><input type="email" id="lemail" size="50" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"><span></span><label><i class="fa fa-envelope"></i>Email</label></div></td>
                </tr>
      
             
                <tr>
                    <td><div class="inputbox"><input type="password" id="lpass" size="50" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><span></span><label><i class="fa fa-key"></i>Password</label></div></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="remember" value="remember">Remember me</td>
                </tr>
                <tr>
                <td align="left"><input class="loginbutton" type="submit" name="login" value="Log in"></td>
                    <td></td>
                    
                    
                </tr>


</table>
<div class="loginregister">
    <p> Don't have an account?
<a href="EmpReg.php">Create an account</a></p>
</div>
</form>
</div>

</section>

        

<div class="loginfooter">
        
        <table height=150 width=100%>
            <tr>
                <td align="center"> 
                    <img src="../resources/bkash.png" width=50px>
                    <img src="../resources/nagad-32.png">
                    <img src="../resources/master-card.png">
                    <img src="../resources/visa.png">
                </td>
            </tr> 

        </table>
        <table height=150 width=100% bgcolor="#404040">
            <tr>
                <td width=30%><font color="white"> <h4>Head Office,</h4>
                    Balaka, Kurmitola,<br>
                  Dhaka-1229, Bangladesh.<br>
                  +880-21-31224
                  </font>
                    
                </td>
                <td width=40%>
                   <font color="white"> <h4>Links</h4>
                    News & Announcements<br>
                    Contacts<br>
                    Feedback<br>
                    Online Travel Policy<br>
                    Booking Policy
                   </font>
                </td>
                <td width=30% align="center"><font color="white">Terms & Conditions | Privacy policy | FAQs</font>
                </td>
            </tr> 

        </table>
        <table height=40 width=100% bgcolor="#101010">
            <tr>
                <td align="center"> 
                    <img src="../resources/facebook.png" width=20px height=20px>
                    <img src="../resources/insta5.png" width=20px height=20px>
                    <img src="../resources/twitter.png" width=20px height=20px>
                    <img src="../resources/you2.jpg" width=20px height=20px>
                    <img src="../resources/link.png" width=20px height=20px>
                </td>
            </tr> 

        </table>
       </div>

    </body>
    
</html>