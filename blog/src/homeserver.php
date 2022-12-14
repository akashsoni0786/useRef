<?php
session_start();
include "connection.php";

if(isset($_SESSION['user_id']))
{

if(isset($_POST['showAllPosts']))
{
    try
    {
        $sql = "SELECT * FROM `Posts` ORDER By post_id DESC";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $posts = json_encode($row);
        $sql2 = "SELECT * FROM `Users`";
        $row2 = $conn->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
        $users = json_encode($row2); 

        $usrAndPosts = array("user"=>$users, "post"=>$posts);
        echo json_encode($usrAndPosts);
    }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showAllPoststoAdmin']))
{
    try
    {
        $sql = "SELECT * FROM `Posts` ORDER By post_id DESC";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);

    }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showDetailsofBlog']))
{
    $pid = $_POST['showDetailsofBlog'];
    try
    {
        $sql = "SELECT * FROM `Posts` WHERE `post_id`= '$pid'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['uid'] = $row[0]['user_id'];
        $_SESSION['pid'] = $row[0]['post_id'];

    }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showDetailsofBloginPage']))
{
    $id = $_SESSION['uid'];
    $pid = $_SESSION['pid'];
    try
    {
        $sql = "SELECT * FROM `Posts` WHERE `user_id`= '$id' AND `post_id` = '$pid'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['current_blog_users_id'] = $row[0]['user_id'];
        echo json_encode($row);

    }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showoptionsforEditBlog']))
{
    $id = $_SESSION['uid'];
    $pid = $_SESSION['pid'];
    if($id == $_SESSION['user_id'])
    {
        $row = '<li><a id="editBtnid" data-bs-toggle="modal" data-bs-target="#editContentModalBtn" href=""><i class="fa fa-edit"></i></a></li>
            <li><a id="deletePost" href=""><i class="fa fa-trash"></i></a></li>';
        echo $row;
    }
    else{
        echo '';
    }
    
}

if(isset($_POST['showDetailsofUserinPage']))
{
    $id = $_SESSION['uid'];
    try
    {
        $sql = "SELECT * FROM `Users` WHERE `user_id`= '$id'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);

           }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['formdataModal']))
{
    parse_str(json_decode($_POST['formdataModal']),$arr);
    $head = $arr['blogheadingmodal'];
    $content = $arr['blogcontentmodal'];
    $pid = $_SESSION['pid'];

    try
    {
        $sql = "UPDATE `Posts` SET `post_heading` = '$head' ,`post_content` = '$content'
        WHERE `Posts`.`post_id` = '$pid';";
        $conn->query($sql);
        echo 'Record Updated successfully';

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['deletepost']))
{

    $pid = $_SESSION['pid'];

    try
    {
        $sql = "DELETE FROM `Posts` WHERE `Posts`.`post_id` = '$pid';";
        $conn->query($sql);
        echo 'Record Deleted successfully';

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['addComment']))
{
    $comment = $_POST['addComment'];
    $pid = $_SESSION['pid'];
    $uid = $_SESSION['user_id'];
    
    try
    {
        $temp = "SELECT * FROM `Users` WHERE `user_id` = '$uid'";
        $userrow = $conn->query($temp)->fetchAll(PDO::FETCH_ASSOC);
        $uname = $userrow[0]['fullname'];
        $sql = "INSERT INTO `Comments` (`comment_date`, `post_id`, `user_id`, `userfullname`, `post_comment`) VALUES 
                            (now(), '$pid', '$uid', '$uname', '$comment')";
        $conn->query($sql);
        echo "Done";

           }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showAllComments'])){
    $pid = $_SESSION['pid'];
    $show='block';
    try
    {
        $sql = "SELECT * FROM `Comments` WHERE `post_id`='$pid'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode($row);
        $txt = '';
        foreach($row as $i)
        {
            $txt .= '<div class="single-post__comment__item__text"><h5>'. $i['userfullname'] . '</h5><span>' . $i['comment_date'] . '</span><p id="commentLabel">' . $i['post_comment'] . 
            '</p><ul id="showOrnot" style="display:'.$show.'">';
            
            if($_SESSION['role'] == 'admin' || $_SESSION['user_id']== $_SESSION['current_blog_users_id'])
            {
            $txt .='<li><a  id="' . $i['comment_id'] . '" data-bs-toggle="modal" data-bs-target="#editCommentModalBtn" class="editcommentBtn" ><i class="fa fa-edit"></i></a></li>
            <li><a  id="' . $i['comment_id'] . '" class="deletecommentBtn"><i class="fa fa-trash"></i></a></li></ul>';
            }
            
            $txt .= '</div>';
        }
        echo $txt;


           }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['editedComment']))
{
    $pid = $_SESSION['pid'];
    $comm = $_POST['editedComment'];
    $cid = $_POST['comment_id'];
    echo $cid;
    try
    {
        $sql = "UPDATE `Comments` SET `post_comment` = '$comm' 
            WHERE `Comments`.`comment_id` = '$cid';
        ";
        $conn->query($sql);
        echo 'Comment Updated successfully';

        }
    catch(PDOException $e)
    {
        echo $e;
    }
} 

if(isset($_POST['deletecomment']))
{

    $cid = $_POST['deletecomment'];
    try
    {
        $sql = "DELETE FROM `Comments` WHERE `Comments`.`comment_id` = '$cid'";
        $conn->query($sql);
        echo 'Record Deleted successfully';

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['commentCount']))
{
    $pid = $_SESSION['pid'];
    try
    {
        $sql = "SELECT COUNT(comment_id) as countVal FROM `Comments` WHERE `post_id`='$pid'
        ";
        $val = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($val);

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}


if(isset($_POST['showDetailsofMYBlog']))
{
    $id = $_SESSION['user_id'];
    try
    {
        $sql = "SELECT * FROM `Posts` WHERE `user_id`= '$id'";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);

           }
    catch(PDOException $e)
    {
        echo $e;
    }
}


if(isset($_POST['restrictPost']))
{
    $pid = $_SESSION['pid'];

    try
    {
        $temp = "SELECT `post_restricted` FROM `Posts` WHERE `Posts`.`post_id` = '$pid';";
        $sql = "UPDATE `Posts` SET `post_restricted` = '1' WHERE `Posts`.`post_id` = '$pid';";
        $sql2 = "UPDATE `Posts` SET `post_restricted` = '0' WHERE `Posts`.`post_id` = '$pid';";

        $row = $conn->query($temp)->fetchAll(PDO::FETCH_ASSOC);
        $k = $row[0]['post_restricted'];
        if($k == 0)
        {
            $conn->query($sql);
            echo 'Post restricted successfully';
        }
        if($k == 1)
        {
            $conn->query($sql2);
            echo 'Post released successfully';
        }

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['restrictPostCheck']))
{
    $pid = $_SESSION['pid'];

    try
    {
        $sql = "SELECT `post_restricted` FROM `Posts` WHERE `Posts`.`post_id` = '$pid';";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $k = $row[0]['post_restricted'];

        if($k == 0)
        {
            echo 'free';
        }
        if($k == 1)
        {
            echo 'Ban';
        }

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showAllUsers']))
{
    try
    {
        $sql = "SELECT * FROM `Users`";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row);

           }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['restrictUserCheck']))
{
    $uid = $_POST['restrictUserCheck'];

    try
    {
        $sql = "SELECT `user_ban` FROM `Users` WHERE `Users`.`user_id` = '$uid';";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $k = $row[0]['user_ban'];
        if($k == 0)
        {
            echo 'free';
        }
        if($k == 1)
        {
            echo 'Ban';
        }

        }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['banUser']))
{
    $uid = $_POST['banUser'];

    try
    {
        $sql = "UPDATE `Users` SET `user_ban` = '1' WHERE `Users`.`user_id` = '$uid';";
        $sql2 = "UPDATE `Users` SET `user_ban` = '0' WHERE `Users`.`user_id` = '$uid';";
        $temp = "SELECT * FROM `Users` WHERE `Users`.`user_id` = '$uid';";

        $row = $conn->query($temp)->fetchAll(PDO::FETCH_ASSOC);
        $k = $row[0]['user_ban'];
        if($k == 0)
        {
            $conn->query($sql);
            echo 'User restricted successfully';
        }
        if($k == 1)
        {
            $conn->query($sql2);
            echo 'User released successfully';
        }


        }
    catch(PDOException $e)
    {
        echo $e;
    }
}



if(isset($_POST['searchPostsIndexPage']))
{
    try
    {
        $sql = "SELECT * FROM `Posts` ORDER By post_id DESC";
        $row = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $posts = json_encode($row);
        $sql2 = "SELECT * FROM `Users`";
        $row2 = $conn->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
        $users = json_encode($row2); 

        $usrAndPosts = array("user"=>$users, "post"=>$posts);
        echo json_encode($usrAndPosts);
    }
    catch(PDOException $e)
    {
        echo $e;
    }
}

if(isset($_POST['showCommentsRes'])){
    $blog_usr_id = $_POST['showCommentsRes'];
    if($_SESSION['user_id'] == $blog_usr_id || $_SESSION['user_id'] == 1111)
    {

        echo "Show";
    }
}

}
else{
    header('location:./404.php');
}
?>