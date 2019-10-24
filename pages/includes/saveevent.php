<?php
require_once("db.php");
session_start();
// header('Access-Control-Allow-Origin: *');
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
	$nid=$_SESSION['nid'];
    $etitle=$_POST['etitle'];
    $location=$_POST['location'];
    $desc=$_POST['desc'];
    $req_reg=$_POST['req_reg'];
    // $nid=1;
    //   $etitle="JGS";
    //   $location="JDGDFFFFF";
    //   $desc="JGDSJ";
    //   $req_reg=4;
      $query = "INSERT INTO ngoevents (NID, E_TITLE, E_DESCRIPTION, location, REQ_REGISTERED,REGISTERED,STATUS_N) VALUES ($nid,'$etitle','$desc','$location',$req_reg,0,2)";
      $resultset = mysqli_query($connection,$query);

      // $query->execute();
      mysqli_close($connection);

	//$res=addngoevent($nid,$etitle,$desc,$location,$req_reg);
	if($resultset!=0)
	{
		$result["done"] = true;
    	$result["success"]=true;
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
