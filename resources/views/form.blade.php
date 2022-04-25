<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>枫窝| MapleLiving | 后台管理系统</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5SNL4GP');</script>
    <!-- End Google Tag Manager -->

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109935869-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-109935869-1');
    </script>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet"/>
    <link href="../assets/css/default/style.min.css" rel="stylesheet"/>
    <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet"/>
    <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
</head>
<body>
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
        <form method="POST" name="form-wizard" action="/sendForm" class="form-control-with-bg" enctype="multipart/form-data">
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
								</span>
                        </a>
                    </li>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-3">
                            <span class="number">3</span>
                            <span class="info text-ellipsis">
									上传文件
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
                                                        <option value="Student"> 学生 </option>
                                                        <option value="AccompanyStudent"> 陪读 </option>
                                                        <option value="Work"> 工作 </option>
                                                        <option value="Other"> 其他 </option>
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
                                                        <option value="UofT"> 多伦多大学 </option>
                                                        <option value="Ryerson"> 瑞尔森大学 </option>
                                                        <option value="OCAD"> OCAD </option>
                                                        <option value="YorkUniversity"> 约克大学 </option>
                                                        <option value="Other"> 其他 </option>
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
                                                        <option value="Downtown Toronto"> 多伦多市中心 </option>
                                                        <option value="North York"> 北约克 </option>
                                                        <option value="Mississauga"> 密西沙加 </option>
                                                        <option value="Scarborough"> 世嘉堡 </option>
                                                        <option value="Other"> 其他 </option>
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
                                                        <option value="Yes"> 是 </option>
                                                        <option value="No"> 否 </option>
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
                                                        <option value="$1700 - $2200"> $1700 - $2200 </option>
                                                        <option value="$2200 - 3000"> $2200 - 3000 </option>
                                                        <option value="$3000以上"> $3000以上 </option>
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
                                                        <option value="Yes"> 是 </option>
                                                        <option value="No"> 否 </option>
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
                                                        <option value="Yes"> 是 </option>
                                                        <option value="No"> 否 </option>
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
                                                        <option value="Yes"> 是 </option>
                                                        <option value="No"> 否 </option>
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
                                                        <option value="首一尾五"> 首一尾五 </option>
                                                        <option value="全年"> 全年 </option>
                                                        <option value="首一尾三"> 首一尾三 </option>
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
                                <h5 class="card-title mb-4">上传学签图片(大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="studentPermit" data-parsley-required="true">
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">上传学校offer(大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="offer" data-parsley-required="true">
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">上传护照头像页(大小不得超过2MB,否则将提交不成功)</h5>
                                <input type="file" class="form-control" name="passport" data-parsley-required="true">
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
             <!-- end wizard -->
        </form>
    <!-- end wizard-form -->
    </div>
    <!-- end #content -->
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
</body>
</html>