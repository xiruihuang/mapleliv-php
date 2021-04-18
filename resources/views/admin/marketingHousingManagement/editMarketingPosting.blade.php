@extends('layouts.app')

@section('css')
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
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
				<li class="breadcrumb-item active">修改市场部房源信息</li>
			</ol>
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
                            <h4 class="panel-title">修改市场部房源信息</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/editRentkeyaHousing/{{$housing -> id}}" enctype="multipart/form-data">
                            	{{ csrf_field() }}
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="title"> 标题<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="title" name="title" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> title}}" />
									</div>
								</div>


								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="landlore"> 房东<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="landlore" name="landlore" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> landlore}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="contactPhone"> 房东电话 <span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="contactPhone" name="contactPhone" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> contactPhone}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="contactPeople"> 联系销售<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="contactPeople" name="contactPeople" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> contactPeople}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="phone"> 销售电话<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="phone" name="phone" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> phone}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="wechat"> 微信<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="wechat" name="wechat" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> wechat}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="address"> 地址<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="address" name="address" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> address}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="city"> 城市<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="city" name="city" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> city}}"/>
									</div>
								</div>


								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="area"> 区域<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="area" name="area" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> area}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="originPrice"> 收入价格<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="originPrice" name="originPrice" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> originPrice}}"/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="publicPrice"> 公布价格<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="publicPrice" name="publicPrice" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> publicPrice}}"/>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="beds"> 房间个数<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="beds" name="beds" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> beds}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="baths"> 卫生间个数<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="baths" name="baths" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> baths}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="parking"> 车位个数<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="parking" name="parking" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> parking}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="floor"> 房源楼高<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="floor" name="floor" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> floor}}"/>
									</div>
								</div>


								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="housingAges"> 房龄<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="housingAges" name="housingAges" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> housingAges}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="washingMachines"> 是否有洗衣机<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="washingMachines" required >
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="furnitures"> 是否带家具<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="furnitures" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="dishWasher"> 是否有洗碗机<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="dishWasher" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="elevator"> 是否有电梯<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="elevator" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="oven"> 是否有烤箱<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="oven" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="electricity"> 包电<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="electricity" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="web"> 包网<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="web" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="gas"> 包煤气<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control" name="gas" required>
	                                       <option value="1"> 是 </option>
	                                       <option value="2"> 否 </option>                            
	                                    </select>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="condition">具备条件<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="condition" name="condition" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> condition}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="progress"> 进程<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="progress" name="progress" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> progress}}"/>
									</div>
								</div>



								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="size"> 面积<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="size" name="size" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> size}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="websiteLink"> 原始网站链接<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="websiteLink" name="websiteLink" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> websiteLink}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="enterTime"> 入住时间<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="enterTime" name="enterTime" placeholder="Required" data-parsley-required="true" required="ture" value="{{$housing -> enterTime}}"/>
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="description"> 房源描述<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<textarea class="form-control" name="description" rows="4" placeholder="请填写房源详细描述，充分描述房子的概况有助于房源尽快出租">{{$housing -> description}}</textarea>
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
@endsection

@section('js')
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/parsley/dist/parsley.js"></script>
	<script src="../assets/plugins/highlight/highlight.common.js"></script>
	<script src="../assets/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
		});
	</script>
@endsection