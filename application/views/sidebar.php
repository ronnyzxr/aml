<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu page-sidebar-menu-closed" data-auto-scroll="true" data-auto-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper">
                                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                <div class="sidebar-toggler">
                                </div>
                                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li>
                                <a href="index.html">
                                        <i class="fa fa-home"></i>
                                        <span class="title">Dashboard</span>
                                </a>
                        </li>
                        <!-- BEGIN KYC LINKS -->
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-cogs"></i>
                                        <span class="title">KYC</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="javascript:;">
                                                        <i class="fa fa-cog"></i> PROFILING <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="javascript:;">
                                                                <i class="fa fa-group"></i>
                                                                Peer Group<span class="arrow "></span></a>
                                                                <ul class="sub-menu">
                                                                        <li>
                                                                                <a href="<?php echo base_url(); ?>kyc/profiling/category"><i class="fa fa-sitemap"></i> Category</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="<?php echo base_url(); ?>kyc/profiling/define_rule"><i class="fa fa-shield"></i> Define Rule</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="#"><i class="fa fa-user"></i> Profile</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="javascript:;">
                                                        <i class="fa fa-cog"></i> Scenarios  <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="<?php echo base_url(); ?>kyc/scenarios/due_diligence"><i class="fa fa-inbox"></i> Due Diligence</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo base_url(); ?>kyc/scenarios/enhanced_dd"><i class="fa fa-external-link-square"></i> Enhanced D-D</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-eye"></i> Watch List Scenario</a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <i class="fa fa-cog"></i>
                                                        Data Merging <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="#"><i class="fa fa-exchange"></i> Create Merge</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-book"></i> Merge</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-eye"></i> View Merge</a>
                                                        </li>
                                                </ul>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-exclamation-triangle"></i>
                                                        Alert 
                                                </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <i class="fa fa-desktop"></i>
                                                        Alert Manager
                                                </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <i class="fa fa-lightbulb-o"></i>
                                                        Reminder
                                                </a>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-pencil"></i>
                                                        Approval
                                                </a>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-tasks"></i>
                                                        Ecalations
                                                </a>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-folder-open"></i>
                                                        Enquiry
                                                </a>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-folder-open"></i>
                                                        Case Search
                                                </a>
                                        </li>
                                         <li>
                                                <a href="#">
                                                        <i class="fa fa-folder-open"></i>
                                                        Risk Rating
                                                </a>
                                        </li>
                                </ul>
                        </li>
                <!-- End KYC LINKS -->

                <!-- BEGIN Watch List LINKS -->
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="title">Watch List</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="ecommerce_index.html">
                                                <i class="fa fa-bullhorn"></i>
                                                Watch List<span class="arrow "></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="#"><i class="fa fa-user"></i> Customer</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Country</a>
                                                        </li>
                                                </ul>

                                        </li>
                                         <li>
                                                <a href="ecommerce_index.html">
                                                <i class="fa fa-bullhorn"></i>
                                                False Positive
                                                </a>
                                        </li>
                                         <li>
                                                <a href="ecommerce_index.html">
                                                <i class="fa fa-bullhorn"></i>
                                                White List
                                                </a>
                                        </li>
                                </ul>
                        </li>
                <!-- End Watch List LINKS -->

                <!-- BEGIN Transaction Risk LINKS -->
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-cogs"></i>
                                        <span class="title">Transaction Risk</span>
                                        <span class="selected"></span>
                                        <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="#">
                                                Scenarios<span class="arrow"></span> </a> 
                                                 <ul class="sub-menu">
                                                        <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Trasaction of Inactive Accounts">
                                                                <a href="#" ><i class="fa fa-user"></i> <span class="title"> TIA</span></a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Threshold</a>
                                                        </li>
                                                         <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Patterns</a>
                                                        </li>
                                                         <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Inward/Outward Scenario">
                                                                <a href="#" ><i class="fa fa-external-link"></i> <span class="title">In/Out Scenario </span></a>
                                                        </li>
                                                         <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> A/c to A/c Scenario</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> ADB Scenario</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Loan Scenario</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Cash/Credit Scenario</a>
                                                        </li>
                                                        <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Multiple Inward/Outward">
                                                                <a href="#" ><i class="fa fa-external-link"></i> <span class="title">Multiple I/O</span></a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Regulatory Limits</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Alert</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Alert Manager</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Reminder</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Approcal</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Escalations</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                               Enquiry</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Alert Approval Level</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Bank</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Correspondent Bank</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Currency</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Branch</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                System Code</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Trasaction Type</a>
                                        </li>
                                        <li>
                                                <a href="index_horizontal_menu.html">
                                                Account Type</a>
                                        </li>
                                         <li>
                                                <a href="layout_horizontal_sidebar_menu.html">
                                                Exchange rate</a>
                                        </li>
                                </ul>
                        </li>
                <!-- End Transaction Risk LINKS -->

                <!-- BEGIN Work Flow LINKS -->
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-gift"></i>
                                        <span class="title">
                                        Work Flow </span>
                                        <span class="arrow">
                                        </span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="#">
                                                Define Task
                                                </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                Define Workflow
                                                </a>
                                        </li>
                                        <li>
                                                <a href="#">
                                                Define Stage
                                                </a>
                                        </li>
                                </ul>
                        </li>
                <!-- END Work Flow LINKS -->


                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-bookmark-o"></i>
                                        <span class="title">Regulatory Reports</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="ui_general.html">
                                                General Components</a>
                                        </li>
                                        <li>
                                                <a href="ui_buttons.html">
                                                Buttons</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-puzzle-piece"></i>
                                        <span class="title">UI Components</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="components_pickers.html">
                                                Pickers</a>
                                        </li>
                                        <li>
                                                <a href="components_dropdowns.html">
                                                Custom Dropdowns</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-table"></i>
                                        <span class="title">Form Stuff</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="form_controls.html">
                                                Form Controls</a>
                                        </li>
                                        <li>
                                                <a href="form_layouts.html">
                                                Form Layouts</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="title">Email Templates</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="email_newsletter.html">
                                                Responsive Newsletter<br>
                                                Email Template</a>
                                        </li>
                                        <li>
                                                <a href="email_system.html">
                                                Responsive System<br>
                                                Email Template</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-sitemap"></i>
                                        <span class="title">Pages</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="page_portfolio.html">
                                                <i class="fa fa-briefcase"></i>
                                                <span class="badge badge-warning badge-roundless">new</span>Portfolio</a>
                                        </li>
                                        <li>
                                                <a href="page_timeline.html">
                                                <i class="fa fa-clock-o"></i>
                                                <span class="badge badge-info">4</span>Timeline</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-gift"></i>
                                        <span class="title">Extra</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="extra_profile.html">
                                                User Profile</a>
                                        </li>
                                        <li>
                                                <a href="extra_lock.html">
                                                Lock Screen</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-folder-open"></i>
                                        <span class="title">Multi Level Menu</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="javascript:;">
                                                        <i class="fa fa-cogs"></i> Item 1 <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="javascript:;">
                                                                <i class="fa fa-user"></i>
                                                                Sample Link 1 <span class="arrow"></span>
                                                                </a>
                                                                <ul class="sub-menu">
                                                                        <li>
                                                                                <a href="#"><i class="fa fa-times"></i> Sample Link 1</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Sample Link 2</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-bell"></i> Sample Link 3</a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="javascript:;">
                                                        <i class="fa fa-globe"></i> Item 2 <span class="arrow"></span>
                                                </a>
                                                <ul class="sub-menu">
                                                        <li>
                                                                <a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-external-link"></i> Sample Link 1</a>
                                                        </li>
                                                        <li>
                                                                <a href="#"><i class="fa fa-bell"></i> Sample Link 1</a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                        <i class="fa fa-folder-open"></i>
                                                        Item 3
                                                </a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-user"></i>
                                        <span class="title">Login Options</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="login.html">
                                                Login Form 1</a>
                                        </li>
                                        <li>
                                                <a href="login_soft.html">
                                                Login Form 2</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-th"></i>
                                        <span class="title">Data Tables</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="table_basic.html">
                                                Basic Datatables</a>
                                        </li>
                                        <li>
                                                <a href="table_responsive.html">
                                                Responsive Datatables</a>
                                        </li>
                                        <li>
                                                <a href="table_managed.html">
                                                Managed Datatables</a>
                                        </li>
                                        <li>
                                                <a href="table_editable.html">
                                                Editable Datatables</a>
                                        </li>
                                        <li>
                                                <a href="table_advanced.html">
                                                Advanced Datatables</a>
                                        </li>
                                        <li>
                                                <a href="table_ajax.html">
                                                Ajax Datatables</a>
                                        </li>
                                </ul>
                        </li>
                        <li>
                                <a href="javascript:;">
                                        <i class="fa fa-file-text"></i>
                                        <span class="title">Portlets</span>
                                        <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                                <a href="portlet_general.html">
                                                General Portlets</a>
                                        </li>
                                        <li>
                                                <a href="portlet_ajax.html">
                                                Ajax Portlets</a>
                                        </li>
                                </ul>
                        </li>
                </ul>
                <!-- END SIDEBAR MENU -->
        </div>
</div>
<!-- END SIDEBAR -->