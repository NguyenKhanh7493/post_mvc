<?php
include_once('models/ContactModel.php');
class AboutController{
    public function about(){
        $menuModel = new ContactModel();
        $data = $menuModel->menu();
        include_once('views/layout/about/about.php');
    }
}