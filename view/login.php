<?php include("../control/loginvalid.php"); ?>

<html>
    <head>
   
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

       </head>
       
     <body>
     <script src="../js/Js.js"></script>
     
     <table  width=100% height=90 >
    
            <tr>
             <td width=10% ></td>
                <td width=70% align="center"><h1>E-TICKET PLATFORM</h1></td>
                <td width=10% align="center" width=10%><a class="signbutton" href="Registration.php">Sign Up</a></td>
             
           </tr>
          
</table>

        
         
        <div class="loginbackground">
        <div class="loginform">
            
            <table  align="center" height= 15% >
             
           
            <tr>
            
            <td align="center"><img src="../resources/train.png" width=80px height=70px></td>
           </tr>
</table>
<table>
           <tr>
                <td><?php echo $Eerror;  ?> </td>
            </tr>
</table>
           <form action="" method="post" enctype="" onsubmit="return LoginValid()">
           <table height="20%">
            <tr class="logtr">
            <td id="pcus"> Phone :</td>
            <td><input type="number" id="phone" name="phone" value="<?php if(isset($_COOKIE['Phone'])) { echo $_COOKIE["Phone"]; } ?>"><?php echo $Pherror; ?><p id="perror"></p></td>
            </tr>
           
            <tr class="logtr2">
            <td id="pcus">Password :</td>
            <td><input type="password" id="password" name="password" value="<?php if(isset($_COOKIE['Password'])) { echo $_COOKIE["Password"]; } ?>"><?php echo "<br>".$Passerror; ?><p id="passerror"></p></td>
            </tr>
            <td><input class="me" type="checkbox" name="checkbox" value="">Remember me</td>
            </tr>
             <tr>
             <td> </td>
                <td><input type="submit" class="button" name="signup" value="Log in">
               

            </tr>
</table>
            </form>
           </div>
            </table>
           


</table>
           
</div>
         </body>
       
      
         </html>