<?php include_once('./config/define.php')?>
<!DOCTYPE html>
<html lang="en">

<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Danh sách quản trị viên</h4>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12" style="float: right;font-size: 17px;">
                    <a href="<?=base_url?>/?controller=Post&action=add"><i class="fa fa-plus" aria-hidden="true"></i> Thêm quản trị viên</a>
                </div>
                <!--                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">-->
                <!--                    <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>-->
                <!--                    <ol class="breadcrumb">-->
                <!--                        <li><a href="#">Dashboard</a></li>-->
                <!--                        <li><a href="#">Table</a></li>-->
                <!--                        <li class="active">Data Table</li>-->
                <!--                    </ol>-->
                <!--                </div>-->
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row" id="test-ajax">
                <div class="col-sm-12" >
                    <div class="white-box">
                        <!--                        <h3 class="box-title m-b-0">Danh sách quản trị viên</h3>-->
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Ảnh</th>
                                    <th>Ngày đăng</th>
                                    <th>status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $item):?>
                                    <tr id="test">
                                        <td><?php echo $item['id']?></td>
                                        <td><?php echo $item['title']?></td>
                                        <td><img src="<?=base_url?>/public/upload/1q.jpg" alt="" width="60"></td>
                                        <td><?php echo $item['star_date']?></td>
                                        <td><?php echo $item['status']?></td>
                                        <td>
                                            <a href="" id="editItem" ><i class="ti-pencil text-success"></i></a> |
                                            <a href="javascript:void(0)" id="delItem" ><i class="ti-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .right-sidebar -->

            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2018 &copy; Nguyễn Khánh N2K </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
</body>
<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-crm/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 09:40:39 GMT -->
</html>
