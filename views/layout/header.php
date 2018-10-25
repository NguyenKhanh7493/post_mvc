<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">
                <!-- Side Menu Button -->
                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
                </button> <!-- end Side menu button -->

                <!-- Mobile logo -->
                <a href="index.html" class="logo logo--mobile d-lg-none">
                    <img class="logo__img" src="<?php base_url?>/assets/img/logo_mobile.png" srcset="<?php base_url?>/assets/img/logo_mobile.png 1x, <?php base_url?>/assets/img/logo_mobile@2x.png 2x" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">
                        <li class="active">
                            <a href="trang-chu">HOME</a>
                        </li>

                        <?php foreach ($data as $item):?>
                            <?php if ($item['parent_id'] == 0):?>
                                <li class="nav__dropdown">
                                    <a href="#"><?php echo $item['name']?></a>
                                        <ul class="nav__dropdown-menu">
                                            <?php foreach ($data as $ite):?>
                                                <?php if ($item['id'] == $ite['parent_id']):?>
                                                    <li><a href="single-post-gallery.html"><?php echo $ite['name']?></a></li>
                                                 <?php endif;?>
                                            <?php endforeach;?>
                                        </ul>
                                </li>
                            <?php endif;?>
                        <?php endforeach;?>
                        <li>
                            <a href="contact">LIÊN HỆ</a>
                        </li>
                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <!-- Nav Right -->
                <div class="nav__right nav--align-right d-lg-flex">

                    <!-- Socials -->
                    <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                        <a class="social social-facebook social--nobase" href="http://facebook.com" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter social--nobase" href="https://google.com" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google social--nobase" href="https://google.com" target="_blank" aria-label="google">
                            <i class="ui-google"></i>
                        </a>
                        <a class="social social-youtube social--nobase" href="https://youtube.com" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram social--nobase" href="https://google.com" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                    </div>

                    <!-- Search -->
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form">
                                <input type="text" placeholder="Search an article" class="nav__search-input">
                                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div> <!-- end nav right -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
<!--end header-->
<div class="header">
    <div class="container">
        <div class="flex-parent align-items-center">

            <!-- Logo -->
            <a href="index.html" class="logo d-none d-lg-block">
                <img class="logo__img" src="<?php base_url?>/assets/img/a.png" srcset="<?php base_url?>/assets/img/a.png 1x, <?php base_url?>/assets/img/a@2x.png 2x" alt="logo">
            </a>

            <!-- Ad Banner 728 -->
            <div class="text-center">
                <a href="#">
                    <img src="<?php base_url?>/assets/img/bbn3.jpg" alt="">
                </a>
            </div>

        </div>
    </div>
</div>
<!--end logo-->
<!--trending now-->