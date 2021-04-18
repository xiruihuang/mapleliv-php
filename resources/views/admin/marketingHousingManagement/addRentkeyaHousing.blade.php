@extends('layouts.app')

@section('css')
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

		<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/dropzone/min/dropzone.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END BASE JS ================== -->
@endsection

@section('content')

@include('sweet::alert')

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="/admin">首页</a></li>
				<li class="breadcrumb-item"><a href="/showAllMarketingHousing">市场部房源</a></li>
				<li class="breadcrumb-item active">添加市场部房源</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">市场部房源</h1>
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form method="POST" name="form-wizard" action="/createRentkeyaProperty" class="form-control-with-bg" enctype="multipart/form-data">
				{{ csrf_field() }}
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									房源基本信息
									<small class="text-ellipsis">address, contact</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									房源附加信息
									<small class="text-ellipsis">parking, oven...</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span>
								<span class="info text-ellipsis">
									联系信息
									<small class="text-ellipsis">landlore contact</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">4</span> 
								<span class="info text-ellipsis">
									照片
									<small class="text-ellipsis">pictures</small>
								</span>
							</a>
						</li>
					</ul>
					<!-- end wizard-step -->
					<!-- begin wizard-content -->
					<div>
						<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">

									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">房源基本信息</legend>

										
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right"> 标题 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="title" placeholder="Required" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">地址 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="address" placeholder="Required" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">城市 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="city" placeholder="Required" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">区域 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="area" placeholder="area" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房间个数 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="beds" placeholder="beds" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">卫生间个数 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="baths" placeholder="baths" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">收入价格 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="originPrice" placeholder="originPrice" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">公布价格 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="publicPrice" placeholder="publicPrice" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
									
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
						<!-- begin step-2 -->
						<div id="step-2">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">

									<!-- begin col-8 -->
									<div class="col-md-12 md-offset-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">房源附加信息</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">车位个数<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="parking" placeholder="parking" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房源楼高<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="floor" placeholder="floor" class="form-control" data-parsley-group="step-2" data-parsley-required="true"  />
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房龄<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="housingAges" placeholder="housingAges" class="form-control" data-parsley-group="step-2" data-parsley-required="true"  />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">面积<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="size" placeholder="size" class="form-control" data-parsley-group="step-2" data-parsley-required="true"  />
											</div>
										</div>
										<!-- end form-group -->
									
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否有洗衣机<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="washingMachines">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否带家具<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="furnitures">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否有洗碗机<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="dishWasher">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否有电梯<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="elevator">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->


										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否有烤箱<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="oven">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">包电<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="electricity">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">包网<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="web">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">包煤气<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="gas">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">是否有电梯<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<select class="form-control" name="elevator">
											<option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">具备条件 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="condition" placeholder="condition" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">进程 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="progress" placeholder="progress" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->



										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房源描述<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<textarea class="form-control" name="description" rows="8" placeholder="请填写房源详细描述，充分描述房子的概况有助于房源尽快出租"></textarea>
											</div>
										</div>
										<!-- end form-group -->

									</div>
									<!-- end col-8 -->
									
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-2 -->
						<!-- begin step-3 -->
						<div id="step-3">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">

									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Select your login username and password</legend>
										

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">原始网站链接 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="websiteLink" placeholder="websiteLink" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">入住时间 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="enterTime" placeholder="enterTime" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房东 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="landlore" placeholder="landlore" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">房东电话 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="contactPhone" placeholder="contactPhone" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">联系销售 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="contactPeople" placeholder="contactPeople" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">销售电话 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="phone" placeholder="phone" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">微信 <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="wechat" placeholder="wechat" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->

									</div>
									<!-- end col-8 -->
									
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-3 -->
						<!-- begin step-4 -->
						<div id="step-4">
							<div class="card padding-card">
		                        <div class="card-body">
		                           <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
		                           <input type="file" class="form-control" name="file[]" multiple>
		                        </div>
		                     </div>
							<button type="submit" class="btn btn-primary pull-right">提交</button>
							<br />
							<br />
						</div>
							
						</div>
						<!-- end step-4 -->
					</div>
					<!-- end wizard-content -->
				</div>
				<!-- end wizard -->
			</form>
			<!-- end wizard-form -->
		</div>
		<!-- end #content -->
@endsection

@section('js')
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/parsley/dist/parsley.js"></script>
	<script src="../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	    <script src="../assets/plugins/dropzone/min/dropzone.min.js"></script>
	<script src="../assets/plugins/highlight/highlight.common.js"></script>
	<script src="../assets/js/demo/render.highlight.js"></script>
	<script src="../assets/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
			FormWizardValidation.init();
			
		});
	</script>
@endsection