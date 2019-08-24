<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ TOCOTOCO</title>
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />

    <link rel="stylesheet" href="public/vendor/font-awesome-4.7.0/css/font-awesome.min.css">

    <style>
        .navbar{
            background-color: rgba(51, 51, 51, 0.8);    
        }

        .nav-item a{
            color:white;
        }

        .dropdown:hover .dropdown-menu {
            background: rgba(51, 51, 51, 0.8);;
        }

        .dropdown-menu a:hover{
            background: rgba(51, 51, 51, 0.8);;
            color: #FFC125;
        }
        .list-title{
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }
        .card{
            margin: 10px;
            width: 255px;
        }
        
        .card-title{
            font: 23px Muli, Arial;
            height: 50px;
            font-weight: bold;
        }

        a.btnToco{ 
            width: 150px;
            line-height: 35px;
            text-align: center;
            margin: 20px auto;
            border: 1px solid #D3B673;
            color: #fff;
            background: #D3B673;
            text-decoration: none;
        }
        .row a.btnToco:hover{ 
            background: white;
            color: #FFC125;
        }
        .price{
            color: #D3B673;
            font: 20px Muli, Georgia;
            font-weight: bold;
        }
       
       
    </style>

</head>
<body>
    <!-- thannh tiêu đề -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <div class="navbar-header">
                <img src="/tocotoco/hinhanh/logo/thuonghieu.jpg" width="200" height="50"  alt="thuonghieu">
            </div>

            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link active" href="#">Trang chủ</a> </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >Giới thiệu</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Lịch sử và sứ mệnh</a>
                        <a class="dropdown-item" href="#">Thành tựu đạt được</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tin tức</a></li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Kết thúc thanh tiêu đề -->


    <!-- slide-->
    <div id="slide" class="carousel slide" data-ride="carousel">
       
       <ol class="carousel-indicators">
           <li data-target="#slide" data-slide-to="0" class="active"></li>
           <li data-target="#slide" data-slide-to="1"></li>
           <li data-target="#slide" data-slide-to="2"></li>
       </ol>

       <!--Đưa hình vào băng chuyền, căn chỉnh hình bằng nhau-->
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="/tocotoco/hinhanh/slide_anh/aa.jpg" width="100%" height="600"  alt="banner1">
           </div>
           <div class="carousel-item">
               <img src="/tocotoco/hinhanh/slide_anh/qqq.jpg" width="100%" height="600"  alt="banner2">
           </div>
           <div class="carousel-item">
               <img src="/tocotoco/hinhanh/slide_anh/Tocotoco.jpg" width="100%" height="600"  alt="banner3">
           </div>
       </div>

       <!-- Mũi tên trái phải -->
       <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
    </div>
   <!-- end slide -->

   <!-- list product -->
        <div class="container">

            <div class="row" style="margin-top: 30px;">
                <h2 class="list-title" style="font-family: Lucida Console; color: #D3B673; font-weight:bold ">ToCoToCo Menu</h2>
                <h2 class="list-title" style="font-family: Courier New; font-weight:bold; ">SẢN PHẨM NỔI BẬT</h2><br>
                <img src="/tocotoco/hinhanh/logo/home_line.jpg" alt="home_line" style="margin: 20px auto;">
            </div>

            <div class="product-group-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/trasua_tocotoco.jpg" class="card-img-top" alt="trasua_tocotoco">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Trà sữa Tocotoco</h5>
                                <span class="price"><center>35,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/dautam_kemphomai.jpg" class="card-img-top" alt="dautam_kemphomai">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Dâu tằm kem phô mai</h5>
                                <span class="price"><center>48,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/toco_socola.jpg" class="card-img-top" alt="toco_socola">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Toco Socola</h5>
                                <span class="price"><center>45,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/hongtra_vietquat.jpg" class="card-img-top" alt="hongtra_vietquat">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Hồng trà việt quất</h5>
                                <span class="price"><center>38,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card" >
                            <img src="/tocotoco/hinhanh/sanpham/hoanggia_kemphomai.jpg" class="card-img-top" alt="hoanggia_kemphomai">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Hoàng gia kem phô mai</h5>
                                <span class="price"><center>49,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/tradautam_phaletuyet.jpg" class="card-img-top" alt="tradautam_phaletuyet">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Trà dâu tằm pha lê tuyết</h5>
                                <span class="price"><center>42,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/suatuoi_tranchauduongho.jpg" class="card-img-top" alt="suatuoi_tranchauduongho">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Sữa tươi trân châu đường hổ</h5>
                                <span class="price"><center>49,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <img src="/tocotoco/hinhanh/sanpham/hongtra_kemphomai.jpg" class="card-img-top" alt="hongtra_kemphomai">
                            <div class="card-body">
                                <h5 class="card-title" align="center">Hồng trà kem phô mai</h5>
                                <span class="price"><center>45,000 vnd</center></span><br>
                                <a href="#" class="btn btn-outline-warning" >Mua ngay</a> <a href="#" class="btn btn-outline-warning">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="#" class="btnToco">XEM TẤT CẢ</a>
            </div>
        </div>  
   <!-- end list product -->
    
    <!-- story -->
        <div class="container" style="background: url(/tocotoco/hinhanh/story/ddd.jpg); min-height: 300px; width: 100%; margin-top: 50px;">
            <div class="row">
                <div class="col-md-8">
                    <div class="khoi" style="margin-top: 100px;">
                        <h3  style="font-family: Lucida Console; color: #D3B673; font-weight:bold"><center>Tocotoco Story</center></h3>
                        <h2 style="font-family: Courier New; font-weight:bold"><center>VỀ CHÚNG TÔI</center></h2>
                        <img src="/tocotoco/hinhanh/logo/home_line.jpg" alt="home_line" style="margin-left: 200px; margin-bottom: 15px;">
                        <span style="font-family: Lucida Console;"><center>Bên cạnh niềm tự hào về những ly trà sữa ngon – sạch – tươi,<br>
                        chúng tôi luôn tự tin mang đến khách hàng những <br>trải nghiệm tốt nhất về dịch vụ và không gian.</center></span>
					    
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="khoi">
                        <img src="/tocotoco/hinhanh/story/ccc.jpg" alt="...">
                    </div>
                </div>
            </div>   
        </div>
    <!-- end story -->

    <!--footer-->
    <div class="container-fluid" style="background: rgba(51, 51, 51, 0.8); min-height: 300px; width: 100%; margin-top: 50px;">
        <div class="row">
            <div class="col-md-3">
                <div class="logo" style="margin-left: 50px; margin-top: 50px;">
                    <img src="/tocotoco/hinhanh/logo/logo_tocotoco.jpg" alt="...">
                </div>
            </div>

            <div class="col-md-5">
                <div class="footer-info" style="margin-left: 40px; margin-top: 50px;">
                    <h6 style="color: #D3B673;">CÔNG TY CP TM & DV TACO VIỆT NAM</h6><br>
                    <span style="color: white;"><i class="fa fa-map-marker" aria-hidden="true" style="color: #D3B673;"></i> &nbsp; Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.</span><br>
                    <span style="color: white;"> <i class="fa fa-phone" aria-hidden="true" style="color: #D3B673;"></i> &nbsp; 1900.63.69.36</span><br>
                    <i class="fa fa-envelope" aria-hidden="true" style="color: #D3B673;"></i> <a href="mailto:info@tocotocotea.com" style="color: white;"> &nbsp; info@tocotocotea.com</a><br><br>
                    <a href="https://www.facebook.com/tocotocobubbletea/"><i class="fa fa-facebook"  aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true" style="color: #D3B673;"></i></a> &nbsp; &nbsp;
                    <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true" style="color: #D3B673;"></i></a><br><br>
                    <a href="https://apps.apple.com/vn/app/tocotoco/id1249910346">
						<img src="/tocotoco/hinhanh/appstore/Appstore.jpg" alt="Appstore" width="150px" height="40px">
					</a> &nbsp; &nbsp;
                    <a href="https://play.google.com/store/apps/details?id=com.ipos.tocotoco">
						<img src="/tocotoco/hinhanh/appstore/Googleplay.jpg" alt="Googleplay" width="150px" height="40px">
					</a>
                    
                </div>
            </div>

            <div class="col-md-2">
                <div class="we" style=" margin-top: 50px;">
                    <h6 style="color: #D3B673;">VỀ CHÚNG TÔI</h6><br>
                    <span style="color: white;">Giới thiệu về ToCoToCo</span><br>
                    <span style="color: white;">Nhượng quyền</span><br>
                    <span style="color: white;">Hợp tác</span><br>
                    <span style="color: white;">Cửa hàng</span><br>
                    <span style="color: white;">Liên hệ</span><br>
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="chinhsach" style="margin-top: 50px;">
                    <h6 style="color: #D3B673;">CHÍNH SÁCH</h6><br>
                    <span style="color: white;">Quy trình đặt đồ uống</span><br>
                    <span style="color: white;">Hướng dẫn thanh toán</span><br>
                    <span style="color: white;">Bảo mật thông tin</span><br>
                    <span style="color: white;">Giải quyết khiếu nại</span><br>
                        
                </div>
            </div>
        </div>
    </div>
    <!--end footer-->

    <!-- last -->
    <div class="container-fluid" style="background: rgba(51, 51, 51, 0.9); min-height: 50px; width: 100%; color: #D3B673; line-height: 50px; font-family: Comic; font-weight: bold;">
        <div class="row">
            <div class="col-md-8">
                <div class="phuongcham" style="margin-left: 120px;">
                    <span>ToCoToCo - Thương hiệu trà sữa tiên phong sử dụng nguồn nông sản Việt Nam</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <span>Copyrights © 2019 by ToCoToCoTea. All rights reserved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end last -->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
   
</body>
</html>