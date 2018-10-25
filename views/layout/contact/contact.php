<?php include_once('./config/define.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include('views/layout/head.php'); ?>

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
                <a href="#" class="sidenav__menu-link">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="about.html" class="sidenav__menu-link">About</a></li>
                    <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
                    <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
                    <li><a href="categories.html" class="sidenav__menu-link">Categories</a></li>
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
    <?php include('views/layout/header.php') ?> <!-- end navigation -->
    <!-- Page Title -->
    <section class="page-title">
<!--        <div class="full-overlay"><img src="--><?php //base_url?><!--/admin/public/upload/fullhd.jpg" alt=""></div>-->
<!--        style="background-image: url(img/blog/contact.jpg);"-->
        <div class="full-overlay"></div>
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Liên hệ ngay với chúng tôi</h1>
                <p class="lead white">Hãy cho chúng tôi biết những thắc mắc và những suy nghĩ của bạn để website của chúng tôi khắc phục làm hài lòng của bạn..</p>
            </div>
        </div>
    </section>

    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-12 blog__content mb-30">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8">

                        <h3>Liên hệ</h3>
<!--                        <p>Don't hesitate to get in touch. We will reply you as soon as possible.</p>-->

                        <!-- Contact Form -->
                        <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
                            <div class="contact-name">
                                <label for="name">Tên <abbr title="required" class="required">*</abbr></label>
                                <input name="name" id="name" type="text">
                            </div>
                            <div class="contact-email">
                                <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                                <input name="email" id="email" type="email">
                            </div>
                            <div class="contact-subject">
                                <label for="email">Tiêu đề</label>
                                <input name="subject" id="subject" type="text">
                            </div>
                            <div class="contact-message">
                                <label for="message">Nội dung <abbr title="required" class="required">*</abbr></label>
                                <textarea id="message" name="message" rows="7" required="required"></textarea>
                            </div>

                            <input type="submit" class="btn btn-lg btn-color btn-button" value="Gửi" id="submit-message">
                            <div id="msg" class="message"></div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <?php include('views/layout/footer.php') ?> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<?php include('views/layout/script.php');?>

</body>
</html>