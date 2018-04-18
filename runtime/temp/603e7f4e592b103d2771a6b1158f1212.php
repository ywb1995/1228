<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\phpStudy\WWW\1228\public/../application/admin\view\user\edit.html";i:1516726014;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\head.html";i:1516426479;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\foot.html";i:1514618874;}*/ ?>
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
                <a href="<?php echo url('lst'); ?>">用户管理</a>
            </li>
            <li class="active">编辑用户</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">编辑用户</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" id="formUser" role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">用户名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  value="<?php echo $user['username']; ?>"  name="username" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label no-padding-right">密码</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="password"  type="password">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-2 control-label no-padding-right">确认密码</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="password2"  type="password">
                                    </div>

                                </div>
                                <?php if(empty($kkk)): ?>
                                <div class="form-group UserGroup" >
                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">用户组</label>
                                    <div class="col-sm-6">
                                        <select name="group_id[]" style="width: 100%;">
                                            <?php if(is_array($authGroups) || $authGroups instanceof \think\Collection || $authGroups instanceof \think\Paginator): $i = 0; $__LIST__ = $authGroups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authGroup): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $authGroup['id']; ?>" ><?php echo $authGroup['title']; ?> </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 black"><button class="addUserGroup" type="button">增加角色</button></p>
                                </div>
                                <?php else: if(is_array($kkk) || $kkk instanceof \think\Collection || $kkk instanceof \think\Paginator): $k = 0; $__LIST__ = $kkk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$kk): $mod = ($k % 2 );++$k;?>
                                <div class="form-group UserGroup" >
                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">用户组</label>
                                    <div class="col-sm-6">
                                        <select name="group_id[]" style="width: 100%;">
                                            <?php if(is_array($authGroups) || $authGroups instanceof \think\Collection || $authGroups instanceof \think\Paginator): $i = 0; $__LIST__ = $authGroups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authGroup): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $authGroup['id']; ?>" <?php if($kk['id'] == $authGroup['id']): ?>selected="selected"<?php endif; ?>><?php echo $authGroup['title']; ?> </option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <?php if($k == 1): ?>
                                        <p class="help-block col-sm-4 black"><button class="addUserGroup" type="button">增加角色</button></p>
                                    <?php else: ?>
                                        <p class="help-block col-sm-4 black"><button class="deleteUserGroup" type="button">删除角色</button></p>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                <div class="form-group" id="last">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <span id="btnSub" class="btn btn-default">保存信息</span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
                                <!-- 表单令牌 -->
                                <input type="hidden" name="__token__" id='token' value="<?php echo \think\Request::instance()->token(); ?>" />
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
    $(document).ready(function(){

        $("#btnSub").click(function () {
            var form = new FormData(document.getElementById("formUser"));
            $.ajax({
                url:"<?php echo url('edit'); ?>",
                type:"post",
                data:form ,
                processData:false,
                contentType:false,
                success:function(data){
                    data = JSON.parse(data);
                    alert(data.message);
                    $("#token").val(data.token);
                    if(data.code == 1) {
                        window.location.href = "<?php echo url('lst'); ?>";
                    }
                },
                error:function(e){
                    alert("错误！！");
                    // window.clearInterval(timer);
                },

            });

        });
        $(".addUserGroup").click(function () {
            var a = $(this).parents('div .UserGroup').clone();
            a.find(".addUserGroup").prop('class','deleteUserGroup');
            a.find(".deleteUserGroup").text('删除角色');
            a.find(".deleteUserGroup").on('click',function () {
                $(this).parents('div .UserGroup').remove();
            });
            $("#last").before(a);
        });
        $(".deleteUserGroup").click(function () {
            $(this).parents('div .UserGroup').remove();
        });


    })

</script>