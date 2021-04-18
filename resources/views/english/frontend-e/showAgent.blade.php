
@extends('layouts.front')

@section('content')
@include('sweet::alert')
<!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Rentkeya Housekeeper</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Distribute email and answer phone calls to help Rentkeya professional property manager to deal with the affairs related to renting</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <!-- Trusted Agents -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <!--
               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/jack.jpeg" alt="">
                        <p class="mb-4">在大温生活将近20年，对大温地区一切信息了如指掌。我将用我的专业和热情，给您带来与众不同的租房体验</p>
                        <h6 class="mb-0 text-success">- Rentkeya租房管家</h6>
                        <small>info@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
            -->

               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/12.jpeg" alt="">
                        <p class="mb-4">Thank you for choosing Rentkeya. I will repay this trust with my 200% earnest, carefulness and professionalism. Please feel free to contact me by phone or email if you have any questions</p>
                        <h6 class="mb-0 text-success">- Rentkeya Housekeeper</h6>
                        <small>info@rentkeya.ca</small>
                     </div>
                  </div>
               </div>
<!--
               <div class="col-lg-4 col-md-4">
                  <div class="card padding-card">
                     <div class="card-body agents-card text-center">
                        <img class="img-fluid mb-4" src="../asset/img/user/Rien.jpeg" alt="">
                        <p class="mb-4">感谢您选择Rentkeya ，我一直相信只有最好的服务才能换取最大的信任，有任何咨询 欢迎电话 邮件联系我</p>
                        <h6 class="mb-0 text-success">- Rentkeya租房管家</h6>
                        <small>info@rentkeya.ca</small>
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
          </section>
      <!-- End Copyright -->
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
