<?php
    ob_start();
    require_once __DIR__ . '/../dbconnect.php';
    $page = isset($_GET['page']) ? $_GET['page'] : 'sanpham_danhsach';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./../public/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />

    <link rel="stylesheet" href="./../public/vendor/font-awesome-4.7.0/css/font-awesome.min.css">

    <?php if($page == 'dashboard') : ?>
        <link rel="stylesheet" href="/tocotoco/public/vendor/Chart.js/Chart.min.css">
    <?php endif ?>
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow mb-5">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0"><img src="/tocotoco/public/img/thuonghieu/logo.jpg" width="200" height="50"  alt="thuonghieu"></a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <!-- Nếu đã đăng nhập thì hiển thị nút Đăng xuất -->
                    <a class="btn btn-outline-primary " href="?page=pages_dangky">Đăng ký</a>
                    <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                    <a class="btn btn-outline-warning" href="?page=pages_dangnhap">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>

        <!-- Main content -->
    <div class="container-fluid mt-5">
        <div class="row"></div>
        <div class="row mt-3">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=dashboard">
                                <span data-feather="home"></span>
                                Bảng tin <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    
                        <!-- Menu Loại sản phẩm -->
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=loaisanpham_danhsach">
                                <span data-feather="list"></span>Loại sản phẩm
                            </a>
                        </li>
                        <!-- End Menu Loại sản phẩm -->
                    
                        <!-- Menu Khuyến mãi -->
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=khuyenmai_danhsach">
                                <span data-feather="list"></span>Khuyến mãi
                            </a>
                        </li>
                        <!-- End Menu Khuyến mãi -->
                        
                        <!-- Menu Sản phẩm -->
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=sanpham_danhsach">
                                <span data-feather="list"></span>Sản phẩm
                            </a>
                        </li>
                        <!-- End Menu Sản phẩm -->

                        <!-- Menu Hình Sản phẩm -->
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=hinhsanpham_danhsach">
                                <span data-feather="list"></span>Hình sản phẩm
                            </a>
                        </li>
                        <!-- End Menu Hình Sản phẩm -->

                        <!-- Menu Đơn đặt hàng -->
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=dondathang_danhsach">
                                <span data-feather="list"></span>Đơn đặt hàng
                            </a>
                        </li>
                        <!-- End Menu Đơn đặt hàng -->
                    </ul>
                </div>
            </nav>
            <div class="col-md-9">
                <?php
                    //tạo biến page, nếu tồn tại biến page thì hiện page, nếu chưa có thì xuất hiện trang danh sách sản phẩm
                    $page = isset($_GET['page']) ? $_GET['page'] : 'loaisanpham_danhsach';

                    //page loaisanpham
                    if($page == 'loaisanpham_danhsach'){
                        include('loaisanpham/danhsach.php');
                    }
                    else if($page =='loaisanpham_themmoi'){
                        include('loaisanpham/themmoi.php');
                    }
                    else if($page =='loaisanpham_sua'){
                        include('loaisanpham/sua.php');
                    }
                    else if($page =='loaisanpham_xoa'){
                        include('loaisanpham/xoa.php');
                    }

                    //page sanpham
                    else if($page =='sanpham_danhsach'){
                        include('sanpham/danhsach.php');
                    }
                    else if($page =='sanpham_them'){
                        include('sanpham/them.php');
                    }
                    else if($page =='sanpham_sua'){
                        include('sanpham/sua.php');
                    }
                    else if($page =='sanpham_xoa'){
                        include('sanpham/xoa.php');
                    }
                    

                    //page hinhthucthanhtoan
                    else if($page =='hinhthucthanhtoan_danhsach'){
                        include('hinhthucthanhtoan/danhsach.php');
                    }
                    else if($page =='hinhthucthanhtoan_themmoi'){
                        include('hinhthucthanhtoan/themmoi.php');
                    }
                    else if($page =='hinhthucthanhtoan_sua'){
                        include('hinhthucthanhtoan/sua.php');
                    }
                    else if($page =='hinhthucthanhtoan_xoa'){
                        include('hinhthucthanhtoan/xoa.php');
                    }

                    //page khuyenmai
                    else if($page =='khuyenmai_danhsach'){
                        include('khuyenmai/danhsach.php');
                    }
                    else if($page =='khuyenmai_themmoi'){
                        include('khuyenmai/themmoi.php');
                    }
                    else if($page =='khuyenmai_sua'){
                        include('khuyenmai/sua.php');
                    }
                    else if($page =='khuyenmai_xoa'){
                        include('khuyenmai/xoa.php');
                    }


                    //page hình ảnh
                    else if($page =='hinhsanpham_danhsach'){
                        include('hinhsanpham/danhsach.php');
                    }
                    else if($page =='hinhsanpham_them'){
                        include('hinhsanpham/them.php');
                    }
                    else if($page =='hinhsanpham_xoa'){
                        include('hinhsanpham/xoa.php');
                    }

                    //page đơn đặt hàng
                    else if($page =='dondathang_danhsach'){
                        include('dondathang/danhsach.php');
                    }

                    //page dangnhap
                    else if($page =='pages_dangnhap'){
                        include('pages/dangnhap.php');
                    }
                    //page dangky
                    else if($page =='pages_dangky'){
                        include('pages/dangky.php');
                    }
                    //page dashboard
                    else if($page =='dashboard'){
                        include('pages/dashboard.php');
                    }
                     
                ?>
            </div>
        </div>
    </div>
    
    
    <script src="./../public/vendor/jquery/jquery.min.js"></script>
    <script src="./../public/vendor/popper/popper.min.js"></script>
    <script src="./../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./../public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
   
    <!-- xoa -->
     <?php if($page == 'loaisanpham_danhsach') : ?>
        <script src="./../public/js/loaisanpham/loaisanpham.js"></script>
        

     <?php elseif($page == 'sanpham_danhsach') : ?>
        <script src="./../public/js/sanpham/sanpham.js"></script>

    <?php elseif($page == 'hinhsanpham_danhsach') : ?>
    <script src="./../public/js/hinhsanpham/hinhsanpham.js"></script>
       
    <!-- them -->
    <?php elseif($page == 'sanpham_them') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="public/js/sanpham/sanpham-them-validate.js"></script>

    <?php elseif($page == 'loaisanpham_themmoi') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/loaisanpham/loaisanpham-them-validate.js"></script>

    <?php elseif($page == 'hinhthucthanhtoan_themmoi') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/loaisanpham/hinhthucthanhtoan-them-validate.js"></script>

    <?php elseif($page == 'khuyenmai_themmoi') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/khuyenmai/khuyenmai-them-validate.js"></script>
    
        <!-- sua -->
    <?php elseif($page == 'sanpham_sua') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/sanpham/sanpham-sua-validate.js"></script>


    <?php elseif($page == 'loaisanpham_sua') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/loaisanpham/loaisanpham-sua-validate.js"></script>
    
    <?php elseif($page == 'hinhthucthanhtoan_sua') : ?>
        <script src="./../public/vendor/jqueryvalidation/jquery.validate.min.js"></script>
        <script src="./../public/vendor/jqueryvalidation/localization/messages_vi.min.js"></script>
        <script src="./../public/js/hinhthucthanhtoan/hinhthucthanhtoan-sua-validate.js"></script>
    
        <!-- bieu do -->
    <?php elseif($page == 'dashboard') : ?>
        <script src="./../public/vendor/Chart.js/Chart.min.js"></script>
        <script src="./../public/js/pages/dashboard.js"></script>
    <?php endif ?>
</body>
</html>

