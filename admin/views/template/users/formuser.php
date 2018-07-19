<?php include_once('./config/define.php');?>
<!DOCTYPE html>
<html lang="en">

<body class="fix-sidebar">
<!-- Preloader -->
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Thêm quản trị viên</h4>
                </div>
<!--                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">-->
<!--                    <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>-->
<!--                    <ol class="breadcrumb">-->
<!--                        <li><a href="#">Dashboard</a></li>-->
<!--                        <li><a href="#">Ui Elements</a></li>-->
<!--                        <li class="active">Notifications</li>-->
<!--                    </ol>-->
<!--                </div>-->
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="white-box">
<!--                        <h3 class="box-title m-b-0">Thêm quản trị viên</h3>-->
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="<?=base_url?>/user/addSuccess" method="post" name="fomAdd">
                                    <div class="form-group">
                                        <label for="exampleInputName">Họ tên</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']?>" placeholder="Nhập họ tên">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']?>" placeholder="Nhập email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']?>" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAge">Tuổi</label>
                                        <input type="text" class="form-control" id="age" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']?>""  placeholder="Nhập độ tuổi">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1"> Remember me </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="ok" onclick="return checkForm();">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <footer class="footer text-center"> 2018 &copy; Nguyễn Khánh N2K </footer>
    </div>
</div>
<script>
    function checkForm(){
        var name = $('#name').val();
        var email = $('#email').val();
        var pass = $('#pass').val();
        var address = $('#address').val();
        var age = $('#age').val();
        if(name ==''){
            $('.error').html('bạn chưa nhập tên');
            $('.error').show();
            return false;
        }
        if(email ==''){
            $('.error').html('bạn chưa nhập tên');
            $('.error').show();
            return false;
        }
        if(pass ==''){
            $('.error').html('bạn chưa nhập tên');
            $('.error').show();
            return false;
        }
        if(address ==''){
            $('.error').html('bạn chưa nhập tên');
            $('.error').show();
            return false;
        }
        if(age ==''){
            $('.error').html('bạn chưa nhập tên');
            $('.error').show();
            return false;
        }
        $("form[name='fomAdd']").submit();
    }

</script>
</body>
</html>
