<!doctype html>
<html lang="th">
<?php 
include_once('_Php_Script/header.php');
include('_Php_Script/connect.php'); ?>
<body class="bg-dark text-white">
<?php include('_Php_Script/nav.php'); ?>
<style>
        .custom-image {
            width: 100%;
            height: calc(100vh - 70px);
            object-fit: cover;
            margin-top: 70px;
        }
    </style>
</head>

<div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="IMG_PNG/IMG_20250213_133102.jpg" class="d-block w-100 custom-image" alt="รูปภาพ 1">
            <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                <h1 class="text-white p-3 rounded custom-bg">
                    ยินดีต้อนรับสู่เว็บไซต์ สโมสรนักศึกษา SCI-RMUTP<br>
                    ศูนย์กลางกิจกรรมและโครงการเพื่อเพื่อนนักศึกษา!
                </h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="IMG_PNG/IMG_20250213_140042.jpg" class="d-block w-100 custom-image" alt="รูปภาพ 2">
            <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                <h1 class="text-white p-3 rounded custom-bg">เข้าร่วมกิจกรรมสนุก ๆ ไปกับเรา!</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="IMG_PNG/IMG_20250213_140032.jpg" class="d-block w-100 custom-image" alt="รูปภาพ 3">
            <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                <h1 class="text-white p-3 rounded custom-bg">ติดตามข่าวสารและกิจกรรมล่าสุดได้ที่นี่!</h1>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    /* ทำให้ Carousel มีขอบมน */
    .custom-carousel {
        border-radius: 20px; /* ขอบมน */
        overflow: hidden; /* ป้องกันภาพเกินขอบ */
    }

    /* ปรับสไตล์พื้นหลังข้อความ */
    .custom-bg {
        background-color: rgba(0, 0, 0, 0.6); /* สีดำโปร่งแสง 60% */
        border-radius: 15px; /* มุมมน */
        padding: 10px 20px;
    }

    /* ปรับให้ข้อความอยู่กลาง */
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 80%; /* ปรับขนาดให้พอดี */
    }
</style>



<?php include('_Php_Script/body.php'); ?>
<?php include('_Php_Script/offnav.php'); ?>

</body>

</html>
