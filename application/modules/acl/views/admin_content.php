
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
        Access Control
        </h3>
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="tabbable tabbable-custom boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#rights" data-toggle="tab">
                    Rights
                    </a>
                </li>
                <li>
                    <a href="#permission" data-toggle="tab">
                    Permissions
                    </a>
                </li>
                <li>
                    <a href="#pages" data-toggle="tab">
                    Pages
                    </a>
                </li>
                <li>
                    <a href="#settings" data-toggle="tab">
                    Setting
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="rights">
                    <?php include_once('form/rights.php'); ?>
                </div>
                <div class="tab-pane" id="permission">
                    <?php include_once('form/permission.php'); ?>
                </div>
                <div class="tab-pane active" id="pages">
                    <?php include_once('form/pages.php'); ?>
                </div>
                <div class="tab-pane active" id="settings">
                    <?php include_once('form/setting.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
