<?php

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    echo "Connection error ".$conn->error;
  }

  $sql = "CREATE PROCEDURE retrieveData1() BEGIN  SELECT * FROM guest; END;";

  if($conn->query($sql)){
    $result=$conn->query("CALL retrieveData1()");
    if($result->num_rows > 0){
      while( $row = $result->fetch_assoc()){
        echo "id: ".$row['id']." First Name: ".$row['firstname']." Last Name: ".$row['lastname'].
        " Email: ".$row['email']."<br>";
      }
    }
  }
  else{
    echo "Error in execution of stored procedure :".$conn->error;
  }

  $conn->close();