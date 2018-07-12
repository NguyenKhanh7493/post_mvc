<?php
include_once('config/database.php');
class LoginModel extends C_connect{
    public function getLogin($username,$password){
        $db = $this->connect();
        $result = 'SELECT * FROM `post_mvc` WHERE name = "'.$username.'" and password = "'.$password.'" ';
        print_r($result);die();
        $data = $db->query($result);
        return $loginData = mysqli_fetch_assoc($data);
    }
}