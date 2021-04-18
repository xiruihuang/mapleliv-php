@extends('layouts.front')

@section('content')
 <!-- Inner Header -->
@include('sweet::alert')

 @if($housing -> uploadTypeID < 3)
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Edit</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Edit property</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <section class="tab-view">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="nav justify-content-center">

                     <li class="nav-item">
                        <a class="nav-link text-link active text-success">Edit</a>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- Add Property -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
                  <form method="POST" action="/editRentkeyaHousing/{{$housing -> id}}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Housing Info <small style="color: red">(Please check all columns before submitting)</small></h5>
                           <div class="form-group">
                              <label>Title<span class="text-danger">*</span></label>
                              <input type="text" name="title" value="{{$housing -> title}}" class="form-control" placeholder="Please enter a text description" required>
                           </div>
                           <div class="form-group">
                              <label>Contact<span class="text-danger">*</span></label>
                              <input type="text" name="contactPeople" value="{{$housing -> contactPeople}}" class="form-control" placeholder="Please enter the contact name" required>
                           </div>
                           <div class="form-group">
                              <label>Phone Number<span class="text-danger">*</span></label>
                              <input type="text" name="phone" value="{{$housing -> phone}}" class="form-control" placeholder="Please enter the contact number" required>
                           </div>
                           <div class="form-group">
                              <label>Wechat</label>
                              <input type="text" name="wechat" class="form-control" value="{{$housing -> wechat}}" placeholder="Enter the WeChat id">
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                    <label>Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" value="{{$housing -> address}}" placeholder="Please enter address">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>City<span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="form-control" value="{{$housing -> city}}" placeholder="Please enter a city name">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Region</label>
                                    <input type="text" name="area" value="{{$housing -> area}}"  class="form-control" placeholder="Please enter a city name">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Desired Price<span class="text-danger">*</span></label>
                                    <input type="number" name="originPrice" value="{{$housing -> originPrice}}" class="form-control" placeholder=" Please enter a number in $/month">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Listing Price<span class="text-danger">*</span></label>
                                    <input type="number" name="publicPrice" value="{{$housing -> publicPrice}}" class="form-control" placeholder="Please enter a number in $/month">
                               </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                    <label>Rooms<span class="text-danger">*</span></label>
                                    <input type="text" name="beds" value="{{$housing -> beds}}" class="form-control" placeholder="">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Bathrooms<span class="text-danger">*</span></label>
                                    <input type="text" name="baths" value="{{$housing -> baths}}" class="form-control" placeholder="">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Floors<span class="text-danger">*</span></label>
                                    <input type="text" name="floor" value="{{$housing -> floor}}" class="form-control" placeholder="">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Age<span class="text-danger">*</span></label>
                                    <input type="text" name="housingAges" value="{{$housing -> housingAges}}" class="form-control" placeholder="">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Washing Machines<span class="text-danger">*</span></label>
                                    <select class="form-control" name="washingMachines" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Furniture<span class="text-danger">*</span></label>
                                 <select class="form-control" name="furnitures" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                 <label>Dish Washer<span class="text-danger">*</span></label>
                                 <select class="form-control" name="dishWasher" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Elevators<span class="text-danger">*</span></label>
                                 <select class="form-control" name="elevator" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Ovens<span class="text-danger">*</span></label>
                                 <select class="form-control" name="oven" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Parking Lots<span class="text-danger">*</span></label>
                                 <input type="text" name="parking" value="{{$housing -> parking}}" class="form-control" placeholder="" requireds>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                 <label>Electricity<span class="text-danger">*</span></label>
                                 <select class="form-control" name="electricity" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Electricity<span class="text-danger">*</span></label>
                                 <select class="form-control" name="web" required>
                                       <option value="1"> Yes </option>
                                       <option value="2"> No </option>
                                    </select>
                              </div>
                           </div>



                        </div>
                     </div>

                     <div class="card padding-card">
                        <div class="card-body">
                           <div class="form-group">
                              <label>Description<span class="text-danger">*</span></label>
                              <textarea class="form-control" name="description"  rows="6" placeholder="请填写房源详细描述，充分描述房子的概况有助于房源尽快出租"> {{$housing -> description}}</textarea>
                          </div>
                      </div>
                     </div>

<!--
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">上传图片</h5>
                           <input type="file" class="form-control" name="file[]" multiple>
                        </div>
                     </div>
                  -->

                     <button type="submit" class="btn btn-success">Submit Changes</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End Add Property -->


   @else
