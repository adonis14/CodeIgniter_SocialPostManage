<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php 
    $p_array = array('Instagram','Facebook','Twitter');
    $l_array = array('Arabic(AR)','English(EN)','France(FR)');
    $c_array = array('Political','Religion','Entertainment');

?>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Social Site Post Manager</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/font-awesome/css/font-awesome.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/bootstrap/css/bootstrap.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>' rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href='<?= base_url("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"); ?>' rel="stylesheet" type="text/css" />
        
        <link href='<?= base_url("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/fullcalendar/fullcalendar.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/morris/morris.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/global/plugins/bootstrap-toastr/toastr.min.css"); ?>' rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href='<?= base_url("assets/global/css/components.min.css"); ?>' rel="stylesheet" id="style_components" type="text/css" />
        <link href='<?= base_url("assets/global/css/plugins.min.css"); ?>' rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href='<?= base_url("assets/layouts/layout/css/layout.min.css"); ?>' rel="stylesheet" type="text/css" />
        <link href='<?= base_url("assets/layouts/layout/css/themes/darkblue.min.css"); ?>' rel="stylesheet" type="text/css" id="style_color" />
        <link href='<?= base_url("assets/layouts/layout/css/custom.css"); ?>' rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="">
                            <img src='<?= base_url("assets/layouts/layout/img/logo.png"); ?>' alt="logo" class="logo-default" style="margin-top: 10px;height: 30px;width: 30px;"/> </a>
                        
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src='<?= base_url("assets/layouts/layout/img/avatar3_small.png"); ?>' />
                                    <span class="username username-hide-on-mobile"> 
                                        <?php echo $this->session->userdata('username');?>
                                    </span>
                                    <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                        <i class="fa fa-angle-down"></i>
                                    <?php } ?>
                                </a>
                               <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="/postmanage">
                                            <i class="icon-calendar"></i> Post Management </a>
                                    </li>
                                    <li>
                                        <a href="/users">
                                            <i class="icon-user"></i> User Management </a>
                                    </li>
                                    
                                    <li>
                                        <a href="/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                                <?php } ?>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="/logout" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Social Post Management
                            <small>every day social post management</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <div class="button-listbar">
                                <a id="addNewPost" class="btn btn-sm green" data-toggle="modal" href="#addModal"> 
                                    New Post<i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="page-toolbar">
                                <div class="col-md-3">
                                    <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" id = "post_date_picker" data-date-start-date="">
                                        <input type="text" class="form-control" value="<?= $date; ?>">
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <!-- <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green" data-placement="top" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div> -->
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- END PAGE HEADER-->
                        <div class="row widget-row">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-social-dribbble font-green"></i>
                                            <span class="caption-subject font-red bold uppercase">TOP ENGAGEMENT</span>
                                        </div>
                                        <div class="actions">
                                            
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-scrollable">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> Post Id</th>
                                                        <th> Date </th>
                                                        <th> Platform </th>
                                                        <th> Link </th>
                                                        <th> Rating Posts </th>
                                                        <th> Admin Comments </th>
                                                        <th> Others Comments </th>
                                                        <th> Enagements </th>
                                                        <th> User </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $top_c = count($topposts);
                                                    if($top_c){
                                                    foreach($topposts as $item){
                                                    ?>
                                                    <tr>
                                                        <td> <?= $item->post_id ?> </td>
                                                        <td> <?= $item->post_date ?> </td>
                                                        <td> <?= $p_array[$item->channel_id-1]."/".$l_array[$item->sub_channel_id-1] ?></td>
                                                        <td> <?= $item->post_link  ?></td>
                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                        <td> <?= $item->post_admincomment ?></td>
                                                        <td> <?= $item->post_othercomment ?></td>
                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                        <td> <?= $item->user_name ?></td>

                                                    </tr>
                                                    <?php } 
                                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <div class="row widget-row">
                            <div class="col-md-12">
                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-instagram"></i>Instagram</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body" style="height: 300px;overflow-y: scroll;">
                                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-instagram"></i>Arabic(AR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==1 && $item->sub_channel_id==1){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Instagram/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-instagram"></i>English(EN)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==1 && $item->sub_channel_id==2){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Instagram/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-instagram"></i>France(FR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==1 && $item->sub_channel_id==3){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Instagram/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                
                                </div>
                           
                            </div>
                        </div>
                        <div class="row widget-row">
                            <div class="col-md-12">
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-facebook"></i>FaceBook</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body" style="height: 300px;overflow-y: scroll;">
                                      
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-facebook"></i>Arabic(AR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==2 && $item->sub_channel_id==1){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Facebook/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-facebook"></i>English(EN)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==2 && $item->sub_channel_id==2){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Facebook/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-facebook"></i>France(FR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==2 && $item->sub_channel_id==3){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Facebook/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                
                                </div>
                           
                            </div>
                        </div>
                        <div class="row widget-row">
                            <div class="col-md-12">
                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-twitter"></i>Twitter</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body" style="height: 300px;overflow-y: scroll;">
                                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-twitter"></i>Arabic(AR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==3 && $item->sub_channel_id==1){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Twitter/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-twitter"></i>English(EN)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==3 && $item->sub_channel_id==2){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Twitter/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-twitter"></i>France(FR)</div>
                                                        <div class="tools">
                                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body" style="">
                                                        <div class="table-scrollable">
                                                            <div class="table-scrollable">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Platform </th>
                                                                        <th> Post Links </th>
                                                                        <th> Engagements </th>
                                                                        <th> Rating Posts </th>
                                                                        <th> Manager Comments </th>
                                                                        <th> Others </th>
                                                                        <th> User </th>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <th> Action </th>
                                                                        <?php } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $p_c = count($posts);
                                                                    if($p_c){
                                                                    foreach($posts as $item){
                                                                        if($item->channel_id==3 && $item->sub_channel_id==3){
                                                                    ?>

                                                                    <tr>
                                                                        <td> Twitter/AR </td>
                                                                        <td> <?= $item->post_link ?> </td>
                                                                        <td> <?= $item->post_like_cnt.",".$item->post_comment_cnt ?></td>
                                                                        <td> <?= $c_array[$item->post_cat_id-1]  ?></td>
                                                                        <td> <?= $item->post_admincomment ?></td>
                                                                        <td> <?= $item->post_othercomment ?></td>
                                                                        <td> <?= $item->user_name ?> </td>
                                                                        <?php if( $this->session->has_userdata('userrole') && $this->session->userdata('userrole')=="admin" ){ ?>
                                                                        <td> <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple postedit_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-edit"></i> Edit </a><a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black postdel_btn" data-postid='<?= $item->post_id ?>'>
                                                                <i class="fa fa-trash-o"></i> Delete </a></td>
                                                                <?php } ?>
                                                                    </tr>
                                                                    <?php }
                                                                        } 
                                                                    }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2018 &copy; Site Post Management By
                    <a target="_blank" href="">NYAH</a> &nbsp;|&nbsp;
                    <a href="" title="" target="_blank">Enjoy!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        
        <!-- Add new post Modal -->
        <div id="addModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add New Post</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addNewPostForm" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Social site name</label>
                                    <select class="form-control" name="channel_name" required>
                                        <option value='1'>Instagram</option>
                                        <option value='2'>Facebook</option>
                                        <option value='3'>Twitter</option>
                                    </select>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Social site language</label>
                                        <select class="form-control" name="sub_channel_name" required>
                                            <option value='1'>Arabic(AR)</option>
                                            <option value='2'>English(EN)</option>
                                            <option value='3'>France(FR)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Post Link</label>
                                    <div class="input-icon">
                                       <i class="fa fa-bell-o font-green"></i>
                                        <input type="text" class="form-control" placeholder="Please insert your post url" name="post_link" required> </div>
                                </div>
                                <div class="form-group">
                                    <label>Like Count</label>
                                    <div class="input-icon">
                                       <i class="fa fa-thumbs-up font-green"></i>
                                        <input type="text" class="form-control" placeholder="Auto Get" name="post_like_cnt" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label>Comments Count</label>
                                    <div class="input-icon">
                                        <i class="fa fa-comments font-green"></i>
                                        <input type="text" class="form-control" placeholder="Auto Get" name="post_comment_cnt" disabled> </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Post Category</label>
                                        <select class="form-control" name="post_cat_id" required>
                                            <option value='1'>Political</option>
                                            <option value='2'>Religion</option>
                                            <option value='3'>Entertainment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Manager Comments</label>
                                    <textarea class="form-control" rows="3" name="post_admincomment"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <textarea class="form-control" rows="3" name="post_othercomment"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn green">Save changes</button>
                            </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit post Modal -->
        <div id="editModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Post</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="editPostForm" method="post">
                            <input type="hidden" name="edit_post_id" id="edit_post_id" value="">
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Post Link</label>
                                    <div class="input-icon">
                                       <i class="fa fa-bell-o font-green"></i>
                                        <input type="text" class="form-control" placeholder="Please insert your post url" id="medit_link" name="post_link"> </div>
                                </div>
                                <div class="form-group">
                                    <label>Like Count</label>
                                    <div class="input-icon">
                                       <i class="fa fa-thumbs-up font-green"></i>
                                        <input type="number" class="form-control" placeholder="0" name="post_like_cnt" id="medit_like_cnt" min='0' disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label>Comments Count</label>
                                    <div class="input-icon">
                                        <i class="fa fa-comments font-green"></i>
                                        <input type="number" class="form-control" placeholder="0" name="post_comment_cnt" id="medit_comment_cnt" min='0' disabled> </div>
                                </div>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Post Category</label>
                                        <select class="form-control" name="post_cat_id" id="medit_cat" >
                                            <option value='1'>Political</option>
                                            <option value='2'>Religion</option>
                                            <option value='3'>Entertainment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Manager Comments</label>
                                    <textarea class="form-control" rows="3" name="post_admincomment" id="medit_admincom" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <textarea class="form-control" rows="3" name="post_othercomment" id="medit_othercom" ></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn green">Edit post</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete post Modal -->
        <div id="deleteModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Delete Post</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="deletePostForm" method="post">
                            <div class="form-body">
                            </div>
                            <div class="form-actions">
                                <input type="hidden" name="delete_post_id" id="delete_post_id">
                                
                                <button type="submit" class="float-right btn red">Delete post</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--[if lt IE 9]>
        
        <![endif]-->

        <!-- BEGIN CORE PLUGINS -->
        <script src='<?= base_url("assets/global/plugins/jquery.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/js.cookie.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/jquery.blockui.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>' type="text/javascript"></script>
         <script src='<?= base_url("assets/global/plugins/bootstrap-toastr/toastr.min.js"); ?>' type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src='<?= base_url("assets/global/plugins/morris/morris.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/morris/raphael-min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/moment.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"); ?>' type="text/javascript"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src='<?= base_url("assets/global/scripts/app.min.js"); ?>' type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src='<?= base_url("assets/pages/scripts/dashboard.min.js"); ?>' type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src='<?= base_url("assets/layouts/layout/scripts/layout.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/layouts/layout/scripts/demo.min.js"); ?>' type="text/javascript"></script>
        <script src='<?= base_url("assets/pages/scripts/custom.js"); ?>' type="text/javascript"></script>
        <script type="text/javascript">
            <?php
                $toast =  $this->session->flashdata('toast');
                if ($toast != null && $toast['state'] == 'success') {
            ?>
                var shortCutFunction = "success";
                var msg = "<?php echo $toast['msg'] ?>";
                var title = "Notification";
                toastr[shortCutFunction](msg, title);
                $('#toast-container').addClass('animated rubberBand');

            <?php } else if (($toast != null) && ($toast['state'] == 'error')) { ?>

                var shortCutFunction = "error";
                var msg = "<?php echo $toast['msg'] ?>";
                var title = "Error !";
                toastr[shortCutFunction](msg, title);
                $('#toast-container').addClass('animated shake');
            <?php } ?>
        </script>
    </body>

</html>
