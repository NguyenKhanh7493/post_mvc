<?php
include_once('views/UserView.php');
include_once('models/UserModel.php');
class UserController{
    public function user(){
        $list = new UserModel();
        $data = $list->getList();
        print_r($data);


        $userview = new UserView();
        $userview->user();
    }
}