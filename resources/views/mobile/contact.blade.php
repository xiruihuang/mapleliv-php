<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>枫窝 | MapleLiving | 加拿大租房平台</title>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="../mobile2/css/style.css" rel="stylesheet" type="text/css"/>
    <script type="../mobile2/text/javascript" src="../mobile2/js/jquery.min.js"></script>
    <script type="../mobile2/text/javascript" src="../mobile2/js/slider.js"></script>
    <script type="../mobile2/text/javascript" src="../mobile2/js/tab.js"></script>

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


</head>
<body>


<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-0 mb-3 text-white">联系枫窝 | MapleLiving</h1>
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
                <h3 class="mt-1 mb-5">我们希望跟你保持联系</h3>
                <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> 地址 :</h6>
                <p>6060 Sliver Dr, Burnaby</p>
                <h6 class="text-dark"><i class="mdi mdi-phone"></i> 电话 :</h6>
                <p>(+1) 778-238-8686</p>
                <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> 微信客服 :</h6>
                <img src="/asset/img/4.png" alt="" style="height: 160px;"/>
                <img src="/asset/img/1.jpeg" alt="" style="height: 160px;"/>

                <h6 class="text-dark"></h6>
                <h6 class="text-dark"><i class="mdi mdi-email"></i> 邮箱 :</h6>
                <p>maplelivinginfo@gmail.com</p>

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
                        <input type="text" placeholder="name" class="form-control" id="name" required
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="control-group form-group col-md-6">
                        <label>电话号码 <span class="text-danger">*</span></label>
                        <div class="controls">
                            <input type="tel" placeholder="phone" class="form-control" id="phone" required
                                   data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group col-md-6">
                        <div class="controls">
                            <label>邮箱地址<span class="text-danger">*</span></label>
                            <input type="email" placeholder="email" class="form-control" id="email" required
                                   data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>想跟我们说的话<span class="text-danger">*</span></label>
                        <textarea rows="4" cols="100" placeholder="message" class="form-control"></textarea>
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
<!-- End Contact Me -->
<!-- End Trusted Agents -->
<footer class="aui-footer aui-footer-fixed">
    <a href="/" class="aui-tabBar-item ">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-loan"></i>
                    </span>
        <span class="aui-tabBar-item-text">首页</span>
    </a>
    <a href="/property" class="aui-tabBar-item-active aui-tabBar-item ">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
        <span class="aui-tabBar-item-text">精选</span>
    </a>
    <a href="/showMap" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
        <span class="aui-tabBar-item-text">地图找房</span>
    </a>
</footer>

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
            lat: 49.170550,
            lng: -122.979260,
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru,
            styles:
                [
                    {
                        "featureType": "all",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "weight": "2.00"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#9c9c9c"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#7b7b7b"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#c8d7d4"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#070707"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    }
                ]
        });
        var contentString = '<div id="content">' +
            '<div class="pl-3 pr-3 pt-3 pb-3" id="bodyContent">' +
            '<h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6><p>6060 Sliver Dr, Burnaby</p><h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6><p>(+1) 778-238-8686</p><h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6><p>maplelivinginfo@gmail.com</p><h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6><p>www.mapleliv.com</p></a></div>' +
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
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaN-obEGhYrXykj8uPMPPVfB_CZTjXXig&callback=initMap"></script>

</body>
</html>
