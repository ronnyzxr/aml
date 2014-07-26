<div class="col-md-6"> 
    <div class="portlet box blue">
        <div class="portlet-title">
                <div class="caption">
                        <i class="fa fa-gift"></i> CATEGORY
                </div>
                <div class="tools">
                        <a href="" class="collapse">
                        </a>
                       
                </div>
        </div>
        <div class="portlet-body form">
            <form role="form">
                <div class="form-body">
                    <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control input-lg" name="category_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control input-lg" name="category_desc" placeholder="Description">
                    </div>
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