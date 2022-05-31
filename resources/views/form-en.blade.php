<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>枫窝| MapleLiving</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- End Google Tag Manager -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-109935869-1');
    </script>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
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
            <li class="breadcrumb-item active">Personal Information</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Personal Information</h1>
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
									Personal Information
								</span>
                        </a>
                    </li>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-2">
                            <span class="number">2</span>
                            <span class="info text-ellipsis">
									Rental Preferences
								</span>
                        </a>
                    </li>
                    <li class="col-md-3 col-sm-4 col-6">
                        <a href="#step-3">
                            <span class="number">3</span>
                            <span class="info text-ellipsis">
									Upload Files
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
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal Information</legend>


                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right"> Name <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Required" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Wechat Number</label>
                                        <div class="col-md-6">
                                            <input type="text" name="wechat" data-parsley-group="step-1" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Email Address <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="text" name="email" data-parsley-group="step-1" class="form-control" placeholder="Required" data-parsley-required="true"/>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Profession<span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="occupation">
                                                        <option value="Student"> Student </option>
                                                        <option value="AccompanyStudent"> AccompanyStudent </option>
                                                        <option value="Work"> Work </option>
                                                        <option value="Other"> Other </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">School</label>
                                        <div class="col-md-6">
                                            <input type="text" name="colleage" data-parsley-group="step-1" class="form-control" />
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
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Rental Preferences</legend>

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Pefer Area</label>
                                        <div class="col-md-6">
                                            <input type="text" name="area" data-parsley-group="step-1" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->


                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right"> Move In Date <span class="text-danger">*</span></label>
                                        <div class="col-md-6">
                                            <input type="text" name="movein" placeholder="Required" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
                                        </div>
                                    </div>




                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Lease Term</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="lease">
                                                        <option value="One Year"> One Year </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Pet</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="pat">
                                                        <option value="Yes"> Yes </option>
                                                        <option value="No"> No </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Budget</label>
                                        <div class="col-md-6">
                                            <input type="text" name="budget" data-parsley-group="step-1" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end form-group -->

                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Furniture</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="furnitures">
                                                        <option value="Yes"> Yes </option>
                                                        <option value="No"> No </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->


                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Park</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="park">
                                                        <option value="Yes"> Yes </option>
                                                        <option value="No"> No </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Need Check Property</label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="check">
                                                        <option value="Yes"> Yes </option>
                                                        <option value="No"> No </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <!-- begin form-group -->
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Prepaid<span class="text-danger">&nbsp;</span></label>
                                        <div class="col-md-6">
                                            <div class="row row-space-6">
                                                <div class="col-6">
                                                    <select class="form-control" name="prepaid">
                                                        <option value="Yes"> Yes </option>
                                                        <option value="No"> No </option>
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
                                <h5 class="card-title mb-4">Upload a picture of the student visa (the size must not exceed 2MB, otherwise the submission will be unsuccessful)</h5>
                                <input type="file" class="form-control" name="studentPermit">
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Upload the school offer (the size must not exceed 2MB, otherwise the submission will be unsuccessful)</h5>
                                <input type="file" class="form-control" name="offer" data-parsley-required="true">
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Upload passport photo page (the size must not exceed 2MB, otherwise the submission will be unsuccessful)</h5>
                                <input type="file" class="form-control" name="passport" data-parsley-required="true">
                            </div>
                        </div>
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Upload a bank deposit certificate (the size must not exceed 2MB, otherwise the submission will be unsuccessful)</h5>
                                <input type="file" class="form-control" name="bank">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
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