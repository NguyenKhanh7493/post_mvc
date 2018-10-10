<section class="section editors-picks mb-20">
    <div class="title-wrap">
        <h3 class="section-title">ITALIA</h3>
        <!-- <a href="#" class="all-posts-url">View All</a> -->
    </div>
    <div class="row">
        <?php foreach ($fb_en as $item):?>
            <div class="col-lg-7">
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="single-post.html">
                        <div class="thumb-container thumb-75">
                            <img data-src="http://postmvc.site/admin/public/upload/post/rj.jpg" src="<?php base_url?>/assets/img/empty.png" class="entry__img lazyload" alt="" />
                        </div>
                    </a>
                </div>

                <div class="entry__body">
                    <div class="entry__header">
<!--                        <a href="#" class="entry__meta-category">science</a>-->
                        <h2 class="entry__title">
                            <a href="single-post.html"><?php echo $item['title']?></a>
                        </h2>
<!--                        <ul class="entry__meta">-->
<!--                            <li class="entry__meta-author">-->
<!--                                <i class="ui-author"></i>-->
<!--                                <a href="#">DeoThemes</a>-->
<!--                            </li>-->
<!--                            <li class="entry__meta-date">-->
<!--                                <i class="ui-date"></i>-->
<!--                                21 October, 2017-->
<!--                            </li>-->
<!--                            <li class="entry__meta-comments">-->
<!--                                <i class="ui-comments"></i>-->
<!--                                <a href="#">115</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="entry__excerpt">
                        <p><?php echo $item['introduction']?></p>
                    </div>
                </div>
            </article>

        </div>
        <div class="col-lg-5">
            <?php foreach ($fb_en_right as $result):?>
            <ul class="post-list-small">
                <li class="post-list-small__item">
                    <article class="post-list-small__entry">
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title" id="border-name">
                                <a href="single-post.html"><?php echo $result['title']?></a>
                            </h3>
                            <ul class="entry__meta">
                                <li class="entry__meta-date">
<!--                                    <i class="ui-date"></i>-->
<!--                                    21 October, 2017-->
                                </li>
                            </ul>
                        </div>
                    </article>
                </li>
            </ul>
            <?php endforeach;?>
        </div>
        <style type="text/css">
            #border-name{
                border-bottom: solid #f3f3f3 0.25px;
                padding: 0px 0px 6px;
            }
        </style>
        <?php endforeach;?>
    </div>
</section>