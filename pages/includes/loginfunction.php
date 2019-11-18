

<?php
// echo "hello";
require_once("db.php");
require_once("functions.php");
session_start();
if(!empty($_POST["email"]))
{
    //echo "hello";
    $email=test_input($_POST['email']);
    $password=test_input($_POST['password']);

    $email=mysqli_real_escape_string($connection,$email);
    $password=mysqli_real_escape_string($connection,$password);


    $query = "SELECT * FROM users WHERE U_EMAIL = '$email' and PASSWORD = '$password'";
    $result_can = mysqli_query($connection, $query);




    // print_r($query);
    // exit;

    $select_user_details = mysqli_query($connection,$query);

//    proceed if there is data returned otherwise there would be errors

    checkQueryResult($select_user_details);
    // print_r($select_user_details);
    // exit;

    if(mysqli_num_rows($select_user_details)>1){
        die("ERROR 2");
        //not valid if same email exists for mmore than 1 account
    }

    if($row=mysqli_fetch_assoc($select_user_details)){
//        i have 1 row
        $uname=$row['UNAME'];
        $db_password = $row['PASSWORD'];
        $uid = $row['UID'];
        $role = $row['U_TYPE'];
        $phone = $row['U_PHONE'];
        $email=$row['U_EMAIL'];
//        print_r($role);

        //session variable according to role
        if($role==1)
        {
            $_SESSION['uid'] = $uid;
            $_SESSION['did'] = $uid;
            $_SESSION['vid'] = NULL;
            $_SESSION['role'] = "Donor";
            $_SESSION['nid'] = NULL;
            $_SESSION['uname'] = $uname;
            $_SESSION['phone']=$phone;
            $_SESSION['email']=$email;

            header("Location: ../../donors.php");
        }
        elseif($role==2)
        {
            $_SESSION['uid'] = $uid;
            $_SESSION['did'] = NULL;
            $_SESSION['vid'] = $uid;
            $_SESSION['nid'] = NULL;
            $_SESSION['uname'] = $uname;
            $_SESSION['phone']=$phone;
            $_SESSION['email']=$email;
            $_SESSION['role'] = "Volunteer";
            header("Location: ../../volunteers.php");
        }
        elseif($role==3){
            $_SESSION['uid'] = $uid;
            $_SESSION['did'] = NULL;
            $_SESSION['vid'] = NULL;
            $_SESSION['nid'] = $uid;
            $_SESSION['uname'] = $uname;
            $_SESSION['phone']=$phone;
            $_SESSION['email']=$email;
            $_SESSION['role']='NGO';
            //echo $_SESSION['uname'];
            header("Location: ../../ngo.php");
            //exit();
        }
        elseif($role==4){
            $_SESSION['uid'] = $uid;
            $_SESSION['did'] = NULL;
            $_SESSION['vid'] = NULL;
            $_SESSION['nid'] = NULL;
            $_SESSION['uname'] = $uname;
            $_SESSION['phone']=$phone;
            $_SESSION['email']=$email;
            header("Location: ../../header.php");
        }
    }else {
      $message = "Your E-Mail ID or Password is incorrect";
      echo "<script type = 'text/javascript'> window.location.href='../../login.php'; alert('$message');</script>";
      //header("Location: ../../login.php");
    }

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
