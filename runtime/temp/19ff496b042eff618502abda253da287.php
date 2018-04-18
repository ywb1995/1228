<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\1228\public/../application/admin\view\article\lst.html";i:1516266808;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\head.html";i:1516082504;s:60:"D:\phpStudy\WWW\1228\application\admin\view\common\foot.html";i:1514618874;}*/ ?>
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
<style>
    .divpage{
        margin-top: 10px;
        text-align:center;
    }
</style>
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li class="active">文档管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">

                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">标题</th>
                                            <th class="text-center">关键字</th>
                                            <th class="text-center">缩略图</th>
                                            <th class="text-center">作者</th>
                                            <th class="text-center">所属栏目</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead><div><?php echo captcha_img(); ?></div>
                                        <tbody>
                                        <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td align="center"><?php echo $article['id']; ?></td>
                                            <td align="left"><?php  echo mb_substr($article['title'],0,10,'utf-8'); if(mb_strlen($article['title'],'utf-8')>10){echo '...';};  ?></td>
                                            <td align="left"><?php echo mb_substr($article['keywords'],0,15,'utf-8');if(mb_strlen($article['keywords'],'utf-8')>10){echo '...';}  ?></td>
                                            <td align="center">
                                                <?php if($article["image"] != ""): ?>
                                                <img src="<?php echo $article['image']; ?>"  height="30" width="50" title="点击查看大图"  onclick="bigImg(this.src)"/>
                                                <?php else: ?>
                                                暂无缩略图
                                                <?php endif; ?>
                                            </td>
                                            <td align="center"><?php echo $article['author']; ?></td>
                                            <td align="center"><?php echo $article['catename']; ?></td>
                                            <td align="center">
                                                <a href="<?php echo url('edit',['id'=>$article['id']]); ?>" class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="<?php echo url('delete',['id'=>$article['id']]); ?>" onClick="warning('确实要删除吗', '')" class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                    <div class="divpage">
                                        <?php echo $articles->render();; ?>
                                    </div>

                                </div>
                                <div>
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
<!--Basic Scripts-->


<script src="__ADMIN__style/bootstrap.js"></script>

<!--Beyond Scripts-->
<script src="__ADMIN__style/beyond.js"></script>



</body></html>