<?php
include_once('models/HomeModel.php');
class HomeController{
    public function index(){
        $menuModel = new HomeModel();
        $data = $menuModel->menu();

        $hotnewModel = new HomeModel();
        $target = $hotnewModel->hotNews_slide();

        $top_news = new HomeModel();
        $val = $top_news->topNews();

        $fb_vietnam = new HomeModel();
        $fb_vn = $fb_vietnam->football_vietnam();

        $fb_vietnam = new HomeModel();
        $fb_vn_right = $fb_vietnam->football_vietnam_right();
        $fb_view = new HomeModel();
        $views = $fb_view->news_views_top();

        $fb_english = new HomeModel();
        $fb_en = $fb_english->football_english();
        $fb_en_view = new HomeModel();
        $fb_en_right = $fb_en_view->football_english_right();

        $fb_english = new HomeModel();
        $fb_bn = $fb_english->football_taybannha();
        $fb_bn_view = new HomeModel();
        $fb_bn_right = $fb_bn_view->football_taybannha_right();

        $fb_english = new HomeModel();
        $fb_italia = $fb_english->football_italia();
        $fb_bn_view = new HomeModel();
        $fb_italia_right = $fb_bn_view->football_italia_right();
        $fb_bn_view = new HomeModel();
        $fb_fasion = $fb_bn_view->fasion_post();
        $fb_other = new HomeModel();
        $other = $fb_other->other_news();
        $news_video = new HomeModel();
        $arr = $news_video->post_video();
        include_once('views/index.php');
    }
//    public function dequy($data,$parent_id){
//        foreach ($data as $val){
//            if ($val['parent_id'] == $parent_id){
//                echo $val['name'];
//                $id = $val['id'];
//                dequy($data,$id);
//            }
//        }
//    }
}