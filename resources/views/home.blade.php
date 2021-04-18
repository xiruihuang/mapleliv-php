@extends('layouts.front')

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
               <h1 class="text-center text-white mb-3" >枫窝租房 | MAPLELIVING </h1>
               <p class="text-center text-white">海量租房真实信息，让租房简单，不再痛苦！</p>
               
               <form>
                  <div class="row no-gutters">
                    <div class="col-md-2">
                    </div>
                     <div class="col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                           <input class="form-control" placeholder="Enter Location, Project or Landmark" type="text">
                        </div>
                     </div>
                     
                     
                     <div class="col-md-2">  
                        <button type="submit" class="btn btn-success btn-block no-radius font-weight-bold" >SEARCH</button>

                     </div>
                        
                     <div class="col-md-2">
                    </div>
                     
                  </div>
                  <br />
                     <div class="row margin-auto">
                           <a class="btn btn-success" style="margin: 0 auto; width:35%" href="/rentkeyaProperty">Rentkeya精选房源</a>
                           <a class="btn btn-outline-success" style="margin: 0 auto; width:35%" href="/genProperty">大众房源</a>

                     </div>

                     <br />
                     <br />
                     <br />
                    
                     
                     

                  
               </form>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->
      <section class="section-padding" style>
         <div class="section-title text-center mb-5">
            <h1>最新房源</h1>
            <p style="font-size: 23px">大温地区最新Rentkeya品质房源</p>
         </div>


         <div class="container">

        @if($agent->isDesktop())
            <div class="row">
               @foreach($housing as $h)
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <span class="badge badge-success">Rentkeya精选房源</span>
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
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h -> beds}}</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span> 
                        </div>
                     </a>
                  </div>
               </div>
               @endforeach
            </div>




            @else 
        <div class="swiper-container">
            <div class="swiper-wrapper">
               @foreach($housing as $h)
              <div class="swiper-slide">
               
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        @if($h -> uploadType < 3)
                           <span class="badge badge-success">Rentkeya精选</span>
                        @else
                           <span class="badge badge-success">Rentkeya精选</span>
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
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h -> beds}}</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span> 
                        </div>
                     </a>
                  </div>
               </div>
               
              </div>
              @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          @endif
         </div>

      </section>
      <!-- End Properties List -->
 
      <!-- Trusted Agents -->
      <section class="section-padding" style="background-color: white">
         <div class="section-title text-center mb-5" >
            <h1>Rentkeya顶级房屋管家</h1>
            <p style="font-size: 23px">大温地区最强房屋租房管家团队</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="../asset/img/user/11.jpeg" alt="" style="height: 250px">
                     <p class="mb-4">我始终相信顾客就是上帝，无论您是我的安家客还是安家业主。我会说粤语 国语；从事租凭行业两年半。欢迎任何租凭相关业务电话 邮箱联系我。</p>
                     <h6 class="mb-0 text-success">- Rentkeya 租房管家</h6>
                     <small>info@rentkeya.ca</small>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="../asset/img/user/12.jpeg" alt="" style="height: 250px">
                     <p class="mb-4">尊敬的安家顾客您好。感谢您选择Rentkeya ，我一定会用我200%的认真和仔细，和专业度回报这份信任，有任何咨询 欢迎电话 邮件联系我</p>
                     <h6 class="mb-0 text-success">- Rentkeya 租房管家</h6>
                     <small>info@rentkeya.ca</small>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Trusted Agents -->

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