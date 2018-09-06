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
                    <a href="<?=base_url?>/?controller=Menu&action=add"><i class="fa fa-plus" aria-hidden="true"></i> Thêm quản trị viên</a>
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
            <div class="row" id="delete-ajax">
                <div class="col-sm-12" >
                    <div class="white-box">
                        <!--                        <h3 class="box-title m-b-0">Danh sách quản trị viên</h3>-->
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>status</th>
                                    <th>parent_id</th>
                                    <th>tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $item):?>
                                    <?php if ($item['parent_id'] == 0):?>
                                    <tr id="test">
                                        <td><?php echo $item['id']?></td>
                                        <td><?php echo $item['name']?></td>
                                        <td><?php echo $item['status']?></td>
                                        <td><?php echo $item['name']?>
                                            <?php foreach ($data as $target):?>
                                                <?php if($item['id'] == $target['parent_id']):?>
                                                    <li> ++ <?php echo $target['name']?></li>
                                                <?php endif;?>
                                            <?php endforeach;?>
                                        </td>
                                        <td>
                                            <a href="<?=base_url?>/?controller=Post&action=edit&id=<?php echo $item['id']?>" id="editItem" ><i class="ti-pencil text-success"></i></a> |
                                            <a href="javascript:void(0)" id="delItem" onclick="deletePost(<?php echo $item['id']?>);" ><i class="ti-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <style type="text/css">
                                    #test li{
                                        list-style: none;
                                    }
                                </style>
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
