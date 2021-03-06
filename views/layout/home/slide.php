<div class="trending-now">
    <div class="container relative">
        <span class="trending-now__label">Tin cập nhật</span>
        <ul class="newsticker">
            <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">Hình ảnh áo đấu các đội bóng đá Ngoại hạng anh mùa 2018/2019</a></li>
            <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">Hình ảnh các cầu thủ MU trên sân tập</a></li>
            <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">L.Shaw có thể quay trở lại trận đấu cuối tuần này sau chấn thương</a></li>
        </ul>
        <div class="newsticker-buttons">
            <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
            <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
</div>
<section class="featured-posts-grid bg-dark">
    <div class="container clearfix">

        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg carousel slide" data-ride="carousel">
            <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

                <?php foreach ($target as $item):?>
                    <article class="entry featured-posts-grid__entry item">
                        <div class="thumb-bg-holder owl-lazy" data-src="<?php base_url?>/admin/public/upload/post/<?php echo $item['thumbnail']?>">
                            <img src="<?php base_url?>/admin/public/upload/post/<?php echo $item['thumbnail']?>" alt="" class="d-none">
                            <a href="single-post.html" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">HOT NEWS</a>
                            <h2 class="thumb-entry-title">
                                <a href="single-post.html"><?php echo $item['title']?></a>
                            </h2>
                        </div>
                    </article>
                <?php endforeach;?>
            </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->
        <?php foreach ($val as $k):?>
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry featured-posts-grid__entry">
                <div class="thumb-bg-holder" style="background-image: url(<?php base_url?>/admin/public/upload/post/<?php echo $k['thumbnail_post']?>);">
                    <a href="single-post.html" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="single-post.html"><?php echo $k['title']?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="#"><?php echo $k['author_name']?></a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            <?php echo $k['star_date']?>
                        </li>
<!--                        <li class="entry__meta-comments">-->
<!--                            <i class="ui-comments"></i>-->
<!--                            <a href="#">115</a>-->
<!--                        </li>-->
                    </ul>
                </div>
            </article>
        </div>
        <?php endforeach;?>
</section>