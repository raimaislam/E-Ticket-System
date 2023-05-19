<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <table height=90 width=1500>
            <tr>
                <td width=7% align="center"><img src="../resources/train2.png" width=80px height=70px></td>
                <td width=53%><h2><font color="#5D8896">E-ticket Platform</font></h2></td>
                
                <?php
                   if(!empty($_SESSION['name']))
                   {
                ?>
                <td width=10% align="right"> <img class="dp" src="../resources/user.png" width=50px height=50px></td>
                <?php
                   }
                   ?>
                <td width=20% align="left">
                    <?php
                        if(!empty($_SESSION['name']))
                        {
                           echo $_SESSION['name']; 
                        
                        }
                        else{
                            ?>
                            
                            <a href="EmpReg.php">Employee Register</a>
                            |
                             <a href="Registration.php">Customer Register</a>
                    
                       <?php
                        } 
                     ?>
                      

                </td>
            </tr>
        </table>
        <table border=1 height width=1500 bordercolor="lightblue">
            <tr>
                <td align='middle'></td>
           </tr>

        </table>
        
       
    </body>
    
</html>