@extends('layouts.app')

@section('css')
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />
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
				<li class="breadcrumb-item"><a href="/admin">Home</a></li>
				<li class="breadcrumb-item"><a href="/showAllGenHousing">Users</a></li>
				<li class="breadcrumb-item active"><a href="/showAllGenHousing">All Rentekya Housing</a></li>

			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Rentkeya房源列表 <small>All Rentkeya Housing</small></h1>
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
                            <h4 class="panel-title">所有精选房源</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-combine" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%"></th>
                                        <th class="text-nowrap">Title</th>
                                        <th class="text-nowrap">Contact people</th>
                                        <th class="text-nowrap">Address</th>
                                        <th class="text-nowrap">City</th>
                                        <th class="text-nowrap">Refresh Time</th>
                                        <th class="text-nowrap">Created at</th>
                                        <th class="text-nowrap">Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($housing as $t)
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600 text-inverse">{{$t -> id}}</td>
                                        <td>{{$t -> title}}</td>
                                        <td>{{$t -> contactPeople}}</td>
                                        <td>{{$t -> address}}</td>
                                        <td>{{$t -> city}}</td>
                                        <td>{{$t -> refreshTime}}</td>
                                        <td>{{$t -> created_at}}</td>
                                        <td>
                                        	@if($t -> status == 1)
                                        	<button class="btn btn-grey">Finished</button>
                                        	@else
                                        	<a href="/finish/{{$t->id}}" class="btn btn-success">Finish</a>
                                        	@endif
                                        	<a href="" class="btn btn-warning">Modified</a>
																					@if((Auth::user()->type == -1))
																						@if($t -> status == -2)
                                        			<button class="btn btn-grey">Deleted</button>
                                        		@else
                                        		<a href="/delete/{{$t->id}}" class="btn btn-success">Delete</a>
                                        		@endif
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
	<script src="../assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="../assets/js/demo/table-manage-combine.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			TableManageCombine.init();
		});
	</script>
@endsection
