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
        $sql = "SELECT * FROM `users` WHERE email = '".$data['email']."'";
        $result = $db->query($sql);
        if (mysqli_num_rows($result) > 0){
            echo '<script language="javascript">alert("Email đã tồn tại"); window.location.href="http://postmvc.site/admin/user/add";</script>';
        }else{
            $sql = "INSERT INTO `users`(`id`,`name`,`email`,`password`,`address`,`age`) VALUES (NULL,'".$data['name']."','".$data['email']."','".MD5($data['password'])."','".$data['address']."','".$data['age']."')";
            $result = $db->query($sql);
        }
        return $result;
    }
    public function delete($id){
        $db = $this->connect();
//        $id =$_POST['delete_id'];
        $sql = "DELETE FROM users WHERE id=".$id;
        $test = $db->query($sql);
        return $test;

    }
    public function getEdit($id,$data){
        $db = $this->connect();
        $sql = "UPDATE `users` SET `name` = '".$data['name']."',`email` = '".$data['email']."',`password` = '".MD5($data['password'])."',`address` = '".$data['address']."',`age` = '".$data['age']."' WHERE `id` = '".$id."' ";
        $result = $db->query($sql);
        return $result;
    }
}