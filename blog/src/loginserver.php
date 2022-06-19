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
        $sql = "INSERT INTO `Users` (`user_name`, `passwords`, `email`, `fullname`,`user_ban`) 
                VALUES ('$username', '$password', '$emailaddress', '$fullname','0')";
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
        $sql = "SELECT `user_id` FROM `Users` where `user_name`='$username' AND `passwords`= '$password'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $row[0]['user_id'];
        if(count($row)== 1)
        {
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