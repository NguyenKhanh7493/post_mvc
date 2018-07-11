<?php
    include_once('models/PostModel.php');
    include_once('views/PostView.php');
    class PostController{
        public function getPost(){
            //lấy danh sách bài viết
            $postModel = new PostModel();
            $posts = $postModel->getPost();

            $postView = new PostView();
            $postView->showPost($posts);
        }
        public function addPost(){
            $addView = new PostView();
            $addView->addPostView();
        }
        public function addSuccess(){
            $title = $_POST['txttitle'];
            $introduction = $_POST['txtintroduction'];
            $content = $_POST['content'];
            $thumbnail = $_POST['txtthumbnail'];
            $tag = $_POST['txttag'];
            $data = [
                'title' => $title,
                'introduction' => $introduction,
                'content' => $content,
                'thumbnail' => $thumbnail,
                'tag' => $tag,
            ];
            $postModel = new PostModel();
            $result = $postModel->addPost($data);

            $postView = new PostView();
            $postView->error($result);
        }
    }