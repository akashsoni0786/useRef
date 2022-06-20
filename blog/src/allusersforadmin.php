<?php
session_start();
if(isset($_SESSION['user_id']))
{
    if($_SESSION['user_id'] == 1111)
    {
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


        <!-- Humberger Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="./index.php"><img src="img/humberger/humberger-logo.png" alt=""></a>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <?php if ($_SESSION['user_id'] == 1111) { ?>
                        <li><a href="./allusersforadmin.php">All Users</a></li>
                        <li><a href="./allpostsforadmin.php">All Posts</a></li>
                        <li><a href="./admin.php">All Category</a></li>
                    <?php } ?>
                    <li><a href="./myblogs.php">My Posts</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
        <!-- Humberger End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                            <div class="header__humberger">
                                <i class="fa fa-bars humberger__open"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-10 order-md-2 order-3">
                            <nav class="header__menu">
                                <ul>
                                    <li><a href="./index.php">Home</a></li>
                                    <?php if ($_SESSION['user_id'] == 1111) { ?>

                                        <li><a href="./allusersforadmin.php">All Users</a></li>
                                        <li><a href="./allpostsforadmin.php">All Posts</a></li>
                                        <li><a href="./admin.php">All Category</a></li>
                                    <?php } ?>
                                    <li><a href="./myblogs.php">My Posts</a></li>
                                    <li><a href="./about.php">About</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <?php
                        if (isset($_SESSION['uid'])) {
                        ?>
                            <div class="header__btn">
                                <a href="./logout.php" class="primary-btn">Logout</a>
                            </div>

                        <?php } else { ?>
                            <div class="header__btn">
                                <a href="./signin.php" class="primary-btn">Login</a>
                            </div>

                        <?php } ?>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header Section End -->

    <!-- Single Post Section Begin -->
    <section class="single-post spad">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">

                    <div style="align-items: center;justify-content: start;
                display: flex;width:100%; margin-bottom: 50px;">
                        <input type="text" id="searchuser" placeholder="Search here.....">
                    </div>

                    <span id="showAllUsers"></span>
                    <!-- 
                    <div class="single-post__author__profile">

                        <div class="single-post__author__profile__text">
                            <h4 id="nameofuser">Lena Mollein.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="single-post__author__profile__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>



                    </div> -->




                </div>
            </div>
        </div>
    </section>
    <!-- Single Post Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->





    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            allUsers();

            function allUsers() {
                $.ajax({
                    url: "homeserver.php",
                    type: "POST",
                    data: {
                        showAllUsers: true
                    },
                    success: function(result) {
                        var users = JSON.parse(result);
                        // console.log(users);
                        var row = '';
                        users.forEach(i => {
                            if (i['user_ban'] == 1) {
                                row += ' <div class="single-post__author__profile bg-danger">' +
                                    '<div class="single-post__author__profile__text">' +
                                    '<h4 class="text-light" id="nameofuser">' + i['fullname'] + '</h4>' +
                                    '<p class="text-light">Username : ' + i['user_name'] + '</p>' +
                                    '<p class="text-light">User email : ' + i['email'] + '</p>' +
                                    '<div class="single-post__author__profile__social">' +
                                    // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                    '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-rocket"></i></a>' +
                                    '</div></div></div>';
                            } else {
                                row += ' <div class="single-post__author__profile">' +
                                    '<div class="single-post__author__profile__text">' +
                                    '<h4 id="nameofuser">' + i['fullname'] + '</h4>' +
                                    '<p>Username : ' + i['user_name'] + '</p>' +
                                    '<p>User email : ' + i['email'] + '</p>' +
                                    '<div class="single-post__author__profile__social">' +
                                    // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                    '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-ban"></i></a>' +
                                    '</div></div></div>';
                            }


                        });
                        $("#showAllUsers").html(row);
                    }
                });
            }

            function sendRequest(uid) {
                $.ajax({
                    url: 'homeserver.php',
                    type: "POST",
                    data: {
                        banUser: uid
                    },
                    success: function(result) {
                        allUsers();
                    }
                });
            }


            $(document).on('click', ".banThisUser", function() {
                var uid = $(this).attr('id');

                $.ajax({
                    url: 'homeserver.php',
                    type: "POST",
                    data: {
                        restrictUserCheck: uid
                    },
                    success: function(result) {
                        // console.log(result);
                        if (result == "free") {
                            if (confirm("Do you really want to restrict this user")) {
                                sendRequest(uid);
                            }
                        }
                        if (result == "Ban") {
                            if (confirm("Do you really want to release this user")) {
                                sendRequest(uid);
                            }
                        }

                    }
                });

            });


            $(document).on('click', ".changeProfileDetails", function() {
                var uid = $(this).attr('id');
                alert(uid);
            });


            $(document).on('keyup', '#searchuser', function() {
                var searchtext = $("#searchuser").val();
                $.ajax({
                    url: "homeserver.php",
                    type: "POST",
                    data: {
                        showAllUsers: true
                    },
                    success: function(result) {
                        len = $("#searchuser").val().length;
                        var users = JSON.parse(result);
                        console.log(users);
                        var row = '';

                        users.forEach(i => {
                            if (searchtext.substr(0, 1).toUpperCase() + searchtext.substr(1) == i['fullname'].slice(0, len)) {
                                if (i['user_ban'] == 1) {

                                    row += ' <div class="single-post__author__profile bg-danger">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 class="text-light" id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p class="text-light">Username : ' + i['user_name'] + '</p>' +
                                        '<p class="text-light">User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-rocket"></i></a>' +
                                        '</div></div></div>';
                                } else {
                                    row += ' <div class="single-post__author__profile">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p>Username : ' + i['user_name'] + '</p>' +
                                        '<p>User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-ban"></i></a>' +
                                        '</div></div></div>';
                                }

                            } else if (searchtext.toLowerCase() == i['user_name'].slice(0, len)) {
                                if (i['user_ban'] == 1) {

                                    row += ' <div class="single-post__author__profile bg-danger">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 class="text-light" id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p class="text-light">Username : ' + i['user_name'] + '</p>' +
                                        '<p class="text-light">User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-rocket"></i></a>' +
                                        '</div></div></div>';
                                } else {
                                    row += ' <div class="single-post__author__profile">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p>Username : ' + i['user_name'] + '</p>' +
                                        '<p>User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-ban"></i></a>' +
                                        '</div></div></div>';
                                }

                            } else if (searchtext.toLowerCase() == i['email'].slice(0, len)) {
                                if (i['user_ban'] == 1) {

                                    row += ' <div class="single-post__author__profile bg-danger">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 class="text-light" id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p class="text-light">Username : ' + i['user_name'] + '</p>' +
                                        '<p class="text-light">User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-rocket"></i></a>' +
                                        '</div></div></div>';
                                } else {
                                    row += ' <div class="single-post__author__profile">' +
                                        '<div class="single-post__author__profile__text">' +
                                        '<h4 id="nameofuser">' + i['fullname'] + '</h4>' +
                                        '<p>Username : ' + i['user_name'] + '</p>' +
                                        '<p>User email : ' + i['email'] + '</p>' +
                                        '<div class="single-post__author__profile__social">' +
                                        // '<a href="#!" id="' + i['user_id'] + '" class="changeProfileDetails"><i class="fa fa-edit"></i></a>' +
                                        '<a href="#!" id="' + i['user_id'] + '" class="banThisUser"><i class="fa fa-ban"></i></a>' +
                                        '</div></div></div>';
                                }

                            }
                        });
                        $("#showAllUsers").html(row);
                    }
                });
            });
        });
    </script>
</body>

</html>
<?php
}
else{
    header('location:./404.php');
}
} 
else
{
    header('location:./signin.php');
}
?>