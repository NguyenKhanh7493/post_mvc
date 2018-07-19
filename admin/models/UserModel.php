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
    public function addUser($data){
        $db = $this->connect();
        $sql = "INSERT INTO `users`(`id`,`name`,`email`,`password`,`address`,`age`) VALUES (NULL,'".$data['name']."','".$data['email']."','".MD5($data['password'])."','".$data['address']."','".$data['age']."')";
        $result = $db->query($sql);
        return $result;
    }
    public function delete(){
        $db = $this->connect();
        $id =$_POST['delete_id'];
        $sql = "DELETE FORM users WHERE id='$id'";
        $test = $db->query($sql);
        return $test;

    }
}