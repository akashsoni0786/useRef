<?php
session_start();
include "connection.php";
if(isset($_POST['signupbtn']))
{

    parse_str(json_decode($_POST['signupbtn']),$arr);
    $username = $arr['username'];
    $password = $arr['password'];
    $emailaddress = $arr['emailaddress'];
    $fullname = $arr['fullname'];
  
    try
    {
        $sql = "INSERT INTO `Users` (`user_name`, `passwords`, `email`, `fullname`,`user_ban`,`role`) 
                VALUES ('$username', '$password', '$emailaddress', '$fullname','0','user')";
        $temp = "SELECT `user_name` FROM `Users` where `user_name`='$username' ";
        $row = $conn->query($temp)->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)== 0){
            $conn->exec($sql);
            echo "User registered successfully";
        }
        else{
            echo "User already exists";
        }
    }
    catch(PDOException $e){
        echo $e;
    }
}

if(isset($_POST['signinbtn']))
{
    parse_str(json_decode($_POST['signinbtn']),$arr);
    $username = $arr['username'];
    $password = $arr['password'];
    try
    {
        $sql = "SELECT `user_id`,`role` FROM `Users` where `user_name`='$username' AND `passwords`= '$password'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
       
        if(count($row)== 1)
        {
            $_SESSION['user_id'] = $row[0]['user_id'];
            $_SESSION['role'] = $row[0]['role'];
            echo "Logged in successfully";

        }
        else
        {
            echo "Invalid Credentials";
        }
    }
    catch(PDOException $e){
        echo $e;
    }
}
?>