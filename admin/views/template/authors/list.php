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
            <div class="row" id="delete-ajax">
                <div class="col-sm-12" >
                    <div class="white-box">
                        <!--                        <h3 class="box-title m-b-0">Danh sách quản trị viên</h3>-->
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Địa chỉ</th>
                                    <th>Tuổi</th>
                                    <th>Điện thoại</th>
                                    <th>Status</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $item):?>
                                <tr id="test">
                                        <td><?php echo $item['id']?></td>
                                        <td><?php echo $item['name']?></td>
                                        <td><img src="<?=base_url?>/public/upload/author/<?php echo $item['thumbnail']?>" alt="" width="60"></td>
                                        <td><?php echo $item['address']?></td>
                                        <td><?php echo $item['age']?></td>
                                        <td><?php echo $item['phone']?></td>
                                        <td><?php echo $item['status']?></td>
                                        <td>
                                            <a href="<?=base_url?>/?controller=Author&action=edit&id=<?php echo $item['id']?>" id="editItem" ><i class="ti-pencil text-success"></i></a> |
                                            <a href="javascript:void(0)" id="delItem" onclick="deleteAuthor(<?php echo $item['id']?>)"><i class="ti-trash text-danger"></i></a>
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
<script type="text/javascript">
    function deleteAuthor(id) {
        if (confirm('bạn có muốn xóa ' +id+ ' không')){
            $.ajax({
                url: 'http://postmvc.site/admin/?controller=Author&action=delete',
                type: 'POST',
                dataType: 'json',
                data:{id:id},
                success:function (data) {
                    var result = '';
                    $.each(data,function (key,item) {
                        var htmlx =
                            '<tr>' +
                                '<td>'+ item.id + '</td>'+
                                '<td>'+ item.name + '</td>'+
                                '<td><img src="http://postmvc.site/admin/public/upload/author/'+item.thumbnail+'" width="60"/> </td>'+
                                '<td>'+ item.address + '</td>'+
                                '<td>'+ item.age + '</td>'+
                                '<td>'+ item.phone + '</td>' +
                                '<td>'+ item.status + '</td>' +
                                '<td>' +
                                '<a href="http://postmvc.site/admin/?controller=Author&action=edit&id='+item.id+'" id="editItem" >' +
                                '<i class="ti-pencil text-success">' +
                                '</i>' +
                                '</a>' + '|' +

                                '<a href="javascript:void(0)" id="delItem" onclick="deleteAuthor('+item.id+');">' +
                                '<i class="ti-trash text-danger">' +
                                '</i>' +
                                '</a>' +
                                '</td>' +
                            '</tr>';

                        result += htmlx;
                    });
                    $("#delete-ajax").html(
                        '<div class="col-md-12">' +
                            '<div class="white-box">' +
                                '<div class="table-responsive">' +
                                    '<table id="myTable" class="table table-striped">' +
                                        '<thead>' +
                                            '<tr>' +
                                                '<th>' + 'ID' + '</th>' +
                                                '<th>' + 'Tên' + '</th>' +
                                                '<th>' + 'Ảnh' + '</th>' +
                                                '<th>' + 'Địa chỉ' + '</th>' +
                                                '<th>' + 'Tuổi' + '</th>' +
                                                '<th>' + 'Điện thoại' + '</th>' +
                                                '<th>' + 'status' + '</th>' +
                                                '<th>' + 'Tùy chọn' + '</th>' +
                                            '</tr>' +
                                        '</thead>' +
                                        '<tbody>' +
                                            result +
                                        '</tbody>' +
                                    '</table>' +
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                }
            });
        }
    }
</script>
</body>
<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-crm/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 09:40:39 GMT -->
</html>
