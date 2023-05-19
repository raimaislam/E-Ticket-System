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
        <div class="Tbl">
        <div class="Tbltw">
                  <table align='center' height=60% width=45% bgcolor="white">

                       
          
             <?php
             if($error==0)
             {
               
             if($data1->num_rows>0)
             {
                echo '<tr height="10%"><th>Train</th><th>From</th><th>To</th><th>Date</th><th>Time</th><th>Seats Available</th><th></th>
                </tr>';
                 while($row=$data1->fetch_assoc())
                 {
                     echo "<tr>";
                     echo "<td align='center'>".$row['train']."</td>";
                     echo "<td align='center'>".$row['fromstation']."</td>";
                     echo "<td align='center'>".$row['tostation']."</td>";
                     echo "<td align='center'>".$row['date']."</td>";
                     echo "<td align='center'>".$row['time']."</td>";
                     echo "<td align='center'>".$row['seats']-$row['booked']."</td>";
                     echo "<td align='center'><a href='../view/buyticket.php?train=".$row['train']."&from=".$row['fromstation']."&to=".$row['tostation']."&date=".$row['date']."'>Select</td>";
                     echo "</tr>";
                     
                 }
             }
             else
             {
                echo '<tr><td align="center"><label id="notrain">No train available</label></td></tr>';
             }
            
            }
             


            ?>
            
           
        </table>
          </div>
          </div>
        </form>
            </td>
        </tr>
        </table>
        
                
        <?php include("../view/footer.php"); ?>
         </body>
         </html>
