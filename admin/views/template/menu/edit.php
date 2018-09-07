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
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="white-box">
                        <!--                        <h3 class="box-title m-b-0">Thêm quản trị viên</h3>-->
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="" method="post" name="formAdd" id="formAdd" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName">name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $target['name']?>" placeholder="Nhập tiêu đề" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="1" <?php if($target['status'] == '1') echo "selected='selected'" ?> >1</option>
                                            <option value="2"  <?php if($target['status'] == '2') echo "selected='selected'" ?> >2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputAddress">parent_id</label>
                                        <select class="form-control" id="parent_id" name="parent_id">
                                            <option value="0">Menu Parent</option>
                                            <?php foreach ($listmenu as $item):?>
                                                <?php if ($item['parent_id'] == 0):?>
                                                    <?php if ($target['parent_id'] == $item['id']):?>
                                                        <option value="<?php echo $item['id']?>" selected="selected"><?php echo $item['name']?></option>
                                                    <?php else:?>
                                                        <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                                                        <?php endif; ?>

                                                    <?php foreach ($listmenu as $ite):?>
                                                        <?php if ($item['id'] == $ite['parent_id']):?>
                                                            <option value="<?php echo $ite['id']?>"> -- <?php echo $ite['name']?></option>
                                                        <?php endif;?>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn_edit">Submit</button>
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
