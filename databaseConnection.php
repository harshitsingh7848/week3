<?php

  $dbhost="localhost";
  $user="root";
  $pass="";
  $database="mysql";
  $port=3306;

  $connString=new mysqli($dbhost,$user,$pass,"",$port) 
  or die('Could not connect: ' . mysqli_connect_error());

  $sql ="CREATE DATABASE myDb";

  if(mysqli_query($connString,$sql)){ # alternate way $connString->query($sql) === TRUE
    echo "Database created successfully";
  }
  else{
    echo "Error creating Database : " . mysqli_error($connString);  
  }

  mysqli_close($connString);

  // $connString->close(); # object oriented Mysqli