<?php
include_once('config/database.php');
class MenuModel extends C_connect{
    public function listMenu(){
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
    public function getMenu(){
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
    public function getAdd($data){
        $db = $this->connect();
        $sql = $db->query("INSERT INTO `type_news` (`id`, `name`, `status`, `parent_id`) VALUES (NULL, '".$data['name']."', '".$data['status']."', '".$data['parent_id']."');");
        return $sql;
    }
    public function getEdit($id){
        $db = $this->connect();
        $result = $db->query("SELECT * FROM `type_news` WHERE id = '".$id."'");
        $target = mysqli_fetch_array($result);
        return $target;
    }
    public function Menulist(){
        $db = $this->connect();
        $data = $db->query("SELECT * FROM `type_news`");
        return $data;
    }
    public function postEdit($id,$data){
        $db = $this->connect();
        $data = $db->query("UPDATE `type_news` SET `name` = '".$data['name']."',`status` = '".$data['status']."',`parent_id` = '".$data['parent_id']."' WHERE `id` = '".$id."'");
        return $data;
    }
}