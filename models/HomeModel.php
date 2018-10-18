<?php
include_once('config/database.php');
class HomeModel extends C_connect{
    public function menu(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `type_news`");
        $data = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $data[] = $result;
            }
        }
        return $data;
    }
    public function hotNews_slide(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_id` = 1 ORDER BY `id` DESC LIMIT 3");
        $target = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $target[] = $result;
            }
        }
        return $target;
    }
    public function topNews(){
        $db = $this->connect();
        $sql = $db ->query("SELECT *, `authors`.`name` as author_name ,`posts`.`thumbnail` as thumbnail_post, `posts`.`id` as post_id
                                  FROM `posts` 
                                  INNER JOIN `authors` ON `posts`.`author_id` = `authors`.`id` 
                                  WHERE `type_id` = 2  
                                  ORDER BY `posts`.`id` DESC LIMIT 2");
        $val = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $val[] = $result;
            }
        }
        return $val;
    }
    public function football_vietnam(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 8 ORDER BY `id` DESC LIMIT 1");
        $fb_vn = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_vn[] = $result;
            }
        }
        return $fb_vn;
    }
    public function football_vietnam_right(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 8 ORDER BY `id` DESC LIMIT 7");
        $fb_vn_right = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_vn_right[] = $result;
            }
        }
        return $fb_vn_right;
    }
    public function news_views_top(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `posts` WHERE `views` ORDER BY `views` DESC LIMIT 4");
        $fb_view = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_view[] = $result;
            }
        }
        // echo "<pre>";
        // print_r($fb_view);
        // echo "/<pre>";    
         return $fb_view;
    }

    public function football_english(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 37 ORDER BY `id` DESC LIMIT 1");
        $fb_en = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_en[] = $result;
            }
        }
        return $fb_en;
    }
    public function football_english_right(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 37 ORDER BY `id` DESC LIMIT 7");
        $fb_en_right = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_en_right[] = $result;
            }
        }
        return $fb_en_right;
    }

    public function football_taybannha(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 33 ORDER BY `id` DESC LIMIT 1");
        $fb_bn = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_bn[] = $result;
            }
        }
        return $fb_bn;
    }
    public function football_taybannha_right(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 33 ORDER BY `id` DESC LIMIT 7");
        $fb_bn_right = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_bn_right[] = $result;
            }
        }
        return $fb_bn_right;
    }
    public function football_italia(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 34 ORDER BY `id` DESC LIMIT 1");
        $fb_italia = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_italia[] = $result;
            }
        }
        return $fb_italia;
    }
    public function football_italia_right(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_news_id` = 34 ORDER BY `id` DESC LIMIT 7");
        $fb_italia_right = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_italia_right[] = $result;
            }
        }
        return $fb_italia_right;
    }
    public function fasion_post(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_id` = 6 ORDER BY `id` DESC LIMIT 3");
        $fb_fasion = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $fb_fasion[] = $result;
            }
        }
        return $fb_fasion;
    }
    public function other_news(){
        $db = $this->connect();
        $sql = $db ->query("SELECT * FROM `posts` WHERE `type_id` = 3 ORDER BY `id` DESC LIMIT 5");
        $other = array();
        if ($sql->num_rows > 0){
            while ($result = mysqli_fetch_assoc($sql)){
                $other[] = $result;
            }
        }
        return $other;
    }
    public function post_video(){
        $db = $this->connect();
        $sql = $db->query("SELECT *,`type_news`.`name` as `type_name` FROM  `posts` 
                                  INNER JOIN `type_news` ON `posts`.`type_news_id` = `type_news`.`id`
                                  WHERE `type_id` = 4
                                  ORDER BY `posts`.`id` DESC LIMIT 6");
        $arr = array();
        if ($sql->num_rows >0){
            while ($result = mysqli_fetch_assoc($sql)){
                $arr[] = $result;
            }
        }
        return $arr;
    }
    public function life_football(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `posts` WHERE `type_id` = 5 ORDER BY `id` DESC LIMIT 1");
        $life = array();
        if ($sql->num_rows >0){
            while ($result = mysqli_fetch_assoc($sql)){
                $life[] = $result;
            }
            return $life;
        }
    }
    public function life_soccer(){
        $db = $this->connect();
        $sql = $db->query("SELECT * FROM `posts` WHERE `type_id` = 5 ORDER BY `id` DESC LIMIT 5");
        $life_soccer = array();
        if ($sql->num_rows >0){
            while ($result = mysqli_fetch_assoc($sql)){
                $life_soccer[] = $result;
            }
            return $life_soccer;
        }
    }
}