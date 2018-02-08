<?php

  /* This code is related to creation of a table in a database */

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    die("not able to connect to the database");
  }
  /* The query for creating a table with the name of the columns */
  else{
    $sql="CREATE TABLE guest (id int AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    firstname varchar(30) not null,lastname varchar(30) not null,email varchar(50) NOT NULL
     ) ";

     if($conn->query($sql) === TRUE){
       echo "Table created";
     }
     else{
       echo "Error creating table: " . $conn->error;
     }
  }

  $conn->close();
  