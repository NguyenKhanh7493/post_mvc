<?php
include_once('config/database.php');
class LoginModel extends C_connect{
    public function getLogin($email,$password){
        $db = $this->connect();
        $result = 'SELECT * FROM `users` WHERE email = "'.$email.'" and password = "'.$password.'" ';
        $data = $db->query($result);
        return $loginData = mysqli_fetch_assoc($data);
    }
}