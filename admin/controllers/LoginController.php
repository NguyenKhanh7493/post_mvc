<?php
require_once('models/LoginModel.php');
require_once('views/LoginView.php');
class LoginController{
    public function login(){
        $viewLogin = new LoginView();
        $viewLogin->login();
        $username = '';
        $password = '';
        if (isset($_POST['btnok'])){
            $username = $_POST['txtname'];
            $password = $_POST['txtpass'];
        }
        $getLogin = new LoginModel();
        $loginData = $getLogin->getLogin($username,$password);
//        print_r($loginData);die();
        if ( $loginData ){
            echo "đăng nhập thành công";
        }else{
            require_once('views/LoginView.php');
            echo 'sai mật khẩu';
        }
    }
}