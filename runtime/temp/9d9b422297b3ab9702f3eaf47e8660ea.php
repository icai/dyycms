<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"C:\myweb\TP\public/../application/admin\view\model_type\edit.html";i:1496833532;s:63:"C:\myweb\TP\public/../application/admin\view\common\header.html";i:1496919045;s:61:"C:\myweb\TP\public/../application/admin\view\common\left.html";i:1496908348;}*/ ?>
    <!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title><?php echo $setting['site_name']; ?></title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__CSS__/bootstrap.css" rel="stylesheet">
    <link href="__CSS__/font-awesome.css" rel="stylesheet">
    <link href="__CSS__/weather-icons.css" rel="stylesheet">
    <link href="__CSS__/ion.calendar.css" rel="stylesheet" >

    <!--Beyond styles-->
    <link id="beyond-link" href="__CSS__/beyond.css" rel="stylesheet" type="text/css">
    <link href="__CSS__/demo.css" rel="stylesheet">
    <link href="__CSS__/typicons.css" rel="stylesheet">
    <link href="__CSS__/animate.css" rel="stylesheet">

   	
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
                            <img src="__IMG__/logo.png" alt="">
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
                        <li><a class="login-area " style='padding: auto'  href="<?php echo url($current_action,array('lang'=>'zh-cn')); ?>">
                                <div style="height: 45px;line-height: 45px;padding: 0px;margin: 0px;margin-top: -10px; color: white;">    简体中文</div>
                            </a>
                            <a class="login-area " href="<?php echo url($current_action,array('lang'=>'en-us')); ?>">
                                <div style="height: 45px;line-height: 45px;padding: 0px;margin: 0px;margin-top: -10px; color: white;">  English</div>
                            </a>
                        </li>
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__IMG__/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo $login_username; ?></span></span></h2>
                                </section>
                            </a>
                            
                            
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area ">
                                
                                <li class="username"><a>{session.username}</a></li>
                                <li class="dropdown-footer" style="text-align: center">
                                    <a href="<?php echo url('login/logout'); ?>">
                                            <?php echo \think\Lang::get('logouts'); ?>
                                        </a>
                                </li>
                                <li class="dropdown-footer" style="text-align: center">
                                    <a href="<?php echo url('index/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                            <?php echo \think\Lang::get('change_password'); ?>
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
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
		 <!-- Page Sidebar -->
            
                <!-- Page Sidebar Header-->
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
                            <span class="menu-text"><?php echo \think\Lang::get('administrator'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                           <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('admin_list'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-paper-plane"></i>
                            <span class="menu-text"><?php echo \think\Lang::get('authority_manage'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                           <li>
                                <a href="<?php echo url('authGroup/lst'); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('auth_group_list'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('authRule/lst'); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('auth_rule_list'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('authGroupAccess/lst'); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('user_auth_manage'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder-open"></i>
                            <span class="menu-text"><?php echo \think\Lang::get('category'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('category/lst',array('language_id'=>'1')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('category_list_ch'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('category/lst',array('language_id'=>'2')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('category_list_en'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            
                        </ul>                            
                    </li> 
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text"><?php echo \think\Lang::get('article'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/article/lst',array('language_id'=>'1')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('article_list_ch'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('admin/article/lst',array('language_id'=>'2')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('article_list_en'); ?>                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-rocket"></i>
                            <span class="menu-text"><?php echo \think\Lang::get('model'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('model_type/lst',array('language_id'=>'1')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('model_list'); ?>
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            
                        </ul>                            
                    </li> 

                    
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-link"></i>
                            <span class="menu-text"><?php echo \think\Lang::get('links'); ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('links/lst',array('language_id'=>'1')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('ch_links'); ?>                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('links/lst',array('language_id'=>'2',)); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('en_links'); ?>                                        </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text"> <?php echo \think\Lang::get('system'); ?>  </span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('setting/edit',array('language_id'=>'1')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('set_china'); ?>                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <a href="<?php echo url('setting/edit',array('language_id'=>'2')); ?>">
                                    <span class="menu-text">
                                        <?php echo \think\Lang::get('set_english'); ?>                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('index/index',''); ?>"><?php echo \think\Lang::get('system'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo url('ModelType/lst'); ?>"><?php echo \think\Lang::get('model'); ?></a>
                        </li>
                        <li class="active"><?php echo \think\Lang::get('edit'); ?>
                        </li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption"><?php echo \think\Lang::get('edit'); ?></span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo url('ModelType/edit'); ?>" method="post">
                        <input name="id"  value="<?php echo $result['id']; ?>"  type="hidden" class="form-control">
                        <div class="form-group">
                            <label for="model_ch_name" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('model_ch_name'); ?></label>
                            <div class="col-sm-6">
                                <span class="input-icon icon-right inverted">
                                    <input name="model_ch_name" required=""  type="text" value="<?php echo $result['model_ch_name']; ?>" class="form-control">
                                    <i class="fa fa-bars btn-maroon"></i>
                                </span>
                                <!--<input class="form-control" id="username" placeholder="" name="username" required="" type="text">-->
                            </div>
                            <p class="help-block col-sm-4 red">* <?php echo \think\Lang::get('required'); ?></p>
                        </div>

                        <div class="form-group">
                            <label for="model_en_name" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('model_en_name'); ?></label>
                            <div class="col-sm-6">  
                                <span class="input-icon icon-right inverted">
                                    <input name="model_en_name" required="" type="text" value="<?php echo $result['model_ch_name']; ?>"  class="form-control ">
                                    <i class="fa fa-link bg-danger"></i>
                                 </span>
                                <!--<input class="form-control" id="password" placeholder="" name="password" required="" type="text">-->
                            </div>
                            <p class="help-block col-sm-4 red">* <?php echo \think\Lang::get('required'); ?></p>
                        </div> 
                        
                        <div class="form-group">
                            <label for="model_cate_page" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('model_cate_page'); ?></label>
                            <div class="col-sm-6">  
                                <span class="input-icon icon-right inverted">
                                    <select name="model_category_page" class="col-sm-12" >
                                        <?php if(is_array($cate_file) || $cate_file instanceof \think\Collection || $cate_file instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $cate; ?>" <?php if($result['model_category_page']  == $cate): ?>selected <?php endif; ?> ><?php echo $cate; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                    </select>
                                    
                                   <!-- <i class="fa fa-language  bg-orange"></i>-->
                                 </span>
                                <!--<input class="form-control" id="password" placeholder="" name="password" required="" type="text">-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="model_list_page" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('model_list_page'); ?></label>
                            <div class="col-sm-6">  
                                <span class="input-icon icon-right inverted">
                                    <select name="model_list_page" class="col-sm-12" >
                                         <?php if(is_array($list_file) || $list_file instanceof \think\Collection || $list_file instanceof \think\Paginator): $i = 0; $__LIST__ = $list_file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $list; ?>" <?php if($result['model_list_page']  == $list): ?>selected <?php endif; ?> ><?php echo $list; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                        
                                    </select>
                                    
                                   <!-- <i class="fa fa-language  bg-orange"></i>-->
                                 </span>
                                <!--<input class="form-control" id="password" placeholder="" name="password" required="" type="text">-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="model_detail_page" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('model_detail_page'); ?></label>
                            <div class="col-sm-6">  
                                <span class="input-icon icon-right inverted">
                                    <select name="model_detail_page" class="col-sm-12" >
                                        <?php if(is_array($detail_file) || $detail_file instanceof \think\Collection || $detail_file instanceof \think\Paginator): $i = 0; $__LIST__ = $detail_file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$detail): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $detail; ?>" <?php if($result['model_detail_page']  == $detail): ?>selected <?php endif; ?> ><?php echo $detail; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    
                                   <!-- <i class="fa fa-language  bg-orange"></i>-->
                                 </span>
                                <!--<input class="form-control" id="password" placeholder="" name="password" required="" type="text">-->
                            </div>
                        </div>
                       
                      <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label no-padding-right"><?php echo \think\Lang::get('sort'); ?></label>
                            <div class="col-sm-6">  
                                <span class="input-icon icon-right inverted">
                                    <input name="sort"  type="text" value='<?php echo $result['sort']; ?>'  class="form-control ">
                                    <i class="fa fa-sort-amount-asc bg-pink"></i>
                                 </span>
                                <!--<input class="form-control" id="password" placeholder="" name="password" required="" type="text">-->
                            </div>
                        </div> 
                      
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-blue"><?php echo \think\Lang::get('save_info'); ?></button>
                            </div>
                        </div>
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
    <script src="__JS__/jquery_002.js"></script>
    <script src="__JS__/bootstrap.js"></script>
    <script src="__JS__/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__JS__/beyond.js"></script>

    <script src="__JS__/bootstrap-datepicker.js"></script>
    <script>
        $('.date-picker').datepicker();
    </script>


</body></html>