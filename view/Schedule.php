<?php

    // include "../control/EmpHomeCheck.php";
     include "../control/ScheduleCheck.php";
     if(isset($_GET['train']))
     {

         $data2 = $mydb1->deleteSchedules($conObj1,"schedule",$_GET['train']);
         header("location: ../view/Schedule.php");
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
                
                
                <td width=10% align="right"><img class="dp" src="<?php echo $file; ?>" width=50px height=50px></td>
                
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
                    echo '<tr>';
                    echo '<th >Train</th><th>Date</th><th>Time</th><th>From</th><th>To</th><th>Seats</th><th>Ticket Price</th><th></th>';
                    echo '</tr>';
                    while($row=$data1->fetch_assoc())
                    {
                        echo '<tr>';
                        echo '<td align="center">'.$row['train'].'</td>';
                        echo '<td align="center">'.$row['date'].'</td>';
                        echo '<td align="center">'.$row['time'].'</td>';
                        echo '<td align="center">'.$row['fromstation'].'</td>';
                        echo '<td align="center">'.$row['tostation'].'</td>';
                        echo '<td align="center">'.$row['seats'].'</td>';
                        echo '<td align="center">'.$row['price'].'</td>';
                        echo '<td class="scdeltd" align="center"><a href="Schedule.php?train='.$row['train'].'">Delete</a></td>';
                        echo '</tr>';
                    }
              //  }
                ?>
                
               </table>
               <table align="center">
               <tr>
                    <td class="editsc" align="center"><a href="../view/EditSchedule.php">Edit Schedules</a></td>
                    <td class="editsc2" align="center"><a href="../view/SearchSchedule.php">Search Schedules</a></td>
                </tr>
               </table>
                </div>
               </div>
            
       
        
        <?php include('../view/footer2.php'); ?>
    </body>
    
</html>