<div class="title-wrap bottom-line bottom-line--orange">
    <img src="<?php base_url?>/admin/public/upload/bd.png" alt="" style="width: 70px;height: 45px;float: left;margin-right: 8px;">
    <h3 class="section-title section-title--sm" style="border-bottom: double red;margin-top: 8px;">Bóng đá & cuộc sống</h3>
</div>
<div class="slide-video">
    <section class="section mb-0">
        <div class="row">
            <!-- World -->
            <div class="col-md-12 mb-30">

<!--                border: double 4px red;border-radius: 3px;-->
                <?php foreach ($life as $life1):?>
                <article class="entry" style="margin-bottom: -15px;border-bottom: dotted 1px red;">
                    <div class="entry__img-holder">
                        <a href="single-post.html">
                            <div class="thumb-container thumb-75">
                                <img data-src="<?php base_url?>/admin/public/upload/post/<?php echo $life1['thumbnail']?>" class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                    </div>
                </article>
                <?php endforeach;?>
            </div> <!-- end world -->

            <!-- Science -->
            <!-- end business -->

        </div>
    </section>
    <!--            test nè-->
    <div class="row blog">
        <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

<!--                <ol class="carousel-indicators">-->
<!--                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>-->
<!--                    <li data-target="#blogCarousel" data-slide-to="1"></li>-->
<!--                </ol>-->

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <?php foreach ($life_image as $life_image1):?>
                                <?php if ($life[0]['id'] != $life_image1['id']):?>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="<?php base_url?>/admin/public/upload/post/<?php echo $life_image1['thumbnail']?>" alt="Image" style="max-width:100%;">
                                    <h3 class="entry__title_h3"><?php echo $life_image1['title']?></h3>
                                </a>
                            </div>
                                    <?php endif;?>
                            <?php endforeach;?>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->

        </div>
    </div>
</div>
<style type="text/css">
    .blog .carousel-indicators {
        left: 0;
        top: auto;
        bottom: -40px;

    }

    /* The colour of the indicators */
    .blog .carousel-indicators li {
        background: #a3a3a3;
        border-radius: 50%;
        width: 8px;
        height: 8px;
    }

    .blog .carousel-indicators .active {
        background: #707070;
    }
    .entry__title_h3{
        font-size: 16px;
        line-height: 1.4;
        margin-top: 3px;
        margin-bottom: 5px;
        font-weight: 600;
    }
    .slide-video{
        border: double 4px #e12;
        padding: 5px;
    }
</style>
<!--            test nè-->