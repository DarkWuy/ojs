<!DOCTYPE html>
<html lang="vi-VN" xml:lang="vi-VN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Giới thiệu về Tạp chí
        | TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG
    </title>
    <meta name="generator" content="Hệ thống tạp chí mở 3.3.0.14">
    <link rel="stylesheet" href="http://tapchikhoahoc.vlute.edu.vn/index.php/tc/$$$call$$$/page/page/css?name=stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="http://tapchikhoahoc.vlute.edu.vn/lib/pkp/styles/fontawesome/fontawesome.css?v=3.3.0.14"
        type="text/css" />
    <link rel="stylesheet"
        href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/fontawesome/css/all.min.css?v=3.3.0.14"
        type="text/css" />
    <link rel="stylesheet" href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/mdb/css/mdb.min.css?v=3.3.0.14"
        type="text/css" />
    <link rel="stylesheet" href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/aos/aos.css?v=3.3.0.14"
        type="text/css" />
    <link rel="stylesheet"
        href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/swiper/swiper-bundle.min.css?v=3.3.0.14"
        type="text/css" />
    <style type="text/css">
    .pkp_structure_head {
        background: center / cover no-repeat url("http://tapchikhoahoc.vlute.edu.vn/public/journals/1/homepageImage_vi_VN.jpg");
    }
    </style>
        <link rel="stylesheet" href="css.css"
        type="text/css" />
</head>

<body class="pkp_page_about pkp_op_index has_site_logo" dir="ltr">


    <!-- ======= Header ======= -->
    <?php include './include/header.html' ?>
    <main class="" role="main">
        <a id="pkp_content_main"></a>


        <section class="hero-section inner-page">
            <div class="wave">
                <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path
                                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </svg>

            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center hero-text">
                                <h1 data-aos="fade-up" data-aos-delay="">Khác</h1>
                                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="page page_about container">
            <nav class="cmp_breadcrumbs" role="navigation" aria-label="Bạn đang ở đây:">
                <ol>
                    <li>
                        <a href="http://tapchikhoahoc.vlute.edu.vn/index.php/tc/index">
                            Trang chủ
                        </a>
                        <span class="separator">/</span>
                    </li>
                    <li class="current">
                        <span aria-current="page">
                        Khác
                        </span>
                    </li>
                </ol>
            </nav>
            <div>
                <?php 
                require 'connect.php';
                $query = "SELECT * FROM linkbaiviet";
                $result = $conn->query($query);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $content = $row['tomtat'];
                        $date = $row['ngayxuatban'];
                        $link = $row['duongdan'];
                        $image = $row['anh'];
                        $title = $row['tieude'];
						$nametg = $row['tentg'];
						$ngayxb = $row['ngayxuatban'];
						$dvi = $row['donvi'];
                        ?>
                <div class="listnews_item">
                    <div class="listnews_item_img">
                        <a href="<?php echo $link ?>"><img src="./admin<?php echo $image ?>">
                        </a>
                    </div>
                    <div >
                        <h4> <b><a href="<?php echo $link ?>"><?php echo $title?></a></b> </h4>
                    </div>
                    <div class="listnews_item_date">
                        <span> <b><i>Tác giả:</i></b> &nbsp;<i><?php echo $nametg ?></i> <b> 
                        <br/>    
                        <i>Ngày xuất
                                    bản:</i></b> <i><?php echo date('d-m-Y', strtotime($ngayxb)); ?></i> <b>
                        <br/>   
                        <i>Đơn vị:</i></b>
                            <i><?php echo $dvi ?></i> </span>
                    </div>

                    <div class="listnews_item_des">
                        <p>
                            <span class="fontstyle0"><?php 	if (strlen($content) > 500) {
													echo substr($content, 0, 1000)."...";
												} else {
													echo $content;
												}?></span>
                        </p>

                    </div>
                </div>
                <?php            
                    }
                } else {
                    echo "Không có dữ liệu";
                }
                ?>
            </div><!-- .page -->

            <div class="html-preloader bg-light">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

    </main><!-- _pkp_structure_main -->


    <!-- ======= Footer ======= -->
    <?php include './include/footer.html'?>
    <script src="http://tapchikhoahoc.vlute.edu.vn/lib/pkp/lib/vendor/components/jquery/jquery.min.js?v=3.3.0.14"
        type="text/javascript"></script>
    <script src="http://tapchikhoahoc.vlute.edu.vn/lib/pkp/lib/vendor/components/jqueryui/jquery-ui.min.js?v=3.3.0.14"
        type="text/javascript"></script>
    <script src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/mdb/js/mdb.min.js?v=3.3.0.14"
        type="text/javascript"></script>
    <script src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/aos/aos.js?v=3.3.0.14" type="text/javascript">
    </script>
    <script src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/swiper/swiper-bundle.min.js?v=3.3.0.14"
        type="text/javascript"></script>
    <script src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\js/main.js?v=3.3.0.14" type="text/javascript"></script>



</body>

</html>