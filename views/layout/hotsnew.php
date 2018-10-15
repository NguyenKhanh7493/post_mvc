<section class="section mb-20">
    <div class="title-wrap">
        <img src="<?php base_url?>/admin/public/upload/play2.png" alt="" style="width: 25px;height: 25px;float: left;margin-right: 8px;">
        <h3 class="section-title section-title--sm">Video tổng hợp</h3>
        <div class="carousel-nav">
            <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                <i class="ui-arrow-left"></i>
            </button>
            <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                <i class="ui-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Slider -->
    <div id="owl-posts" class="owl-carousel owl-theme">
        <?php foreach ($arr as $val_video):?>
        <article class="entry">
            <div class="entry__img-holder">
                <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $val_video['thumbnail'];?>" src="<?php echo $val_video['thumbnail'];?>" class="entry__img owl-lazy" alt="" />
                    </div>
                </a>
            </div>
            <div class="entry__body">
                <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                        <a href="single-post.html">
                            <span class="img-play">
                                <img src="<?php base_url?>/admin/public/upload/icm05.png" alt="" style="width: 40px;height: 40px;z-index: 0;position: relative;margin: -60px 0 5px 0;display: block;">
                            </span>
                            <?php echo $val_video['title'];?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-comments">
                            <i class="ui-date"></i>
                            <a href="#"><?php echo $val_video['type_name'];?></a>
                        </li>
                        <!-- <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            21 October, 2017
                        </li> -->
                    </ul>
                </div>
            </div>
        </article>
    <?php endforeach;?>
    </div> <!-- end slider -->

</section>