<section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Edit</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Edit property</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <section class="tab-view">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="nav justify-content-center">

                     <li class="nav-item">
                        <a class="nav-link text-link active text-success">Edit</a>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- Add Property -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
                  <form method="POST" action="/editGenProperty/{{$housing -> id}}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Housing Info</h5>
                           <div class="form-group">
                              <label>Title<span class="text-danger">*</span></label>
                              <input type="text" name="title" class="form-control" value="{{$housing -> title}}" placeholder="Please enter a text description" required>
                           </div>
                           <div class="form-group">

                              <label>Contact<span class="text-danger">*</span></label>
                              <input type="text" name="contactPeople" value="{{$housing -> contactPeople}}" class="form-control" placeholder="Please enter the contact name" required>

                           </div>
                           <div class="form-group">

                              <label>电话<span class="text-danger">*</span></label>
                              <input type="text" name="phone" value="{{$housing -> phone}}" class="form-control" placeholder="Please enter the contact number" required>

                           </div>
                           <div class="form-group">
                              <label>Wechat</label>
                              <input type="text" name="wechat" class="form-control" value="{{$housing -> wechat}}" placeholder="Please Enter Wechat Id">
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                    <label>Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" value="{{$housing -> address}}" placeholder="Please Enter Address">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>City<span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="form-control" value="{{$housing -> city}}" placeholder="Please enter a city name" required>
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Price<span class="text-danger">*</span></label>
                                    <input type="number" name="publicPrice" class="form-control" value="{{$housing -> publicPrice}}" placeholder=" Please enter a number in $/month" required>
                               </div>
                           </div>

                        </div>
                     </div>

                     <div class="card padding-card">
                        <div class="card-body">
                           <div class="form-group">
                              <label>Description<span class="text-danger">*</span></label>
                              <textarea class="form-control" name="description" rows="4" placeholder="Please fill in the detailed description of the house">{{$housing -> description}}</textarea>
                          </div>
                      </div>
                     </div>

<!--
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">上传图片</h5>
                           <input type="file" class="form-control" name="file[]" multiple>
                        </div>
                     </div>
                  -->

                     <button type="submit" class="btn btn-success">Submit Changes</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End Add Property -->

   @endif
      @endsection




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
      <!-- Google Map Api -->
      <script>
         function initMap() {
            var uluru = {
               lat: -25.363,
               lng: 131.044
            };
            var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 3,
               center: uluru,
               styles: [{
                     elementType: 'geometry',
                     stylers: [{
                        color: '#64DDBA'
                     }]
                  },
                  {
                     elementType: 'labels.text.stroke',
                     stylers: [{
                        color: '#64DDBA'
                     }]
                  },
                  {
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#34495E'
                     }]
                  },
                  {
                     featureType: 'administrative.locality',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#8A8A8A'
                     }]
                  },
                  {
                     featureType: 'poi',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#8A8A8A'
                     }]
                  },
                  {
                     featureType: 'poi.park',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#263c3f'
                     }]
                  },
                  {
                     featureType: 'poi.park',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#6b9a76'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#ABABAB'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'geometry.stroke',
                     stylers: [{
                        color: '#212a37'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#9ca5b3'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#34495E'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'geometry.stroke',
                     stylers: [{
                        color: '#1f2835'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#f3d19c'
                     }]
                  },
                  {
                     featureType: 'transit',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#2f3948'
                     }]
                  },
                  {
                     featureType: 'transit.station',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#8A8A8A'
                     }]
                  },
                  {
                     featureType: 'water',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#F2F6FF'
                     }]
                  },
                  {
                     featureType: 'water',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#BCBCBC'
                     }]
                  },
                  {
                     featureType: 'water',
                     elementType: 'labels.text.stroke',
                     stylers: [{
                        color: '#F2F6FF'
                     }]
                  }
               ]
            });
            var contentString = '<div id="content">' +
               '<div id="bodyContent">' +
               '<div class="card card-list"><a href="#"><span class="badge badge-danger">For Sale</span><img class="card-img-top" src="../asset/img/list/1.png" alt="Card image cap"><div class="card-body"><h5 class="card-title">House in Kent Street</h5><h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent Sreet, Sydny, NEW 2000</h6><h2 class="text-success mb-0 mt-3">$130,000 <small>/month</small></h2></div><div class="card-footer"><span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span><span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span><span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span></div></a> </div>' +
               '</div>' +
               '</div>';

            var infowindow = new google.maps.InfoWindow({
               content: contentString,
               maxWidth: 300
            });
            var image = '../asset/img/marker.png';
            var marker = new google.maps.Marker({
               position: uluru,
               map: map,
               icon: image
            });
            marker.addListener('click', function() {
               infowindow.open(map, marker);
            });
         }

      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUsOUkZbTEwLxeUN5Qfag6Vr5BjngCGMY&callback=initMap"></script>
@endsection
