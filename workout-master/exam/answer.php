<?php
    session_start();
?>

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
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>

        </header>

        <div class="bgimg" style="background-image: url('../images/score.jpg');" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">

                    <?php 
                        $problem = $_SESSION['problem'];
                        $ans = $_SESSION['ans'];
                        $score = 0;

                        for($i = 0; $i < count($problem); $i++) {
                            if ($ans[$i] == $_POST['p'.$i]) {
                                $score += 10;
                            }
                        }

                        echo '<h2 class="">คะแนนของคุณคือ '.$score.'</h2>';
                        echo '<p class="lead mx-auto desc mb-5">คะแนนเต็ม '.(count($problem)*10).'</p>';
                    ?>
                        
                    </div>
                </div>
            </div>

        </div>


        <div class="site-section">
            <div class="container">
                <h1>เฉลย</h1>
                <div class="form-check">
                    <div class="row">
                        <?php

                        $problem = $_SESSION['problem'];
                        $choice = $_SESSION['choice'];
                        $ans = $_SESSION['ans']; 

                        for($i = 0; $i < count($problem); $i++){
                            echo '<div class="col-lg-12"><div class="d-flex align-items-center"><div class="problem">';
                            echo '<h3>'.$problem[$i].'</h3>';
                            echo ' </div></div>';
                            echo '<div class="row"><div class="col-lg-6"><div class="class-item d-flex align-items-center"><div class="class-item-text ans">';
                            echo '<h2>'.$choice[$i][$ans[$i]-1].'</h2>';
                            echo '</div></div></div></div></div>';
                        }
                        ?>
                    </div>
                </div>
                <a href="../index.html" class="btn btn-primary float-right "> ไปหน้าแรก </a>
            </div>
        </div>

        <footer class="footer-section bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-white">เกี่ยวกับพวกเรา</h3>
                        <p>เว็บนี้เป็นส่วนหนึงของวิชาเว็บเทคโนโลยี
                            เพื่อให้ความรู้เกี่ยวกับวิชาคณิตศาสตร์ประถมปลายเพื่อเป็นประโยชน์กับการเรียน
                            ผู้จัดทำหวังว่าเว็บไซต์นี้จะเป็นประโยชน์กับผู้ที่กำลังหาข้อมูลเรื่องนี้อยู่</p>
                    </div>

                    <div class="col-md-3 ml-auto">
                        <h3 class="text-white">Links</h3>
                        <ul class="list-unstyled footer-links">
                            <li><a href="../index.html">หน้าแรก</a></li>
                            <li><a href="../index.html#schedule-section">แบบฝึกหัด</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-white">ข้อมูลเพิ่มเติม</h3>
                        <p>สามารถดูข้อมูลเพิ่มเติมได้ที่ <a
                                href="https://github.com/Alhzz/web_tech">github.com/Alhzz/web_tech</a></p>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class=" pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script data-cfasync="false"
                                    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                This
                                template is made
                                with
                                <i class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <!-- .site-wrap -->

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

    <script src="../js/main.js"></script>

</body>

</html>