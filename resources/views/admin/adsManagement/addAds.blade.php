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
        <li class="breadcrumb-item"><a href="/showAllHousing">广告管理系统</a></li>
        <li class="breadcrumb-item active">创建广告</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Advertisement</h1>
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
            <h4 class="panel-title">Post Advertisement</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <form class="form-horizontal" data-parsley-validate="true" method="POST" action="/postAds" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="name">Name <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="route">Route <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="route" name="route" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="adsPosition">Ads Position <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="adsPosition" name="adsPosition" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="adsDimension">Ads Dimension <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="adsDimension" name="adsDimension" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="adsWeb">Ads Website <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="adsWeb" name="adsWeb" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="isPaid">Paid <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="isPaid" name="isPaid" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="sponssor">Sponsor <span class="text-danger">*</span> :</label>
                    <div class="col-md-8 col-sm-8">
                        <input class="form-control" type="text" id="sponssor" name="sponssor" placeholder="Required" data-parsley-required="true" required="ture" />
                    </div>
                </div>

                <div class="form-group row m-b-15">
                    <label class="col-md-4 col-sm-4 col-form-label" for="description">Details <span class="text-danger">*</span>:</label>
                    <div class="col-md-8 col-sm-8">
                        <textarea class="form-control" id="detail" name="detail" rows="4" placeholder="Range from 0 - 200" required="ture"></textarea>
                    </div>
                </div>

                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">提交</button>
                <br />
                <br />
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