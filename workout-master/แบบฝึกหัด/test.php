<!DOCTYPE html>
<html lang="en">

<head>
    <title>Workout &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Kanit|Sarabun&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../css/style.css">

    <style>
        #end {
            position: absolute;
            top: 12%;
            left: 2%;
            width: 96%;
            height: 80%;
            display: none;
            background-color: white;
            background-repeat: no-repeat;
            background-size: contain;
            border-color: rgb(9, 49, 77);
            border-style: solid;
            border-width: 10px;
            transition: 1s;
            animation-name: ani;
            animation-duration: 1.5s;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Kanit', sans-serif;
        }

        .site-section p,
        .site-section ul {
            color: black;
        }

        p {
            font-family: 'Sarabun', sans-serif;
        }

        .problem {
            padding: 25px;
        }

        .ans {
            padding: 15px 30px;
        }

        #man {
            position: fixed;
            bottom: 30px;
            left: 5%;
            width: 95%;


        }
    </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo"><a href="../index.html">Math<span>46</span> </a></div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="../index.html" class="nav-link">หน้าแรก</a></li>
                                <li><a href="../index.html#course-section" class="nav-link">บทเรียน</a></li>
                                <li><a href="../index.html#schedule-section" class="nav-link">แบบฝึกหัด</a></li>
                                <li><a href="../index.html#trainer-section" class="nav-link">ผู้จัดทำ</a></li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>

        </header>

        <div class="bgimg" style="background-image: url('../images/exam.jpg');height: 75px;" data-stellar-background-ratio="0.5">

        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <h5 id="ch"></h5>
                    <div class="col-lg-12">
                        <div class="mt-5 pt-4 align-items-center justify-content-center text-center">
                            <div class="problem" id="problem">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center " id="man">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center" onclick="check(1)" id="ans1">
                                    <div class="class-item-text ans" id="id1">
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center" onclick="check(3)" id="ans3">
                                    <div class="class-item-text ans" id="id3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center" onclick="check(2)" id="ans2">
                                    <div class="class-item-text ans" id="id2">
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center" onclick="check(4)" id="ans4">
                                    <div class="class-item-text ans" id="id4">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <center>
        <div id="end">
            <div class="container">
                <h2 id="nscoreone" style="position:relative; padding-top: 15%;">คะแนน: <span id="total">0</span></h2>
                <div class="col-lg-6">
                    <div class="mt-3 class-item align-items-center justify-content-center text-center " onclick="go()">
                        <h4 class="ans">ดูเฉลยแบบฝึกหัด</h4>
                    </div>
                    <div class="class-item  align-items-center justify-content-center text-center " onclick="start()">
                        <h4 class="ans">ทำแบบฝึกหัดอีกครั้ง</h4>
                    </div>
                </div>
            </div>
        </div>
    </center>

    </div>
    <!-- .site-wrap -->
    <?php
    $which = $_GET['chapter'];
    ?>
    <script type="text/javascript">
        var chapter = "<?php echo $which ?>";
    </script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.fancybox.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../js/man.js"></script>
    <script src="../js/main.js"></script>


</body>

</html>