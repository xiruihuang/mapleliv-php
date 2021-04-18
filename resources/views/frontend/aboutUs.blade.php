@extends('layouts.front')

@section('content')
 <!-- Inner Header -->
 @include('sweet::alert')
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">关于<span class="mt-0 mb-3 text-success">Rentkeya</span> | 安家</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-success" href="/"></a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <!-- About -->
      <section class="section-padding bg-white">
         <div class="container">
            <div class="row" style="position: center:">
               @if($agent->isDesktop())
               <div class="col-lg-1 col-md-1">
               </div>
                  <img class="rounded img-fluid" src="../asset/img/222.jpeg" alt="Card image cap" style="height:700px; ">
               <div class="col-lg-1 col-md-1">
               </div>
               @else
                  <img class="rounded img-fluid" src="../asset/img/111.jpeg" alt="Card image cap" style="height:600px; ">
               @endif
            </div>
         </div>
      </section>
      <!-- End About -->
      <!-- What We Provide -->
      <section class="section-padding">
         <div class="section-title text-center mb-5">
            <h2>把房屋交给Rentkeya</h2>
            <p>我们将省去您出租房子的烦恼</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-box-outline mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">1.提交委托信息</h5>
                  <p style="font-size: 16px">提交基本信息在线委托，或直接拨打委托热线<br />
					7783741884& info@rentkeya.ca</p>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i></div>
                  <h5 class="mb-2">2.与管家沟通</h5>
                  <p style="font-size: 16px">业主服务中心将会尽快给您回电,指派专属管家</p>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-multiple-outline mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">3.制定出租方案</h5>
                  <p style="font-size: 16px">自如管家制定出租代理方案,签署BC租赁合约</p>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-sticker-emoji mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">4.成为Rentkeya安家业主</h5>
                  <p style="font-size: 16px">匹配心仪租客,并向房东提交12 张支票</p>
               </div>
            </div>
         </div>
      </section>
      <!-- End What We Provide -->
      <!-- Trusted Agents -->
      <section class="section-padding bg-white">
         <div class="section-title text-center mb-5">
            <h2>Rentkeya创始团队</h2>
         </div>
         <div class="container">
            
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/ivanLi.jpeg" alt="">
                        <p> Ivan Li</p>
                        <h6 class="mb-0 text-success">- Rentkeya创始人兼CEO</h6>
                        <small>ivanli@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/issacZhou.jpeg" alt="">
                        <p> Issac Zhou</p>
                        <h6 class="mb-0 text-success">- Rentkeya创始人兼CEO</h6>
                        <small>issaczhou@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
               <!--
               <div class="col-lg-3 col-md-3">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/simonSheng.jpeg" alt="">
                        <p> Simon Sheng</p>
                        <h6 class="mb-0 text-success">- Rentkeya项目经理</h6>
                        <small>simonsheng@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
            -->
               
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
