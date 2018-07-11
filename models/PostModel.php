<?php
include_once('config/database.php');
class PostModel extends C_connect {

    public function getPost(){
        $result = $this->connect()->query('SELECT * FROM post');
        $posts = array();
        if($result->num_rows > 0){
            while ($post = mysqli_fetch_assoc($result)){
                $posts[] = $post;
            }
        }
        return $posts;
    }
    public function addPost($data){
        $date = date('Y-m-d');
        $sql = "INSERT INTO `post` (`id`, `title`, `introduction`, `content`, `date`, `thumbnail`, `tag`)
 
                VALUES (NULL, '".$data['title']."', '".$data['introduction']."', '".$data['content']."','".$date."', '".$data['thumbnail']."', '".$data['tag']."')";
        $result = $this->connect()->query($sql);
        return $result;
    }
}