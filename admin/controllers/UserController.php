<?php
include_once('views/UserView.php');
include_once('models/UserModel.php');
class UserController{
    public function listUser(){
        $list = new UserModel();
        $data = $list->getList();

        $userview = new UserView();
        $userview->listUser($data);
    }
    public function add(){
            $addUser = new UserView();
            $addUser->addUser();

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
//            }
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

}