@extends('layouts.front')

@section('content')
 <!-- Inner Header -->
 @include('sweet::alert')
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">About Us<span class="mt-0 mb-3 text-success">Rentkeya</span> | 安家</h1>
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
            <h2>Give Your Properties to Rentkeya</h2>
            <p>We will solve your problems for renting</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-box-outline mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">1.Fill in Delegation info</h5>
                  <p style="font-size: 16px">Fill in basic info to delegate properties online<br>
                    or call 7783741884 & info@rentkeya.ca</p>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i></div>
                  <h5 class="mb-2">2.Talk to Rentkeya housekeeper</h5>
                  <p style="font-size: 16px">Owner Service Center will call you back as soon as possible<br>
                    and assign personal housekeeper</p>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-multiple-outline mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">3.Make Personal Plan</h5>
                  <p style="font-size: 16px">Rentkeya housekeeper will make a personal delegation info<br>
                     and sign the BC Rental Agreement</p>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="mt-4 mb-4"><i class="text-success mdi mdi-sticker-emoji mdi-48px"></i></div>
                  <h5 class="mt-2 mb-2">4.Become Rentkeya House Owner</h5>
                  <p style="font-size: 16px">Match with the best Tenants<br>
                    and hand in 12 cheques to the owner</p>
               </div>
            </div>
         </div>
      </section>
      <!-- End What We Provide -->
      <!-- Trusted Agents -->
      <section class="section-padding bg-white">
         <div class="section-title text-center mb-5">
            <h2>Rentkeya Funding Group</h2>
         </div>
         <div class="container">

            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/ivanLi.jpeg" alt="">
                        <p> Ivan Li</p>
                        <h6 class="mb-0 text-success">- Rentkeya funder and CEO</h6>
                        <small>ivanli@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/issacZhou.jpeg" alt="">
                        <p> Issac Zhou</p>
                        <h6 class="mb-0 text-success">- Rentkeya funder and CEO</h6>
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
               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/RaymongHuang.jpeg" alt="">
                        <p> Raymond Huang</p>
                        <h6 class="mb-0 text-success">- Rentkeya CTO</h6>
                        <small>raymondhuang@rentkeya.ca</small>
                     </div>
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
