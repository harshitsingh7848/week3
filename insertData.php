<?php

  /* This code is related to insertion into a table in a database */

  $server="localhost";
  $user="root";
  $pass="";
  $databaseName="mydb";
  $port=3306;

  $conn=mysqli_connect($server,$user,$pass,$databaseName,$port);

  if(!$conn){
    die("not able to connect to the database");
  }
  /* The query for inserting into a table with the name of the columns */
  else{
    $sql = "INSERT INTO guest (firstname,lastname,email) VALUES('Mandeep','Saini','msaini@pipingrock.com'
     ) ;";
      $sql .= "INSERT INTO guest (firstname,lastname,email) VALUES('Aman','Verma','averma@pipingrock.com'
     ); ";
      $sql .= "INSERT INTO guest (firstname,lastname,email) VALUES('Amit','Sankhla','asankhla@pipingrock.com'
     ) ";

     if($conn->multi_query($sql) === TRUE){
       # gives the last insertion id from the table if id is AUTO_INCREMENT
       $last_id = $conn->insert_id; 
       echo "Content inserted into the table. Last inserted id is :" . $last_id;
     }
     else{
       echo "Error inserting data into table: " . $conn->error;
     }
  }

  $conn->close();
  