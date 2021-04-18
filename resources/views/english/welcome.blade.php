@extends('layouts.front')

@section('welcome-css')
  <style>
  .R2{
    /* border:2px solid #64ddba; */
    display: block;
  }
  @media (min-width:200px) {
    .R2{
      width: 100%;
    }
  }
  .R22{
    /* border:2px solid #64ddba; */
    display: block;
  }
  @media (min-width:200px) {
    .R22{
      width: 50%;
    }
  }
  .r2-inner1{
    display: block;
    margin-left: auto;
    margin-right: auto;
    height:60px;
    width:95%;
    /* background-color: pink; */
  }
  .r2-inner2{
    display: block;
    margin-left: auto;
    margin-right: auto;
    height:60px;
    width:90%;
    /* background-color: pink; */
  }
  .R4left{
    margin-bottom: 20px;
    width: 156px;
    height: 90px;
  }
  @media (max-width:850px) {
    .R4left{
      width: 140px;
    }
  }
  @media (max-width:630px) {
    .R4left{
      width: 125px;
    }
  }
  /* @media (max-width:500px) {
    .R4left{
      display: none;
    }
  } */
  .R4right{
    margin-bottom: 20px;
    width: 156px;
    height: 90px;
  }
  @media (max-width:850px) {
    .R4right{
      width: 140px;
    }
  }
  @media (max-width:630px) {
    .R4right{
      width: 125px;
    }
  }
  /* @media (max-width:500px) {
    .R4right{
      display: none;
    }
  } */
  .R4center{
    webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    margin:0px 150px;
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }
  @media (max-width:850px) {
    .R4center{
      margin-right: 150px;
      margin-left: 10px;
    }
  }
  .R4side1{
    position:absolute;
    width: 180px;
    left: 10px;
    top: 800px;
  }
  @media (max-width:850px) {
    .R4side1{
      float: right;
      position:relative;
      top: 485px;
      padding-left: 15px
    }
  }
  @media (max-width:630px) {
    .R4side1{
      float: right;
      position:relative;
      top: 360px;
      padding-left: 15px
    }
  }
  .R4side2{
    position:absolute;
    width: 180px;
    right: -15px;
    top: 800px;
    display: block;
  }
  .picture{
    margin:auto;
    width:30%;
    margin-bottom: 50px;
    overflow: visible;
    height:450px
    }

    @media (max-width:950px) {
      .picture{
        width:250px;
         padding:10px;
         float: right;
      }
    }
    @media (max-width:670px) {
      .picture{
        width:270px;
        overflow: visible;
        float: right;
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
div.cardfooteroutlay{
  margin:auto;
  margin-bottom: 20px;
  width:30%;
  height:77px;
}
@media (min-width:550px) {
  .cardfooteroutlay{
    width:20%;
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
               <h1 class="text-center text-white mb-3" >Rentkeya</h1>
               <p class="text-center text-white">Massive real rental information, let rental simple, no longer painful！</p>

               <form method="get" action="/search">
                  {{ csrf_field() }}
                  <div class="row no-gutters">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                           <input class="form-control" name="keyword" placeholder="Please enter keywords" type="text">

                        </div>
                     </div>

                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>

                           <input class="form-control" name="address" placeholder="Please enter region" type="text">
                        </div>
                     </div>


                     <div class="col-md-2 col-sm-2 col-xs-2">
                        <button type="submit" class="btn btn-success btn-block no-radius font-weight-bold" >SEARCH</button>

                     </div>

                     <div class="col-md-1 col-sm-1 col-xs-1">
                    </div>

                  </div>
                  <br />
                     <div class="row margin-auto">
                           <a class="btn btn-success" style="margin: 0 auto; width:35%" href="/rentkeyaProperty">Rentkeya Featured</a>
                           <a class="btn btn-outline-success" style="margin: 0 auto; width:35%" href="/generalProperty">General Properties</a>

                     </div>

                     <br />
                     <br />

               </form>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->

      <div section>
      <div section style="min-height:60px; margin-bottom:10px">
        <div class="row">
            @foreach($ads as $ad)
            @if($ad -> is_active == 1 && $ad -> ad_position == 'r2')
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 R2">
                <div class="r2-inner1">
                    <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}" >
                </div>

            </div>
            @endif
            @endforeach
        </div>
      </div>
      <div section style="min-height:60px">
        <div class="row">
            @foreach($ads as $ad)
            @if($ad -> is_active == 1 && $ad -> ad_position == 'r3')
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 R22">
                <div class="r2-inner2">
                    <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}" >
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

        <!-- <div class="row"> -->

          <div class="R4side1">

              @foreach($ads as $ad)
                @if($ad -> is_active == 1 && ($ad -> id)%2 != 0 && $ad -> ad_position == 'r4')
              <div class="R4left">
                  <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}" >
              </div>
              @endif
              @endforeach
          </div>

          <div class="R4center">
           <div class="section-title text-center mb-5">
              <h1>The Latest Housing</h1>
              <p style="font-size: 23px">The latest Rentkeya quality listings in the Vancouver area</p>
           </div>


           <div class="container">

          @if($agent->isDesktop())
              <div class="row">


                 @foreach($housing as $h)
                    @if($h ->status == 1)
                 <div class="picture">
                    <div class="card card-list " style="max-height:340px">
                       <a href="/detail/{{$h -> id}}">
                          <span class="badge badge-success">Rentkeya Featured</span>
                          @foreach($houseIMGs as $i)
                             @if($i -> housingID == $h -> id)
                                @if($i -> status == 0)
                             <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap" style="height: 173px">
                                @break
                             @endif
                             @endif
                          @endforeach
                          <div class="card-body" style="height:140px">
                             <h5 class="card-title">{{str_limit($h -> title, 27)}}</h5>
                             <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-home-map-marker"></i> {{$h -> address}}, {{$h-> city}}</h6>
                             <h2 class="text-success mb-0 mt-3">
                                ${{$h -> publicPrice}} <small>/month</small>
                             </h2>
                          </div>
                          <div class="card-footer">
                             <span ><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h -> beds}}</strong></span>
                             <span style="display:block"><i class="mdi mdi-scale-bathroom" style="position:left"></i> Baths : <strong>{{$h->baths}}</strong></span>
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
                          @if($h -> uploadType < 3)
                             <span class="badge badge-success">Rentkeya Featured</span>
                          @else
                             <span class="badge badge-success">General Properties</span>
                          @endif
                          @foreach($houseIMGs as $i)
                             @if($i -> housingID == $h -> id)
                             <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap">
                                @break
                             @endif
                          @endforeach
                          <div class="card-body">
                             <h5 class="card-title">{{str_limit($h -> title, 27)}}</h5>
                             <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> {{$h -> address}}, {{$h-> city}}</h6>
                             <h2 class="text-success mb-0 mt-3">
                                ${{$h -> publicPrice}} <small>/month</small>
                             </h2>
                          </div>
                          <div class="card-footer">
                             <span style="overflow:"><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h -> beds}}</strong></span>
                             <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span>
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


           <div class="R4side2">
               @foreach($ads as $ad)
               @if($ad -> is_active == 1 && ($ad -> id)%2 == 0 && $ad -> ad_position == 'r4')
               <div class="R4right">
                   <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}" >
               </div>
               @endif
               @endforeach
           </div>
         <!-- </div> -->
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
