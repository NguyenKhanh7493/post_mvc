<?php
class UserView{
    public function listUser($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/users/listuser.php');
        include_once('layouts/script.php');
    }
    public function addUser(){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/users/formuser.php');
        include_once('layouts/script.php');
    }
}