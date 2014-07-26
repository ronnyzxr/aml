<?php
    function formGenerator
    (
    //PARAMETERS
        $header_style=NULL,
        $footer_style=NULL,
        $form_attr=NULL,
        $action="?",
        $controls=NULL
            
    ){
    //VARIABLES
        $attribute=NULL;
        $output=NULL;
        $fields=NULL;
        
    //SETTING UP OTHER ATTRIBUTES OF THE FORM
    if (!empty($form_attr)){
        if (is_array($form_attr)){
            
            foreach($form_attr as $attr => $value){
                $attribute.=$attr."=".$value;
            }
            
        }else
            $attribute=$form_attr;
    }
    //END
    
    //SETTING UP FIELDS OF THE FORM
        
        if(!empty($controls)){
            
            if (is_array($controls)){
                
                foreach($controls as $row){
                  
                    if (is_array($row)){

                            foreach($row as $col){
                                $otherInputAttr="";
                                if (is_array($col)){
                                    
                                    if (isset($col['other']) && is_array($col['other'])){
                                        
                                        foreach($col['other'] as $attr => $value){
                                            $otherInputAttr.=$attr."=".$value;
                                        }
                                        
                                    }
                                    $fields.=$header_style;
                                    $fields.="<input type='".$col['type']."' name='".$col['name']."' ".$otherInputAttr." />";
                                    $fields.=$footer_style;
                                }
                            }
                    }
                }
            }
        }
        
    //END 
    
        $output="<form action='".$action."' method='POST' ".$attribute.">";
        
        $output.=$fields;
            
        
        $output.="</form>";
        
        echo $output;
        
    }
    
    $controls=array(
        
        'row' => array(
            'col1' => array(
                    'name'  => 'test',
                    'type'  => 'text',
                    'other' => array(
                        'placeholder'   => 'TEST'
                    )
                  
            ),
            'col2' => array(
                    'name'  => 'tes1t',
                    'type'  => 'text'
            ),
        )
       
    );
    
    formGenerator('','','','ds',$controls);
    
?>
<!--<form action="#" class="form-horizontal">
        <div class="form-body">
                <div class="form-group">
                        <label class="col-md-3 control-label">Text</label>
                        <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter text">
                                <span class="help-block">
                                A block of help text. </span>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Email Address</label>
                        <div class="col-md-4">
                                <div class="input-group">
                                        <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control input-circle-right" placeholder="Email Address">
                                </div>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-4">
                                <div class="input-group">
                                        <input type="password" class="form-control input-circle-left" placeholder="Password">
                                        <span class="input-group-addon input-circle-right">
                                        <i class="fa fa-user"></i>
                                        </span>
                                </div>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Left Icon</label>
                        <div class="col-md-4">
                                <div class="input-icon">
                                        <i class="fa fa-bell-o"></i>
                                        <input type="text" class="form-control input-circle" placeholder="Left icon">
                                </div>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Right Icon</label>
                        <div class="col-md-4">
                                <div class="input-icon right">
                                        <i class="fa fa-microphone"></i>
                                        <input type="text" class="form-control input-circle" placeholder="Right icon">
                                </div>
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Input With Spinner</label>
                        <div class="col-md-4">
                                <input type="password" class="form-control spinner input-circle" placeholder="Password">
                        </div>
                </div>
                <div class="form-group last">
                        <label class="col-md-3 control-label">Static Control</label>
                        <div class="col-md-4">
                                <span class="form-control-static">
                                email@example.com </span>
                        </div>
                </div>
        </div>
        <div class="form-actions fluid">
                <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-circle blue">Submit</button>
                        <button type="button" class="btn btn-circle default">Cancel</button>
                </div>
        </div>
</form>-->