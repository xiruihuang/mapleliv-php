@extends('layouts.front')

@section('content')

        <!DOCTYPE html>
<html lang="en">


<!-- End Navbar -->
<!-- Main Slider With Form -->

<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">


                <a href="/">
                    <h1 class="mt-0 mb-3 text-white">枫窝精选房源</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="#">加拿大租房平台</p>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- End Main Slider With Form -->
<!-- Properties List -->
<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="osahan_top_filter row">

                    <div class="col-lg-12 col-md-12 sort-by-btn float-right">

                        <!--fliter search bar-->
                        <form method="get" action="/filter" class="form-control"
                              style="visibility: hidden; background-color: transparent; " id="filter">

                            <div class="row no-gutters">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">

                                        <select class="form-control" name="city" type="text" style="height: 45px">
                                            <option selected="" value="">城市</option>
                                            <option value="Burnaby">Burnaby</option>
                                            <option value="Richmond">Richmond</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="Coquitlam">Coquitlam</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="input-group">

                                        <select style="height: 45px" class="form-control" name="minPrice" type="text">
                                            <option selected="" value="">最低价格</option>
                                            <option value="0">0</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <option value="3000">3000</option>
                                            <option value="3500">3500</option>
                                            <option value="4000">4000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">


                                        <select style="height: 45px" class="form-control" name="maxPrice" type="text">
                                            <option selected="" value="">最高价格</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            <option value="1500">1500</option>
                                            <option value="2000">2000</option>
                                            <option value="2500">2500</option>
                                            <option value="3000">3000</option>
                                            <option value="3500">3500</option>
                                            <option value="4000">4000</option>
                                            <option value="4500">4500</option>
                                            <option value="5000">5000</option>
                                            <option value="5500">5500</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">


                                        <select style="height: 45px" class="form-control" name="beds" type="text">
                                            <option selected="" value="">卧室数量</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <button type="submit" class="form-control btn-success ">SEARCH</button>

                                </div>

                            </div>
                        </form>
                        @if(($filterResult['city'] == null))
                            @if(($filterResult['title'] == null))
                                <div class=" row">
                                    <div class="col-lg-6 col-md-6 tags-action">
                                        @if(!($filterResult['filterCity'] == ""))
                                            <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">城市: <?php echo $filterResult['filterCity'] ?>
                                                <?php $urlCity = "/filter?city=&minPrice=" . $filterResult['filterMinPrice'] . "&maxPrice=" . $filterResult['filterMaxPrice'] . "&beds=" . $filterResult['filterBeds']?>
                           <a href="<?php echo $urlCity ?>"><i class="mdi mdi-window-close"></i></a></span>

                                        @endif
                                        @if(!($filterResult['filterMinPrice'] == ""))
                                            @if(!($filterResult['filterMinPrice'] == "0"))
                                                <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">最低价格: <?php echo $filterResult['filterMinPrice'] ?> <?php $urlMinPrice = "/filter?city=" . $filterResult['filterCity'] . "&minPrice=" . "&maxPrice=" . $filterResult['filterMaxPrice'] . "&beds=" . $filterResult['filterBeds']?>
                            <a href="<?php echo $urlMinPrice ?>"><i class="mdi mdi-window-close"></i></a></span>
                                            @endif
                                        @endif
                                        @if(!($filterResult['filterMaxPrice'] == ""))
                                            @if(!($filterResult['filterMaxPrice'] == "10000"))
                                                <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">最高价格: <?php echo $filterResult['filterMaxPrice'] ?>
                                                    <?php $urlMaxPrice = "/filter?city=" . $filterResult['filterCity'] . "&minPrice=" . $filterResult['filterMinPrice'] . "&maxPrice=" . "&beds=" . $filterResult['filterBeds']?>
                            <a href="<?php echo $urlMaxPrice ?>"><i class="mdi mdi-window-close"></i></a></span>
                                            @endif
                                        @endif
                                        @if(!($filterResult['filterBeds'] == ""))
                                            <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">房间数: <?php echo $filterResult['filterBeds'] ?>
                                                <?php $urlBeds = "/filter?city=" . $filterResult['filterCity'] . "&minPrice=" . $filterResult['filterMinPrice'] . "&maxPrice=" . $filterResult['filterMaxPrice'] . "&beds="?> <a
                                                        href="<?php echo $urlBeds ?>"><i
                                                            class="mdi mdi-window-close"></i></a></span>
                                        @endif

                                    </div>
                                    <div class="col-lg-6 col-md-6 sort-by-btn float-right">
                                        <div class="dropdown float-right">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" onclick="showFilter()">
                                                <i class="mdi mdi-filter"></i> Filter
                                            </button>

                                            <script>
                                                function showFilter() {
                                                    var x = document.getElementById("filter");
                                                    if (x.style.visibility === "hidden") {
                                                        x.style.visibility = "visible";
                                                    } else {
                                                        x.style.visibility = "hidden";
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                    </div>
                </div>
                <div class="row">
                    @foreach($housing as $h)

                        <div class="col-lg-12 col-md-12">
                            <div class="card card-list card-list-view">
                                <a href="/detail/{{$h -> id}}">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3">

                                            @foreach($houseIMGs as $i)
                                                @if($i -> housingID == $h -> id)
                                                    @if($i ->status == 0)
                                                        <img class="card-img-top" src="{{$i -> filePath }}"
                                                             alt="Card image cap">
                                                        @break
                                                    @else
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$h -> title}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><i
                                                            class="mdi mdi-home-map-marker"></i>{{$h -> address}}
                                                    , {{$h-> city}}</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    ${{$h -> publicPrice}}<small>/month</small>
                                                </h2>


                                            </div>
                                            @if($h -> uploadTypeID < 3)
                                                <div class="card-footer">


                                                    <span><i class="mdi mdi-sofa"></i> 房间 : <strong>{{$h->beds}}</strong></span>
                                                    <span><i class="mdi mdi-scale-bathroom"></i> 厕所 : <strong>{{$h->baths}}</strong></span>

                                                    <span>更新时间: {{$h->updated_at}}</span>

                                                </div>
                                            @else
                                                <div class="card-footer">
                                                    <span>{{str_limit($h->description,100)}}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


                <nav class="mt-5">
                    @if ($housing->lastPage() > 1)
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ ($housing->currentPage() == 1) ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $housing->url(1) }}"> Previous</a>
                            </li>
                            @for ($i = 1; $i <= $housing->lastPage(); $i++)
                                <li class="page-item {{ ($housing->currentPage() == $i) ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $housing->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item {{ ($housing->currentPage() == $housing->lastPage()) ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $housing->url($housing->currentPage()+1) }}"> Next </a>
                            </li>
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Properties List -->
<!-- Join Team -->

<!-- End Footer -->
<!-- Copyright -->


@endsection

<!-- End Copyright -->
<!-- Bootstrap core JavaScript -->
@section('js')
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
    </body>
</html>
@endsection
