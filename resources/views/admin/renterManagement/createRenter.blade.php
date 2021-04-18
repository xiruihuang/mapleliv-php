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
				<li class="breadcrumb-item"><a href="/showAllRenter">租客管理系统</a></li>
				<li class="breadcrumb-item active">添加租客记录</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">添加租客记录</h1>
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
                            <h4 class="panel-title">添加租客记录</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/uploadRenter" enctype="multipart/form-data">
                            	{{ csrf_field() }}
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="name"> 名字<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="name" name="name" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="gender"> 性别<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="gender" name="gender" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="phone"> 电话<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="phone" name="phone" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="wechat"> 微信<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="wechat" name="wechat" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="favoriteLocation"> 倾向位置<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="favoriteLocation" name="favoriteLocation" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="favoriteNumberOfBeds"> 倾向房间数<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="favoriteNumberOfBeds" name="favoriteNumberOfBeds" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="favoritenumberOfBaths"> 倾向卫生间数<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="favoritenumberOfBaths" name="favoritenumberOfBaths" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="favoritePrice"> 倾向价格<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="favoritePrice" name="favoritePrice" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="enterTime"> 入住时间<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="enterTime" name="enterTime" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="otherRequirment"> 其他要求<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="otherRequirment" name="otherRequirment" placeholder="Required" data-parsley-required="true" required="ture" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="description"> 备注<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="description" name="description" placeholder="Required" data-parsley-required="true" required="ture" />
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