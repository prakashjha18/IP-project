<?php
  require_once("pages/includes/functions.php");
  require_once("pages/includes/db.php");
  $vol=getalldonors();
  // echo "<pre>";
  // print_r($vol);
  // exit;
  require_once("pages/includes/db.php");

session_start();
// echo  $_SESSION['uname'] ;


  ?>
  <table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <!-- <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td> -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    

</form>



    <td width="82" valign="top"><div align="left">Name:</div></td>
    <td width="165" valign="top"><?php echo  $_SESSION['uname'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">User ID:</div></td>
    <td valign="top"><?php echo $_SESSION['did'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">User type </div></td>
    <td valign="top"><?php echo "Donor" ?></td>
  </tr>
</table>
  
  



  
  
  
  

