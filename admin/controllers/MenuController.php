<?php
include_once('views/MenuView.php');
include_once('models/MenuModel.php');
class MenuController{
    public function listMenu(){
        $model = new MenuModel();
        $data = $model->listMenu();
        $view = new MenuView();
        $view->listMenu($data);
    }
    public function add(){
        $menuModel = new MenuModel();
        $data = $menuModel ->getMenu();
        $viewMenu = new MenuView();
        $viewMenu->addMenu($data);
    }
    public function addSuccess(){
        if (isset($_POST['btn_success'])){
            $name = $_POST['name'];
            $status = $_POST['status'];
            $parent_id = $_POST['parent_id'];
            $data = [
                'name' => $name,
                'status' => $status,
                'parent_id' =>$parent_id
            ];
            $modelMenu =new MenuModel();
            $sql = $modelMenu->getAdd($data);
            $viewMenu = new MenuView();
            $viewMenu->addMenu($sql);
        }
    }
}