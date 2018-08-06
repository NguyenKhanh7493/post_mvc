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
    public function getAdd(){
        $db = $this->connect();
    }
}