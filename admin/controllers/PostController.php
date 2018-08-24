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
            if ($_FILES['img']['name'] != ''){
                $name = $_FILES['img']['name'];
                $type = pathinfo($name, PATHINFO_EXTENSION);
                $tmp_name = $_FILES['img']['tmp_name'];
                $size = $_FILES['img']['size'];

                if ($type === 'jpg' || $type === 'png' || $type === 'gif'){
                    if ($size < 1048576){
                        if(move_uploaded_file($tmp_name,'public/upload/post/'.$name)){
                            $title = $_POST['title'];
                            $introduction = $_POST['introduction'];
                            $description = $_POST['description'];
                            $status = $_POST['status'];
                            $data = [
                                'title' => $title,
                                'introduction' => $introduction,
                                'description' => $description,
                                'image' => $name,
                                'status' => $status,
                            ];
                            $addModel = new PostModel();
                            $result = $addModel->getAdd($data);
                            $addView = new PostView();
                            $addView->addPost($result);
                            echo '<script type="text/javascript">alert("Thêm thành công");window.location.href="http://postmvc.site/admin/?controller=Post&action=listPost"</script>';
                        }else
                            {
                                echo "Thất bại ở move_upload";
                        }
                    }else{
                        echo "file ảnh quá lớn";
                    }
                }else{
                    echo "Nhập sai đuôi ảnh (mặc định : jpg,gif,png)";
                }
            }
        }
    }
    public function edit(){
        if (isset($_GET['id'])){
            $modelPost = new PostModel();
            $target = $modelPost->postEdit($_GET['id']);
            $viewEdit = new PostView();
            $viewEdit->editUser($target);
            if (isset($_POST['btn_edit'])){
                if ($_FILES['img']['name'] != ''){
                    $name = $_FILES['img']['name'];
                    $type = pathinfo($name, PATHINFO_EXTENSION);
                    $tmp_name = $_FILES['img']['tmp_name'];
                    $size = $_FILES['img']['size'];
                    if ($type === 'jpg' || $type === 'png' || $type === 'gif'){
                        if ($size < 1048576){
                            if(move_uploaded_file($tmp_name,'public/upload/post/'.$name)){
                                $title = $_POST['title'];
                                $introduction = $_POST['introduction'];
                                $description = $_POST['description'];
                                $status = $_POST['status'];
                                $data = [
                                    'title' => $title,
                                    'introduction' => $introduction,
                                    'description' => $description,
                                    'image' =>$name,
                                    'status' => $status
                                ];
                                $editModel = new PostModel();
                                $result = $editModel->getEdit($_GET['id'],$data);
                                $editView = new PostView();
                                $editView->editUser($result);
                                echo '<script language="javascript">alert("sửa thành công thành công"); window.location.href="http://postmvc.site/admin/?controller=Post&action=listPost";</script>';
                            }
                        }
                    }
                }
            }
        }
    }
    public function delete(){
        if ($_POST['id']){
            $deleteModel = new PostModel();
            $result =  $deleteModel->deletePost($_POST['id']);

            $deleteList = new PostModel();
            $data = $deleteList->getList();
            die(json_encode($data));
        }
    }
}