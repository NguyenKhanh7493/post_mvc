<?php
include_once('models/AuthorModel.php');
include_once('views/AuthorView.php');
class AuthorController{
    public function getList(){
        $modelAuthor = new AuthorModel();
        $data = $modelAuthor->getList();
        $viewAuthor = new AuthorView();
        $viewAuthor->listAuthor($data);
    }
    public function add(){
        $viewAuth = new AuthorView();
        $viewAuth->addAuth();
    }
    public function addSuccess(){
        if (isset($_POST['btn_yes'])){
            if ($_FILES['img']['name']){
                $image = $_FILES['img']['name'];
                $type = pathinfo($image, PATHINFO_EXTENSION);
                $tmp_name = $_FILES['img']['tmp_name'];
                $size = $_FILES['img']['size'];
                if ($type=== 'jpg' || $type === 'gif' || $type === 'png'){
                    if ($size<1048576){
                        if (move_uploaded_file($tmp_name,'public/upload/author/'.$image)){
                            $name= $_POST['name'];
                            $address = $_POST['address'];
                            $age = $_POST['age'];
                            $phone = $_POST['phone'];
                            $status = $_POST['status'];
                            $data = [
                                'name' => $name,
                                'image' => $image,
                                'address' => $address,
                                'age' => $age,
                                'phone' => $phone,
                                'status' => $status
                            ];
                            $authorModel = new AuthorModel();
                            $authorModel->addAuth($data);
                            echo '<script type="text/javascript">alert("Thêm thành công"); window.location.href="http://postmvc.site/admin/?controller=Author&action=listAuth"</script>';
                        }else{
                            echo "Tải ảnh lên thất bại";
                        }
                    }else{
                        echo "kích thước ảnh quá lớn";
                    }
                }else{
                    echo "Nhập sai định dạng ảnh";
                }
            }
        }
    }
    public function edit(){
        if (isset($_GET['id'])){
            $modelAuthor = new AuthorModel();
            $result =  $modelAuthor->getEdit($_GET['id']);
            $viewAuthor = new AuthorView();
            $viewAuthor->editAuth($result);

            if (isset($_POST['btn_Edit'])){
                if ($_FILES['img']['name']){
                    $image = $_FILES['img']['name'];
                    $type = pathinfo($image, PATHINFO_EXTENSION);
                    $tmp_name = $_FILES['img']['tmp_name'];
                    $size = $_FILES['img']['size'];
                    if ($type=== 'jpg' || $type === 'gif' || $type === 'png'){
                        if ($size<1048576){
                            if (move_uploaded_file($tmp_name,'public/upload/author/'.$image)){
                                $name= $_POST['name'];
                                $address = $_POST['address'];
                                $age = $_POST['age'];
                                $phone = $_POST['phone'];
                                $status = $_POST['status'];
                                $data = [
                                    'name' => $name,
                                    'image' => $image,
                                    'address' => $address,
                                    'age' => $age,
                                    'phone' => $phone,
                                    'status' => $status
                                ];
                                $authorModel = new AuthorModel();
                                $target = $authorModel->postEdit($_GET['id'],$data);
                                $authView = new AuthorView();
                                $authView->editAuth($target);
                                echo '<script type="text/javascript">alert("sửa thành công"); window.location.href="http://postmvc.site/admin/?controller=Author&action=getList"</script>';
                            }else{
                                echo "Tải ảnh lên thất bại";
                            }
                        }else{
                            echo "kích thước ảnh quá lớn";
                        }
                    }else{
                        echo "Nhập sai định dạng ảnh";
                    }
                }
            }
        }
    }
}