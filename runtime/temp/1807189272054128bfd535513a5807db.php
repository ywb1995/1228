<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\1228\public/../application/admin\view\article\add.html";i:1516034584;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\head.html";i:1516082504;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\foot.html";i:1514618874;}*/ ?>
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
<script src="__ADMIN__ueditor/ueditor.config.js"></script>
<script src="__ADMIN__ueditor/ueditor.all.min.js"></script>
<script src="__ADMIN__ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="<?php echo url('lst'); ?>">文章管理</a>
            </li>
            <li class="active">添加文章</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">新增文章</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" enctype="multipart/form-data" id="formArticle" role="form" action="" method="post"  >
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label no-padding-right">文章标题</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="title" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <div class="form-group">
                                    <label for="keywords" class="col-sm-2 control-label no-padding-right">关键字</label>
                                    <div class="col-sm-6">
                                        <input class="form-control"  placeholder="" name="keywords"  required="" type="text">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="c_id" class="col-sm-2 control-label no-padding-right">所属分类</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="c_id">
                                            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$cate): ?>
                                            <option value="<?php echo $cate['id']; ?>"><?php if($cate['level'] != 0): ?>|<?php endif;  echo  str_repeat('----',$cate['level'])  ?> <?php echo $cate['catename']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                    <div class="col-sm-6">
                                        <textarea id="content" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="author" class="col-sm-2 control-label no-padding-right">作者</label>
                                    <div class="col-sm-3">
                                        <input class="form-control"  placeholder="" name="author"  required="" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="click" class="col-sm-2 control-label no-padding-right">点击数</label>
                                    <div class="col-sm-3">
                                        <input class="form-control"  placeholder="" name="click" value="100" required="" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="zan" class="col-sm-2 control-label no-padding-right">点赞数</label>
                                    <div class="col-sm-3">
                                        <input class="form-control"  placeholder="" name="zan" value="100" required="" type="text">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-sm-2 control-label no-padding-right">缩略图</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" name="image" placeholder=""    type="file" />
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
        })
    })


    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
</script>