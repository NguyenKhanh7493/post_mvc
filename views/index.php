<?php include_once('./config/define.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('layout/head.php');?>

<body class="bg-light">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<main class="main oh" id="main">

    <!-- Navigation -->
    <?php include_once('layout/header.php');?>
    <!-- Featured Posts Grid -->
    <?php include_once('layout/slide.php');?><!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-30">

                <!-- Hot News -->
                <?php include_once('layout/hotsnew.php');?><!-- end hot news -->

                <!-- Latest News -->
                <?php include_once('layout/latestnews.php');?><!-- end latest news -->

                <!-- Ad Banner 728 -->
                <?php include_once('layout/editorpick.php');?><!-- end editors picks -->

                <!-- Posts from categories -->
                <?php include_once('layout/videos.php');?>
                 <!-- end posts from categories -->

                <!-- Carousel posts -->
                <?php include_once('layout/morenews.php');?>
            </div> <!-- end posts -->

            <!-- Sidebar -->
            <?php include_once('layout/sidebar.php');?>
             <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <?php include_once('layout/footer.php');?>
    <!-- end footer -->

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<?php include_once('layout/script.php');?>

</body>
</html>