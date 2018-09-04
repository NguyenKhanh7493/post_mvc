<?php
include_once('models/HomeModel.php');
class HomeController{
    public function index(){
        $menuModel = new HomeModel();
        $data = $menuModel->menu();
        print_r($data);
        include_once('views/index.php');
    }
}