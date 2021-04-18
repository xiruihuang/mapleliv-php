

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=1290">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Rentkeya | Vancouver rental network | Massive Rental Info in Vancouver Area | </title>
      <!-- Favicon Icon -->
      <link rel="icon" type="../asset/image/png" href="images/favicon.png">
      <!-- Bootstrap core CSS -->
      <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="../asset/vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="../asset/vendor/select2/css/select2-bootstrap.css" />
      <link href="../asset/vendor/select2/css/select2.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../asset/css/osahan.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
   <body>

@include('sweet::alert')
@if($agent->isDesktop())


         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="navbar-brand text-success logo" href="/"><i class="mdi mdi-home-map-marker"></i>Rentkeya | <strong></strong>安家</a>

               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/" >
                        Home
                        </a>

                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/rentkeyaProperty">
                        Rentkeya Featured
                        </a>

                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/generalProperty">
                        General Property
                        </a>

                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/showAgent">
                        Rentkeya Housekeeper
                        </a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/aboutUs" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                           <a class="dropdown-item" href="/aboutUs">About Rentkeya</a>
                           <!--
                           <a class="dropdown-item" href="faq.html">FAQ</a>
                         -->
                        </div>
                     </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contactUs">
                        Contact Us
                        </a>
                     </li>
                  </ul>
                  <div class="my-2 my-lg-0">
                     <ul class="list-inline main-nav-right">
                        @if(Auth::Check())
                            @if(Auth::user()->type == 1)

                                <a href="{{ route('logout') }}" class="btn btn-link btn-sm"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout


                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <li class="list-inline-item">
                                   <a class="btn btn-success btn-sm" href="/admin">后台管理系统</a>
                                </li>
                                <li class="list-inline-item">
                                   <a class="btn btn-success btn-sm" href="/addGenProperty">Update Properties</a>
                                </li>
                            @endif

                            @if(Auth::user() ->type > 1)
                                <a href="{{ route('logout') }}" class="btn btn-link btn-sm"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout


                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <li class="list-inline-item">
                                   <a class="btn btn-success btn-sm" href="/showList">My Post</a>
                                </li>
                                <li class="list-inline-item">
                                   <a class="btn btn-success btn-sm" href="/addGenProperty">Free Post</a>
                                </li>
                            @endif

                        @else
                        <li class="list-inline-item">
                           <a class="btn btn-link btn-sm" href="/login">Sign In</a>
                        </li>
                        <li class="list-inline-item">
                           <a class="btn btn-success btn-sm" href="/register">Sign Up</a>
                           <a class="btn btn-success btn-sm" href="/addGenProperty">Free Post</a>
                        </li>
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <!-- End Navbar -->
      @endif
      <!-- End Navbar -->
      <!-- Main Slider With Form -->

      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                @if($agent->isDesktop())

                  <h1 class="mt-0 mb-3 text-white">My Post</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Rentkeya guarantees quality for comfortable renting</p>
                @else
                    <h1 class="mt-0 mb-3 text-white" style="font-size: 60px">My post</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white" style="font-size: 32px"><a class="text-white" href="#">Rentkeya guarantees quality for comfortable renting</p>
                @endif
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->
      <section class="section-padding">
         <div class="container">
            <div class="row">

               <div class="col-lg-12 col-md-12">
                  <div class="osahan_top_filter row">
                     <div class="col-lg-12 col-md-12 tags-action">

                     </div>
                     <div class="col-lg-12 col-md-12 sort-by-btn float-right">
                        @if($agent->isDesktop())
                        <!--
                        <div class="dropdown float-right">
                           <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="mdi mdi-filter"></i> Sort by
                           </button>
                           <div class="dropdown-menu float-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Popularity </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> New </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Discount </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: Low to High </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: High to Low </a>
                           </div>
                        </div>
                      -->
                        @else


                        <div class="dropdown float-right">
                          <a class="btn btn-success" href="/" style="font-size: 25px"> Return to the home page</a>
                          <a class="btn btn-success" href="/login" style="font-size: 25px">Login</a>
                          <!--
                           <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="mdi mdi-filter" style="font-size: 25px"></i>
                           </button>

                           <div class="dropdown-menu float-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Popularity </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> New </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Discount </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: Low to High </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: High to Low </a>
                           </div>
                         -->
                        </div>
                        @endif
                     </div>
                  </div>
                </div>
                  <div class="row">
                     @foreach($housing as $h)
                     <div class="col-lg-12 col-md-12">

                        <div class="card card-list card-list-view">



                           <a href="/edit/{{$h -> id}}">
                              <div class="row no-gutters">
                                @if($agent->isDesktop())
                                   <div class="col-lg-3 col-md-3">
                                      @if(($h -> uploadTypeID < 3) || ($h -> isRentkeya == 1))
                                         <span class="badge badge-success">Rentkeya Featured</span>
                                      @else
                                          <span class="badge badge-warning">General Properties</span>

                                      @endif
                                      @foreach($houseIMGs as $i)
                                         @if($i -> housingID == $h -> id)
                                          @if($i -> status == 0)
                                         <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap">
                                           @break
                                            @else
                                            @endif
                                         @endif
                                      @endforeach
                                   </div>
                                  @else
                                  <div class="col-lg-5 col-md-5">
                                      @if($h -> uploadTypeID < 3)
                                         <span class="badge badge-success">Rentkeya Featured</span>
                                      @else
                                          <span class="badge badge-warning">General Properties</span>

                                      @endif
                                      @foreach($houseIMGs as $i)
                                         @if($i -> housingID == $h -> id)
                                          @if($i -> status == 0)
                                         <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap">
                                           @break
                                            @else
                                            @endif
                                         @endif
                                      @endforeach
                                   </div>
                                   @endif



                                 @if($agent->isDesktop())



                                 <div class="col-lg-7 col-md-7">
                                    <div class="card-body">
                                      @if(($h -> uploadTypeID < 3) || ($h -> isRentkeya == 1))
                                        @if($h -> status == 0)
                                        <h5 class="card-title" >Status: Verifying</h5>
                                        @else
                                        <h5 class="card-title" >Status: Pass</h5>
                                        @endif
                                      @endif
                                       <h5 class="card-title" >{{$h -> title}}</h5>
                                       <h6 class="card-subtitle mb-2 text-muted" ><i class="mdi mdi-home-map-marker"></i>{{$h -> address}}, {{$h-> city}}</h6>
                                       <h2 class="text-success mb-0 mt-3" >
                                          ${{$h -> publicPrice}}<small>/month</small>
                                       </h2>


                                    </div>
                                    @if($h -> uploadTypeID < 3)
                                    <div class="card-footer" >


                                       <span><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h->beds}}</strong></span>
                                       <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span>





                                    </div>
                                    @else
                                    <div class="card-footer">
                                      <span>{{str_limit($h->description,100)}}</span>
                                    </div>
                                    @endif
                                 </div>


                                 @else
                                   <div class="col-lg-7 col-md-7">
                                    <div class="card-body">
                                       <h5 class="card-title" style="font-size: 28px">{{$h -> title}}</h5>
                                       <h6 class="card-subtitle mb-2 text-muted" style="font-size: 24px"><i class="mdi mdi-home-map-marker"></i>{{$h -> address}}, {{$h-> city}}</h6>
                                       <h2 class="text-success mb-0 mt-3" style="font-size: 26px">
                                          ${{$h -> publicPrice}}<small>/month</small>
                                       </h2>
                                    </div>
                                    @if($h -> uploadTypeID < 3)
                                    <div class="card-footer" style="font-size: 24px">
                                       <span><i class="mdi mdi-sofa"></i> Beds : <strong>{{$h->beds}}</strong></span>
                                       <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>{{$h->baths}}</strong></span>




                                    </div>
                                    @else
                                    <div class="card-footer">
                                      <span>{{str_limit($h->description,100)}}</span>

                                    </div>
                                    @endif
                                 </div>
                                 @endif


                              </div>
                           </a>



                            <div class="row">
                              <div class="col-md-2">
                              <a href="/refresh/{{$h->id}}"><button class="btn btn-success"> Refresh</button></a>
                           </div>

                              <a href="/photoControl/{{$h->id}}"><button class="btn btn-warning"> Edit Pictures</button></a>

                            </div>

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
                             <a class="page-link" href="{{ $housing->url($housing->currentPage()+1) }}" > Next </a>
                         </li>
                     </ul>
                     @endif

                   </nav>
               </div>
            </div>
         </div>
      </section>
      <!-- End Properties List -->
      @if($agent->isDesktop())
      <!-- Join Team -->
      <section class="section-padding bg-dark text-center">
         <h2 class="text-white mt-0"> Join in Rentkeya </h2>
         <p class="text-white mb-4">Please contact Rentkeya customer service for details. We are looking forward to your joining</p>
         <button type="button" class="btn btn-success"><a href="/contactUs" style="color: white"> Contact Us</a></button> <button type="button" class="btn btn-outline-success"><a href="/aboutUs" style="color: white"> More Details</a></button>
      </section>
      @else
            <section class="section-padding bg-dark text-center">
         <h2 class="text-white mt-0" style="font-size: 48px">Join in Rentkeya </h2>
         <p class="text-white mb-4" style="font-size: 32px">Please contact Rentkeya customer service for details. We are looking forward to your joining</p>
         <button type="button" class="btn btn-success" style="font-size: 30px color: white"><a href="/contactUs"> Contact Us</a></button> <button type="button" class="btn btn-outline-success" style="font-size: 30px color: white"><a href="/aboutUs"> More Details</a></button>
      </section>
      @endif
      <!-- End Join Team -->
   <!-- Footer -->
   @if($agent->isDesktop())
      <section class="section-padding footer bg-white" >
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-3">
                  <h4 class="mb-5"><a class="text-success logo" href="index.html"><i class="mdi mdi-home-map-marker"></i> <strong>Rentkeya | </strong></a></h4>
                  <p>#2625-Metrotower II 4720 kingsway<br>Burnaby B.C. V5H4N2</p>
                  <p class="mb-0"><a class="text-dark" href="#">(+1)778-374-1884</a></p>
                  <p class="mb-0"><a class="text-success" href="#">info@rentkeya.ca</a></p>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">COMPANY</h6>
                  <ul>
                  <li><a href="aboutUs">About Rentkeya</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <ul>
               </div>
               <div class="col-lg-4 col-md-4">
                  <h6 class="mb-4">NEWSLETTER</h6>
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Email Address..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="mdi mdi-arrow-right"></i></button>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
      @endif
      <!-- End Footer -->
      <!-- Copyright -->
      <section class="pt-4 pb-4 text-center">
         <p class="mt-0 mb-0">© Copyright 2018 Rentkeya Web Service Ltd. All Rights Reserved</p>

      </section>
      <!-- End Copyright -->
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
   </body>
</html>
