@extends('layouts.app')

@section('css')
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
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
				<li class="breadcrumb-item active"><a href="/admin">Dashboard</a></li>
				
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Rentkeya | 安家</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			@if(Auth::user()->type < 2)
			<div class="row">
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">Total Profit</div>
							<div class="stats-number">{{$total}}</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
							<div class="stats-desc"></div>
                        </div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-blue">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">Total Register Users</div>
							<div class="stats-number">{{$userCount}}</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							<div class="stats-desc"></div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-purple">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title"># of House Submit this week </div>
							<div class="stats-number">{{$thisWeekStudent}}</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							<div class="stats-desc"></div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-black">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">Rentkeya House Make Deal</div>
							<div class="stats-number">{{$housing}}</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 54.9%;"></div>
							</div>
							<div class="stats-desc"></div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			</div>
			<!-- end row -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
			    <div class="col-lg-8">
			        <div class="widget-chart with-sidebar inverse-mode">
			            <div class="widget-chart-content bg-black">
			                <h4 class="chart-title">
			                    Profit Analytics
			                    <small>Profits over past 30 days</small>
			                </h4>
			                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
			            </div>
			            <div class="widget-chart-sidebar bg-black-darker">
			                <div class="chart-number">
			                    0
			                    <small>Total visitors</small>
			                </div>
			                <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
			                <ul class="chart-legend f-s-11">
			                    <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
			                    <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
			                </ul>
			            </div>
			        </div>
			    </div>
			    <!-- end col-8 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-4">
			        <div class="panel panel-inverse" data-sortable-id="index-1">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    Visitors Origin
			                </h4>
			            </div>
			            <div id="visitors-map" class="bg-black" style="height: 179px;"></div>
			            <div class="list-group">
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                1. United State 
                                <span class="badge f-w-500 bg-gradient-teal f-s-10">20.95%</span>
                            </a> 
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                2. India
                                <span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
                            </a>
                            <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                3. Mongolia
                                <span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
                            </a>
                        </div>
			        </div>
			    </div>
			    <!-- end col-4 -->
			</div>
			<!-- end row -->
			<!-- begin row -->

			@endif
			<!-- end row -->
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
    <script src="../assets/plugins/d3/3.5.2/d3.min.js"></script>
    <script src="../assets/plugins/nvd3/build/nv.d3.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="../assets/js/demo/dashboard-v2.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
            var handleGetDate = function(minusDate) {
                var d = new Date();
                    d = d.setDate(d.getDate() - minusDate);
                return d;
            };

            var d1 = [ 
            [handleGetDate(30), {{$ttlMyPro[30]}}], 
            [handleGetDate(29), {{$ttlMyPro[29]}}], 
            [handleGetDate(28), {{$ttlMyPro[28]}}], 
            [handleGetDate(27), {{$ttlMyPro[27]}}], 
            [handleGetDate(26), {{$ttlMyPro[26]}}], 
            [handleGetDate(25), {{$ttlMyPro[25]}}], 
            [handleGetDate(24), {{$ttlMyPro[24]}} ], 
            [handleGetDate(23), {{$ttlMyPro[23]}} ], 
            [handleGetDate(22), {{$ttlMyPro[22]}} ], 
            [handleGetDate(21), {{$ttlMyPro[21]}} ], 
            [handleGetDate(20), {{$ttlMyPro[20]}} ], 
            [handleGetDate(19), {{$ttlMyPro[19]}}], 
            [handleGetDate(18), {{$ttlMyPro[18]}} ], 
            [handleGetDate(17), {{$ttlMyPro[17]}}], 
            [handleGetDate(16), {{$ttlMyPro[16]}}], 
            [handleGetDate(15), {{$ttlMyPro[15]}}], 
            [handleGetDate(14), {{$ttlMyPro[14]}}], 
            [handleGetDate(13), {{$ttlMyPro[13]}}], 
            [handleGetDate(12), {{$ttlMyPro[12]}}], 
            [handleGetDate(11), {{$ttlMyPro[11]}}], 
            [handleGetDate(10), {{$ttlMyPro[10]}}], 
            [handleGetDate(9) , {{$ttlMyPro[9]}}], 
            [handleGetDate(8) , {{$ttlMyPro[8]}}], 
            [handleGetDate(7) , {{$ttlMyPro[7]}}], 
            [handleGetDate(6) , {{$ttlMyPro[6]}}], 
            [handleGetDate(5) , {{$ttlMyPro[5]}}], 
            [handleGetDate(4) , {{$ttlMyPro[4]}}], 
            [handleGetDate(3) , {{$ttlMyPro[3]}}], 
            [handleGetDate(2) , {{$ttlMyPro[2]}}], 
            [handleGetDate(1) , {{$ttlMyPro[1]}}], 
            [handleGetDate(0) , {{$ttlMyPro[0]}}]
        ];

        var d2 = [ 
            [handleGetDate(30), {{$ttlPro[30]}}], 
            [handleGetDate(29), {{$ttlPro[29]}}], 
            [handleGetDate(28), {{$ttlPro[28]}}], 
            [handleGetDate(27), {{$ttlPro[27]}}], 
            [handleGetDate(26), {{$ttlPro[26]}}], 
            [handleGetDate(25), {{$ttlPro[25]}}], 
            [handleGetDate(24), {{$ttlPro[24]}} ], 
            [handleGetDate(23), {{$ttlPro[23]}} ], 
            [handleGetDate(22), {{$ttlPro[22]}} ], 
            [handleGetDate(21), {{$ttlPro[21]}} ], 
            [handleGetDate(20), {{$ttlPro[20]}} ], 
            [handleGetDate(19), {{$ttlPro[19]}}], 
            [handleGetDate(18), {{$ttlPro[18]}} ], 
            [handleGetDate(17), {{$ttlPro[17]}}], 
            [handleGetDate(16), {{$ttlPro[16]}}], 
            [handleGetDate(15), {{$ttlPro[15]}}], 
            [handleGetDate(14), {{$ttlPro[14]}}], 
            [handleGetDate(13), {{$ttlPro[13]}}], 
            [handleGetDate(12), {{$ttlPro[12]}}], 
            [handleGetDate(11), {{$ttlPro[11]}}], 
            [handleGetDate(10), {{$ttlPro[10]}}], 
            [handleGetDate(9) , {{$ttlPro[9]}}], 
            [handleGetDate(8) , {{$ttlPro[8]}}], 
            [handleGetDate(7) , {{$ttlPro[7]}}], 
            [handleGetDate(6) , {{$ttlPro[6]}}], 
            [handleGetDate(5) , {{$ttlPro[5]}}], 
            [handleGetDate(4) , {{$ttlPro[4]}}], 
            [handleGetDate(3) , {{$ttlPro[3]}}], 
            [handleGetDate(2) , {{$ttlPro[2]}}], 
            [handleGetDate(1) , {{$ttlPro[1]}}], 
            [handleGetDate(0) , {{$ttlPro[0]}}]
        ]
            DashboardV2.init(handleVisitorsAreaChart(d1,d2), handleVisitorsDonutChart(0,0),handleVisitorsVectorMap(),handleScheduleCalendar(),handleDashboardGritterNotification());
        });
    </script>
@endsection