<?php
include_once('views/PostView.php');
class PostController{
    public function getList(){
        $viewPost = new PostView();
        $viewPost->listPost();
    }
}