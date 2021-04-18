@extends('layouts.front')
@section('generalProperty-css')
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
.R4right{
  margin-bottom: 20px;
  width: 156px;
  height: 90px;
  margin-right: 20px;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width:850px) {
  .R4right{
    width: 140px;
  }
}
@media (max-width:530px) {
  .R4right{
    width: 125px;
  }
}
@media (max-width:300px) {
  .R4right{
    display: none;
  }
}
.R4RIGHT{
  position:absolute;
  width: 180px;
  right: -5px;
  top: 15%;
}
</style>
@stop
@section('content')

<!DOCTYPE html>
<html lang="en">

      <!-- End Navbar -->

      <!-- End Navbar -->
      <!-- Main Slider With Form -->

      <section class="section-padding bg-dark inner-header" style="height: 80px">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">

                <a href="/">
                  <h1 class="mt-0 mb-3 text-white">General Property</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Integration of large Vancouver area Featured housing</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->


      <section style="padding:30px">
         <div class="container">
            <div class="row">

               <div class="col-lg-12 col-md-12">
                  <div class="osahan_top_filter row">
                     <div class="col-lg-12 col-md-12 tags-action">

                     </div>
                     <div class="col-lg-12 col-md-12 sort-by-btn float-right">
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

                          <form method="get" action="/genFilter" class="form-control" style="visibility: hidden; background-color: transparent;" id="filter" >

                  <div class="row no-gutters">

                     <div class="col-md-3">
                        <div class="input-group">

                           <input class="form-control" name="city" placeholder="城市" type="text">

                        </div>
                     </div>

                     <div class="col-md-3">
                        <div class="input-group">

                           <input class="form-control" name="minPrice"   placeholder="Min Price" type="text">

                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="input-group">


                           <input class="form-control" name="maxPrice"  placeholder="Max Price" type="text">
                        </div>
                     </div>



                     <div class="col-md-3">
                        <button type="submit" class="form-control btn-success " >SEARCH</button>

                     </div>
                  </div>
               </form>
                      <div class=" row">
                         <div class="col-lg-6 col-md-6 tags-action">
                          @if(!($filterResult['filterCity'] == ""))
                          <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">城市: <?php echo $filterResult['filterCity'] ?>
                           <?php $urlCity="/genFilter?city=&minPrice=".$filterResult['filterMinPrice']."&maxPrice=".$filterResult['filterMaxPrice']?>
                           <a href="<?php echo $urlCity ?>"><i class="mdi mdi-window-close"></i></a></span>

                          @endif
                          @if(!($filterResult['filterMinPrice'] == ""))
                            @if(!($filterResult['filterMinPrice'] == "0"))
                          <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">最低价格: <?php echo $filterResult['filterMinPrice'] ?> <?php $urlMinPrice="/genFilter?city=".$filterResult['filterCity']."&minPrice="."&maxPrice=".$filterResult['filterMaxPrice']?>
                            <a href="<?php echo $urlMinPrice ?>"><i class="mdi mdi-window-close"></i></a></span>
                            @endif
                          @endif
                          @if(!($filterResult['filterMaxPrice'] == ""))
                            @if(!($filterResult['filterMaxPrice'] == "10000"))
                          <span style="background-color: #7DCEA0; font:italic bold 12px/20px arial,sans-serif; color: white;">最高价格: <?php echo $filterResult['filterMaxPrice'] ?>
                            <?php $urlMaxPrice="/genFilter?city=".$filterResult['filterCity']."&minPrice=".$filterResult['filterMinPrice']."&maxPrice="?>
                            <a href="<?php echo $urlMaxPrice ?>"><i class="mdi mdi-window-close"></i></a></span>
                            @endif
                          @endif


                     </div>
                     <div class="col-lg-6 col-md-6 sort-by-btn float-right" >
                        <div class="dropdown float-right">
                           <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="showFilter()">
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

                     </div>
                   </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-8">
                  <div class="row">
                     @foreach($housing as $h)
                     <div class="col-12">
                        <div class="card card-list card-list-view">
                           <a href="/detail/{{$h -> id}}">
                              <div class="row no-gutters">

                                   <div class="col-lg-3 col-md-3">
                                      @if($h -> uploadTypeID < 3)
                                         <span class="badge badge-success">Rentkeya Featured</span>
                                      @else
                                          <span class="badge badge-warning">General Property</span>

                                      @endif
                                      @foreach($houseIMGs as $i)
                                         @if($i -> housingID == $h -> id)
                                          @if($i ->status == 0)
                                         <img class="card-img-top" src="{{$i -> filePath }}" alt="Card image cap">
                                            @break
                                            @else
                                            @endif
                                         @endif
                                      @endforeach
                                   </div>
                                 <div class="col-lg-7 col-md-7">
                                    <div class="card-body">
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

                                    </div>
                                    @endif
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     @endforeach
                  </div>
                </div>
                <div class="col-4" style="padding-left:40px">
                    @foreach($ads as $ad)
                    @if($ad -> is_active == 1 && $ad -> ad_position == 'r4')
                    <div class="R4right">
                        <img src="{{$ad -> ad_image_url}}" alt="{{$ad -> ad_name}}" >
                    </div>
                    @endif
                    @endforeach
                </div>
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

      <!-- Join Team -->


      <!-- End Join Team -->
   <!-- Footer -->


    @endsection

      <!-- End Copyright -->
      <!-- Bootstrap core JavaScript -->

      <!-- End Footer -->
      <!-- Copyright -->

      <!-- End Copyright -->
      @section('js')
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
@endsection
