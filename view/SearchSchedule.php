

<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <script src="../js/myjs.js"></script>
    <table height=90 width=1500>
            <tr>
                <td width=7% align="center"><a href="../view/EmpHome.php"><img src="../resources/train2.png" width=80px height=70px></a></td>
                <td width=73%><h2><font color="#5D8896">E-ticket Platform</font></h2></td>
                
                
                <td width=10% align="right"></td>
                
                <td width=10% align="left">
                    
                      

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
               <div class="srcbox">
                <input type="text" id="train" placeholder="Search" onkeyup="loadschedules()"/>
                 <a href="#"><i class='fa fa-search'></i></a>
                 
              </div>
              <table class="srctable" height="600" align="center" width="600">
                <tr>
                  <td>
                <p id="print"></p></td>
                  </tr>
              </table>
               
               
       
        
        <?php include('../view/footer2.php'); ?>
   
    </body>
    
</html>