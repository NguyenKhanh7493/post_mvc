<?php
include_once('config/database.php');
class AuthorModel extends C_connect{
    public function getList(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `authors`");
        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }
        return $data;
    }
    public function addAuth($data){
        $db = $this->connect();
        $sql = "INSERT INTO `authors`(`id`,`name`,`thumbnail`,`address`,`age`,`phone`,`status`) VALUES (NULL,'".$data['name']."','".$data['image']."','".$data['address']."','".$data['age']."','".$data['phone']."','".$data['status']."')";
        $result = $db->query($sql);
        return $result;
    }
    public function getEdit($id){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `authors` WHERE `id` = '".$id."'");
        $result = mysqli_fetch_array($sql);
        return $result;
    }
    public function postEdit($id,$data){
        $db = $this->connect();
        $sql = "UPDATE `authors` SET `name` = '".$data['name']."',`thumbnail` = '".$data['image']."',`address` = '".$data['address']."',`age` = '".$data['age']."',`phone` = '".$data['phone']."',`status` = '".$data['status']."' WHERE `id` = '".$id."'";
        $target = $db->query($sql);
        return $target;
    }
    public function delete($id){
        $db = $this->connect();
        $sql = "DELETE FROM `authors` WHERE `id` = '".$id."'";
        $result = $db->query($sql);
        return $result;
    }
}