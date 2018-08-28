<?php include_once('./config/define.php');?>
<!DOCTYPE html>
<html>
<?php include_once('layout/head.php');?>
<body>
<div id="wrapper">
    <?php include_once('layout/header.php');?>
    <!-- END header -->

    <div id="content" class="clearfix">
        <?php include_once('layout/main_content.php');?>
        <!-- END main-content -->

        <?php include_once('layout/sidebar_first_content.php');?><!-- END sidebar-first-->

        <?php include_once('layout/sidebar_right_content.php');?><!-- END sidebar-second -->

    </div><!-- END content -->

    <?php include_once('layout/footer.php');?><!-- END footer -->

</div><!-- END wrapper -->
</body>
</html>
