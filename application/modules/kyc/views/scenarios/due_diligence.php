<div class="col-md-6"> 
	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Due Diligence 
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
										<label>Name * </label>
										<input type="text" name="dd_name" class="form-control input-lg" placeholder="Name">
									</div>
									<div class="form-group">
										<label>Profile * </label>
											<select multiple="" name="dd_profile" class="form-control">
												<option>Select</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea name="dd_desc" class="form-control input-lg" placeholder="Description" rows="3" style="margin: 0px -3.875px 0px 0px; height: 111px;"></textarea>
									</div>
									<div class="form-group">
										<label>Check List Name *</label>
										<input type="text" name="dd_clname" class="form-control input-lg" placeholder="Check Name List">
									</div>
									<div class="form-group">
										<label>Attribute</label>
										<select name="dd_attribute" class="form-control">
											<option>Select </option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>Type</label>
										<select name="dd_type" class="form-control">
											<option>Select</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>Score</label>
										<input type="text" name="dd_score" class="form-control input-lg" placeholder="Score">
									</div>
									<div class="form-group">
										<label>Parent</label>
										<select name="dd_parent" class="form-control">
											<option>Select</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-actions right">
									<button type="button" class="btn default">Cancel</button>
									<button type="submit" class="btn green">Submit</button>
								</div>
							</form>
						</div>
	</div>
</div>
<div class="col-md-6"> 
	 <!-- BEGIN SAMPLE TABLE PORTLET-->
   <?php  $this->load->view('due_diligence/dd_check_list');  ?>
    <!-- END SAMPLE TABLE PORTLET-->			
</div>
<div class="col-md-6">
    <!-- BEGIN SAMPLE TABLE PORTLET-->
   <?php  $this->load->view('due_diligence/dd_list');  ?>
    <!-- END SAMPLE TABLE PORTLET-->
</div>

