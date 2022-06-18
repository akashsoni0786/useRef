<?php

// session_start();
$servername = "mysql-server";
$username = "root";
$password = "secret";
$db = "myBlog";

try 
{
  $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Done";
} 
catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
}

?>