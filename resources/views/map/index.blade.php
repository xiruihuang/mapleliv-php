@extends('layouts.front')

@section('content')




    <section class="section-padding pt-md-10 sec-pb-70 pt-8 pb-6 bg-light" >
        <div class="container" style="position: center">
            <div class="section-title">

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <a class="card py-5 hover-bg-primary bg-transparent" href="/showAreaMap/{{'温哥华'}}">
                        <div class="card-body text-center">
                            <div class="icon-md">
                                <i class="icon-listy icon-tea-cup-1"></i>
                            </div>
                            <span class="h5">温哥华区域</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-6 col-xs-12">
                    <a class="card py-5 hover-bg-primary bg-transparent" href="/showAreaMap/{{'多伦多'}}">
                        <div class="card-body text-center">
                            <div class="icon-md">
                                <i class="icon-listy icon-building"></i>
                            </div>
                            <span class="h5">多伦多区域</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-6 col-xs-12">
                    <a class="card py-5 hover-bg-primary bg-transparent" href="/showAreaMap/{{'蒙特利尔'}}">
                        <div class="card-body text-center">
                            <div class="icon-md">
                                <i class="icon-listy icon-martini"></i>
                            </div>
                            <span class="h5">蒙特利尔区域</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-6 col-xs-12">
                    <a class="card py-5 hover-bg-primary bg-transparent" href="/showAreaMap/{{'渥太华'}}">
                        <div class="card-body text-center">
                            <div class="icon-md">
                                <i class="icon-listy icon-martini"></i>
                            </div>
                            <span class="h5">渥太华区域</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <a class="card py-5 hover-bg-primary bg-transparent" href="/showAreaMap/{{'埃德蒙顿'}}">
                        <div class="card-body text-center">
                            <div class="icon-md">
                                <i class="icon-listy icon-martini"></i>
                            </div>
                            <span class="h5">埃德蒙顿区域</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



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
