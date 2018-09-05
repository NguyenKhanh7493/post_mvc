<?php
include_once('config/database.php');
class MenuModel extends C_connect{
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
        $sql = $db->query("INSERT INTO `type_news` (`id`,`name`,`status`,`parent_id`) VALUES (NULL,'".$data['name']."','".$data['status']."','".$data['parent_id']."')");
        return $sql;
    }
//    public function potsAdd($data){}
}