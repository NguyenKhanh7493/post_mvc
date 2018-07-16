<?php
ob_start();
session_start(); ?>
<?php
require_once('views/Common.php');
require_once('models/LoginModel.php');
require_once('views/LoginView.php');
class LoginController{
    public function login(){

        $loginview = new LoginView();
        $loginview->login();
        $email = isset($_POST['email'])?$_POST['email']: '';
        $password = isset($_POST['password'])? md5($_POST['password']): '';
        if (!isset($_SESSION['user'])){
            if ($email != '' && $password != ''){
                $loginmodel = new LoginModel();
                $loginData = $loginmodel->getLogin($email,$password);
                if ($loginData){
                    $_SESSION['user'] = $email;
                    header("Location: http://postmvc.site/admin/?controller=common&action=index");
                }else{
                    require_once('views/LoginView.php');
                    echo "sai ten dang nhap hoac mat khau";
                }
//                return $loginData;
            }else{
                require_once('views/LoginView.php');
            }
        }else{
            header("Location: http://postmvc.site/admin/?controller=common&action=index");
            die();
        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        ob_start();
        header("location:http://postmvc.site/admin/?controller=Login&action=login");
        ob_end_flush();
        exit();
    }
}