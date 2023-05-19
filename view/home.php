<?php include "../control/homeCheck.php"; 
?>
<html>
    <head>

        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
       </head>
     <body>
     <script src="../js/Js.js"></script>
     <table  width=100% height=90>
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
             
        
        <div class="homebackground">
        
        <div class="home">
             <form action="../view/search.php" method="post" enctype="" onsubmit="return homeValidation()">
             <table align='center' height=60% width=300>
            
             <tr>
            <td id="hm"> From :</td>
            <td ><input class="homebox" id="from" type="text" name="from" value=""><p id="fromerror"></p><?php echo $Fmerror; ?></td>
            </tr>
            <tr>
            <td id="hm"> To :</td>
            <td><input class="homebox"  id="to" type="text" name="to" value=""><p id="toerror"></p></td>
            </tr>
            <tr>
            <td id="hm">Date of Journey :</td>
            <td ><input id="date" type="date" name="DoJ" value="date"><p id="dateerror"></p></td>
            </tr>
            
            <tr>
                <td>  </td>
                <td><input type="submit" class="buttonsrc" name="search" value="Search"></td>
                
              </tr>
              
              </table>
        </form>
        </div>

      
        <?php include("../view/footer.php"); ?>
        </div>
         </body>
         </html>
