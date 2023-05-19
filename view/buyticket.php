<?php include "../control/buyticketCheck.php"; ?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
       </head>
       
     <body>
     <table width=100% height=90>
            <tr>
                <td width=10% align="center"><img src="../resources/train.png" width=80px height=70px></td>
                <td width=80% align="center"><h1>E-TICKET PLATFORM</h1></td>
                
                <td width=10% align="center" width=10%></td>
               
                    <td align="center" width=10%><?php echo $Fname; ?> </td>
                            

            </tr>
        </table>
        <table width=100% height=60>
            <tr>
            
              <td class="navtable">
                 
                 <div class="container">
                 <nav>
                  <ul>
                  <li><a href="../view/home.php">Home</li>
                    <li><a href="../view/profile.php">Profile</li>
                    <li>  <a href="../view/train.php">Train Information</li>
                    <li>  <a href="../view/contact.php">Contact Us</li>
                    <li>  <a href="../view/history.php">History</li>
                    <li>  <a href="../control/logout.php">Log out</li>
                  </ul>
                </nav>
                </div>
                
             </td>
             
           </tr>
          
        </table> 
             
            
        
             </td>
             <td width=85%  bgcolor="lightgrey"> 
             <table  id="de" align='center' height=60% width=45% bgcolor="white">
                <tr>
                    <td>
             <form action="" method="post" enctype="">
                <div class="buy">
                
                  <table align='center' bgcolor="white">
                  <tr>
                   
                  </tr>
                    <tr>
                        <td id="pcus">Enter your bkash number:</td>
                    </tr>
                    <tr>
                        <td><font color="red"><?php echo $berror; ?><font></td>
                    </tr>
                    <tr>
                        <td><input type='text' name='bkashnum' value=''></td>
                    </tr>
                    <tr>
                        <td ><input type='submit' class="buttonprofile" name='bkashsubmit' value='Confirm'></td>
                    </tr>
                 
                 </table>
                 </form>
</div>

                  </td>
                 </tr>
                </table>
      
        
            </td>
        </tr>
        </table>
        
                
        <?php include("../view/footer.php"); ?>
         </body>
         </html>
