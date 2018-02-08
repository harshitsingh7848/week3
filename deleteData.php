<?php

  /* This code is for deleting the data from the  database*/

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    die("not able to connect to the database");
  }
  /* The query for deleting records */
  else{
    $sql = "Delete from guest where id=5";

    if($conn->query($sql)){
      echo "Record deleted successfully";
    }
    else{
      echo "Error in deleting record ".$conn->error;
    }
  }
  $conn->close();
  