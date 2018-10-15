<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Social Subscribers -->
    <div class="widget widget-social-subscribers">
        <div class="fxthome" style="border:solid 1px #ddd;">
            <div class="tabs-b"><a class="sel" href="http://bongdaplus.vn/ket-qua.html" style="width:100%;">KẾT QUẢ</a>
                <div class="splf"></div><div class="clr"></div>
            </div><div class="tabitm"><table class="fxtbl" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr><th class="grp" colspan="11"> | <b style="font-weight: bold">Champions League C1</b></th></tr>
                    <tr><td class="hme">Porto</td><td class="tme">1-0</td><td class="awy">Galatasaray</td>
                    </tr><tr><td class="hme">PSV Eindhoven</td><td class="tme">1-2</td><td class="awy">Inter Milan</td>
                    </tr><tr><td class="hme">Atletico Madrid</td><td class="tme">3-1</td><td class="awy">Club Brugge</td>
                    </tr><tr><td class="hme">Dortmund</td><td class="tme">3-0</td><td class="awy">AS Monaco</td></tr><tr>
                        <td class="hme">Napoli</td><td class="tme">1-0</td><td class="awy">Liverpool</td></tr><tr>
                        <td class="hme">Tottenham</td><td class="tme">2-4</td><td class="awy">Barcelona</td></tr><tr>
                        <td class="hme">Lokomotiv Moscow</td><td class="tme">0-1</td><td class="awy">Schalke 04</td></tr>
                    <tr><td class="hme">PSG</td><td class="tme">6-1</td><td class="awy">Crvena Zvezda</td></tr><tr><td class="hme">AEK Athens</td><td class="tme">2-3</td>
                        <td class="awy">Benfica</td></tr><tr><td class="hme">Lyonnais</td><td class="tme">2-2</td>
                        <td class="awy">Shakhtar Donetsk</td></tr></tbody></table></div></div>
    </div>
    <style type="text/css">
        .fxthome .tabs {
            background: #ccc;
            font-size: 16px;}
        .fxtbl, .stdtbl {
            font-size: 12px;
            line-height: 24px;}
        table {
            width: 100%;
        }
        .fxtbl .grp, .stdtbl .grp {
            background: #fff;
            border-bottom: solid 1px #aaa;
            font-weight: normal;
            line-height: 20px;
            height: 24px;
            text-align: left;
            text-transform: uppercase;}
        .fxtbl, .stdtbl {
            font-size: 12px;
            line-height: 24px;}
        .fxtbl .hme {
            color: #333;
            font-weight: bold;
            text-align: right;}
        .fxthome td {
            background: #fff;
            padding: 5px 0;
            line-height: 18px;}
        .fxtbl td, .stdtbl td {
            border-bottom: solid 1px #ddd;
            padding: 0 2px;
            text-align: center;
            vertical-align: top;}
        .fxthome .tme, .fxthome .sco {
            width: 60px;
        }
        .fxtbl .tme, .fxtbl .sco, .stdtbl .idx, .fxtbl .tme a, .fxtbl .sco a {
            color: #666;
            font-weight: bold;}
        .fxthome .awy, .fxthome .team {
            width: 115px;
        }
        .fxtbl .awy, .stdtbl .team {
            color: #333;
            font-weight: bold;
            text-align: left;}
        .fxthome .tabs-b a {
            background: #ccc;
            color: #000;
            font-weight: normal;
            padding: 0 10px;
        }
        .tabs-b a {
            display: block;
            font-weight: bold;
            /*float: left;*/
            line-height: 30px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
    <!-- Widget Newsletter -->
    <div class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Subscribe for news</h4>
        <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
                <p>
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                </p>
                <p>
                    <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                </p>
            </div>
        </form>
    </div> <!-- end widget newsletter -->

    <!-- Widget Popular/Latest Posts -->
    <div class="widget widget-tabpost">
        <div class="tabs widget-tabpost__tabs">
            <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active" style="border-bottom: 2px solid #fc6d41;">
                    <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url" style="font-size: 17px;">TIN XEM NHIỀU</a>
                </li>
                <!-- <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Latest</a>
                </li>
                <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Comments</a>
                </li> -->
            </ul> <!-- end tabs -->

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

                <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                    <ul class="post-list-small">
                    <?php foreach($views as $views):?>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="http://postmvc.site/admin/public/upload/post/f448606e61d833855b53eed0ae6c4180.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html"><?php echo $views['title']?></a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            <?php echo $views['views']?> views
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    <?php endforeach;?>
                    </ul>
                </div>

                <!-- <div class="tabs__content-pane" id="tab-latest">
                    <ul class="post-list-small">
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_2.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">How Meditation Can Transform Your Business</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_1.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_3.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_4.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div> -->

                <!-- <div class="tabs__content-pane" id="tab-comments">
                    <ul class="post-list-small">
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_3.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_1.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_2.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">How Meditation Can Transform Your Business</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="single-post.html">
                                            <img data-src="<?php base_url?>/assets/img/blog/popular_post_4.jpg" src="<?php base_url?>/assets/img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div> -->

            </div> <!-- end tab content -->
        </div> <!-- end tabs -->
    </div> <!-- end widget popular/latest posts -->

    <!-- Widget Ad 300 -->
    <div class="widget widget_media_image">
        <a href="#">
            <img src="<?php base_url?>/assets/img/blog/placeholder_300.jpg" alt="">
        </a>
    </div> <!-- end widget ad 300 -->

    <!-- Widget Socials -->
    <div id="fb-root"></div>
<script>
(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>
    <!--  -->
    <div class="widget widget-socials">
        <h4 class="widget-title">LIKE PAGE FACEBOOK</h4>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="272"
         data-width="300" data-height="250" data-small-header="false"
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
    </div> <!-- end widget socials -->

    <!-- Widget Twitter -->
    <div class="widget">
        <h4 class="widget-title">Our tweets</h4>
        <div class="tweets-container">
            <div id="tweets"></div>
        </div>
    </div>

    <!-- Widget Ad 125 -->
    <div class="widget widget-gallery-sm">
        <ul class="widget-gallery-sm__list">
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="<?php base_url?>/assets/img/blog/placeholder_125.jpg" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="<?php base_url?>/assets/img/blog/placeholder_125.jpg" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="<?php base_url?>/assets/img/blog/placeholder_125.jpg" alt=""></a>
            </li>
            <li class="widget-gallery-sm__item">
                <a href="#"><img src="<?php base_url?>/assets/img/blog/placeholder_125.jpg" alt=""></a>
            </li>
        </ul>
    </div> <!-- end widget ad 300 -->

    <!-- Widget Carousel -->
    <div class="widget">
        <h4 class="widget-title">Thời trang sao bóng đá</h4>
        <div id="owl-single" class="owl-carousel owl-theme">
            <?php foreach ($fb_fasion as $fasion):?>
            <article class="entry">
                <div class="entry__img-holder mb-0">
                    <a href="single-post.html">
                        <div class="thumb-bg-holder">
                            <img style="height: 350px;" data-src="<?php base_url?>/admin/public/upload/post/<?php echo $fasion['thumbnail']?>" src="<?php base_url?>/admin/public/upload/post/<?php echo $fasion['thumbnail']?>" class="entry__img owl-lazy" alt="">
                            <div class="bottom-gradient"></div>
                        </div>
                    </a>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="single-post.html"><?php echo $fasion['title']?></a>
                    </h2>
                </div>
            </article>
            <?php endforeach;?>
        </div>
    </div>

    <!-- Latest Reviews -->
    <div class="widget widget-reviews">
        <h4 class="widget-title">Tin liên quan</h4>
        <ul class="post-list-small">
            <?php foreach ($other as $others):?>
            <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                        <div class="thumb-container thumb-75">
                            <a href="single-post.html">
                                <img data-src="<?php base_url?>/admin/public/upload/post/<?php echo $others['thumbnail']?>" src="<?php base_url?>/assets/img/blog/review_post_1.jpg" alt="" class=" lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="post-list-small__body">
                        <h3 class="post-list-small__entry-title">
                            <a href="single-post.html"><?php echo $others['title']?></a>
                        </h3>
<!--                        <ul class="entry__meta">-->
<!--                            <li class="entry__meta-author">-->
<!--                                <i class="ui-author"></i>-->
<!--                                <a href="#">Nguyễn Như Khánh</a>-->
<!--                            </li>-->
<!--                            <li class="entry__meta-date">-->
<!--                                <i class="ui-date"></i>-->
<!--                                --><?php //echo $others['views']?>
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </article>
            </li>
            <?php endforeach;?>
        </ul>
    </div>

    <!-- Widget Tags -->
    <div class="widget widget_tag_cloud">
        <h4 class="widget-title">Tags</h4>
        <div class="tagcloud">
            <a href="#">Magazine</a>
            <a href="#">Creative</a>
            <a href="#">Responsive</a>
            <a href="#">Modern</a>
            <a href="#">Tech</a>
            <a href="#">WordPress</a>
            <a href="#">Website</a>
            <a href="#">News</a>
        </div>
    </div>

</aside>