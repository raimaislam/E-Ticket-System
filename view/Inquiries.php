<?php

    // include "../control/EmpHomeCheck.php";
     include "../control/InquiriesCheck.php";
     if(isset($_GET['Vendor']))
     {

         $data2 = $mydb1->deleteVendor($conObj1,"addtrain",$_GET['Vendor'],$_GET['Code']);
         header("location: ../view/Vendors.php");
     }
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    </head>
    <body>
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
                <table border=1 align='center' height=70% width=80% bgcolor="white">
                <tr>
                    <td></td>
                </tr>
                
               </table>
               </div>
            
       
        
        <?php include('../view/footer2.php'); ?>
    </body>
    
</html>