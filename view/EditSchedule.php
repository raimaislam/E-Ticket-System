<?php

  // include "../control/EmpHomeCheck.php";
    include "../control/EditScheduleCheck.php";
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
        <div class="editbg">
        <div class="mainTable">
          
          <div class="sec">
          <h1 class="editschedule">Schedule</h1>
          <div class="top">
      <form action="" method="post" enctype="multipart/form-data" onsubmit="return SchValidation()">
             
                <table align='center' height=70% width=80% bgcolor="white">
                  
              
                
                      <tr>
                        <td width=10%>Train : </td>
                        <td > <input type="text" id="trainname" name="Tname" value=""><font color="red"><?php echo $Terr; ?><p id="trainerror"></p></td>
                            
                        
                      </tr>
                      <tr>
                        <td width=10%>Date : </td>
                        <td> <input type="date" id="traindate" name="Tdate" value=""><font color="red"><?php echo $Derr; ?><p id="dateerror"></p></td>
                            
                        
                      </tr>
                  
                      <tr>
                        <td width=10%>Time : </td>
                        <td> <select id="traintime" name="Ttime">
                           <option id="traintime" value=""></option>
                          <option id="traintime" value="8:00am">8:00am</option>
                          <option id="traintime" value="10:00am">10:00am</option>
                          <option id="traintime" value="12:00pm">12:00pm</option>
                          <option id="traintime" value="2:00pm">2:00pm</option>
                          <option id="traintime" value="4:00pm">4:00pm</option>
                          <option id="traintime" value="7:00pm">7:00pm</option>
                          <option id="traintime" value="11:00pm">11:00pm</option>
                          
                            </select>
                            <font color="red"><?php echo $Tierr; ?><p id="timeerror"></p>
                        </td>
                            
                        
                      </tr>
                      
                      <tr>
                        <td width=10%>From : </td>
                        <td> <input type="text" id="trainfrom" name="from" value=""><font color="red"><?php echo $Ferr; ?><p id="fromerror"></p></td>
                            
                        
                      </tr>
                      <tr>
                        <td width=10%>To : </td>
                        <td> <input type="text" id="trainto" name="to" value=""><font color="red"><?php echo $Toerr; ?><p id="toerror"></p></td>
                            
                        
                      </tr>
                      <tr>
                        <td width=10%>Seats : </td>
                        <td> <input type="number" id="trainseats" name="seats" value=""><font color="red"><?php echo $Serr; ?><p id="seatserror"></p></td>
                            
                        
                      </tr>
                      <tr>
                        <td width=10%>Ticket Price : </td>
                        <td> <input type="number" id="ticketprice" name="price" value=""><font color="red"><?php echo $Perr; ?><p id="priceerror"></p></td>
                            
                        
                      </tr>
                    
                      <tr>
                        <td width=10%></td>
                        <td width=90% align="left"> <input class="editbtn" type="submit" name="Supdate" value="Update">
                        <input class="editbtn"  type="submit" name="Sadd" value="Add">  </td>
                        
                      
                            
                        
                      </tr>
                     
                      
                    

                </table>
                
              </form></div>
</div>
</div>
              </div>
            
            
      
      
       <?php include('../view/footer2.php'); ?>
  </body>
  
</html>