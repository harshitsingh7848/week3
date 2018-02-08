<?php

  /* This code is for retreiving the data from the  database*/

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    die("not able to connect to the database");
  }
  /* The query for selecting records */
  else{

    /* limit keyword is used to limit the data we require and 
    OFFSET tell after which point to display */
    $sql = "Select * from guest LIMIT 4 OFFSET 2";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while( $row = $result->fetch_assoc()){
        echo "id: ".$row['id']." First Name: ".$row['firstname']." Last Name: ".$row['lastname'].
        " Email: ".$row['email']."<br>";
      }
    }
    else{
      echo "No results";
    }

    # update Data
    $query = "Update guest set lastname = 'Vohra' where id=3";

    if($conn->query($query)){
      echo "Table updated <br>" ." New Table after changes is <br>";
      
      $sql = "Select * from guest";
      
      $result = $conn->query($sql);
      
      if($result->num_rows > 0){
      while( $row = $result->fetch_assoc()){
        echo "id: ".$row['id']." First Name: ".$row['firstname']." Last Name: ".$row['lastname'].
        " Email: ".$row['email']."<br>";
      }
      echo $conn->host_info;
    }
    else{
      echo "No results";
    }
      
    }
    else{
      echo "Error in updation : ".$conn->error;
    }
    
  }
  $conn->close();
  