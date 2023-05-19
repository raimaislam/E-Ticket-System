<?php include "../control/profileCheck.php"; ?>
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
       
        <table  width=100% height=60>
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

             <td width=85%  bgcolor="lightgrey"> 
               <form action="" method="post" enctype="multipart/form-data">
               <div class="profilebackground">
                <div class= "profile">
                  <table align='center' height=60% width=350>
                   
                  <tr>
            <td> <label>First Name :</label></td>
            <td><input class="profbox" type="text" name="fname" value="<?php echo $Fname; ?>"></td>
            </tr>
            <tr>
            <td> <label>Last Name :<label></td>
            <td><input class="profbox" type="text" name="lname" value="<?php echo $Lname; ?>"></td>
            </tr>
            <tr>
            <td width="100"><label>Date of Birth:<label></td>
            <td><input type="date" name="DoB" value="<?php echo $Dob; ?>"></td>
            </tr>
            <tr>
            <td> <label>Email :<label></td>
            <td><input class="profbox" type="email" name="email" value="<?php echo $Email; ?>"></td>
            </tr>
            <tr>
            <td><label> Password :<label></td>
            <td><input class="profbox" type="password" name="password" value="<?php echo $Password; ?>"></td>
            </tr>
            <tr>
            <tr>
            <td> </td>
            <td align="center"> <input type="submit" class="buttonprofile" name="update" value="Update"> </td>
                              
                         
             </tr>
                       

                  </table>
               </form>
               </div>
             </td>
              </tr>
        </table>
        <?php include('../view/footer.php'); ?>
        </div>
    </body>

</html>
        
            