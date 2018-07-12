<?php
require_once('config/database.php');
class UserModel extends C_connect{
    public function getList(){
        $db = $this->connect();
        $result = $db->query('SELECT * FROM users');
        $data = array();
        if ($result->num_rows >0){
            while ($user = mysqli_fetch_assoc($result)){
                $data[] = $user;
            }
        }
        return $data;
    }
}