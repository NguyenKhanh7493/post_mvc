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
                    <h4 class="page-title">Thêm menu</h4>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12" style="float: right;font-size: 17px;">
                    <a href="<?=base_url?>/?controller=Menu&action=listMenu"><i class="fa fa-list" aria-hidden="true"></i> Danh sách quản trị viên</a>
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
                                <form action="<?=base_url?>/?controller=Menu&action=addSuccess" method="post" name="formAdd" id="formAdd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName">name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']?>" placeholder="Nhập tiêu đề" required>
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <div class="white-box">-->
<!--                                            <h3 class="box-title">Ảnh đại diện</h3>-->
<!--                                            <input type="file" id="input-file-disable-remove" class="dropify" data-show-remove="false" name="img" />-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleInputEmail1">Địa chỉ</label>-->
<!--                                        <input type="text" class="form-control" id="address" name="address" value="--><?php //if (isset($_POST['address'])) echo $_POST['address']?><!--" placeholder="Nhập giới thiệu" required>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleInputName">Tuổi</label>-->
<!--                                        <input type="text" class="form-control" id="age" name="age" value="--><?php //if (isset($_POST['age'])) echo $_POST['age']?><!--" placeholder="Nhập tiêu đề" required>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="exampleInputName">SĐT</label>-->
<!--                                        <input type="text" class="form-control" id="phone" name="phone" value="--><?php //if (isset($_POST['phone'])) echo $_POST['phone']?><!--" placeholder="Nhập tiêu đề" required>-->
<!--                                    </div>-->
                                    <div class="form-group">
                                        <label for="exampleInputAddress">status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">parent_id</label>
                                        <select class="form-control" id="parent_id" name="parent_id">
                                            <option value="0">Menu Parent</option>
                                                <?php foreach ($data as $item):?>
                                                    <?php if ($item['parent_id'] == 0):?>
                                                        <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                                                        <?php foreach ($data as $ite):?>
                                                            <?php if ($item['id'] == $ite['parent_id']):?>
                                                                <option value="<?php echo $ite['id']?>"> -- <?php echo $ite['name']?></option>
                                                            <?php endif;?>
                                                        <?php endforeach;?>
                                                    <?php endif;?>
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
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn_success">Submit</button>
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
