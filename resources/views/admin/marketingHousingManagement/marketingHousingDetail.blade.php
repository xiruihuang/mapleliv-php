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

<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="/admin">首页</a></li>
				<li class="breadcrumb-item"><a href="/showAllMarketingHousing">市场部房源</a></li>
				<li class="breadcrumb-item active">市场部房源信息详情</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">市场部房源信息详情 </h1>

			<!-- end page-header -->
			
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="/showNotification" class="btn btn-xs btn-icon btn-circle btn-success" ><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Student管理</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel panel-inverse">
						
						<!-- begin table-responsive -->
						<div class="table-responsive">
							<table id="user" class="table table-condensed table-bordered">
								<thead>
									<tr>
										<th width="20%">Field Name</th>
										<th>Description</th>

									</tr>
								</thead>
								<tbody>

									<tr>
										<td class="bg-silver-lighter">标题</td>
										<td><span class="text-black-lighter">{{$housing -> title}}</span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">刊登价格</td>
										<td><span class="text-black-lighter">{{$housing -> publicPrice}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">地域</td>
										<td><span class="text-black-lighter">{{$housing -> area}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">房间数量</td>
										<td><span class="text-black-lighter">{{$housing -> beds}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">卫生间数量</td>
										<td><span class="text-black-lighter">{{$housing -> baths}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">家具</td>
										<td>
											@if($housing -> furnitures == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">洗衣机</td>
										<td>
											@if($housing -> washingMachines == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">洗碗机</td>
										<td>
											@if($housing -> dishWasher == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">电梯</td>
										<td>
											@if($housing -> elevator == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">烤箱</td>
										<td>
											@if($housing -> oven == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">电费</td>
										<td>
											@if($housing -> electricity == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">网费</td>
										<td>
											@if($housing -> web == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">煤气费</td>
										<td>
											@if($housing -> gas == 1)
											<span class="text-black-lighter">包含 </span>
											@else
											<span class="text-black-lighter">不包 </span>
											@endif
										</td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">停车位数量</td>
										<td><span class="text-black-lighter">{{$housing -> parking}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">楼层</td>
										<td><span class="text-black-lighter">{{$housing -> floor}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">面积</td>
										<td><span class="text-black-lighter">{{$housing -> size}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">具备条件</td>
										<td><span class="text-black-lighter">{{$housing -> condition}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">进度</td>
										<td><span class="text-black-lighter">{{$housing -> progress}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">房龄</td>
										<td><span class="text-black-lighter">{{$housing -> housingAges}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">原始网站链接</td>
										<td><span class="text-black-lighter">{{$housing -> websiteLink}} </span></td>
									</tr>
									<tr>
										<td class="bg-silver-lighter">描述</td>
										<td><textarea class="form-control" name="description" rows="10" placeholder="请填写房源详细描述，充分描述房子的概况有助于房源尽快出租">
											{{$housing -> description}} 
										</textarea> </td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- end table-responsive -->
					</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>

@endsection

@section('js')
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
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/demo/table-manage-default.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageDefault.init();
		});
	</script>
@endsection