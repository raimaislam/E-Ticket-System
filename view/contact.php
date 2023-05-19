<?php 
include("../control/homeCheck.php"); 
?>
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
        <table  align='center' height=60% width=400>
            <tr>
            <td id="contactnum" >For refund of unsuccessful purchases and card charging issues:</td>
</tr>
            
            <td id="contact"> BKash</td>
            <td id="contnum"> 1647 </td>
            </tr>
            <tr>
            <td id="contact"> Nagad</td>
            <td id="contnum"> 1647 </td>
            </tr>
            <tr>
            <td id="contact"> Rocket</td>
            <td id="contnum"> 1647 </td>
            </tr>
            <tr>
            <td id="contact"> Visa / Mastercard</td>
            <td id="contnum"> N/A </td>
            </tr>
              
              </table>
                 
        
                
        <?php include("../view/footer.php"); ?>
         </body>
         </html>
