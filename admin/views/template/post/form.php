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
                                <!--                                --><?//=base_url?><!--/user/addSuccess-->
                                <form action="<?=base_url?>/?controller=Post&action=addSuccess" method="post" name="formAdd" id="formAdd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName">title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title']?>" placeholder="Nhập tiêu đề" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">introduction</label>
                                        <input type="text" class="form-control" id="introduction" name="introduction" value="<?php if (isset($_POST['introduction'])) echo $_POST['introduction']?>" placeholder="Nhập giới thiệu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">description</label>
<!--                                        <input type="password" class="form-control" id="description" name="description" placeholder="Mật khẩu" value="--><?php //if (isset($_POST['description'])) echo $_POST['description']?><!--" required>-->
                                        <textarea rows="10" cols="65" id="description" name="description" placeholder="Nhập nội dung"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="white-box">
                                            <h3 class="box-title">Ảnh bài viết</h3>
                                            <label for="input-file-disable-remove">You can disable remove button</label>
                                            <input type="file" id="input-file-disable-remove" class="dropify" data-show-remove="false" name="img" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputAddress">status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">author</label>
                                        <select class="form-control" id="author_id" name="author_id">
                                            <option>tác giả</option>
                                            <?php foreach ($data as $target):?>
                                            <option><?php echo $target['authorname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleInputAge">date</label>-->
<!--                                        <input type="date" class="form-control" id="date" name="date" value="--><?php //if (isset($_POST['date'])) echo $_POST['date']?><!--" placeholder="Nhập độ tuổi" required>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <div class="checkbox checkbox-success">-->
<!--                                            <input id="checkbox1" type="checkbox">-->
<!--                                            <label for="checkbox1"> Remember me </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn_ok">Submit</button>
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
