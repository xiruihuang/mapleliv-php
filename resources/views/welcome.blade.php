@extends('layouts.front')

@section('welcome-css')
    <style>
        .R2 {
            /* border:2px solid #64ddba; */
            display: block;
        }

        @media (min-width: 200px) {
            .R2 {
                width: 100%;
            }
        }

        .R22 {
            /* border:2px solid #64ddba; */
            display: block;
        }

        @media (min-width: 200px) {
            .R22 {
                width: 50%;
            }
        }

        .r2-inner1 {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 60px;
            width: 95%;
            /* background-color: pink; */
        }

        .r2-inner2 {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 60px;
            width: 90%;
            /* background-color: pink; */
        }

        .adsize {
            width: 100%;
            height: 100%;
            margin-bottom: 20px;
        }

        @media (max-width: 975px) {
            .adsize {
                width: 135px;
            }
        }

        @media (max-width: 630px) {
            .adsize {
                width: 125px;
            }
        }

        /* @media (max-width:500px) {
          .adsize{
            display: none;
          }
        } */
        .R4center {
            webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            /* margin:0px 150px; */
            position: relative;
            min-height: 1px;
            /* padding-right: 12.5%;
            padding-left: 12.5%; */
            left: 15%;
            width: 70%;
        }

        .R4side1 {
            position: absolute;
            width: 10%;
            left: 9%;
            top: 800px;
        }

        @media (max-width: 2300px) {
            .R4side1 {
                left: 7%
            }
        }

        @media (max-width: 1800px) {
            .R4side1 {
                left: 3%;
            }
        }

        @media (max-width: 1025px) {
            .R4side1 {
                left: 3%;
            }
        }

        @media (max-width: 905px) {
            .R4side1 {
                left: 2.7%;
            }
        }

        @
        @media (max-width: 955px) {
            .R4side1 {
                left: 2.5%
            }
        }

        .R4side2 {
            position: absolute;
            width: 10%;
            left: 83%;
            top: 800px;
        }

        @media (max-width: 2300px) {
            .R4side2 {
                left: 82%
            }
        }

        @media (max-width: 1800px) {
            .R4side2 {
                left: 87.5%
            }
        }

        @media (max-width: 1025px) {
            .R4side2 {
                left: 87.5%;
            }
        }

        .picture {
            margin: auto;
            width: 30%;
            margin-bottom: 50px;
            overflow: visible;
            height: 450px
        }

        @media (max-width: 900px) {
            .picture {
                width: 50%;
                padding: 10px;
            }
        }

        @media (max-width: 590px) {
            .picture {
                width: 90%;
            }
        }


        /* div.badgeoutlay{
          margin: auto;
          width: auto;
          height:26px;
        }
        @media (max-width:350px){
          .picture{
            width:1%;
          }
        } */
        div.cardfooteroutlay {
            margin: auto;
            margin-bottom: 20px;
            width: 30%;
            height: 77px;
        }

        @media (min-width: 550px) {
            .cardfooteroutlay {
                width: 20%;
            }
        }

    </style>
@stop

