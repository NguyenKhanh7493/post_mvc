<?php
if(!isset($_SESSION))
{
    ob_start();
    session_start();
}
?>
<?php include_once('config/define.php');?>
<div id="sidebar"><div id="sidebar-wrapper">
        <div class="navbar-default sidebar" role="navigation">

            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="<?=base_url?>/asset/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if (isset($_SESSION['user'])) echo $_SESSION['user']?> <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://postmvc.site/admin/?controller=Login&action=logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav" id="side-menu">

                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li> <a href="<?= base_url."/index"?>" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Trang chủ </span></a></li>
                    <li class="nav-small-cap">--- Người dùng</li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">User<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= base_url."/user/add"?>">Thêm</a></li>
                            <li> <a href="<?= base_url."/user/listUser"?>">Danh sách</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-docs fa-fw"></i> <span class="hide-menu">Bài viết<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?=base_url."/?controller=Post&action=add"?>">Thêm</a></li>
                            <li> <a href="<?=base_url."/?controller=Post&action=listPost"?>">Danh sách</a></li>
                        </ul>
                    </li>
<!--                    <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Customers<span class="fa arrow"></span></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li> <a href="crm-customers.html">All Customers</a></li>-->
<!--                            <li> <a href="crm-add-customers.html">Add Customers</a></li>-->
<!--                            <li> <a href="crm-edit-customers.html">Edit Customers</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->

<!--                    <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-handbag fa-fw"></i> <span class="hide-menu">Vendors<span class="fa arrow"></span></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li> <a href="crm-vendors.html">All Vendors</a></li>-->
<!--                            <li> <a href="crm-add-vendors.html">Add Vendors</a></li>-->
<!--                            <li> <a href="crm-edit-vendors.html">Edit Vendors</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-clipboard fa-fw"></i> <span class="hide-menu">Invoice<span class="fa arrow"></span></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li> <a href="crm-invoice.html">All Invoice</a></li>-->
<!--                            <li> <a href="crm-add-invoice.html">Add Invoice</a></li>-->
<!--                            <li> <a href="crm-edit-invoice.html">Edit Invoice</a></li>-->
<!--                            <li> <a href="crm-view-invoice.html">View Invoice</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>-->
<!--                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>-->
<!--                        <ul class="nav nav-second-level">-->
<!--                            <li> <a href="fontawesome.html">Font awesome</a> </li>-->
<!--                            <li> <a href="themifyicon.html">Themify Icons</a> </li>-->
<!--                            <li> <a href="simple-line.html">Simple line Icons</a> </li>-->
<!--                            <li><a href="linea-icon.html">Linea Icons</a></li>-->
<!--                            <li><a href="weather.html">Weather Icons</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
    </div></div>