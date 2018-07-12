<?php
class C_connect{
    public function connect(){
        $db = mysqli_connect('localhost','root','','post_mvc');
        if (mysqli_connect_error()){
            echo "can't connect database".mysqli_connect_error();
        }
        mysqli_set_charset($db,'utf8');
        return $db;
    }
}