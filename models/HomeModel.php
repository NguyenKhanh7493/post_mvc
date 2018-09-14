<?php
include_once('config/database.php');
class HomeModel extends C_connect{
    public function menu(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `type_news`");
        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }
        return $data;
    }
    public function hotNews_slide(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_id` = 1 ORDER BY `id` DESC LIMIT 3");
        $target = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $target[] = $result;
            }
        }
        return $target;
    }
    public function topNews(){
        $db = $this->connect();
        $sql = $db ->query("SELECT *, `authors`.`name` as author_name ,`posts`.`thumbnail` as thumbnail_post, `posts`.`id` as post_id
                                  FROM `posts` 
                                  INNER JOIN `authors` ON `posts`.`author_id` = `authors`.`id` 
                                  WHERE `type_id` = 2  
                                  ORDER BY `posts`.`id` DESC LIMIT 2");
        $val = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $val[] = $result;
            }
        }
        return $val;
    }
}