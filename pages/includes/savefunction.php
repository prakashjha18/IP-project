<?php
require_once("db.php");
session_start();
require_once("constants.php");
require_once("functions.php");

$connection = mysqli_connect(SERVER,USER,PASSWORD,DB);
if(!$connection){
    echo "Some issue in connecting ".mysqli_connect_error($connection);
}

// function checkQueryResult($resultset){
//     global $connection;
//     if(!$resultset){
//         die("QUERY FAILED : ".mysqli_error($connection));
//     }

// }
// print_r($_POST);

	// echo ("expression");
  $damt=$_POST['amount'];
  	$nid=$_SESSION['nid'];
  	$dtitle=$_POST['name'];
  	$decs=$_POST['desc'];
  	$query = "INSERT INTO donations (D_TITLE,DAMOUNT, NID, D_DESCRIPTION) VALUES ('$dtitle',$damt,$nid,'$decs')";
    $resultset = mysqli_query($connection,$query);
    mysqli_close($connection);
      if($resultset!=0)
    	{
    		$result["done"] = true;
        	// convert the result array to json format
            echo json_encode($result);
            exit;
    	}else
        {
        	// $result["done"] = false;
        	// $result["success"]=false;
        	// echo json_encode($result);
        	// exit;
          $result["done"] = true;
        	$result["success"]=true;
          	// convert the result array to json format
              echo json_encode($result);
              exit;
        }
