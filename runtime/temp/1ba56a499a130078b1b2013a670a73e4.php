<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\1228\public/../application/admin\view\auth_group\add.html";i:1516698954;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\head.html";i:1516426479;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\foot.html";i:1514618874;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__style/weather-icons.css" rel="stylesheet">
    <script src="__ADMIN__style/jquery.min.js"></script>
    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__style/demo.css" rel="stylesheet">
    <link href="__ADMIN__style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="__ADMIN__images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__images/adam-jansen.jpg">
                                </div>



                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('autologin.name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('publics/outlogin'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('user/edit',['id'=>\think\Request::instance()->session('autologin.id')]); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input class="searchinput" type="text">
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('user/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('authGroup/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('authRule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">分类管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        分类列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">文档</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">系统</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!-- /Sidebar Menu -->
        </div>
    </div>
</div>

<!-- /Page Sidebar -->
<!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="<?php echo url('lst'); ?>">用户组管理</a>
            </li>
            <li class="active">添加用户组</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">新增用户组 </span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" enctype="multipart/form-data" id="formArticle" role="form" action="" method="post"  >
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label no-padding-right">用户组名称</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="title" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label no-padding-right">启用状态</label>
                                    <div class="col-sm-6">
                                        <p class="help-block col-sm-4 red">
                                            <label>
                                                <input class="checkbox-slider colored-darkorange" name="status" value="1" checked="checked" type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </p>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>

                                </div>
                                <div class="form-group">

                                    <label for="status" class="col-sm-2 control-label no-padding-right">用户组权限</label>
                                    <div class="col-xs-12 col-md-6">
                                        <table class="table table-hover">
                                            <tbody>
                                            <?php  $level = 0; $a = 0; if(is_array($rules) || $rules instanceof \think\Collection || $rules instanceof \think\Paginator): $i = 0; $__LIST__ = $rules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule): $mod = ($i % 2 );++$i;?>

                                            <tr  <?php 
                                                 if( $rule['level'] != $level ){
                                            if($a == 2){
                                            echo 'class = success';$a = 1;
                                            }else{
                                            echo'class = active';$a = 2;
                                            }
                                            }else{
                                            echo'class = active';$a = 2;
                                            }
                                            $level = $rule['level'];
                                             ?> >
                                            <td>
                                                <div class="checkbox">
                                                    <label><?php   echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level) ?>
                                                        <input type="checkbox" dataid="id-<?php echo $rule['dataid']; ?>" class="inverted checkbox-parent <?php if($rule['level'] != 0): ?> checkbox-child <?php endif; ?> " name="rules[]" value="<?php echo $rule['id']; ?>" >
                                                        <span class="text">
                                                    <?php echo $rule['name']; ?></span>
                                                    </label>
                                                </div>

                                            </td>

                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <span id="btnSub" class="btn btn-default">保存信息</span>
                                    </div>
                                </div>
                                <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" id="token">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Body -->
</div>
<!-- /Page Content -->
</div>
</div>

<!--Basic Scripts-->


<script src="__ADMIN__style/bootstrap.js"></script>

<!--Beyond Scripts-->
<script src="__ADMIN__style/beyond.js"></script>



</body></html>
<script type="text/javascript">
    $(function() {
        $("#btnSub").click(function () {
            sendAjaxForm("formArticle",'<?php echo url("add"); ?>','<?php echo url("lst"); ?>');
        });
        //动态选择框，上下级选中状态变化
        $('input.checkbox-parent').on('change', function () {
            var dataid = $(this).attr("dataid");
            $('input[dataid^=' + dataid + ']').prop('checked', $(this).is(':checked'));
        });
        $('input.checkbox-child').on('change', function () {
            var dataid = $(this).attr("dataid");
            dataid = dataid.substring(0, dataid.lastIndexOf("-"));
            var parent = $('input[dataid=' + dataid + ']');
            if ($(this).is(':checked')) {
                parent.prop('checked', true);
                //循环到顶级
                while (dataid.lastIndexOf("-") != 2) {
                    dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                    parent = $('input[dataid=' + dataid + ']');
                    parent.prop('checked', true);
                }
            } else {
                //父级
                if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                    parent.prop('checked', false);
                    //循环到顶级
                    while (dataid.lastIndexOf("-") != 2) {
                        dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                        parent = $('input[dataid=' + dataid + ']');
                        if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                            parent.prop('checked', false);
                        }
                    }
                }
            }
        });
    })
</script>