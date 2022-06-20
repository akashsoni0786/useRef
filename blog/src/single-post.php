<?php
session_start();
if (isset($_SESSION['user_id'])  && isset($_SESSION['uid'])) {
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
            <div id="mainpicofblog" class="single-post__hero set-bg" data-setbg="img/categories/single-post/single-post-hero.jpg"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="single-post__title">
                            <div class="single-post__title__meta">
                                <h2 id="datenumber">08</h2>
                                <span id="monthname">Aug</span>
                            </div>
                            <div class="single-post__title__text">
                                <ul class="label">
                                    <li id="categoryofblog">Vegan</li>
                                    <!-- <li>Desserts</li> -->
                                </ul>
                                <h4 id="headingofblog">Weight loss diet: Ditching this one food can help you slim down fast - what is it?</h4>
                                <ul class="widget">
                                    <li>by Admin</li>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-post__social__item">
                            <ul>
                                <?php if ($_SESSION['user_id'] == 1111) { ?>
                                    <li><a id="editBtnid" data-bs-toggle="modal" data-bs-target="#editContentModalBtn" href=""><i class="fa fa-edit"></i></a></li>
                                    <li><a id="deletePost" href=""><i class="fa fa-trash"></i></a></li>
                                    <li><a id="restrictPost" href=""><i class="fa fa-ban"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="single-post__top__text">
                            <p id="blogcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua accusantium doloremque laudantium. </p>
                        </div>

                        <div class="single-post__author__profile">
                            <!-- <div class="single-post__author__profile__pic">
                            <img src="img/categories/single-post/author-profile.jpg" alt="">
                        </div> -->
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
                        </div>
                        <div class="single-post__comment">
                            <div class="widget__title">
                                <h4><span id="commentcount"></span> Comment</h4>
                            </div>
                            <div id="commentsDiv" class="single-post__comment__item">

                            </div>
                        </div>
                        <div class="single-post__leave__comment">
                            <div class="widget__title">
                                <h4>Leave a comment</h4>
                            </div>
                            <form id="commentformid">
                                <textarea id="commentText" placeholder="Message"></textarea>
                                <button id="commentsubmitBtn" class="site-btn">Submit</button>
                            </form>
                        </div>
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

        <div class="modal fade" id="editContentModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editModalFromid">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Heading:</label>
                                <input type="text" class="form-control" name="blogheadingmodal" id="blogheadingmodal">
                                <span style="color: red;" id="headingerror"></span>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Content:</label>
                                <textarea class="form-control" name="blogcontentmodal" id="blogcontentmodal"></textarea>
                                <span style="color: red;" id="contenterror"></span>

                            </div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <div class="single-post__leave__comment">
                            <button style="background-color: grey;" data-bs-dismiss="modal" class="site-btn">Close</button>
                        </div>
                        <div class="single-post__leave__comment">
                            <button id="editSubmitBtn" type="submit" class="site-btn">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="editCommentModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Comment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Comment:</label>
                            <textarea class="form-control" id="commentmodalTextarea"></textarea>
                            <input type="text" id="hiddenInputOfModal" hidden>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <div class="single-post__leave__comment">
                            <button style="background-color: grey;" id="closeeditmodal" data-bs-dismiss="modal" class="site-btn">Close</button>
                        </div>
                        <div class="single-post__leave__comment">
                            <button id="editcommentSubmitBtn" class="site-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function() {
                detailsOfPosts();
                detailsOfUser();
                showAllComments();
                numOfComments();

                function detailsOfPosts() {
                    $.ajax({
                        url: "homeserver.php",
                        type: "POST",
                        data: {
                            showDetailsofBloginPage: true
                        },
                        success: function(result) {
                            var post = JSON.parse(result);
                            // console.log(post);
                            imageUrl = post[0]['post_img'];

                            catname = post[0]['post_category_name'];
                            headname = post[0]['post_heading'];
                            content = post[0]['post_content'];
                            $("#mainpicofblog").css("background-image", "url(" + imageUrl + ")");
                            $("#categoryofblog").html(catname);
                            $("#headingofblog").html(headname);
                            $("#blogcontent").html(content);
                            dateblog = post[0]['post_date'].substr(8, 2);
                            $("#datenumber").html(dateblog);
                            var years = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                            var y = post[0]['post_date'].substr(5, 2).replace(/^0+/, '') - 1;
                            var yer = years[y];
                            $("#monthname").html(yer);




                        }
                    });
                }

                function detailsOfUser() {
                    $.ajax({
                        url: "homeserver.php",
                        type: "POST",
                        data: {
                            showDetailsofUserinPage: true
                        },
                        success: function(result) {
                            var user = JSON.parse(result);
                            console.log(user[0]['user_id']);
                            name = user[0]['fullname'];
                            var blog_user_id = user[0]['user_id'];
                            $("#nameofuser").html(name);
                        }
                    });
                }

                $(document).on('click', '#editBtnid', function() {
                    var heading = $("#headingofblog").html();
                    var content = $("#blogcontent").html();

                    $("#blogheadingmodal").val(heading);
                    $("#blogcontentmodal").val(content);

                });
                $("#blogheadingmodal").keyup(function(){
                    $("#blogheadingmodal").css('border','');
                    $("#headingerror").html("");
                });
                $("#blogcontentmodal").keyup(function(){
                    $("#blogcontentmodal").css('border','');
                    $("#contenterror").html("");
                });
                $("#editModalFromid").on('submit', function(e) {
                    e.preventDefault();
                    var head = $("#blogheadingmodal").val();
                    var content = $("#blogcontentmodal").val();
                    error = [];
                    if(head == "")
                    {
                        $("#blogheadingmodal").css('border','4px solid red');
                        $("#headingerror").html("Field is empty");
                        error.push('error');
                    }
                    if(content == "")
                    {
                        $("#blogcontentmodal").css('border','4px solid red');
                        $("#contenterror").html("Field is empty");

                        error.push('error');

                    }
                    if(content.length < 500)
                    {
                        $("#blogcontentmodal").css('border','4px solid red');
                        $("#contenterror").html("Should be greater then 200 words");
                        error.push('error');
                    }
                    if (error.length ==0) {
                        var formdata = JSON.stringify($(this).serialize());
                        $.ajax({
                            url: 'homeserver.php',
                            type: "POST",
                            data: {
                                formdataModal: formdata
                            },
                            success: function(result) {
                                console.log(result);
                                detailsOfPosts();
                            }

                        });
                    }



                });

                $(document).on('click', '#deletePost', function() {
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            deletepost: true
                        },
                        success: function(result) {
                            console.log(result);
                            window.location = 'index.php';
                        }
                    });
                });

                $(document).on('click', '#commentsubmitBtn', function(e) {
                    e.preventDefault();
                    var comment = $("#commentText").val();
                    if (comment == "") {
                        alert("Comment field is empty");
                    } else {
                        $.ajax({
                            url: 'homeserver.php',
                            type: "POST",
                            data: {
                                addComment: comment
                            },
                            success: function(result) {
                                console.log(result);
                                if (result == "Done") {
                                    $("#commentText").val('');
                                    showAllComments();
                                    numOfComments();
                                }
                            }
                        });
                    }

                });

                function showAllComments() {
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            showAllComments: true
                        },
                        success: function(result) {
                            $("#commentsDiv").html(result);

                        }
                    });

                }



                $(document).on('click', '.editcommentBtn', function() {
                    var commentValue = $(this).parent().parent().prev().html();
                    var cid = $(this).attr('id');
                    $("#commentmodalTextarea").val(commentValue);
                    $("#hiddenInputOfModal").val(cid);

                });

                $("#commentmodalTextarea").keyup(function() {
                    $("#commentmodalTextarea").css('border', '');
                });
                $(document).on('click', '#editcommentSubmitBtn', function() {
                    var commentValue = $("#commentmodalTextarea").val();
                    var cid = $("#hiddenInputOfModal").val();
                    if (commentValue != '') {
                        $.ajax({
                            url: 'homeserver.php',
                            type: "POST",
                            data: {
                                editedComment: commentValue,
                                comment_id: cid
                            },
                            success: function(result) {
                                console.log(result);
                                $("#closeeditmodal").click();
                                showAllComments();
                                numOfComments();
                            }
                        });
                    } else {
                        $("#commentmodalTextarea").css('border', '4px solid red');
                    }

                });

                $(document).on('click', '.deletecommentBtn', function() {
                    var cid = $(this).attr('id');
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            deletecomment: cid
                        },
                        success: function(result) {
                            console.log(result);
                            showAllComments();
                            numOfComments();
                        }
                    });
                });

                function numOfComments() {
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            commentCount: true
                        },
                        success: function(result) {
                            var count = JSON.parse(result);
                            countvalue = count[0]['countVal'];
                            $("#commentcount").html(countvalue);
                            showAllComments();
                        }
                    });
                }

                function sendRequest() {
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            restrictPost: true
                        },
                        success: function(result) {
                            console.log(result);
                            // console.log(JSON.parse(result));
                        }
                    });
                }
                $("#restrictPost").click(function() {
                    $.ajax({
                        url: 'homeserver.php',
                        type: "POST",
                        data: {
                            restrictPostCheck: true
                        },
                        success: function(result) {
                            console.log(result);
                            if (result == "free") {
                                if (confirm("Do you really want to restrict this post")) {
                                    sendRequest()
                                }
                            }
                            if (result == "Ban") {
                                if (confirm("Do you really want to release this post")) {
                                    sendRequest()
                                }
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