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
    <head>

    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/apple/style.min.css" rel="stylesheet" />
    <link href="../assets/css/apple/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>




@endsection

@section('content')

@include('sweet::alert')



           


        <!-- begin #content -->
        <div id="content" class="content">
            
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="/admin">首页</a></li>
                <li class="breadcrumb-item"><a>签到系统</a></li>
                <li class="breadcrumb-item active"><a href="/showAllSignIn">签到记录</a></li>


                
            </ol>





            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Rentkeya签到系统 <small>签到记录</small></h1>
            <!-- end page-header -->
            <!-- begin row -->
            
                <!-- end col-2 -->
                <!-- begin col-10 -->
                <div class="col-lg-6">

                    <div class="panel panel-inverse">

                        <div class="panel-heading">
                            <h4 class="panel-title">Datepicker</h4>
                        </div>

                        

                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" method="GET" action="/getTotalHour" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group col-md-4">
                                    <label>姓名<span class="text-danger">*</span></label>
                                    <select class="form-control" name="userID" id="userID" type="text" style="width:560px;" required>
                                    @foreach($user as $u)
                                       <option value= "{{$u -> id}}"> 
                                        {{$u->lastName}}, {{$u->firstName}} 
                                        </option>
                                    @endforeach                            
                                    </select>
                                </div>
                                <div class="form-group row"  style="width:600px;">
                                    <label class="col-md-4 col-form-label">Range Datepicker</label>
                                    <div class="col-md-8">
                                        <div class="input-group input-daterange">
                                            <input type="text" class="form-control" name="start" placeholder="Date Start" />
                                            <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control" name="end" placeholder="Date End" />
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" style="transform: translateX(1800%);">提交</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-inverse">

                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">签到记录</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-combine" class="table table-striped table-bordered">


                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th class="text-nowrap">First Name</th>
                                        <th class="text-nowrap">Last Name</th>
                                        <th class="text-nowrap">上班IP</th>
                                        <th class="text-nowrap">下班IP</th>
                                        <th class="text-nowrap">上班时间</th>
                                        <th class="text-nowrap">下班时间</th>
                                        <th class="text-nowrap">totalHour</th>
                                 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sign as $u)
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">{{$u -> id}}</td>
                                        <td>{{$u->userFirstName}}</td>
                                        <td>{{$u->userLastName}}</td>
                                        
                                        <td>
                                            @if($u -> IpAddressArrive == "174.7.169.103")
                                                DT办公室
                                            @else
                                                其他地点
                                            @endif
                                        </td>
                                        <td>
                                            @if($u -> IpAddressBack == "174.7.169.103")
                                                DT办公室
                                            @else
                                                其他地点
                                            @endif
                                        </td>
                                        <td>{{$u->ArriveTime}}</td>
                                        <td>{{$u->BackTime}}</td>
                                        <td>{{$u->totalHour}}</td>
                                        
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
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



    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/crossbrowserjs/html5shiv.js"></script>
        <script src="../assets/crossbrowserjs/respond.min.js"></script>
        <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="../assets/js/theme/apple.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="../assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../assets/plugins/masked-input/masked-input.min.js"></script>
    <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
    <script src="../assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
    <script src="../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
    <script src="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
    <script src="../assets/plugins/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/demo/form-plugins.demo.min.js"></script>

    



    <!-- ================== END PAGE LEVEL JS ================== -->
    
    

    <script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
        });
    </script>


    




@endsection