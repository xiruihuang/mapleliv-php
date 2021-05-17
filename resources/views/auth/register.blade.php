<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>枫窝| MapleLiving | 后台管理系统</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

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

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- ================== END BASE JS ================== -->
</head>

<body class="pace-top">
        @include('sweet::alert')
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url(../assets/img/login-bg/12.jpg)" data-id="login-cover-image"></div>

        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <a href="/">MapleLiving</a> | </b>注册
                    <small>海量租房真实信息，让租房简单，不再痛苦！</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <label class="control-label">Name <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                <input id="firstName" type="text" class="form-control" placeholder="First name" name="firstName" value="{{ old('firstName') }}" required autofocus/>
                            </div>
                            <div class="col-md-6 m-b-15">
                                <input id="lastName" type="text" class="form-control" placeholder="Last name" name="lastName" value="{{ old('lastName') }}" required autofocus/>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="control-label">Phone Number <span class="text-danger">*</span></label>
                            <div class="row m-b-15">
                                <div class="col-md-12">
                                    <input id="phone" type="number" class="form-control" placeholder="e.g. 7781231234" name="phone" value="{{ old('phone') }}" required autofocus />
                                </div>
                            </div>
                            @if ($errors->has('phone'))
                                    <span class="help-block" style="color: red">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label">Password <span class="text-danger">*</span></label>
                            <div class="row m-b-15">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autofocus/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="control-label">Password Confirmed<span class="text-danger">*</span></label>
                            <div class="row m-b-15">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required autofocus/>
                                </div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block" style="color: red">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>

                    
                        <div class="checkbox-css m-b-30">
                            <div class="checkbox-css m-b-30">
                                
                                <label for="agreement_checkbox">
                                    If you submit your information, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
                                </label>
                            </div>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            Already a member? Click <a href="{{ route('login') }}">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Rentkeya | 安家 All Right Reserved 2018
                        </p>
                    </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
        <!--
        <ul class="login-bg-list clearfix">
            <li class="active"><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-16.jpg" style="background-image: url(../assets/img/login-bg/login-bg-16.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-15.jpg" style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-14.jpg" style="background-image: url(../assets/img/login-bg/login-bg-14.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-13.jpg" style="background-image: url(../assets/img/login-bg/login-bg-13.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-12.jpg" style="background-image: url(../assets/img/login-bg/login-bg-12.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/11.jpg" style="background-image: url(../assets/img/login-bg/11.jpg)"></a></li>
        </ul>
    -->
        
        <!-- begin theme-panel -->

    </div>
    <!-- end page container -->
    
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
    <script src="../assets/js/demo/login-v2.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>
</body>
</html>
