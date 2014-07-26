<!--FORM-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            Permission
        </div>
    </div>
    <div class="portlet-body form">
        <div class="row">
            <div class="col-md-offset-0 col-md-12" style="padding: 20px;">
                <?php
                    $info = $this->control->get_permission();
                    $data = array(
                        //SETTING
                        'setting' => array(
                            'table_class'   => 'portlet box blue',
                            'table_icon'    => 'fa fa-globe',
                            'table_title'   => 'Permission List',
                            'table_name'    => 'permission_table',
                            'buttons'       => array(
                                array(
                                    'id'        => 'add_permission_btn',
                                    'link'      => '#add_permission',
                                    'class'     => 'btn default',
                                    'icon'      => 'fa fa-plus',
                                    'name'      => 'Add Permission',
                                    'other'     => array(
                                        'data-toggle="modal"',
                                    )
                                ),
                            ),
                        ),
                        
                        //Headers
                        'headers' => array(
                            'permission_name',
                        ),
                        
                        //Data via Header link
                        'datas' => $info,
                        
                        //Buttons
                        'buttons' => array(
                            array(
                                'class'     => 'btn default btn-xs purple',
                                'name'      => 'Edit',
                                'icon'      => 'fa fa-edit',
                                'tooltip'   => 'Message',
                            ),
                            array(
                                'class'     => 'btn default btn-xs',
                                'icon'      => 'fa fa-trash-o',
                                'name'      => 'Delete',
                                'script'    => 'alert("SUPERMAN");',
                            ),
                        ),
                    );
                    $this->load->view('common_tools/dataTables',$data);
                ?>
            </div>
        </div>
    </div>
</div>

<!--MODAL-->
<div id="add_permission" class="modal fade" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">
            Add Permission Form
        </h4>
    </div>
    <div class="modal-body">
        <div class="form-horizontal">
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-4 control-label">Permission Name:</label>
                    <div class="col-md-7">
                        <input type="text" id="permission_name" class="form-control" placeholder="Permission Name">
                    </div>
                </div>
                <!--<div class="form-group">-->
                <!--    <div class="col-md-offset-4 col-md-7">-->
                <!--        <button type="submit" class="btn btn-sm blue">Submit</button>-->
                <!--        <button type="button" class="btn btn-sm default">Cancel</button>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" id="add_permission_submit_btn" class="btn blue" >Add Permission</button>
        <button type="button" id="add_permission_close_btn" data-dismiss="modal" class="btn btn-default">Close</button>
    </div>
</div>
