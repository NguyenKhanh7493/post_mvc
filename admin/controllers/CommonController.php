<?php
require_once('views/Common.php');
class CommonController{
    public function index(){
        $viewindex = new Common();
        $viewindex->index();
    }
}