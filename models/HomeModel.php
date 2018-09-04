<?php
include_once('config/database.php');
class HomeModel extends C_connect{
    public function menu(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `type_news` WHERE `parent_id` = 0");
        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }
        return $data;
    }
}