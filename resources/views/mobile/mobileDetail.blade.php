<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>枫窝 | MapleLiving | 加拿大租房平台</title>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="../mobile2/css/style.css" rel="stylesheet" type="text/css"/>
    <script type="../mobile2/text/javascript" src="../mobile2/js/jquery.min.js"></script>
    <script type="../mobile2/text/javascript" src="../mobile2/js/slider.js"></script>
    <script type="../mobile2/text/javascript" src="../mobile2/js/tab.js"></script>


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

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="../asset/vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- Select2 CSS -->
    <link href="../asset/vendor/select2/css/select2-bootstrap.css"/>
    <link href="../asset/vendor/select2/css/select2.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="../asset/css/osahan.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.bundle.js"></script>


    <link href="../asset/animate.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../asset/animate.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../asset/swiper.animate1.0.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>


<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-0 mb-3 text-white">枫窝精选房源</h1>
                <div class="breadcrumbs">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Property Single Slider header -->
<!-- Property Single Slider -->
@if($housing -> uploadTypeID < 3)
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="card">

                        <div class="card-body osahan-slider pl-0 pr-0 pt-0 pb-0">
                            <div id="osahansliderz" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">

                                    <li data-target="#osahansliderz" data-slide-to="0" class="active"></li>

                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach($houseIMGs as $hs)
                                        @if($hs->status == 0)
                                            <li data-target="#osahansliderz" data-slide-to="{{$i}}"></li>
                                            @php
                                                $i = $i + 1;
                                            @endphp

                                        @endif
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">


                                    @foreach($houseIMGs as $hs)
                                        @if($hs->status == 0)
                                            <div class="carousel-item active rounded"
                                                 style="background-image: url('{{$hs -> filePath}}');background-size:100% 100%;height:260px;min-height:260px"></div>
                                            @break
                                        @else
                                        @endif
                                    @endforeach

                                    
                                </div>
                                <a class="carousel-control-prev" href="#osahansliderz" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#osahansliderz" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>


                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">房源描述</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-sofa"></i>
                                        <strong>房间:</strong>
                                        <p class="mb-0">{{$housing -> beds}} 个房间</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-hot-tub"></i>
                                        <strong>卫生间:</strong>
                                        <p class="mb-0">{{$housing -> baths}} 个卫生间</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-car-convertible"></i>
                                        <strong>停车位:</strong>
                                        <p class="mb-0">{{$housing -> parking}} 个停车位</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-move-resize-variant"></i>
                                        <strong>家具:</strong>
                                        @if($housing -> furnitures == 1)
                                            <p class="mb-0">有</p>
                                        @else
                                            <p class="mb-0">没有</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-floor-plan"></i>
                                        <strong>楼层:</strong>
                                        <p class="mb-0">{{$housing -> floor}} 层</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="list-icon">
                                        <i class="mdi mdi-move-resize-variant"></i>
                                        <strong>房龄:</strong>
                                        <p class="mb-0">{{$housing -> housingAges}} 年</p>
                                    </div>
                                </div>
                            </div>
                            <textarea class="form-control" rows="10"
                                      style="border-color: white; background-color: white">{{$housing -> description}}</textarea>

                        </div>
                    </div>
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">其他信息</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="sidebar-card-list">
                                        @if($housing -> washingMachines == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    洗衣机 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 洗衣机
                                                </a></li>
                                        @endif

                                        @if($housing -> dishWasher == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    洗碗机 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 洗碗机
                                                </a></li>
                                        @endif

                                        @if($housing -> elevator == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    电梯 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 电梯
                                                </a></li>
                                        @endif


                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="sidebar-card-list">
                                        @if($housing -> electricity == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    包电费 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 包电费
                                                </a></li>
                                        @endif

                                        @if($housing -> web == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    包网费 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 包网费
                                                </a></li>
                                        @endif

                                        @if($housing -> oven == 1)
                                            <li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i>
                                                    烤箱 </a></li>
                                        @else
                                            <li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> 烤箱
                                                </a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">房源位置</h5>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6">
                                    <p><strong class="text-dark">地址: </strong> {{$housing -> address}}</p>

                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p><strong class="text-dark">城市 :</strong> {{$housing -> city}}</p>
                                    <p><strong class="text-dark">地域 :</strong> {{$housing -> area}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card sidebar-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">租金：</h5>
                            <h2 class="text-success mb-0 mt-3">
                                ${{$housing -> publicPrice}} <small>/month</small>
                            </h2>

                            <div id="featured-properties">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card card-list">

                                            <!--
                                            <img class="card-img-top" src="../asset/img/agent.jpg" alt="Card image cap">
                                         -->
                                            <div class="card-body pb-0">
                                                <h5 class="card-title mb-4">枫窝 | MapleLiving</h5>
                                                <h5 class="card-title mb-4">{{$housing -> contactPeople}}</h5>
                                                <h6 class="card-subtitle mb-3 text-muted"><i
                                                            class="mdi mdi-phone"></i> {{$housing -> phone}}</h6>
                                                <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-link"></i>
                                                    maplelivinginfo@gmail.com</h6>
                                                <h6 class="card-subtitle mb-3 text-muted">
                                                                                                        <i class="mdi mdi-phone"></i>
                                                                                                        wechat:/h6>
                                                                                                    <img class="card-img-top" src="../asset/img/mapleliv/wechat.jpg" alt="Card image cap">
                                                @if(Auth::check())
                                                    <a href="/addFavorite/{{$housing->id}}">添加收藏</a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card sidebar-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">联系我们看房</h5>
                            <form name="sentMessage">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>您的名字 <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="..." class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>邮箱 <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="..." class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>电话 <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="..." class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>给我们留言 <span class="text-danger">*</span></label>
                                        <textarea rows="5" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">提交</button>
                            </form>
                        </div>
                    </div>

                    <!--
                    <div class="card sidebar-card">
                       <div class="card-body">
                          <h5 class="card-title mb-4">Mortage Calculator</h5>
                          <form name="sentMessage">
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Sale Price <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="$" class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Down payment <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="$"  class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Term <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="Years"  class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Interest Rate <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="%" class="form-control" required>
                                </div>
                             </div>
                             <button type="submit" class="btn btn-success btn-block">CALCULATE</button>
                          </form>
                       </div>
                    </div>
                 -->
                </div>
            </div>
        </div>
    </section>
@else
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="card">

                        <div class="card-body osahan-slider pl-0 pr-0 pt-0 pb-0">
                            <div id="osahansliderz" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#osahansliderz" data-slide-to="0" class="active"></li>

                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach($houseIMGs as $hs)
                                        @if($hs->status == 0)
                                            <li data-target="#osahansliderz" data-slide-to="{{$i}}"></li>
                                            @php
                                                $i = $i + 1;
                                            @endphp

                                        @endif
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">

                                    @foreach($houseIMGs as $hs)
                                        @if($hs->status == 0)
                                            <div class="carousel-item active rounded"
                                                 style="background-image: url('{{$hs -> filePath}}')"></div>
                                            @break
                                        @else
                                        @endif
                                    @endforeach
                                    @foreach($houseIMGs as $hs)
                                        @if($hs ->status == 0)
                                            <div class="carousel-item rounded"
                                                 style="background-image: url('{{$hs -> filePath}}')"></div>
                                        @endif
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#osahansliderz" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#osahansliderz" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>


                    </div>


                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">房源描述</h5>

                            <textarea class="form-control" rows="5"
                                      style="border-color: white; background-color: white">{{$housing -> description}}</textarea>

                        </div>
                    </div>
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">房源位置</h5>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6">
                                    <p><strong class="text-dark">地址: </strong> {{$housing -> address}}</p>

                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p><strong class="text-dark">城市 :</strong> {{$housing -> city}}</p>
                                </div>
                            </div>
                            <!--
                            <div id="map"></div>
                         -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card sidebar-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">租金：</h5>
                            <h2 class="text-success mb-0 mt-3">
                                ${{$housing -> publicPrice}} <small>/month</small>
                            </h2>

                            <div id="featured-properties">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card card-list">
                                            <a href="#">
                                                <!--
                                                <img class="card-img-top" src="../asset/img/agent.jpg" alt="Card image cap">
                                             -->


                                                @if($housing -> uploadTyprID == 3)
                                                    <div class="card-body pb-0">
                                                        <h5 class="card-title mb-4">联系人</h5>
                                                        <h5 class="card-title mb-4">{{$housing -> contactPeople}}</h5>
                                                        <h6 class="card-subtitle mb-3 text-muted"><i
                                                                    class="mdi mdi-phone"></i> {{$housing -> phone}}
                                                        </h6>
                                                        <h6 class="card-subtitle mb-3 text-muted"><i
                                                                    class="mdi mdi-phone"></i>
                                                            wechat: {{$housing -> wechat}}</h6>
                                                        <a href="/addFavorite/{{$housing->id}}">添加收藏</a>

                                                    </div>
                                                @else
                                                    <div class="card-body pb-0">
                                                        <h5 class="card-title mb-4">联系人</h5>
                                                        <button type="button" class="btn btn-success"><a href="/login"
                                                                                                         style="color: white; font-size:20px;">点击登录查看联系方式</a>
                                                        </button>


                                                    </div>
                                                @endif

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="card sidebar-card">
                       <div class="card-body">
                          <h5 class="card-title mb-4">Request a Showing</h5>
                          <form name="sentMessage">
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Your Name <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="Enter Your Name" class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Your Email <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="Enter Your Email"  class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Phone <span class="text-danger">*</span></label>
                                   <input type="text" placeholder="Enter Phone Number"  class="form-control" required>
                                </div>
                             </div>
                             <div class="control-group form-group">
                                <div class="controls">
                                   <label>Message <span class="text-danger">*</span></label>
                                   <textarea rows="5" cols="50" class="form-control"></textarea>
                                </div>
                             </div>
                             <button type="submit" class="btn btn-success btn-block">SEND REQUEST</button>
                          </form>
                       </div>
                    </div>
                 -->
                    <div class="card sidebar-card">
                        <div class="card-body" style="height: 600px">
                            <h5 class="card-title mb-4">精选房源</h5>
                            <div class="swiper-container" style="height: 500px">
                                <div class="swiper-wrapper">
                                    @foreach($featureHousing as $h)
                                        <div class="swiper-slide">

                                            <div class="card card-list">

                                                @if($h -> uploadType < 3)
                                                    <span class="badge badge-success">MapleLiv精选房源</span>
                                                @else
                                                    <span class="badge badge-success">大众房源</span>
                                                @endif
                                                @foreach($IMG as $i)
                                                    @if($i -> housingID == $h -> id)
                                                        <img class="card-img-top" src="{{$i -> filePath }}"
                                                             alt="Card image cap">
                                                        @break
                                                    @endif
                                                @endforeach
                                                <div class="card-body">
                                                    <a href="/detail/{{$h -> id}}">
                                                        <h5 class="card-title">{{str_limit($h -> title, 27)}}</h5>
                                                    </a>
                                                    <h6 class="card-subtitle mb-2 text-muted"><i
                                                                class="mdi mdi-home-map-marker"></i> {{$h -> address}}
                                                        , {{$h-> city}}</h6>
                                                    <h2 class="text-success mb-0 mt-3">
                                                        ${{$h -> publicPrice}} <small>/month</small>
                                                    </h2>
                                                </div>
                                                <div class="card-footer">
                                                    <span><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h -> beds}}</strong></span>
                                                    <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                @if($agent -> isDesktop())
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif

<!-- End Property Single Slider -->
<!-- Similar Properties -->
<section class="section-padding  border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                <h2>相似房源</h2>
            </div>
            @foreach($similarHousing as $s)
                <div class="col-lg-4 col-md-4">
                    <div class="card card-list">
                        <a href="#">
                            @if($s -> uploadType < 3)
                                <span class="badge badge-success">MapleLiv精选房源</span>
                            @else
                                <span class="badge badge-success">大众房源</span>
                            @endif

                            @foreach($IMG as $i)
                                @if($i -> housingID == $s -> id)
                                    <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap">
                                    @break
                                @endif
                            @endforeach

                            <div class="card-body">
                                <h5 class="card-title">{{str_limit($s->title, 27)}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><i
                                            class="mdi mdi-home-map-marker"></i> {{$s ->address}}, {{$s -> city}}</h6>
                                <h2 class="text-success mb-0 mt-3">
                                    ${{$s -> publicPrice}} <small>/ 月</small>
                                </h2>
                            </div>
                            <div class="card-footer">
                                <span><i class="mdi mdi-sofa"></i> 房间 : <strong>{{$s -> beds}}</strong></span>
                                <span><i class="mdi mdi-scale-bathroom"></i> 厕所 : <strong>{{$s -> baths}}</strong></span>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Similar Properties -->

<footer class="aui-footer aui-footer-fixed">
    <a href="/" class="aui-tabBar-item ">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-loan"></i>
                    </span>
        <span class="aui-tabBar-item-text">首页</span>
    </a>
    <a href="/property" class=" aui-tabBar-item ">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
        <span class="aui-tabBar-item-text">精选</span>
    </a>

</footer>
<!-- End Trusted Agents -->
<!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JavaScript -->
<script src="../asset/vendor/jquery/jquery.min.js"></script>
<script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="../asset/js/jqBootstrapValidation.js"></script>
<script src="../asset/js/contact_me.js"></script>
<!-- select2 Js -->
<script src="../asset/vendor/select2/js/select2.min.js"></script>
<!-- Custom -->
<script src="../asset/js/custom.js"></script>
<!-- Google Map Api -->

</body>
</html>
