<?php
ob_start();
session_start(); ?>
<?php
include_once('views/UserView.php');
include_once('models/UserModel.php');
class UserController{
    function __construct()
    {
        if(!isset($_SESSION['user'])){
            header("Location: http://postmvc.site/admin/login");
        }
    }

    public function listUser(){
        $list = new UserModel();
        $data = $list->getList();

        $userview = new UserView();
        $userview->listUser($data);
    }
    public function add(){
        $link = 'http://postmvc/admin/user/add';
            $addUser = new UserView();
            $addUser->addUser($link);
    }
    public function addSuccess(){
        if(isset($_POST['ok'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $address = $_POST['address'];
            $age = $_POST['age'];
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => $pass,
                    'address' => $address,
                    'age' => $age
                ];
                $modelUser = new UserModel();
                $result =  $modelUser->addUser($data);
                $viewUser = new UserView();
                $viewUser->addUser();
            echo '<script language="javascript">alert("Thêm thành công"); window.location.href="http://postmvc.site/admin/user/listUser";</script>';
        }
    }
    public function delete(){
        if($_POST['id']){
            $deleteModel = new UserModel();
            $test = $deleteModel->delete($_POST['id']);
            $list_delete = new UserModel();
            $data = $list_delete->getList();
            die(json_encode($data));
        }
    }
    public function edit(){
        if(isset($_GET['id'])){
            $editPost = new UserModel();
            $target =  $editPost->editPost($_GET['id']);

            $viewEdit = new UserView();
            $viewEdit->editUser($target);

            if(isset($_POST['ok'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $age = $_POST['age'];
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => $pass,
                    'address' => $address,
                    'age' => $age
                ];
                $editModel = new UserModel();
                $result = $editModel->getEdit($data,$_GET['id']);
                $viewEdit = new UserView();
                $viewEdit->editUser($result);
                echo '<script language="javascript">alert("sửa thành công thành công"); window.location.href="http://postmvc.site/admin/user/listUser";</script>';
            }
        }

    }

}