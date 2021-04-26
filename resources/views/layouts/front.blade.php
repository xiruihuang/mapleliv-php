<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>枫窝租房 | MAPLELIVING | 加拿大租房服务平台 | </title>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5SNL4GP');</script>
    <!-- End Google Tag Manager -->

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109935869-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-109935869-1');
    </script>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="../asset/vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- Select2 CSS -->
    <link href="../asset/vendor/select2/css/select2-bootstrap.css"/>
    <link href="../asset/vendor/select2/css/select2.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="../asset/css/osahan.css" rel="stylesheet">

    <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.bundle.js"></script>


    <link href="../asset/animate.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../asset/animate.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../asset/swiper.animate1.0.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <style>
        html, body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }



        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .image {
            width: 70%;
        }

        @media (max-width: 575px) {
            .image {
                width: 30%;
            }
        }
    </style>
    @yield ('welcome-css')
    @yield ('rentkeyaProperty-css')
    @yield ('detail-css')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SNL4GP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ">
            <a class="navbar-brand text-success logo" href="/"><img src="../asset/img/mapleliv/2.1.png" class="image"
                                                                    style="height: 60px; width: 135px"/></a>
        </div>
    </nav>
</header>
<!-- End Navbar -->


@yield('content')
<!-- Join Team -->
<section class="section-padding bg-dark text-center">
    <h2 class="text-white mt-0">加入枫窝 | MAPLELIVING</h2>
    <p class="text-white mb-4">详情请联系枫窝的客服，我们期待你的加入</p>
    <button type="button" class="btn btn-success"><a href="https://fp6byf7u2a3.typeform.com/to/RoinodcF" style="color: white">帮我找房</a></button>
    <button type="button" class="btn btn-outline-success"><a href="/aboutUs" style="color: white">更多详情</a></button>
</section>
<!-- End Join Team -->

<!-- Footer -->
<section class="section-padding footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                <img src="../asset/img/mapleliv/2.png" class="image">

                <p class="mb-0"><a class="text-dark" href="#">(+1) 778-987-7680</a></p>
                <p class="mb-0"><a class="text-success" href="#">maplelivinginfo@gmail.com</a></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <h6 class="mb-4">公司相关</h6>
                <ul>
                    <li><a href="https://fp6byf7u2a3.typeform.com/to/RoinodcF">帮我找房</a></li>
                    <li><a href="/aboutUs">关于我们</a></li>
                    <li><a href="/contactUs">联系我们</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <h6 class="mb-4">订阅我们</h6>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入邮箱地址.." aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="mdi mdi-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <!--
                <h6 class="mb-4 mt-5">关注我们</h6>
                <div class="footer-social">
                   <a href="#"><i class="mdi mdi-facebook"></i></a>
                   <a href="#"><i class="mdi mdi-twitter"></i></a>
                   <a href="#"><i class="mdi mdi-instagram"></i></a>
                   <a href="#"><i class="mdi mdi-google"></i></a>
                </div>
              -->
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->
<!-- Copyright -->
<section class="pt-4 pb-4 text-center">
    <p class="mt-0 mb-0">© Copyright 2018 MAPLELIV.COM. All Rights Reserved</p>

</section>
<!-- End Copyright -->
@yield('js')
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

<script src="../js/searchMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz_NDpelqpo7QQLzSKEzwaMYiNevMg7uw&libraries=places&callback=initMap"
        async defer></script>


<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
