<?php

Class C_connect{
    function connect(){
        $db = mysqli_connect('localhost','root','','testmvc');
        if(mysqli_connect_errno()){
            echo "can't connect database".mysqli_connect_error();
        }
        mysqli_set_charset($db,"utf8");
        return $db;
    }
}