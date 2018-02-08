<?php

  /* This code is related to prepared statements */

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    die("not able to connect to the database");
  }
  /* The query for making prepared statements */
  else{
    $stmt = $conn->prepare("INSERT INTO 
    guest (firstname,lastname,email) values (?,?,?)");

    # telling sql the data Types it saves it from Sql injections
    $stmt->bind_param("sss",$fname,$lname,$email); 

    $fname = 'Vipul';
    $lname = 'Gupta';
    $email = 'vgupta@gmail.com';

    $stmt->execute();

    $stmt->close();
  }
  $conn->close();
  