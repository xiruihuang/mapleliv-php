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
        <li class="breadcrumb-item"><a href="/showAllMarketingHousing">广告系统</a></li>
        <li class="breadcrumb-item active"><a href="/showAllMarketUsers">所有广告信息</a></li>

    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Rentkeya所有广告信息 <small>All Advertisement Information</small></h1>
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
                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Route</th>
                            <th class="text-nowrap">Image Position</th>
                            <th class="text-nowrap">Ads Position</th>
                            <th class="text-nowrap">Ads Dimension</th>
                            <th class="text-nowrap">Ads Website</th>
                            <th class="text-nowrap">Paid</th>
                            <th class="text-nowrap">Sponsor</th>
                            <th class="text-nowrap">Is_Active</th>
                            <th class="text-nowrap">Details</th>
                            <th class="text-nowrap">Operation</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $u)
                        <tr class="gradeA">
                            <td width="1%" class="f-s-600 text-inverse">{{$u -> id}}</td>
                            <td>{{$u->ad_name}}</td>
                            <td>{{$u->route_url}}</td>
                            <td>{{$u->ad_image_url}}</td>
                            <td>{{$u->ad_position}}</td>
                            <td>{{$u->ad_dimension}}</td>
                            <td>{{$u->ad_link_path}}</td>
                            <td>{{$u->is_paid}}</td>
                            <td>{{$u->sponsor}}</td>
                            <td>{{$u->is_active}}</td>
                            <td>{{$u->ad_description}}</td>
                            <td>
                                @if($u -> is_active == 1)
                                <button class="btn btn-grey">Finished</button>
                                <a href="/adsRemove/{{$u -> id}}"><button class="btn btn-warning">移除</button></a>
                                @else
                                <a href="/adsUpdating/{{$u -> id}}"><button class="btn btn-success">发布</button></a>
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