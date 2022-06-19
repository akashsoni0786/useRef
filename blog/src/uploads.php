
<?php
session_start();
if(isset($_SESSION['user_id']))
{


if(isset($_FILES['my_image'])) 
{
    $id = $_SESSION['user_id'];

    $heading = $_POST['blogheading'];
    $category = $_POST['blogcategory'];
    $content = $_POST['blogcontent'];
    $img = $_FILES['my_image']['name'];
    $upload = 0;
    $target_dir = "img/uploads/";
    $target_file = $target_dir . basename($_FILES["my_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["my_image"]["tmp_name"]);
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    else 
    {
        if (move_uploaded_file($_FILES["my_image"]["tmp_name"], $target_file)) {
            $upload = 1;
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
if($upload == 1){
    $img = $target_file;
    try
    {
        $sql = "INSERT INTO `Posts` (`post_img`, `post_date`, `post_category_name`, 
                `post_heading`,`post_content`,`user_id`,`post_restricted`) 
                VALUES ('$img', now() , '$category', '$heading','$content','$id','0')";
            $conn->exec($sql);
            echo "Blog Inserted";
        
    }
    catch(PDOException $e){
        echo $e;
    }
}

}
}
else{
    header('location:./404.php');
}

?>


