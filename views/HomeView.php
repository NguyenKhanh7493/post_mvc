<?php
class HomeView{
    public function listAuthor($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/authors/list.php');
        include_once('layouts/script.php');
    }
    public function addAuth(){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/authors/form.php');
        include_once('layouts/script.php');
    }
    public function editAuth($result){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/authors/edit.php');
        include_once('layouts/script.php');
    }
}