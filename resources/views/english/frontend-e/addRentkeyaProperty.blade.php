@extends('layouts.front')

@section('content')
 <!-- Inner Header -->
 @include('sweet::alert')
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">提交房源</h1>
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
                        <a class="nav-link text-link" href="/addGenProperty">提交房源</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active text-success" href="/addRentkeyaProperty">提交Rentkeya精选房源</a>
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
                  <form method="POST" action="/createRentkeyaProperty" enctype="multipart/form-data">
                  	{{ csrf_field() }}
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">房屋信息</h5>
                           <div class="form-group">
                              <label>标题<span class="text-danger">*</span></label>
                              <input type="text" name="title" class="form-control" placeholder="请输入文字描述" required>
                           </div>
                           <div class="form-group">
                              <label>联系人<span class="text-danger">*</span></label>
                              <input type="text" name="contactPeople" value="{{$user -> firstName}}" class="form-control" placeholder="请输入联系人姓名" required>
                           </div>
                           <div class="form-group">
                              <label>电话<span class="text-danger">*</span></label>
                              <input type="text" name="phone" value="{{$user -> phone}}" class="form-control" placeholder="请输入联系人电话" required>
                           </div>
                           <div class="form-group">
                              <label>微信</label>
                              <input type="text" name="wechat" class="form-control" placeholder="请输入联系人微信">
                           </div>

                           <div class="row">
	                           <div class="form-group col-md-4">
	                                 <label>地址<span class="text-danger">*</span></label>
	                                 <input type="text" name="address" class="form-control" placeholder="请输入地址" required>
	                            </div>
	                            <div class="form-group col-md-4">
	                                 <label>城市<span class="text-danger">*</span></label>
	                                 <input type="text" name="city" class="form-control" placeholder="请输入城市名称" required>
	                            </div>
                               <div class="form-group col-md-4">
                                    <label>区域</label>
                                    <input type="text" name="area" class="form-control" placeholder="请输入区域名称">
                               </div>
                               <div class="form-group col-md-4">
                                    <label>收入价格</label>
                                    <input type="number" name="originPrice" class="form-control" placeholder=" 请输入数字,单位 $/month">
                               </div>
	                            <div class="form-group col-md-4">
	                                 <label>公布价格<span class="text-danger">*</span></label>
	                                 <input type="number" name="publicPrice" class="form-control" placeholder=" 请输入数字,单位 $/month" required>
	                            </div>
	                        </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                    <label>房间个数<span class="text-danger">*</span></label>
                                    <input type="text" name="beds" class="form-control" placeholder="" required>
                               </div>
                               <div class="form-group col-md-4">
                                    <label>卫生间个数<span class="text-danger">*</span></label>
                                    <input type="text" name="baths" class="form-control" placeholder="" required>
                               </div>
                               <div class="form-group col-md-4">
                                    <label>房源楼高<span class="text-danger">*</span></label>
                                    <input type="text" name="floor" class="form-control" placeholder="" required>
                               </div>
                               <div class="form-group col-md-4">
                                    <label>房龄<span class="text-danger">*</span></label>
                                    <input type="text" name="housingAges" class="form-control" placeholder="" required>
                               </div>
                               <div class="form-group col-md-4">
                                    <label>是否有洗衣机<span class="text-danger">*</span></label>
                                    <select class="form-control" name="washingMachines" required>
                                       <option value="1"> 是 </option>
                                       <option value="2"> 否 </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>是否带家具<span class="text-danger">*</span></label>
                                 <select class="form-control" name="furnitures" required>
                                       <option value="1"> 是 </option>
                                       <option value="2"> 否 </option>
                                    </select>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                 <label>是否有洗碗机<span class="text-danger">*</span></label>
                                 <select class="form-control" name="dishWasher" required>
                                       <option value="1"> 是 </option>
                                       <option value="2"> 否 </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>是否有电梯<span class="text-danger">*</span></label>
                                 <select class="form-control" name="elevator" required>
                                       <option value="1"> 是 </option>
                                       <option value="2"> 否 </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>是否有烤箱<span class="text-danger">*</span></label>
                                 <select class="form-control" name="oven" required>
                                       <option value="1"> 是 </option>
                                       <option value="2"> 否 </option>
                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>停车位个数<span class="text-danger">*</span></label>
                                 <input type="text" name="parking" class="form-control" placeholder="" required>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-md-4">
                                 <label>包电<span class="text-danger">*</span></label>
                                 <select class="form-control" name="electricity" required>
                                    <option value="2"> 否 </option>
                                       <option value="1"> 是 </option>

                                    </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label>包网<span class="text-danger">*</span></label>
                                 <select class="form-control" name="web" required>
                                    <option value="2"> 否 </option>
                                       <option value="1"> 是 </option>

                                    </select>
                              </div>
                           </div>



                        </div>
                     </div>

                     <div class="card padding-card">
                     	<div class="card-body">
	                     	<div class="form-group">
		                        <label>房源描述<span class="text-danger">*</span></label>
		                        <textarea class="form-control" name="description" rows="4" placeholder="请填写房源详细描述，充分描述房子的概况有助于房源尽快出租" required></textarea>
		                    </div>
		                </div>
                     </div>


                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">上传图片(单张图片大小不得超过2MB,否则将提交不成功)</h5>
                           <input type="file" class="form-control" name="file[]" multiple>
                        </div>
                     </div>

                     <button type="submit" class="btn btn-success">提交</button>
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
