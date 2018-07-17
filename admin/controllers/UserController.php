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
    }
}