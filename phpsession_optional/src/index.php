<?php
session_start();
$_SESSION['employee'] =
    [
        array('mail' => 'akash@gmail.com', 'pass' => '1111'),
        array('mail' => 'vaibhav@gmail.com', 'pass' => '1111'),
        array('mail' => 'sujeet@gmail.com', 'pass' => '1111'),
        array('mail' => 'arvind@gmail.com', 'pass' => '1111'),
        array('mail' => 'yash@gmail.com', 'pass' => '1111'),
    ];

$k = null;
if (isset($_POST['rememberme'])) {
    $mail = $_POST['enteremail'];
    $pass = $_POST['enterpass'];
    $rem = $_POST['rememberme'];
    foreach ($_SESSION['employee'] as $i) {
        if ($i['mail'] == $mail && $i['pass'] == $pass) {
            $cookie_mail = $mail;
            $cookie_pass = $pass;
            setcookie("email", $cookie_mail, time() + (86400 * 30), "/");
            setcookie("pass", $cookie_pass, time() + (86400 * 30), "/");
            $k = "USER";
            $_SESSION['mail'] = $mail;
            $_SESSION['pass'] = $pass;
        }
    }
    if ($k == null) {
        echo "<script>alert('Invalid credntials')</script>";
    }
    if ((isset($_SESSION['mail'])) || (isset($_COOKIE['email']))) {
        header('location:./server.php');
    }
} else if (isset($_POST['enteremail']) && isset($_POST['enterpass'])) {
    $mail = $_POST['enteremail'];
    $pass = $_POST['enterpass'];

    foreach ($_SESSION['employee'] as $i) {
        if ($i['mail'] == $mail && $i['pass'] == $pass) {
            $k = 'USER';
            $_SESSION['mail'] = $mail;
            $_SESSION['pass'] = $pass;
        }
    }
    if ($k == null) {
        echo "<script>alert('Invalid credntials')</script>";
    }

    if ((isset($_SESSION['mail'])) || (isset($_COOKIE['email']))) {
        header('location:./server.php');
    }
}


if (!isset($_SESSION['mail'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Optional</title>
    </head>

    <body>
        <div>
            <h3>Login Form</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input name="enteremail" id="enteremail" type="text"></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input name="enterpass" id="enterpass" type="password"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="rememberme">Remember me</td>
                    </tr>
                </table>
                <button  type="submit" id="submitLogin" name="submitLogin">Login</button>
            </form>
        </div>
    </body>

    </html>
<?php
} 
if (isset($_COOKIE['email']) && isset($_COOKIE['pass']))  {
    header('location:./server.php');
}

?>