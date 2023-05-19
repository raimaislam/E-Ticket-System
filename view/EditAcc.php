<?php

    // include "../control/EmpHomeCheck.php";
     include "../control/EditAccCheck.php";
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    </head>
    <body>
    <script src="../js/myjs.js"></script>
    <table height=90 width=1500>
            <tr>
                <td width=7% align="center"><a href="../view/EmpHome.php"><img src="../resources/train2.png" width=80px height=70px></a></td>
                <td width=73%><h2><font color="#5D8896">E-ticket Platform</font></h2></td>
                
                
                <td width=10% align="right"> <img class="dp" src="<?php echo $file; ?>" width=50px height=50px></td>
                
                <td width=10% align="left">
                    <?php
                        
                           echo $name;
                        
                        ?>
                      

                </td>
            </tr>
        </table>
        <table width=100% height=60>
            <tr>
            
              <td class="navtable">
                 
                 <div class="container">
                 <nav>
                  <ul>
                    <li><a href="../view/Reservations.php">Reservation List</li>
                    <li>  <a href="../view/Schedule.php">Manage schedules</li>

                    <li>  <a href="../view/Vendors.php">Vendors</li>
                    <li>  <a href="../view/Inquiries.php">Inquiries</li>
                    <li> <a href="../view/EditAcc.php">Account</li>
                    <li>  <a href="../control/logout2.php">Log out</li>
                  </ul>
                </nav>
                </div>
                
             </td>
             
           </tr>
          
        </table>
        <div class="mainTable">
               <form action="" method="post" enctype="multipart/form-data" onsubmit="return accValidation()">
                  <table align='center' width=80%>
                    <tr>
                         <td><img class="dp1" src="<?php echo $file; ?>" width=100px height=100px></td>
                    </tr>
                    <tr>
                         <td><input type="file" id="empnid" name="file" value=""> <p id="niderror"></p></td>
                    </tr>
                  </table>
                  <table align='center' width=80%>
                       <tr>
                         <td width=10%><div class="accbox">Username : </td>
                         <td> <div class="accbox"><input type="text" id="empname"  name="name" value="<?php echo $name; ?>"></div><p id="nameerror"></p></td>
                              
                         
                       </tr>
                       <tr>
                         <td><div class="accbox">Phone : </td>
                         <td> <div class="accbox"><input type="number" id="empphone" name="phone" value="<?php echo $phone; ?>"></div><p id="phoneerror"></p></td>
                              
                         
                       </tr>
                    
                       <tr>
                         <td><div class="accbox">Address : </td></div>
                         <td><div class="accbox"> <input type="text" id="empaddress" name="address" value="<?php echo $address; ?>"></div><p id="addresserror"></p></td>
                              
                         
                       </tr>
                       <tr>
                         <td><div class="accbox">Gender :</div> </td>
                         <td>  <input type="radio" name="gender" value="male" <?php if($gender=='male'){
                              echo 'checked';
                              }?>
                               >Male
                               <input type="radio" name="gender" value="female" <?php if($gender=='female'){
                              echo 'checked';
                              }?>>Female
                               <input type="radio" name="gender" value="others" <?php if($gender=='others'){
                              echo 'checked';
                              }?>>Others
                              
                              </td>
                              
                              
                         
                       </tr>
                       <tr>
                         <td><div class="accbox">Date of Birth : </td>
                         <td> <input type="date" id="empdob" name="dob" value="<?php echo $dob; ?>"></div><p id="doberror"></p></td>
                              
                         
                       </tr>
                       <tr>
                         <td><div class="accbox">New Password : </td>
                         <td> <div class="accbox"><input type="password" id="emppass" name="password" value="<?php echo $password; ?>"></div><p id="passerror"></p></td>
                              
                         
                       </tr>
                       <tr>
                         <td> </td>
                         <td> <input class="accupdate" type="submit" name="update" value="Update"> </td>
                              
                         
                       </tr>
                       
                      

                  </table>
               </form>
                            </div>
             
       
        
        <?php include('../view/footer2.php'); ?>
    </body>
    
</html>