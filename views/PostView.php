<?php
class PostView{
    public function showPost($posts){
        include_once('layout/tintuc.php');
    }
    public function addPostView(){
        require_once('layout/addpost.php');
    }
    public function error($result){
        if ($result){
            echo 'Thanh cong, <a href="http://testmvc.site/?action=list"></a>';
        }else{
            echo 'that bai';
        }
    }
}