<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="../map/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../map/assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../map/assets/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="../map/assets/css/leaflet.css">
    <link rel="stylesheet" href="../map/assets/css/style.css">

    <title>枫窝租房 | MAPLELIVING | 加拿大租房服务平台 | 地图找房</title>

</head>

<body>

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">


        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="/">
                    <img src="../asset/img/mapleliv/2.1.png" alt="" style="height: 60px; width: 135px">
                </a>

            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
    <!--end Header-->

    <!-- HERO MAP
    =================================================================================================================-->
    <section id="ts-hero" class=" mb-0">

        <!--Fullscreen mode-->
        <div class="ts-full-screen d-flex">
            <!-- MAP
            =========================================================================================================-->
            <div class="ts-map w-100 ts-z-index__1">
                <div id="ts-map-hero" class="h-100 ts-z-index__1"
                     data-ts-map-leaflet-provider="https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}"
                     data-ts-map-leaflet-attribution="&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a> &copy; <a href='http://cartodb.com/attributions'>CartoDB</a>"
                     data-ts-map-zoom-position="topleft"
                     data-ts-map-scroll-wheel="0"
                     data-ts-map-zoom="11"
                     @if($id == '温哥华')
                     data-ts-map-center-latitude="49.246292"
                     data-ts-map-center-longitude="-123.116226"
                     @elseif ($id == '多伦多')
                     data-ts-map-center-latitude="43.6532"
                     data-ts-map-center-longitude="-79.3832"
                     @elseif ($id == '渥太华')
                     data-ts-map-center-latitude="45.285575167497235"
                     data-ts-map-center-longitude="-75.73299714090014"
                     @elseif ($id == '埃德蒙顿')
                     data-ts-map-center-latitude="53.553265083326345"
                     data-ts-map-center-longitude="-113.4961599808217"
                     @else
                     data-ts-map-center-latitude="45.5017"
                     data-ts-map-center-longitude="-73.5673"
                     @endif
                     data-ts-locale="en-US"
                     data-ts-currency="USD"
                     data-ts-unit="m<sup>2</sup>"
                     data-ts-display-additional-info="area_Area;bedrooms_Bedrooms;bathrooms_Bathrooms"
                >
                </div>
            </div>

            <!-- RESULTS
            =========================================================================================================-->
            <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white ts-z-index__2">


                <!-- FORM
                =====================================================================================================-->


                <!-- TITLE and CONTROLS
                =====================================================================================================-->

                <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                    <h4 class="font-weight-normal ts-text-color-light mb-0">MapleLiving 合作房源</h4>

                </section>

                <!-- RESULTS
                =====================================================================================================-->
                <section id="ts-results" class="h-100">
                    <div class="ts-results-wrapper"></div>
                </section>

            </div>
            <!--end ts-results-vertical-->

        </div>
        <!--end full-screen-->

    </section>
    <!--end ts-hero-->

</div>
<!--end page-->

<script src="../map/assets/js/jquery-3.3.1.min.js"></script>
<script src="../map/assets/js/popper.min.js"></script>
<script src="../map/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../map/assets/js/owl.carousel.min.js"></script>
<script src="../map/assets/js/dragscroll.js"></script>
<script src="../map/assets/js/jquery.scrollbar.min.js"></script>
<script src="../map/assets/js/leaflet.js"></script>
<script src="../map/assets/js/leaflet.markercluster.js"></script>
<script src="../map/assets/js/custom.js"></script>
<script src="../map/assets/js/map-leaflet.js"></script>

</body>
</html>
