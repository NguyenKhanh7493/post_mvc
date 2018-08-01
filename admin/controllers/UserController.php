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

//        if(isset($_POST['ok'])){
//            $name = $_POST['name'];
//            $email = $_POST['email'];
//            $pass = $_POST['pass'];
//            $address = $_POST['address'];
//            $age = $_POST['age'];
//            if ($name = ''){
//                echo "tên không được để trống";
//            }elseif ($email=''){
//                echo "email khong duoc de trong";
//            }elseif ($pass=''){
//                echo 'mat khau trong';
//            }elseif ($address = ''){
//                echo 'khong duoc de trong dia chi';
//            }elseif ($age = ''){
//                echo 'khong dươc de trong tuoi';
//            }elseif (!is_numeric($age)){
//                echo 'tuoi phai la so';
//            }else{
//                $test = new UserModel();
//                $test->addUser();
//            }
//        }
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
                $viewUser->addUser($data);
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
//            $list_delete = new UserModel();
//            $data = $list_delete->getList();
//
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
    }
    public function edit(){
        if(isset($_GET['id'])){
            $editPost = new UserModel();
            $target =  $editPost->editPost($_GET['id']);

            $viewEdit = new UserView();
            $viewEdit->editUser($target);
        }

    }
    public function postEdit(){
        if($_GET['id']){
            echo "ok";
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
                print_r($result);


                $viewEdit = new UserView();
                $viewEdit->editUser($result);
            }
        }
    }

}