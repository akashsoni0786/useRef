<?php
include "connection.php";
if(isset($_POST['all'])){
    $sql = "SELECT * FROM `products`";
    $row=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($row);
}
if(isset($_POST["p_name"])){
    $p_name =  $_POST["p_name"];
    $p_cat=$_POST["p_cat"];
    $p_sub_cat=$_POST["p_sub_cat"];
    $p_color=$_POST["p_color"];
    $p_price=$_POST["p_price"];

    $sql = "INSERT INTO `products` (`product_name`, `product_category`, `product_sub_category`, `product_color`, `product_price`) VALUES ('$p_name' , '$p_cat', '$p_sub_cat', '$p_color', '$p_price')";
    $conn->exec($sql);
    // echo("Added successfully");
}
?>