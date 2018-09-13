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
    public function hotNews(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` ORDER BY `id` DESC LIMIT 4");
        $target = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $target[] = $result;
            }
        }
        return $target;
    }
}