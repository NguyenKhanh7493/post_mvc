<?php
ob_start();
session_start();
?>
<?php
require_once('views/Common.php');
require_once('models/LoginModel.php');
require_once('views/LoginView.php');
class CommonController{
    function __construct()
    {
        if(!isset( $_SESSION['user'])){
            header("Location: http://postmvc.site/admin/login");
        }
    }
    public function index(){

            $viewindex = new Common();
            $viewindex->index();


    }
}