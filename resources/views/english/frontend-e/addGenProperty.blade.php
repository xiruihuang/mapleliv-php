@extends('layouts.front')

@section('content')
 <!-- Inner Header -->
 @include('sweet::alert')
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Submit</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Add property</span></p>
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
                        <a class="nav-link active text-success" href="/addGenProperty">Submit</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link text-link" href="/addRentkeyaProperty">Submit Featured Properties</a>
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
                  <form method="POST" action="/createGenProperty" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Properties Info</h5>
                           <div class="form-group">
                              <label>Title<span class="text-danger">*</span></label>
                              <input type="text" name="title" class="form-control" placeholder="Please enter description" required>
                           </div>
                           <div class="form-group">
                              @if($userType < 4)
                              <label>Contacts<span class="text-danger">*</span></label>
                              <input type="text" name="contactPeople" value="{{$user -> firstName}}" class="form-control" placeholder="Please enter name" required>
                              @else
                              <label>Contacts<span class="text-danger">*</span></label>
                              <input type="text" name="contactPeople" class="form-control" placeholder="Please enter name" required>
                              @endif
                           </div>
                           <div class="form-group">
                              @if($userType < 4)
                              <label>Phone Number<span class="text-danger">*</span></label>
                              <input type="text" name="phone" value="{{$user -> phone}}" class="form-control" placeholder="Please enter phone number" required>
                              @else
                              <label>Phone Number<span class="text-danger">*</span></label>
                              <input type="text" name="phone" class="form-control" placeholder="Please enter phone number" required>
                              @endif
                           </div>
                           <div class="form-group">
                              <label>Wechat</label>
                              <input type="text" name="wechat" class="form-control" placeholder="please enter wechat id">
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                    <label>Address<span class="text-danger"></span></label>
                                    <input type="text" name="address" class="form-control" placeholder="Please enter address">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" placeholder="Please enter city">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>Price<span class="text-danger"></span></label>
                                    <input type="number" name="publicPrice" class="form-control" placeholder=" Please enter number,unit $/month" >
                               </div>
                           </div>

                        </div>
                     </div>

                     <div class="card padding-card">
                        <div class="card-body">
                           <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="description" rows="4" placeholder="Please fill out the housing details, fully-described profile will help to fasten process"></textarea>
                          </div>
                      </div>
                     </div>


                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Upload pictures (picture size must not exceed 2MB, otherwise the submission will not be successful)</h5>
                           <input type="file" class="form-control" name="file[]" multiple>
                        </div>
                     </div>

                     <button type="submit" class="btn btn-success">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End Add Property -->

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
