<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">市场部房源</h1>
			<!-- end page-header -->
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">添加市场部房源</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/createRentkeyaProperty" enctype="multipart/form-data">
                            	{{ csrf_field() }}
								


								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="landlore"> 房东<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="landlore" name="landlore" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="contactPhone"> 房东电话 <span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="contactPhone" name="contactPhone" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>





								






							

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="file"> 上传图片(单张图片大小不得超过2MB,否则将提交不成功)<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input type="file" class="form-control" name="file[]" multiple>
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                       
                    </div>
                    <!-- end panel -->
			   
            <!-- end row -->
		</div>
		<!-- end #content -->