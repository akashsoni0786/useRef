<?php
session_start();
if(isset($_SESSION['user_id'])){
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
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

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

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>About me</h2>
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>About</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__pic__item__large">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="about__pic">
                            <div class="about__pic__item">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                            <div class="about__pic__item">
                                <img src="img/about/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__right__text">
                            <h2>Hello every one !!!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore
                                magna aliqua accusantium doloremque laudantium.</p>
                            <ul>
                                <li>Class aptent taciti sociosqu ad litora torquent per conubia nostra</li>
                                <li>Inceptos himenaeos mauris.Integer gravida tincidunt accumsan.</li>
                                <li>Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi.</li>
                                <li>In vitae tempor velit of the impenetrable foliage.</li>
                            </ul>
                            <p>Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula
                                finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus
                                aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed
                                arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim
                                laoreet.</p>
                            <div class="about__right__text__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

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
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
</body>

</html>

<?php
} 
else
{
    header('location:./404.php');
}
?>