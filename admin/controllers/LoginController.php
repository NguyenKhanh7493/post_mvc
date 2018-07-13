<?php
require_once('views/Common.php');
require_once('models/LoginModel.php');
require_once('views/LoginView.php');
class LoginController{
    public function login(){
//        $viewLogin = new LoginView();
//        $viewLogin->login();
//        $username = '';
//        $password = '';
//        if (isset($_POST['btnok'])){
//            $username = $_POST['txtname'];
//            $password = $_POST['txtpass'];
//        }
//        $getLogin = new LoginModel();
//        $loginData = $getLogin->getLogin($username,$password);
//        print_r($loginData);die();
//        if ( $loginData ){
//            echo "đăng nhập thành công";
//        }else{
//            require_once('views/LoginView.php');
//            echo 'sai mật khẩu';
//        }
        $loginview = new LoginView();
        $loginview->login();
        $email = isset($_POST['email'])?$_POST['email']: '';
        $password = isset($_POST['password'])? md5($_POST['password']): '';
        if ($email != '' && $password != ''){
            $loginmodel = new LoginModel();
            $loginData = $loginmodel->getLogin($email,$password);
            if ($loginData){
                $sucesshome = new Common();
                $sucesshome->index();
            }else{
                require_once('views/LoginView.php');
                echo "sai ten dang nhap hoac mat khau";
            }
            return $loginData;
        }else{
            require_once('views/LoginView.php');
        }
    }
}