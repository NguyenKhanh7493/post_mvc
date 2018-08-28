<?php
class PostView{
    public function listPost($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/post/list.php');
        include_once('layouts/script.php');
    }
    public function addPost($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/post/form.php');
        include_once('layouts/script.php');
    }
    public function editUser($target){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/post/edit.php');
        include_once('layouts/script.php');
    }
}