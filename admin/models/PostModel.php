<?php
include_once('config/database.php');
class PostModel extends C_connect{
    public function getList(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM posts");
        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }
        return $data;
    }
    public function addJoin(){
        $db  =$this->connect();
        $select = "SELECT `authors`.`name` as authorname FROM `posts` INNER JOIN `authors` ON `posts`.`author_id` = `authors`.`id`";
        $sql = $db->query($select);

        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }

        return $data;
    }
    public function getAdd($data){
        $db = $this->connect();
        $date = date('Y/m/d');
        $sql = "INSERT INTO `posts` (`id`,`title`,`introduction`,`description`,`thumbnail`,`star_date`,`status`, `author_id`) VALUES (NULL,'".$data['title']."','".$data['introduction']."','".$data['description']."','".$data['image']."','".$date."','".$data['status']."','".$data['author_id']."')";
        $test = $db->query($sql);
        return $test;
    }
    public function postEdit($id){
        $db = $this->connect();
        $sql = "SELECT * FROM `posts` WHERE id = '".$id."'";
        $result = $db->query($sql);
        $target = mysqli_fetch_array($result);
        return $target;
    }
    public function getEdit($id,$data){
        $db = $this->connect();
        $sql = "UPDATE `posts` SET `title` = '".$data['title']."',`introduction` = '".$data['introduction']."',`description` = '".$data['description']."',`thumbnail` = '".$data['image']."',`status` = '".$data['status']."' WHERE `id` = '".$id."'";
        $result = $db->query($sql);
        return $result;
    }
    public function deletePost($id){
        $db = $this->connect();
        $sql = "DELETE FROM `posts` WHERE `id` = '".$id."' ";
        $result = $db->query($sql);
        return $result;
    }
}