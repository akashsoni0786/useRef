<?php
session_start();
if (isset($_SESSION['user_id'])) {
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                        <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                            <div class="header__search">
                                <a style="color: red;" href="#blogAddition"> <i style="margin-right: 50px;" id="addbtnforblog" class="fa fa-plus "><b>Add Blog</b></i>
                                    <!-- </a><i class="fa fa-search search-switch"></i> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                      
                            <div class="header__btn">
                                <a href="./logout.php" class="primary-btn">Logout</a>
                            </div>

                    

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
        <!-- Carousel Section Start -->
        <section class="categories spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <div class="categories__hover__text">
                                <h5>Dinner</h5>
                                <p>28 articles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <div class="categories__hover__text">
                                <h5>Dinner</h5>
                                <p>28 articles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <div class="categories__hover__text">
                                <h5>Dinner</h5>
                                <p>28 articles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <div class="categories__hover__text">
                                <h5>Dinner</h5>
                                <p>28 articles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Carousel Section End -->
        <!-- Categories Section Begin -->
        <section class="categories categories-grid spad">

            <div class="categories__post">
                <div class="container">
                    <div class="categories__grid__post">
                        <div style="align-items: center;justify-content: start;
                display: flex;width:100%; margin-bottom: 50px;">
                            <input type="text" id="searchhomepage" placeholder="Search here.....">
                        </div>
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
                    <span style="color: red;" id="categoryError"></span>
                    <input type="text" id="blogcategory" name="blogcategory" class="email-input" placeholder="Enter Category">

                    <span style="color: red;" id="headingErrors"></span>
                    <input type="text" id="blogheading" name="blogheading" class="email-input" placeholder="Enter Heading">

                    <span style="color: red;" id="contentError"></span>
                    <textarea type="text" id="blogcontent" name="blogcontent" class="email-input" placeholder="Enter Content"></textarea>

                    <span style="color: red;" id="imgError"></span>
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
                                </script> All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Toast Begin -->
        <!-- Button trigger modal -->
        <button hidden id="successmodal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Done
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Your blog is posted successfilly
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Toast End -->

        <!-- Add Your Blog Here End-->
        <!-- Js Plugins -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            $(document).ready(function() {
                allPosts();

                function allPosts() {
                    $.ajax({
                        url: "homeserver.php",
                        type: "POST",
                        data: {
                            showAllPosts: true
                        },
                        success: function(result) {
                            var arr = JSON.parse(result);
                            var post = arr['post'];
                            var user = arr['user'];
                            var posts = JSON.parse(post);
                            var usersArr = JSON.parse(user);
                            var row = '';
                            var years = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                            usersArr.forEach(j => {
                                if (j['user_ban'] == '0') {
                                    var uid = j['user_id'];
                                    posts.forEach(i => {

                                        if (i['post_restricted'] == '0' && uid == i['user_id']) {
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
                                                '</ul><p>' + i['post_content'].substr(0, 350) + '..........</p></div></div></div></div>';
                                        }

                                    });
                                }
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
                $("#blogheading").keyup(function() {
                    $("#headingErrors").html("");
                });
                $("#blogcontent").keyup(function() {
                    $("#contentError").html("");
                });
                $("#blogcategory").keyup(function() {
                    $("#categoryError").html("");
                });
                $("#fileToUpload").click(function() {
                    $("#imgError").html("");
                });
                $("#myFormforBlog").on('submit', function(e) {

                    e.preventDefault();

                    var heading = $("#blogheading").val();
                    var content = $("#blogcontent").val();
                    var category = $("#blogcategory").val();
                    var imgCheck = $("#fileToUpload").val();
                    let img = $("#fileToUpload")[0].files;
                    error = [];
                    if (heading == '') {
                        error.push("error");
                        $("#headingErrors").html("Field is empty");

                    }
                    if (content == '') {
                        error.push("error");
                        $("#contentError").html("Field is empty");
                    }
                    if (content.length < 500) {
                        error.push("error");
                        $("#contentError").html("Content should be greater than 200 words");
                    }
                    if (category == '') {
                        error.push("error");
                        $("#categoryError").html("Field is empty");

                    }
                    if (imgCheck == '') {
                        error.push("error");
                        $("#imgError").html("Please choose image");
                    }
                    if (error.length == 0) {
                        var formData = new FormData(this);
                        formData.append('my_image', img[0]);
                        formData.append('blogheading', heading);
                        formData.append('blogcontent', content);
                        formData.append('blogcategory', category);


                        $.ajax({
                            url: 'uploads.php',
                            type: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(res) {
                                console.log(res);
                                $("#successmodal").click();
                                $("#blogheading").val('');
                                $("#blogcontent").val('');
                                $("#blogcategory").val('');
                                $("#fileToUpload").val('');
                                allPosts();

                            }
                        });
                    }

                });
                $(document).on('keyup', '#searchhomepage', function() {
                    var searchtxt = $("#searchhomepage").val();

                    $.ajax({
                        url: "homeserver.php",
                        type: "POST",
                        data: {
                            searchPostsIndexPage: true
                        },
                        success: function(result) {
                            var len = $("#searchhomepage").val().length;
                            var arr = JSON.parse(result);
                            var post = arr['post'];
                            var user = arr['user'];
                            var posts = JSON.parse(post);
                            var usersArr = JSON.parse(user);
                            var row = '';
                            var years = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                            if (searchtxt != "") {
                                usersArr.forEach(j => {
                                    if (j['user_ban'] == '0') {
                                        var uid = j['user_id'];
                                        posts.forEach(i => {
                                            if (i['post_restricted'] == '0' && uid == i['user_id']) {
                                                var y = i['post_date'].substr(5, 2).replace(/^0+/, '') - 1;
                                                var yer = years[y];

                                                if (searchtxt.substr(0, 1).toUpperCase() + searchtxt.substr(1) == i['post_heading'].slice(0, len)) {
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
                                                        '</ul><p>' + i['post_content'].substr(0, 350) + '..........</p></div></div></div></div>';

                                                } else if (searchtxt.substr(0, 1).toUpperCase() + searchtxt.substr(1) == i['post_category_name'].slice(0, len)) {
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
                                                        '</ul><p>' + i['post_content'].substr(0, 350) + '..........</p></div></div></div></div>';

                                                }
                                            }

                                        });
                                    }
                                });
                                $("#showposts").html(row);
                            } else {
                                allPosts();
                            }



                        }
                    });
                });
            });
        </script>
    </body>

    </html>
<?php
} else {
    header('location:./signin.php');
}
?>