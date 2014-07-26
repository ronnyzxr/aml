<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
            <!--<img src="<?php echo base_url(); ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>-->
            <h3>AML</h3>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <div class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-warning"></i>
                    <span class="badge badge-default">
                    7
                    </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>
                                You have 14 new notifications
                            </p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                <li>
                                    <a href="#">
                                    <span class="label label-sm label-icon label-danger">
                                    <i class="fa fa-bolt"></i>
                                    </span>
                                    Database overloaded 68%. <span class="time">
                                    2 hrs </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="external">
                            <a href="#">
                            See all notifications <i class="m-icon-swapright"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-default">
                    4 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>
                                You have 12 new messages
                            </p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                <li>
                                    <a href="inbox.html?a=view">
                                    <span class="photo">
                                    <img src="<?php echo base_url(); ?>assets/admin/layout/img/avatar3.jpg" alt=""/>
                                    </span>
                                    <span class="subject">
                                    <span class="from">
                                    Richard Doe </span>
                                    <span class="time">
                                    46 mins </span>
                                    </span>
                                    <span class="message">
                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="external">
                            <a href="inbox.html">
                            See all messages <i class="m-icon-swapright"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-tasks"></i>
                    <span class="badge badge-default">
                    3 </span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>
                                You have 12 pending tasks
                            </p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                <li>
                                    <a href="#">
                                    <span class="task">
                                    <span class="desc">
                                    New UI release </span>
                                    <span class="percent">
                                    18% </span>
                                    </span>
                                    <span class="progress progress-striped">
                                    <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">
                                    18% Complete </span>
                                    </span>
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="external">
                            <a href="#">
                            See all tasks <i class="m-icon-swapright"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <!--<img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/admin/layout/img/avatar3_small.jpg"/>-->
                        <span class="username">
                            Bob
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="extra_profile.html">
                            <i class="fa fa-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                            <i class="fa fa-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                            <i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
                            3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
                            7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                            <i class="fa fa-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="login.html">
                            <i class="fa fa-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->