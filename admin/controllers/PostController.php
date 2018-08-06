<?php
ob_start();
session_start();
include_once('models/PostModel.php');
include_once('views/PostView.php');
class PostController{
    function __construct()
    {
        if(!isset($_SESSION['user'])){
            header("Location: http://postmvc.site/admin/login");
        }
    }

    public function listPost(){
        $modelPost = new PostModel();
        $data = $modelPost->getList();
        $viewPost = new PostView();
        $viewPost->listPost($data);
    }
    public function add(){
        $addPost = new PostView();
        $addPost->addPost();
    }
    public function addSuccess(){
        if (isset($_POST['btn_ok'])){
            $title = $_POST['title'];
            $introduction = $_POST['introduction'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['avatar_name'];
            $img_avatar_name    = '';
            $img_avatar_name = uploadImage($thumbnail,'../uploads/product/');
            $data = [
                'title' => $title,
                'introduction' => $introduction,
                'description' => $description,
                'thumbnail' => $img_avatar_name
            ];
            $addModel = new PostModel($data);
            $addModel->getAdd();
        }
    }
}