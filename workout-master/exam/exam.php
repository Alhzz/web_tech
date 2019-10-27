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
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>

        </header>

        <div class="bgimg" style="background-image: url('../images/exam.jpg');" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="">ชื่อเรื่อง</h2>
                        <p class="lead mx-auto desc mb-5">ประถมศึกษา 4-6</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="site-section">
            <div class="container">
                <form action="answer.php" method="post" id="form" name="form">
                    <div class="form-check">
                        <div class="row">
                            <?php
                            $which = $_GET['num'];

                            //Add Here
                            //Grade 4
                            $p4_problem = array(1, 2);
                            $p4_choice = array(
                                ["A.", "B.", "C.", "D."],
                                ["A.", "B.", "C.", "D."]
                            );
                            $p4_ans = array(3, 1);

                            //Grade 5
                            $p5_problem = array("1. รูปสี่เหลี่ยมชนิดใดไม่มีโอกาสที่มีมุมหนึ่งมุมใดเป็นมุมฉาก", "2. มุม 75 องศา นับต่อไปอีก 15 องศา จะเป็นมุมใด", "3. รูปสามเหลี่ยม ABC เป็นรูปสามเหลี่ยมมุมฉาก มีมุมหนึ่งกาง 60 องศา มุมที่เหลือกางกี่องศา" 
                            ,"4. นำล้อเส้นผ่านศูนย์กลาง 1.5 เมตร มาวางต่อกัน 25 ล้อ จะได้ความยาวทั้งหมดกี่เมตร", "5. 8/12 เท่ากับเศษสส่วนทุกจำนวนข้อใด", "6. 32.68 - 11.52 มีค่าน้อยกว่า 100 อยู่เท่าไร", "7. 3.125 + 5.875 เท่ากับเท่าใด", "8. เมื่อนำร้อยละต่างๆในแผนภูมิวงกลมรวมกันจะได้กี่เปอร์เซ็น", "9. ทรงกระบอกมีฐานหรือหน้าตัดเป็นรูปใด", "10. กล้องไม้ มีความกว้าง 2 เมตร ความยาว 3 เมตร ความสูง 10 เมตร กล่องไม้มีปริมาตรกี่ลูกบาศก์เมตร");
                            $p5_choice = array(
                                ["A. รูปสี่เหลี่ยมคางหมู", "B. รูปสี่เหลี่ยมผืนผ้า", "C. รูปสี่เหลี่ยมจัตุรัส", "D. รูปสี่เหลี่ยมขนมเปียกปูน"],
                                ["A. มุมตรง", "B. มุมฉาก", "C. มุมแหลม", "D. มุมป้าน"],
                                ["A. 90 องศา 30 องศา", "B. 45 องศา 75 องศา", "C. 90 องศา 60 องศา", "D. 60 องศา 60 องศา"],
                                ["A. 38.5 เมตร", "B. 32 เมตร", "C. 37.5 เมตร ", "D. 40.5 เมตร"],
                                ["A. 2/3, 4/6, 24/36", "B. 9/12, 10/12, 11/12", "C. 8/13, 8/14, 8/15", "D. 16/24, 32/48, 64/86"],
                                ["A. 79.84", "B. 78.84", "C. 77.84", "D. 76.84"],
                                ["A. 9", "B. 8", "C. 7.275", "D. 8.725"],
                                ["A. 90", "B. 80", "C. 72", "D. 100"],
                                ["A. สี่เหลี่ยม", "B. วงกลม", "C. สามเหลี่ยม", "D. สองเหลี่ยม"],
                                ["A. 90 ลูกบาศก์เมตร", "B. 80 ลูกบาศก์เมตร", "C. 70 ลูกบาศก์เมตร", "D. 60 ลูกบาศก์เมตร"]
                            );
                            $p5_ans = array(4, 2, 1, 3, 1, 3, 1, 4, 2, 4);

                            //Grade 6
                            $p6_problem = array(1, 2);
                            $p6_choice = array(
                                ["A.", "B.", "C.", "D."],
                                ["A.", "B.", "C.", "D."]
                            );
                            $p6_ans = array(2, 4);

                            $_SESSION['problem'] = ${'p' . $which . '_problem'};
                            $_SESSION['choice'] = ${'p' . $which . '_choice'};
                            $_SESSION['ans'] = ${'p' . $which . '_ans'};
                            


                            for ($i = 0; $i < count(${'p' . $which . '_problem'}); $i++) {
                                echo '<div class="col-lg-12">';
                                echo '<div class="d-flex align-items-center"><div class="problem">';
                                echo '<h2>' . ${'p' . $which . '_problem'}[$i] . '</h2>';
                                echo '</div></div><div class="row"><div class="col-lg-6">';
                                for ($j = 0; $j < 2; $j++) {
                                    echo '<div class="class-item d-flex align-items-center">';
                                    echo '<div class="class-item-text ans"><input class="form-check-input" type="radio" name="p' . $i . '" id="p' . $i . '" value="'.$j.'">';
                                    echo '<h2>' . ${'p' . $which . '_choice'}[$i][$j] . '</h2>';
                                    echo '</div></div>';
                                }
                                echo '</div><div class="col-lg-6">';
                                for ($j = 2; $j < 4; $j++) {
                                    echo '<div class="class-item d-flex align-items-center">';
                                    echo '<div class="class-item-text ans"><input class="form-check-input" type="radio" name="p' . $i . '" id="p' . $i . '" value="'.$j.'">';
                                    echo '<h2>' . ${'p' . $which . '_choice'}[$i][$j] . '</h2>';
                                    echo '</div></div>';
                                }
                                echo '</div></div></div>';
                            };
                            ?>
                        </div>
                    </div>
                    <div class="btn btn-primary float-right" onclick="document.forms['form'].submit();">
                        <h6>เสร็จแล้ว</h6>
                    </div>
                </form>

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
                        <p>สามารถดูข้อมูลเพิ่มเติมได้ที่ <a href="https://github.com/Alhzz/web_tech">github.com/Alhzz/web_tech</a></p>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class=" pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved |
                                This
                                template is made
                                with
                                <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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