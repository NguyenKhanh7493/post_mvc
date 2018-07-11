<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>web bán hàng</title>
    <link rel="stylesheet" href="views/layout/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/layout/asset/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="views/layout/asset/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="views/layout/asset/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="views/layout/asset/css/style.css">
    <style type="text/css">
        #bag-cart {
            color: #406618;
        }
        #text-cart {
            border-bottom: 3px solid #406618;

        }
        #input_search::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            font-style: italic;
        }
        #input_search::-moz-placeholder { /* Firefox 19+ */
            font-style: italic;
        }
        #input_search:-ms-input-placeholder { /* IE 10+ */
            font-style: italic;
        }
        #input_search:-moz-placeholder { /* Firefox 18- */
            font-style: italic;
        }
        #input_search {
            font-style: italic;
            color: #406618;
        }

        .product{
            overflow: hidden;
        }
        .images-title{
            width: 100%
        }
        .rate-star{
            position: relative;
            display: inline-block;
            width: 10px;
            height: 15px;
            line-height: 15px;
            vertical-align: middle;
            font-size: 15px;
            padding: 0px 7px;
        }
        .rate-star.active-star {
            color : #f0ad4e;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="header row">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
                        <div class="phones pull-left">
                            <span><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>01688434788</span></a></span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4"></div>
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 col-xl-4">
                        <ul class="list-inline pull-right">
                            <li class="dropdown dropdown-split-right hidden-xs active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>Tài khoản
                                </a>
                                <ul class="dropdown-menu pull-menu" role="menu" aria-labelledby="dLabel" >
                                    <li class="login"><a href="#">Đăng nhập</a></li><br/>
                                    <li class="regis"><a href="#">Đăng ký</a></li>
                                </ul>
                            </li>
                            <!-- t -->
                            <li class="dropdown dropdown-split-right hidden-xs active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>Tài khoản
                                </a>
                                <ul class="dropdown-menu pull-menu" role="menu" aria-labelledby="dLabel" >
                                    <li style="margin-top: -20px;"><a href="#">Đăng nhập</a></li><br/>
                                    <li style="margin-top: -40px;"><a href="#">Đăng ký</a></li>
                                </ul>
                            </li>
                            <!-- t -->
                            <li class="dropdown">
                                <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Tùy chọn</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">giỏ hàng</a></li>
                                    <li><a href="#">Đăng ký</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-logo">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="logo text-center">
                            <a href="#"><img src="asset/img/logo/logo.png"></a>
                        </div>
                        <div class="cart-top">
                            <div id="cart" class="minibasket radius-5x">
                                <div data-toggle="dropdown" >
                                            <span id="cart-total">

                                                <i class="fa fa-shopping-bag fa-2x" id="bag-cart" aria-hidden="true"></i>
                                                <span id="text-cart">0 sản phẩm - 0đ</span>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="mainmenu navbar-mega-theme">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 header-menu">
                        <ul class="nav navbar-nav megamenu">
                            <li><a href="index.html">TRANG CHỦ</a></li>
                            <li><a href="gioithieu.html">GIỚI THIỆU</a></li>
                            <li><a href="giohang.html">SẢN PHẨM</a></li>
                            <li><a href="tintuc.html">TIN TỨC</a></li>
                            <li><a href="lienhe.html">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <form action="#" class="form-inline">
                            <div class="form-group nav-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input_search" placeholder="Tìm kiếm...">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="nav-title-icon container">
                <div class="home-icon container">
                    <div class="row">
                        <div class="title-news">
                            <ul class="icon-home">
                                <li><a href=""><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 16px;"></i></li>
                                <li><a href="">Tin tức</a></li>
                            </ul>
                        </div>
                        <!--<div class="col-md-12 border-news"></div>-->
                        <div class="col-md-12 post-title row">
                            <h3>Tin tức</h3>
                        </div>
                        <div class="post-news row">
                            <div class="col-md-9 contpost">
                                <?php foreach ($posts as $post):?>
<!--                                    --><?php //print_r($post);?>
                                <div class="list-detail row">
                                    <div class="col-md-3 images-border-news">
                                        <a href="#" class="thumbnail">
                                            <img src="<?php echo $post['thumbnail']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8 title-post">
                                        <a class="title-news" href=""><?php echo $post['title']?></a>
                                        <p style="font-size: 14px;padding-top: 10px;font-family: Noto Sans,sans-serif; ">
                                            <?php echo $post['introduction']?>
                                        </p>
                                        <p><a class="btn btn-sm btn-success" href="#">Chi tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                                        <div class="text-share">
                                            <i class="fa fa-user-circle" style="font-size: 11px;"></i> by <a style="font-size: 11px;" href="#">Khánh n2k</a>
                                            | <i class="fa fa-eye" aria-hidden="true" style="font-size: 14px;"></i> <span style="font-size: 11px; color:#406618;;">3 Lượt xem</span>
                                            | <i class="fa fa-share" style="font-size: 11px;"></i> <a style="font-size: 11px;" href="#">Chia sẻ</a>
                                            | <i class="fa fa-calendar" aria-hidden="true" style="font-size: 11px; "></i> <span style="font-size: 11px; color:#406618;"><?php echo $post['date']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <div class="border-list"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="slide-list">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <p class="title-list">Chuyên mục bài viết</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 posts-detail">
                                                <div class="row">
                                                    <ul class="list-right">
                                                        <li><a href=""><i class="fa fa-hand-o-right" aria-hidden="true"></i> Không gian đẹp cho ngôi nhà</a></li>
                                                        <li><a href=""><i class="fa fa-hand-o-right" aria-hidden="true"></i> Những lợi ích khi có hoa trong nhà</a></li>
                                                        <li><a href=""><i class="fa fa-hand-o-right" aria-hidden="true"></i> Hoa và cuộc sống của bạn</a></li>
                                                        <li><a href=""><i class="fa fa-hand-o-right" aria-hidden="true"></i> Trồng hoa đúng cách</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-border row">
                                        <div class="col-md-12 news-post">
                                            <div class="row">
                                                <p class="title-news-left">Tin mới nhất</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 news-img">
                                            <div class="row">
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Công cụ tình báo hỗ trợ INTERPOL điều tra tội phạm mạng </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Công cụ tình báo hỗ trợ INTERPOL điều tra tội phạm mạng </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Công cụ tình báo hỗ trợ INTERPOL điều tra tội phạm mạng </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Công cụ tình báo hỗ trợ INTERPOL điều tra tội phạm mạng </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Công cụ tình báo hỗ trợ INTERPOL điều tra tội phạm mạng </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-border row">
                                        <div class="col-md-12 news-post">
                                            <div class="row">
                                                <p class="title-news-left">Tin đọc nhiều nhất</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 news-img">
                                            <div class="row">
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Khung cảnh thiên nhiên trong ngôi nhà của bạn </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Ngôi nhà tuyệt đẹp dành cho những người yêu thiên nhiên </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Chúng ta nên làm gì để có không gian sống trong xanh hơn cho ngôi nhà </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-new-right">
                                                    <a href="#">
                                                        <div class="col-md-5 image-right">
                                                            <img src="asset/img/sp-new/r.jpg" alt="ảnh không gian đẹp" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-md-7 content-img">
                                                            <div class="row">
                                                                <p class="title-description">Thiên nhiên và con người - những thứ không thể tách rời </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer row">
        <div class="top-footer-product">
            <div class="nav-top container">
                <div class="footer-top container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-icon row">
                                <ul class="nav nav-bar nav-min-bottom">
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="bottom-mail row">
                                <form action="" class="form-inline new-mail">
                                    <div class="title-mail">
                                        <h3>nhận bản tin</h3>
                                    </div>
                                    <div class="form-group send-mail">
                                        <div class="input-group mail-description">
                                            <input type="text" class="form-control" id="input_mail" placeholder="Nhập email tại đây...">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn icon-mail">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-footer">
            <div class="nav-footer-center container">
                <div class="content-footer">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="home-footer">
                                <div class="title-home">
                                    <a href=""><h5>flower</h5></a>
                                </div>
                                <div class="content-title">
                                    <p>Bạn muốn không gian nhà mình đẹp hơn.Hãy đến với chúng tôi để có 1 không gian đẹp và thoải mái..Không gian sống của bạn là đây..Hãy để chúng tôi làm cho căn nhà bạn được tươi xanh hơn..Không san sống là đây</p>
                                    <div class="address">
                                        <div class="address-title"><strong>Địa chỉ:</strong> Nguyễn Như Khánh - Vĩnh thủy - Vĩnh Linh - Quảng Trị</div>
                                        <div class="phone"><strong>Điện thoại:</strong> 01688434788</div>
                                        <div class="email"><strong>Email:</strong> vinhthuy@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-title">
                            <h5>Thông tin</h5>
                            <ul class="list-title ">
                                <li class="about"><a href="">Về chúng tôi</a></li>
                                <li class="about-security"><a href="">Chính sách bảo mật</a></li>
                                <li class="about-delivery"><a href="">Thông tin giao hàng</a></li>
                                <li class="about-condition"><a href="">Điều khoản và điều kiện</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <!---->
                            <div class="payment"><div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/FacebookVietNam" data-tabs="none" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=829732533863539&amp;container_width=371&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookVietNam&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=none"><span style="vertical-align: bottom; width: 340px; height: 214px;"><iframe name="f205b3586a74f38" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=829732533863539&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FmAiQUwlReIP.js%3Fversion%3D42%23cb%3Df1eeec558c9059%26domain%3Dflower.myzozo.net%26origin%3Dhttps%253A%252F%252Fflower.myzozo.net%252Ff2f73182e669ed8%26relation%3Dparent.parent&amp;container_width=371&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookVietNam&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=none" style="border: none; visibility: visible; width: 340px; height: 214px;" class=""></iframe></span></div> </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="nav-bottom-footer container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 copyright-title">
                            <h6><i class="fa fa-copyright" aria-hidden="true"> Copyright 2018 Khánh love Quảng Trị</i></h6>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--js-->
<script type="text/javascript" src="views/layout/asset/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="views/layout/asset/js/popper.min.js"></script>
<script type="text/javascript" src="views/layout/asset/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="views/layout/asset/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="views/layout/asset/js/myscript.js"></script>
</body>
</html>