@section('content')

    <!-- Main Slider With Form -->
    <section class="osahan-slider">
        <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
                <li data-target="#osahanslider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('../asset/img/slider/111.jpg')">
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item" style="background-image: url('../asset/img/slider/222.jpg')">
                    <div class="overlay"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="slider-form">
            <div class="container">
                <h1 class="text-center text-white mb-3">枫窝租房 | MAPLELIVING </h1>
                <p class="text-center text-white">加拿大租房服务平台</p>

                <form method="get" action="/search">
                    {{ csrf_field() }}
                    <div class="row no-gutters">
                        <div class="col-md-1 col-sm-1 col-xs-1">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                <input class="form-control" name="keyword" placeholder="请输入关键字" type="text">

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>

                                <input class="form-control" name="address" placeholder="请输入地区" type="text">
                            </div>
                        </div>


                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <button type="submit" class="btn btn-success btn-block no-radius font-weight-bold">搜索
                            </button>

                        </div>

                        <div class="col-md-1 col-sm-1 col-xs-1">
                        </div>

                    </div>
                    <br/>
                    <div class="row margin-auto">

                        <a class="btn btn-outline-success" style="margin: 0 auto; width:33% " href="/propertyArea/{{'多伦多'}}">多伦多房源</a>
                        <a class="btn btn-outline-success" style="margin: 0 auto; width:33%" href="/propertyArea/{{'温哥华'}}">温哥华房源</a>
                        <a class="btn btn-outline-success" style="margin: 0 auto; width:33%" href="/propertyArea/{{'蒙特利尔'}}">蒙特利尔房源</a>

                    </div>

                    <br/>
                    <br/>

                </form>
            </div>
        </div>
    </section>
    <!-- End Main Slider With Form -->
    <!-- Properties List -->

    <div section>

        <div section style="min-height:60px">
            <div class="row">
                @foreach($ads as $ad)
                    @if($ad -> is_active == 1 && $ad -> ad_position == 'r3')
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 R22">
                            <div class="r2-inner2">
                                <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- <div section style="height:135px">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 R2">
              <div class="r2-inner1"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 R2">
              <div class="r2-inner2"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 R2">
              <div class="r2-inner2"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 R2" >
              <div class="r2-inner1"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 R2">
              <div class="r2-inner2"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 R2">
              <div class="r2-inner2"></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <section class="section-padding" style="padding:10px">

        <div class="R4center">
            <div class="section-title text-center mb-5">
                <h1>枫窝合作房源</h1>
                <p style="font-size: 23px">品质好房都在枫窝</p>
            </div>


            <div class="container">

                @if($agent->isDesktop())
                    <div class="row">


                        @foreach($housing as $h)
                            @if($h ->status == 1)
                                <div class="picture">
                                    <div class="card card-list " style="min-height: 80%">
                                        <a href="/detail/{{$h -> id}}">
                                            @foreach($houseIMGs as $i)
                                                @if($i -> housingID == $h -> id)
                                                    @if($i -> status == 0)
                                                        <img class="card-img-top" src="{{$i -> filePath }}"
                                                             alt="Card image cap" style="height: 173px">
                                                        @break
                                                    @endif
                                                @endif
                                            @endforeach
                                            <div class="card-body">
                                                <h5 class="card-title">{{str_limit($h -> title, 27)}}</h5>
                                                <h6 class="card-subtitle mb-3 text-muted"><i
                                                            class="mdi mdi-home-map-marker"></i> {{$h -> address}}
                                                    , {{$h-> city}}</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    ${{$h -> publicPrice}} <small>/ 月</small>
                                                </h2>
                                            </div>
                                            <div class="card-footer">
                                                <span><i class="mdi mdi-sofa"></i> 房间 : <strong>{{$h -> beds}}</strong></span>
                                                <span style="display:block"><i class="mdi mdi-scale-bathroom"
                                                                               style="position:left"></i> 厕所 : <strong>{{$h->baths}}</strong></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @else
                            @endif
                        @endforeach
                    </div>



                @else
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($housing as $h)
                                @if($h ->status == 1)
                                    <div class="swiper-slide">

                                        <div class="col-lg-4 col-md-4">
                                            <div class="card card-list">
                                                <a href="/detail/{{$h -> id}}">

                                                    @foreach($houseIMGs as $i)
                                                        @if($i -> housingID == $h -> id)
                                                            <img class="card-img-top" src="{{$i -> filePath }}"
                                                                 alt="Card image cap">
                                                            @break
                                                        @endif
                                                    @endforeach
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{str_limit($h -> title, 27)}}</h5>
                                                        <h6 class="card-subtitle mb-2 text-muted"><i
                                                                    class="mdi mdi-home-map-marker"></i> {{$h -> address}}
                                                            , {{$h-> city}}</h6>
                                                        <h2 class="text-success mb-0 mt-3">
                                                            ${{$h -> publicPrice}} <small>/ 月</small>
                                                        </h2>
                                                    </div>
                                                    <div class="card-footer">
                                                        <span><i class="mdi mdi-sofa"></i> 房间 : <strong>{{$h -> beds}}</strong></span>
                                                        <span><i class="mdi mdi-scale-bathroom"></i> 厕所 : <strong>{{$h->baths}}</strong></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                @else
                                @endif
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                @endif
            </div>
        </div>

    </section>
    <!-- End Properties List -->



@endsection

@section('js')
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- select2 Js -->
    <script src="vendor/select2/js/select2.min.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
@endsection