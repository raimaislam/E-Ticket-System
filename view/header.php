<html>
    <head>
        <title>Header</title>
       </head>
     <body>
        <table width=100% height=90>
            <tr>
                <td width=10% align="center"><img src="../resources/train.png" width=80px height=70px></td>
                <td width=70% align="center"><h1>E-TICKET PLATFORM</h1></td>
                
                <td width=10% align="center" width=10%>
                <?php 
                if(!empty($_SESSION['phone']))
                {
                    
                     echo $_SESSION["Name"];
                     }
                     else{
                        ?>
                        <a href="../view/Registration.php">Register 
                     
                   
                
           
                <?php
                }
                ?></td>
               
                    <td align="center" width=10%>
                    <?php 
                if(!empty($_SESSION['phone']))
                {
                    ?>
                    <a href="../control/logout.php">Log out
                    <?php
                     }
                     else{
                        ?>

                        <a href="../view/login.php">Log in
                            <?php
                            } ?>
                
                


                

            </tr>
        </table>
        <table border=1 bordercolor="lightblue" width=100% height>
        </table>
            

    
         </body>
         </html>
