@extends('layouts.app')

@section('css')
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
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
				<li class="breadcrumb-item active"><a href="/showAllMarketUsers">所有市场部房源</a></li>
				
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Rentkeya所有市场部房源 <small>All Marketing Housing</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-lg-12">
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">所有市场部房源</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%"></th>
                                        <th class="text-nowrap">地址</th>
                                        <th class="text-nowrap">城市</th>
                                        <th class="text-nowrap">负责销售</th>
                                        <th class="text-nowrap">房东</th>
                                        <th class="text-nowrap">联系电话</th>
                                        <th class="text-nowrap">入住时间</th>
                                        <th class="text-nowrap">底价</th>
                                        <th class="text-nowrap">房间</th>
                                        <th class="text-nowrap">操作</th>

                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($housing as $u)
                                		@if($u -> status == 1)
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600 text-inverse">{{$u -> id}}</td>
                                        <td>{{$u->address}}</td>
                                        <td>{{$u->city}}</td>

										@foreach($users as $r)
											@if($r->id == $u->userID)
                                        		<td>{{$r->firstName}}</td>
                                        	@endif
                                        @endforeach

                                        <td>{{$u->landlore}}</td>
                                        <td>{{$u->contactPhone}}</td>
                                        <td>{{$u->enterTime}}</td>
                                        <td>{{$u->originPrice}}</td>

                                        <td>
											{{$u -> beds}}房{{$u -> baths}}卫
                                        </td>
                                        <td>
                                        	@if($u -> status == 0)
                                        	<a href="/marketingPosting/{{$u -> id}}"><button class="btn btn-success">发布</button></a>
                                        	@elseif($u -> status == 1)
                                        	<a href="/marketingDeleting/{{$u -> id}}"><button class="btn btn-warning">移除</button></a>
                                        	@endif
                                        	<a href="/marketingHousingDetail/{{$u -> id}}"><button class="btn btn-info">详情</button></a>
                                        </td>
                                    </tr>
                                    	@endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
@endsection

@section('js')
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageButtons.init()
		});
	</script>
@endsection