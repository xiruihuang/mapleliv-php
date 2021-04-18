
@extends('layouts.front')

@section('content')

<!-- Inner Header -->
@include('sweet::alert')
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">联系我们</h1>
                  <div class="breadcrumbs">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <!-- Contact Us -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <h3 class="mt-1 mb-5">Get In Touch</h3>
                  <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> 地址 :</h6>
                  <p>Suite 1111 1030 West Georgia Street, Vancouver BC V6E3M5</p>
                  <h6 class="text-dark"><i class="mdi mdi-phone"></i> 电话 :</h6>
                  <p>(+1)604-336-9608</p>
                  <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> 微信客服 :</h6>
                  <p>whatsupissac</p>
                  <h6 class="text-dark"><i class="mdi mdi-email"></i> 邮箱 :</h6>
                  <p>info@rentkeya.ca</p>
                  <h6 class="text-dark"><i class="mdi mdi-link"></i> 公众号 :</h6>
                  <p>rentkeya</p>

               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="card">
                     <div class="card-body">
                        <div id="map"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Contact Us -->
      <!-- Contact Me -->
      <section class="section-padding  bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                  <h2>联系我们</h2>
               </div>
               <form class="col-lg-12 col-md-12" action="/sentMessage" method="POST">
                  {{ csrf_field() }}
                     <div class="control-group form-group">
                        <div class="controls">
                     <label>您的名字<span class="text-danger">*</span></label>
                           <input type="text" placeholder="name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                           <p class="help-block"></p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="control-group form-group col-md-6">
                     <label>电话号码 <span class="text-danger">*</span></label>
                           <div class="controls">
                              <input type="tel" placeholder="phone" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                           </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                           <div class="controls">
                        <label>邮箱地址<span class="text-danger">*</span></label>
                              <input type="email" placeholder="email"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                           </div>
                        </div>
                     </div>
                     <div class="control-group form-group">
                        <div class="controls">
                     <label>想跟我们说的话<span class="text-danger">*</span></label>
                           <textarea rows="4" cols="100" placeholder="message"  class="form-control" ></textarea>
                        </div>
                     </div>
                     <div id="success"></div>
                     <!-- For success/fail messages -->
                     <button type="submit" class="btn btn-success">Send Message</button>
               </form>
            </div>
         </div>
      </section>
      <!-- End Contact Me -->
         @endsection

      @section('js')
      <!-- End Copyright -->
      <!-- Bootstrap core JavaScript -->
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
      <!-- Google Map Api -->
      <script>
         function initMap() {
            var uluru = {
               lat: 49.284496,
               lng: -123.121969,
            };
            var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 15,
               center: uluru,
               styles: [{
                     elementType: 'geometry',
                     stylers: [{
                        color: '#A9D9D1'
                     }]
                  },
                  {
                     elementType: 'labels.text.stroke',
                     stylers: [{
                        color: '#A9D9D1'
                     }]
                  },
                  {
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#FFFFFF'
                     }]
                  },
                  {
                     featureType: 'administrative.locality',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'poi',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'poi.park',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#959B99'
                     }]
                  },
                  {
                     featureType: 'poi.park',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#FFFFFF'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'geometry.stroke',
                     stylers: [{
                        color: '#6FC1C0'
                     }]
                  },
                  {
                     featureType: 'road',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#6FC1C0'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'geometry.stroke',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'road.highway',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#6FC1C0'
                     }]
                  },
                  {
                     featureType: 'transit',
                     elementType: 'geometry',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'transit.station',
                     elementType: 'labels.text.fill',
                     stylers: [{
                        color: '#47BCB3'
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
                        color: '#4A8184'
                     }]
                  },
                  {
                     featureType: 'water',
                     elementType: 'labels.text.stroke',
                     stylers: [{
                        color: '#4A8184'
                     }]
                  }
               ]
            });
            var contentString = '<div id="content">' +
               '<div class="pl-3 pr-3 pt-3 pb-3" id="bodyContent">' +
               '<h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6><p>86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p><h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6><p>(+20) 220 145 6589, +91 12345-67890</p><h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6><p>iamosahan@gmail.com, info@gmail.com</p><h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6><p>www.askbootstrap.com</p><div class="footer-social"><span>Follow : </span><a href="#"><i class="mdi mdi-facebook"></i></a><a href="#"><i class="mdi mdi-twitter"></i></a><a href="#"><i class="mdi mdi-instagram"></i></a><a href="#"><i class="mdi mdi-google"></i></a></div>' +
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
