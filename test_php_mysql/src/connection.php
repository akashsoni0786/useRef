<?php
// session_start();
$servername = "mysql-server";
$username = "root";
$password = "secret";
$db = "test_db";

try 
{
  $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
}
?>