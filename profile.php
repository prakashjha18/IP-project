<?php
  // require_once("pages/includes/functions.php");
  require_once("pages/includes/db.php");
  require_once("pages/includes/loginfunction.php");
  $vol=getalldonors();
  // echo "<pre>";
  // print_r($vol);
  // exit;
  require_once("pages/includes/db.php");

    session_start();
    // echo  $_SESSION['uname'] ;


?>
<!DOCTYPE html>
<html>
    <body>
       <table align="center">
            <tr>
            <td width='82' valign='top'><div align='center'>Name:</div></td>
            <td width='165' valign='top'>
              <?php echo $_SESSION["uname"];?>
             </td>
          </tr>
          <tr>
            <td valign="top"><div align="center">User ID:</div></td>
            <td valign="top"> 
             <?php echo $_SESSION['uid'] ;?>
            </td>
          </tr>
          <tr>
            <td valign='top'><div align='center'>User type </div></td>
            <td valign='top'><?php echo $_SESSION['role']; ?></td>
          </tr>
          <tr>
            <td valign="top"><div align="center">User email:</div></td>
            <td valign="top"> 
            <?php echo $_SESSION['email'];?> 
            </td>
            </tr>
            <tr>
            <td valign="top"><div align="center">User phone number:</div></td>
            <td valign="top"> 
            <?php echo $_SESSION['phone'];?>
            </td>
            </tr>
            <tr>
                <td> 
                    <form action="pages/includes/logout.php">
                    <input type="submit" name="logout" value="logout">
            </table>
            </div>
        </table>
    </body>
</html>
  
  



  
  
  
  

