<?php
include_once('models/UserModel.php');
class UserController{
    public function getList(){
        $list = new UserModel();
        $data = $list->getList();
        print_r($data);
    }
}