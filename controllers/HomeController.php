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