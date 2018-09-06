<?php
class MenuView{
    public function addMenu($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/menu/form.php');
        include_once('layouts/script.php');
    }
    public function listMenu($data){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/menu/list.php');
        include_once('layouts/script.php');
    }
    public function edit($target){
        include_once('layouts/head.php');
        include_once('layouts/menu.php');
        include_once('layouts/slidebar.php');
        include_once('template/menu/edit.php');
        include_once('layouts/script.php');
    }
}