<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="<?php echo $setting['table_class']; ?>">
    <div class="portlet-title">
        <div class="caption">
            <?php
                if (isset($setting['table_icon'])){
                    echo '<i class="'.$setting['table_icon'].'"></i> ';
                }
                echo $setting['table_title'];
            ?>
        </div>
        <div class="actions">
            <div class="btn-group">
                <?php
                    if (isset($setting['buttons'])){
                        foreach($setting['buttons'] as $button){
                            $other_info = '';
                            if (isset($button['other'])){
                                foreach($button['other'] as $other){
                                    $other_info .= $other.' ';
                                }
                            }
                            echo '<a '.
                                (isset($button['id'])?'id="'.$button['id'].'"':'').' '.
                                (isset($button['link'])?'href="'.$button['link'].'"':'').' '.
                                'class="'.(isset($button['class'])?$button['class']:'btn default').'" '.
                                (isset($button['script'])?'onclick=\''.$button['script'].'\'':'').' '.
                                $other_info.
                                '>';
                            if (isset($button['icon'])){
                                echo '<i class="'.$button['icon'].'"></i> ';
                            }
                            if (isset($button['name'])){
                                echo '<span class="hidden-480">';
                                echo $button['name'];
                                echo '</span>';
                            }
                            echo '</a>';
                        }
                    }
                ?>
                <a class="btn default" href="#" data-toggle="dropdown">
                    Columns <i class="fa fa-angle-down"></i>
                </a>
                <div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                    <?php
                        for($i=0;$i < count($headers);$i++){
                            echo '<label><input type="checkbox" checked data-column="'.$i.'">'.ucwords(str_replace('_',' ',$headers[$i])).'</label>';
                        }
                    ?>
                    <label><input type="checkbox" checked data-column="1">Rendering engine</label>
                </div>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover dataTable" id="<?php echo $setting['table_name']; ?>">
            <thead>
                <tr>
                    <?php
                        foreach($headers as $header){
                            echo '<th>'.ucwords(str_replace('_',' ',$header)).'</th>';
                        }
                        if (isset($buttons)){
                            echo '<th class="sorting_disabled">Actions</th>';
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                        echo '<tr>';
                        foreach($headers as $header){
                            echo '<td>';
                            echo $data->{$header};
                            echo '</td>';
                        }
                        if (isset($buttons)){
                            echo '<td>';
                            foreach($buttons as $button){
                                echo '<a '.
                                    (isset($button['id'])?'id="'.$button['id'].'"':'').' '.
                                    (isset($button['link'])?'href="'.$button['link'].'"':'').' '.
                                    'class="'.(isset($button['class'])?$button['class']:'btn default').'" '.
                                    'onclick=\''.(isset($button['script'])?$button['script']:'').'\' '.
                                    '>';
                                if (isset($button['icon'])){
                                    echo '<i class="'.$button['icon'].'"></i> ';
                                }
                                if (isset($button['name'])){
                                    echo $button['name'];
                                }
                                echo '</a>';
                            }
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->