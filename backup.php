<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $port = 3306;
  $database = "mydb";

  $conn = new mysqli($host,$user,$pass,$database,$port);

  if(!$conn){
    die("Could not connect : ".$conn->error);
  }

  $table_name = "guest";

  $backup_file = "./backup/employee.sql";

  $sql = "Select * INTO OUTFILE '$backup_file' FROM $table_name";

  if($conn->query($sql)){
    echo "Backup of data successfull";
  }
  else{
    echo "Some error in backing up data : " .$conn->error;
  }

  $conn->close();