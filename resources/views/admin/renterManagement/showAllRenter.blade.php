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
				<li class="breadcrumb-item"><a href="/showAllRenter"></a>租客管理系统</li>
				<li class="breadcrumb-item active"><a href="/showAllRenter">所有租客记录</a></li>
				
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Rentkeya租客管理系统 <small>所有租客记录</small></h1>
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
                            <h4 class="panel-title">所有租客记录</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%"></th>
                                        <th class="text-nowrap">名字</th>
                                        <th class="text-nowrap">电话</th>
                                        <th class="text-nowrap">倾向户型</th>
                                        <th class="text-nowrap">倾向位置</th>
                                        <th class="text-nowrap">微信</th>
                                        <th class="text-nowrap">入住时间</th>
                                        <th class="text-nowrap">状态</th>
                                        <th class="text-nowrap">登记时间</th>

                                        <th class="text-nowrap">操作</th>

                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($renters as $u)
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600 text-inverse">{{$u -> id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->phone}}</td>

										<td>
											{{$u -> favoriteNumberOfBeds}}房{{$u->favoritenumberOfBaths}}卫
										</td>
                                        <td>{{$u->favoriteLocation}}</td>
                                        <td>{{$u->wechat}}</td>
                                        <td>{{$u->enterTime}}</td>
                                        

                                        <td>
											@if($u -> status == 1)
												<i class="fas fa-check text-success"></i>
											@elseif($u -> status == -1)
												
												<i class="fas fa-ban text-danger"></i>
											@else
												显示异常
											@endif
                                        </td>
                                        <td>
											{{$u->created_at}}
                                        </td>
                                        <td>
                   
                                        	<a href="/renterDetail/{{$u -> id}}"><button class="btn btn-info">详情</button></a>
                                        	<a href="/editRenter/{{$u -> id}}"><button class="btn btn-success">编辑</button></a>
                                        	@if($u -> status == 1)
                                        		<a href="/deletingRenter/{{$u -> id}}"><button class="btn btn-danger">移除</button></a>
                                        	@endif

                                        </td>
                                    </tr>
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