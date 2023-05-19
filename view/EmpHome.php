<?php

     include "../control/EmpHomeCheck.php";
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
        <div class="mainTable2">
                  <table align='center' width=80% bgcolor="white">
                  <?php
                //if($data1->num_rows>0)
              //  {
                    echo '<tr height="10%">';
                    echo '<th>Phone</th><th>Train</th><th>From</th><th>To</th><th>Date</th><th>Payment</th>';
                    echo '</tr>';
                    while($row=$data1->fetch_assoc())
                    {
                        echo '<tr>';
                        echo '<td align="center">'.$row['phone'].'</td>';
                        echo '<td align="center">'.$row['train'].'</td>';
                        echo '<td align="center">'.$row['fromstation'].'</td>';
                        echo '<td align="center">'.$row['tostation'].'</td>';
                        echo '<td align="center">'.$row['date'].'</td>';
                        echo '<td align="center">'.$row['payment'].'</td>';
                     
                        echo '</tr>';
                    }
              //  }
                ?>
                
                     
                  </table>
                  <form method="post">
                  <table align='center' bgcolor="white">
                  <tr class="delrestr">
                    <td class="delres" align="center"><input type="submit" name="DelHis" value="Delete all reservations"></td>
                </tr>
                </table>
                </form>  </div> </div>
            
       
        
        <?php include('../view/footer2.php'); ?>
    </body>
    
</html>