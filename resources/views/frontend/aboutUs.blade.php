@extends('layouts.front')

@section('content')
    <!-- Inner Header -->
    @include('sweet::alert')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">关于<span class="mt-0 mb-3 text-success">枫窝</span> | MapleLiving</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-success" href="/"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->
    <!-- What We Provide -->
    <section class="section-padding">
        <div class="section-title text-center mb-5">
            <h2>让枫窝帮您找房</h2>
            <p>我们将提供最好的合作房源</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-box-outline mdi-48px"></i></div>
                    <h5 class="mt-2 mb-2">1.提交一想求租信息</h5>
                    <p style="font-size: 16px">微信联系客服. 或发送邮箱沟通</p>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i></div>
                    <h5 class="mb-2">2.与客服沟通</h5>
                    <p style="font-size: 16px">客服提供推荐房源和具体信息</p>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-multiple-outline mdi-48px"></i></div>
                    <h5 class="mt-2 mb-2">3.帮助询问空房和递交申请</h5>
                    <p style="font-size: 16px">签约为加拿大正规租赁合同, 保障租客权益</p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-sticker-emoji mdi-48px"></i></div>
                    <h5 class="mt-2 mb-2">4.预约入驻, 告知注意事项</h5>
                    <p style="font-size: 16px">提前对接房东或楼管, 入住无忧</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Provide -->
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
