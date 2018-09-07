<?php
ob_start();
session_start(); ?>
<?php
include_once('views/MenuView.php');
include_once('models/MenuModel.php');
class MenuController{
    function __construct()
    {
        if(!isset($_SESSION['user'])){
            header("Location: http://postmvc.site/admin/login");
        }
    }

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
    public function edit(){
        if (isset($_GET['id'])){
            $model = new MenuModel();
            $target =  $model->getEdit($_GET['id']);
            $modelMenu = new MenuModel();
            $listmenu = $modelMenu->listMenu();
            $view = new MenuView();
            $view->edit($target, $listmenu);
            if (isset($_POST['btn_edit'])){
                $name = $_POST['name'];
                $status = $_POST['status'];
                $parent_id = $_POST['parent_id'];
                $data = [
                    'name' => $name,
                    'status' => $status,
                    'parent_id' =>$parent_id
                ];
                $modelEdit =new MenuModel();
                $sql = $modelEdit->postEdit($_GET['id'],$data);
            }
        }
    }
}