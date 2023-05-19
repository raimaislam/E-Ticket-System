<?php include "../control/historyCheck.php"; ?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
       </head>
     <body>
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
        
        <div class="Tbl">
        <div class="Tbltw">
        <table align='center' width=80% bgcolor="white">
                <?php
                //if($data1->num_rows>0)
              //  {
                    echo '<tr>';
                    echo '<th >Train</th><th>From</th><th>To</th><th>Date</th>';
                    echo '</tr>';
                    while($row=$data1->fetch_assoc())
                    {
                        echo '<tr>';
                        echo '<td align="center">'.$row['train'].'</td>';
                        echo '<td align="center">'.$row['fromstation'].'</td>';
                        echo '<td align="center">'.$row['tostation'].'</td>';
                        echo '<td align="center">'.$row['date'].'</td>';
                      
                        echo '</tr>';
                    }
              //  }
                ?>
                
               </table>
               </div>
               </div>

             <form method="post">
          
             <table align='center' bgcolor="white">

             
             <td  align="center"><input type="submit" class="buttondelete" name="DelHis" value="Delete History"></td>

            </tr>

          </table>

          </form>


        <?php include("../view/footer.php"); ?>
     
</body>
</html>
           