@extends('layouts.app')

@section('css')
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/default/style.min.css" rel="stylesheet" />
    <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
    <link href="../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/dropzone/min/dropzone.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
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
            <li class="breadcrumb-item active">个人信息</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">个人信息</h1>
        <!-- end page-header -->

        <!-- begin wizard-form -->
        <form method="POST" name="form-wizard" action="/createRentkeyaProperty" class="form-control-with-bg" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- begin wizard -->
            <div id="wizard">
                <!-- begin wizard-step -->
                <ul>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-1">
                            <span class="number">1</span>
                            <span class="info text-ellipsis">
									个人信息
									<small class="text-ellipsis">Personal Information</small>
								</span>
                        </a>
                    </li>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-2">
                            <span class="number">2</span>
                            <span class="info text-ellipsis">
									租房喜好
									<small class="text-ellipsis">parking, oven...</small>
								</span>
                        </a>
                    </li>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-3">
                            <span class="number">3</span>
                            <span class="info text-ellipsis">
									上传文件
									<small class="text-ellipsis">landlore contact</small>
								</span>
                        </a>
                    </li>
                </ul>
                <!-- end wizard-step -->
                <!-- begin wizard-content -->
                <div>
                    <!-- begin step-1 -->
                    <div id="step-1">
                        <!-- begin fieldset -->
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">

                                <!-- begin col-8 -->
                                <div class="col-md-8 offset-md-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">个人信息</legend>


                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right"> 姓名 <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Required" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">微信号</label>
                                        <div class="col-md-6">
                                            <input type="text" name="wechat" data-parsley-group="step-1" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">职业 <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="occupation">
                                                        <option value="student"> 学生 </option>
                                                        <option value="accompanyStudent"> 陪读 </option>
                                                        <option value="work"> 工作 </option>
                                                        <option value="other"> 其他 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">入读学校</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="colleage">
                                                        <option value="student"> 多伦多大学 </option>
                                                        <option value="accompanyStudent"> 瑞尔森大学 </option>
                                                        <option value="work"> OCAD </option>
                                                        <option value="other"> 约克大学 </option>
                                                        <option value="other"> 其他 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                </div>
                                <!-- end col-8 -->

                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-1 -->
                    <!-- begin step-2 -->
                    <div id="step-2">
                        <!-- begin fieldset -->
                        <fieldset>
                            <!-- begin row -->
                            <div class="row">

                                <!-- begin col-8 -->
                                <div class="col-md-12 md-offset-2">
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">租房喜好</legend>

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">喜好地区<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="area">
                                                        <option value="1"> 多伦多市中心 </option>
                                                        <option value="2"> 北约克 </option>
                                                        <option value="1"> 密西沙加 </option>
                                                        <option value="2"> 世嘉堡 </option>
                                                        <option value="1"> 其他 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">是否养宠<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="pat">
                                                        <option value="1"> 是 </option>
                                                        <option value="2"> 否 </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">预算<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="budget">
                                                        <option value="1"> $1700 - $2200 </option>
                                                        <option value="2"> $2200 - 3000 </option>
                                                        <option value="2"> $3000以上 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">是否带家具<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="furnitures">
                                                        <option value="1"> 是 </option>
                                                        <option value="2"> 否 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->


                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">是否需要车位<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="park">
                                                        <option value="1"> 是 </option>
                                                        <option value="2"> 否 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">是否可以当地看房<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="check">
                                                        <option value="1"> 是 </option>
                                                        <option value="2"> 否 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">是否能预付房租<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="prepaid">
                                                        <option value="1"> 首一尾五 </option>
                                                        <option value="2"> 全面 </option>
                                                        <option value="1"> 首一尾三 </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                </div>
                                <!-- end col-8 -->

                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- begin step-4 -->
                    <div id="step-3">
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="file[]" multiple>
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="file[]" multiple>
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="file[]" multiple>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">提交</button>
                        <br />
                        <br />
                    </div>

                </div>
                <!-- end step-4 -->
            </div>
            <!-- end wizard-content -->
    </div>
    <!-- end wizard -->
    </form>
    <!-- end wizard-form -->
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
    <script src="../assets/plugins/parsley/dist/parsley.js"></script>
    <script src="../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
    <script src="../assets/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="../assets/plugins/highlight/highlight.common.js"></script>
    <script src="../assets/js/demo/render.highlight.js"></script>
    <script src="../assets/js/demo/form-wizards-validation.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            Highlight.init();
            FormWizardValidation.init();

        });
    </script>
@endsection