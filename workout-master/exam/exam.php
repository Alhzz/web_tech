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
                        <h2 class="">ตัวอย่างข้อสอบ</h2>
                        <?php
                        $which = $_GET['num'];
                        echo '<p class="lead mx-auto desc mb-5">ชั้นประถมศึกษาปีที่ ' . $which . '</p>';

                        ?>
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
                            $p4_problem = array("1. กายสูง 7 เมตร แอ้นสูง 3 เมตร กายสูงกว่าแอ้นกี่เมตร", 
                            "2. ภูมิมีโกโก้อยู่ 3 แก้วและปองมีโกโก้อยู่ 18 แก้ว รวมกันเป็นกี่แก้ว?", 
                            "3. พี่ไม้มีน้ำตาล 16 ช้อน จะแบ่งใส่จานละเท่าๆกันจะได้กี่จาน?",
                            "4. ขณะนี้เวลา 11.30 นาฬิกา อ่านอย่างไร",
                            "5. เศษหนึ่งส่วนแปดสามารถเขียนในอีกรูปแบบหนึ่งได้อย่างไร",
                            "6. 8.30 อ่านเป็นหน่วยสตางค์และบาทอย่างไร",
                            "7. หน่วยในข้อใดมีความยาวมากที่สุด",
                            "8. 1,980,000 อ่านว่าอะไร",
                            "9. 2 x 18 จะได้ผลลัพธ์เป็นเท่าไหร่",
                            "10 (8 - 4) + 12) จะได้ผลลัพธ์เป็นเท่าไหร่");
                            $p4_choice = array(
                                ["A. 4 เมตร", "B. 5 เมตร", "C. 6 เมตร", "D. 2 เมตร"],
                                ["A. 19 แก้ว", "B. 21 แก้ว", "C. 20 แก้ว", "D. ไม่มีสักแก้ว"],
                                ["A. 10 จาน", "B. 12 แก้ว", "C. 8 จาน", "D. 18 จาน"],
                                ["A. สิบเอ็ดนาฬิกาสามสิบนาที", "B. สิบเอ็ดสามสิบ", "C. สิบเอ็ดจุดสามสิบ", "D. ถูกทุกข้อ"],
                                ["A. 8/1", "B. 1/8", "C. 8/8", "D. 4/4"],
                                ["A. แปดสตางค์สามสิบบาท", "B. แปดนาฬิกาสามสิบบาท", "C. แปดบาทจุดสามสิบบาท", "D. แปดบาทสามสิบสตางค์"],
                                ["A. มิลลิเมตร", "B. เซนติเมตร", "C. กิโลเมตร", "D. เมตร"],
                                ["A. หนึ่งล้านเก้าแสนแปดหมื่น", "B. หนึ่งเก้าแปดศูนย์ศูนย์ศูนย์", "C. หนึ่งล้านเก้าสิบแปดหมื่น", "D. หนึ่งเก้าแปดหมื่น"],
                                ["A. 26", "B. 36", "C. 16", "D. 20"],
                                ["A. 16", "B. 7", "C. 5", "D. ไม่มีข้อใดถูกต้อง"]
                            );
                            $p4_ans = array(1, 2,3, 1,2,4,3,1,2,1);

                            //Grade 5
                            $p5_problem = array(
                                "1. รูปสี่เหลี่ยมชนิดใดไม่มีโอกาสที่มีมุมหนึ่งมุมใดเป็นมุมฉาก", "2. มุม 75 องศา นับต่อไปอีก 15 องศา จะเป็นมุมใด", "3. รูปสามเหลี่ยม ABC เป็นรูปสามเหลี่ยมมุมฉาก มีมุมหนึ่งกาง 60 องศา มุมที่เหลือกางกี่องศา", "4. นำล้อเส้นผ่านศูนย์กลาง 1.5 เมตร มาวางต่อกัน 25 ล้อ จะได้ความยาวทั้งหมดกี่เมตร", "5. 8/12 เท่ากับเศษสส่วนทุกจำนวนข้อใด", "6. 32.68 - 11.52 มีค่าน้อยกว่า 100 อยู่เท่าไร", "7. 3.125 + 5.875 เท่ากับเท่าใด", "8. เมื่อนำร้อยละต่างๆในแผนภูมิวงกลมรวมกันจะได้กี่เปอร์เซ็น", "9. ทรงกระบอกมีฐานหรือหน้าตัดเป็นรูปใด", "10. กล้องไม้ มีความกว้าง 2 เมตร ความยาว 3 เมตร ความสูง 10 เมตร กล่องไม้มีปริมาตรกี่ลูกบาศก์เมตร"
                            );
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
                            $p6_problem = array(
                                "1. จงหา ค.ร.น. ของ 8 และ 2",
                                "2. มีน้ำเชื่อม 4/5 ลิตร ตักใช้ไปครึ่งนึงของน้ำเชื่อมที่มีอยู่ ใช้น้ำเชื่อมไปกี่ลิตร",
                                "3. ในการแข่งขันขี่จักรยาน 1 ชั่วโมง แมนขี่จักรยานได้ระยะทาง 14.675 กิโลเมตร กายขี่จักรยานได้ระยะทาง 14.924 กิโลเมตร กายขี่จักรยานได้ระยะทางมากกว่าหรือน้อยกว่าแมนกี่กิโลเมตร",
                                "4. ภูมิจับกุ้งจากบ่อที่ 1 ได้ 425.5 กิโลกรัม บ่อที่สอง 364.8 กิโลกรัม ขายกิโลกรัมละ 125.50 บาท ขายกุ้งทั้งหมดได้เงินเท่าใด",
                                "5. ไม้มีที่ดิน 31 ไร่ ทำสวนผลไม้ 12.5 ไร่ ที่เหลือแบ่งเป็นแปลง แปลงละ 0.5 ไร่ จะแบ่งได้ทั้งหมดกี่แปลง",
                                "6. รูปสามหลี่ยมด้านเท่ามีความยาวรอบรูป 42 เซนติเมตร ด้านแต่ละด้านของรูปสามเหลี่ยมยาวเท่าใด",
                                "7. จำนวนใดมากกว่า 8 อยู่ 25",
                                "8. หีบใบหนึ่งฐานเป็นรูปสี่เหลี่ยมมุมฉากมีพื้นที่ 625 ตารางเซนติเมตร สูง 32 เซนติเมตร หีบใบนี้มีความจุเท่าใด",
                                "9. จำนวนนักเรียนที่ชอบเล่นกีฬา 3 ชนิด แบตมินตัน 5 คน แชร์บอล 10 คน และฟุตบอล 25 คน จงหาจำนวนนักเรียนที่ชอบเล่นกีฬาฟุตบอล คิดเป็นเศษส่วนเท่าใดของนักเรียนทั้งหมด",
                                "10. จำนวนแสตมป์ประเทศต่างๆที่พีสะสม ไทย 60% อเมริกา 25% ญี่ปุ่น 10% และอื่นๆ 5 % ถ้าพีสะสมแสตมป์ของอเมริกาได้ 100 ดวง จะเป็นแสตมป์ที่สะสมทั้งหมดกี่ดวง"
                            );
                            $p6_choice = array(
                                ["A. 24", "B. 48", "C. 64", "D. 84"],
                                ["A. 5/2 ลิตร", "B. 2/8 ลิตร", "C. 4/8 ลิตร", "D. 2/5 ลิตร"],
                                ["A. แมนขี่จักรยานได้ระยะทางมากกว่ากาย 0.249 กิโลเมตร", "B. กายขี่จักรยานได้ระยะทางมากกว่าแมน 0.249 กิโลเมตร", "C. กายขี่จักรยานได้ระยะทางน้อยกว่าแมน 0.149 กิโลเมตร", "D. แมนขี่จักรยานได้ระยะทางน้อยกว่ากาย 0.149 กิโลเมตร"],
                                ["A. 99,182.65 บาท ", "B. 100,050.85 บาท", "C. 48,998.65 ลิตร", "D. 89,983.85 ลิตร"],
                                ["A. 65 แปลง ", "B. 50 แปลง", "C. 37 แปลง", "D. 85 แปลง"],
                                ["A. 6 เซนติเมตร ", "B. 14 เซนติเมตร", "C. 24 เซนติเมตร", "D. 42 เซนติเมตร"],
                                ["A. 33 ", "B. 42", "C. 49", "D. 56"],
                                ["A. 1,000 ลูกบาศก์เซนติเมตร ", "B. 2,000 ลูกบาศก์เซนติเมตร", "C. 10,000 ลูกบาศก์เซนติเมตร", "D. 20,000 ลูกบาศก์เซนติเมตร"],
                                ["A. 4/9 ของนักเรียนทั้งหมด ", "B. 2/9 ของนักเรียนทั้งหมด", "C. 5/8 ของนักเรียนทั้งหมด", "D. 3/8 ของนักเรียนทั้งหมด"],
                                ["A. 300 ดวง ", "B. 400 ดวง", "C. 500 ดวง", "D. 600 ดวง"]
                            );
                            $p6_ans = array(1, 4, 2, 1, 3, 2, 1, 4, 3, 2);

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
                                    echo '<div class="class-item-text ans"><input class="form-check-input" type="radio" name="p' . $i . '" id="p' . $i . '" value="' . $j . '">';
                                    echo '<h2>' . ${'p' . $which . '_choice'}[$i][$j] . '</h2>';
                                    echo '</div></div>';
                                }
                                echo '</div><div class="col-lg-6">';
                                for ($j = 2; $j < 4; $j++) {
                                    echo '<div class="class-item d-flex align-items-center">';
                                    echo '<div class="class-item-text ans"><input class="form-check-input" type="radio" name="p' . $i . '" id="p' . $i . '" value="' . $j . '">';
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
                        <p>สามารถดูข้อมูลเพิ่มเติมได้ที่ <br><a href="http://10.0.15.12/wtprojects/wtpg26">wtprojects/wtpg26</a></p>
                    </div>
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