<div class="col-md-6"> 
    <div class="portlet box blue">
        <div class="portlet-title">
                <div class="caption">
                        <i class="fa fa-gift"></i> FORM
                </div>
                <div class="tools">
                        <a href="" class="collapse">
                        </a>
                       
                </div>
        </div>
        <div class="portlet-body form">
            <form role="form">
                <div class="form-body">
                    <div class="row">
                        <div class="form-group">
                                <label>Rule Name</label>
                                <input type="text" class="form-control input-lg" name="rule_name" placeholder="Name">
                        </div>
                        <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control input-lg" name="category_desc" placeholder="Description">
                        </div>
                    </div><!--ROW-->
                    <div class="row">
                        <div class="form-group">
                                <label>Bracket</label>
                                <select name="bracket">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label>Customer Fields</label>
                                <select name="bracket">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label>Operation</label>
                                <select name="bracket">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                        </div>
                    </div><!--ROW-->
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn green">Submit</button>
                    <button type="button" class="btn default">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-6">
    <?php  $this->load->view('views/list');  ?>
   <!-- END SAMPLE TABLE PORTLET-->
</div>