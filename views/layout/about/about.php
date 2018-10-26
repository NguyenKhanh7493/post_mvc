<?php include_once('config/define.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('views/layout/head.php'); ?>

<body class="bg-light single-post">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <!-- Categories -->
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">World</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Business</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Politics</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Lifestyle</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--purple">Tech</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--yellow">Fashion</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Sport</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Science</a>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Posts</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="single-post-gallery.html" class="sidenav__menu-link">Gallery Post</a></li>
                    <li><a href="single-post.html" class="sidenav__menu-link">Video Post</a></li>
                    <li><a href="single-post.html" class="sidenav__menu-link">Audio Post</a></li>
                    <li><a href="single-post-quote.html" class="sidenav__menu-link">Quote Post</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="about.html" class="sidenav__menu-link">About</a></li>
                    <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
                    <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
                    <li><a href="categories.html" class="sidenav__menu-link">Categories</a></li>
                    <li><a href="shortcodes.html" class="sidenav__menu-link">Shortcodes</a></li>
                    <li><a href="lazyload.html" class="sidenav__menu-link">Lazyload</a></li>
                    <li><a href="404.html" class="sidenav__menu-link">404</a></li>
                </ul>
            </li>

            <li>
                <a href="about.html" class="sidenav__menu-link">About</a>
            </li>

            <li>
                <a href="contact.html" class="sidenav__menu-link">Contact</a>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Advertise</a>
            </li>
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
            <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
        </a>
    </div>
</header> <!-- end sidenav -->


<main class="main oh" id="main">

    <!-- Navigation -->
    <?php include_once('views/layout/header.php')?> <!-- end navigation -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url('http://postmvc.site/admin/public/upload/fullhd2.jpg');">
        <div class="full-overlay"></div>
<!--        <div class="container">-->
<!--            <div class="page-title__holder">-->
<!--                <h1 class="page-title__title">About AhaMag</h1>-->
<!--                <p class="lead white">AhaMag was founded in 2001 and we are still in a business. How about this, we offer you the best magazine on the market.</p>-->
<!--            </div>-->
<!--        </div>-->
    </section>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-12 blog__content mb-30">
                <div class="row">
                    <div class="col-md-6 mb-30">
                        <h2>Chúng tôi mong muốn là thông tin của bạn</h2>
                        <p class="lead mb-20">Nhằm đáp ứng nhu cầu thông tin của bạn đọc.Chúng tôi luôn mang lại những tin tức mới nhất và chất lượng nhất.Những thông tin mới nhất sẽ được gửi đến bạn đọc 1 cách chính xác nhất..chúng tôi luôn muốn là người đồng hành cùng bạn trong lĩnh vực thông tin.</p>

                    </div>
                    <div class="col-md-6">
                        <img data-src="img/blog/about_img.jpg" src="img/empty.png" class="lazyload" alt="">
                    </div>
                </div>

                <div class="row mt-60">
                    <div class="col-md-6">
                        <img data-src="img/blog/about_img_2.jpg" src="img/empty.png" class="lazyload" alt="">
                    </div>
                    <div class="col-md-6 mb-30">
                        <h2>Hãy để chúng tôi phục vụ bạn</h2>
                        <p class="lead mb-20">Chúng tôi sẽ hết lòng phục vụ nhu cầu tin tức bạn doocoj bởi những tin tức ngoại hạng anh và nhiều giải đấu hấp dẫn khác.Nếu có vấn đề gì khiến bạn không hài lòng hãy gửi ý kiến của bạn ngay cho chúng tôi qua địa chỉ :
                            <a href="contact">Liên hệ</a> ..xin cảm ơn tất cả bạn đọc</p>
                    </div>
                </div>

            </div> <!-- end col -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <?php include('views/layout/footer.php');?>

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<?php include_once('views/layout/script.php'); ?>

</body>
</html>