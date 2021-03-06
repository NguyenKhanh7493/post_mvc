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
                <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12" style="float: right;font-size: 17px;">
                    <a href="<?=base_url?>/user/listUser"><i class="fa fa-list" aria-hidden="true"></i> Danh sách quản trị viên</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="white-box">
                        <!--                        <h3 class="box-title m-b-0">Thêm quản trị viên</h3>-->
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <!--                                --><?//=base_url?><!--/user/addSuccess-->
                                <form action="" method="post" name="formAdd" id="formAdd">
                                    <div class="form-group">
                                        <label for="exampleInputName">Họ tên</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $target['name']?>" placeholder="Nhập họ tên" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $target['email']?>" placeholder="Nhập email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Mật khẩu" value="<?php echo $target['email']?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $target['address']?>" placeholder="Nhập địa chỉ" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAge">Tuổi</label>
                                        <input type="text" class="form-control" id="age" name="age" value="<?php echo $target['age']?>" placeholder="Nhập độ tuổi" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1"> Remember me </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="ok">Submit</button>
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
</body>
</html>
