<?php
session_start();
$img = $_SESSION['img_location'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            <a href="./index.html"><img src="img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./allusersforadmin.php">All Users</a></li>
                <li><a href="./allpostsforadmin.php">All Posts</a></li>
                <li><a href="./admin.php">All Category</a></li>
                <li><a href="./myblogs.php">My Posts</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
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
                           
                                <li><a href="./allusersforadmin.php">All Users</a></li>
                                <li><a href="./allpostsforadmin.php">All Posts</a></li>
                                <li><a href="./admin.php">All Category</a></li>
                                <li><a href="./myblogs.php">My Posts</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <a style="color: red;" href="#blogAddition"> <i style="margin-right: 50px;" id="addbtnforblog" class="fa fa-plus "></i>
                            </a><i class="fa fa-search search-switch"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="./signin.html" class="primary-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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

    <!-- Categories Section Begin -->
    <section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
    
                            <span id="showposts"></span>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Categories Section End -->
    <!-- Add Your Blog Here -->
    <div id="blogAddition">
        <div class="sidebar__subscribe__item">
            <div class="sidebar__item__title">
                <h6>Add Your Blog Here</h6>
            </div>
            <p>.</p>
            <form id="myFormforBlog" enctype="multipart/form-data">
                <input type="text" id="blogcategory" name="blogcategory" class="email-input" placeholder="Enter Category">
                <input type="text" id="blogheading" name="blogheading" class="email-input" placeholder="Enter Heading">
                <input type="text" id="blogcontent" name="blogcontent" class="email-input" placeholder="Enter Content">
                <input type="file" name="fileToUpload" id="fileToUpload" class="email-input" placeholder="Choose your image for upload">
                <button id="addbtnforblog" name="submit" type="submit" class="site-btn">Add</button>
            </form>
        </div>
    </div>
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
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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


    <!-- Add Your Blog Here End-->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            myPosts();

            function myPosts() {
                $.ajax({
                    url: "homeserver.php",
                    type: "POST",
                    data: {
                        showDetailsofMYBlog: "Show"
                    },
                    success: function(result) {
                        var posts = JSON.parse(result);
                        var row = '';
                        var years = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                        posts.forEach(i => {
                            var y = i['post_date'].substr(5, 2).replace(/^0+/, '') - 1;
                            var yer = years[y];
                            row += '<div class="categories__list__post__item">' +
                                '<div class="row"><div class="col-lg-6 col-md-6">' +
                                '<div class="categories__post__item__pic set-bg" ' +
                                'data-setbg="img/categories/categories-list/cl-7.jpg" ' +
                                'style="background-image: url(&quot;' + i['post_img'] + '&quot;);">' +
                                '<div class="post__meta"><h4>' + i['post_date'].substr(8, 2) + '</h4><span>' + yer + '</span></div>' +
                                '</div></div><div class="col-lg-6 col-md-6">' +
                                '<div class="categories__post__item__text">' +
                                '<ul class="post__label--large">' +
                                '<li>' + i['post_category_name'] + '</li></ul>' +
                                '<h3><a class="headingofBlog" id="' + i['post_id'] + '" href="#">' + i['post_heading'] + '</a>' +
                                '</h3><ul class="post__widget">' +
                                '<li>by <span>Admin</span></li>' +
                                '<li>3 min read</li>' +
                                '<li>20 Comment</li>' +
                                '</ul><p>' + i['post_content'].substr(0, 160) + '..........</p></div></div></div></div>';
                        });
                        $("#showposts").html(row);
                    }
                });
            }

            $(document).on('click', '.headingofBlog', function() {
                var post_id = $(this).attr('id');
                $.ajax({
                    url: 'homeserver.php',
                    type: "POST",
                    data: {
                        showDetailsofBlog: post_id
                    },
                    success: function(result) {
                        console.log(result);
                        window.location = "single-post.php"
                    }
                });
            });

            $("#myFormforBlog").on('submit', function(e) {

                e.preventDefault();
                var heading = $("#blogheading").val();
                var content = $("#blogcontent").val();
                var category = $("#blogcategory").val();

                let img = $("#fileToUpload")[0].files;


                var formData = new FormData(this);
                formData.append('my_image', img[0]);
                formData.append('blogheading', heading);
                formData.append('blogcontent', content);
                formData.append('blogcategory', category);

                console.log(formData);
                $.ajax({
                    url: 'uploads.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) 
                    {
                        // console.log(res);
                        allPosts();
                    }
                });
            });
        });
    </script>
</body>

</html>