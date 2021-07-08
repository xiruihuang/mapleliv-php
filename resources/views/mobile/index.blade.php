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

</head>
<body>


<section class="aui-flexView">

    <div class="aui-banner2">
        <div class="m-slider" data-ydui-slider>
            <div class="slider-wrapper">

                <div class="slider-item">
                    <a href="javascript:;">
                        <img src="../mobile2/images/12.png">

                    </a>
                </div>

            </div>
            <div class="slider-pagination"></div>
        </div>
    </div>
    <form method="get" action="/search">
        {{ csrf_field() }}
        <header class="aui-navBar aui-navBar-fixed">

            <div class="aui-search">
                <i class="icon icon-search"></i>
                <input type="text" name="keyword" placeholder="海量精选房源及大众房源">
            </div>

        </header>
    </form>
    <section class="aui-scrollView">
        <div class="aui-palace">

            <a href="/propertyArea/{{'温哥华'}}" class="aui-palace-grid">
                <div class="aui-palace-grid-icon">
                    <img src="../mobile2/images/icon-item-002.png" alt="">
                </div>
                <div class="aui-palace-grid-text">
                    <h2>温哥华</h2>
                </div>
            </a>

            <a href="/propertyArea/{{'多伦多'}}" class="aui-palace-grid">
                <div class="aui-palace-grid-icon">
                    <img src="../mobile2/images/icon-item-004.png" alt="">
                </div>
                <div class="aui-palace-grid-text">
                    <h2>多伦多</h2>
                </div>
            </a>

            <a href="/propertyArea/{{'蒙特利尔'}}" class="aui-palace-grid">
                <div class="aui-palace-grid-icon">
                    <img src="../mobile2/images/icon-item-004.png" alt="">
                </div>
                <div class="aui-palace-grid-text">
                    <h2>蒙特利尔</h2>
                </div>
            </a>


            <a href="/mobileAbout" class="aui-palace-grid">
                <div class="aui-palace-grid-icon">
                    <img src="../mobile2/images/icon-item-008.png" alt="">
                </div>
                <div class="aui-palace-grid-text">
                    <h2>了解我们</h2>
                </div>
            </a>
            <a href="/mobileContact" class="aui-palace-grid">
                <div class="aui-palace-grid-icon">
                    <img src="../mobile2/images/icon-item-010.png" alt="">
                </div>
                <div class="aui-palace-grid-text">
                    <h2>联系我们</h2>
                </div>
            </a>
        </div>
        <!--
        <div class="aui-banner">
            <div class="m-slider" data-ydui-slider>
                <div class="slider-wrapper">
                    <div class="slider-item">
                        <a href="javascript:;">
                            <img src="../mobile2/images/14.jpeg">
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:;">
                            <img src="../mobile2/images/banner.png">
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:;">
                            <img src="../mobile2/images/banner.png">
                        </a>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    -->


        <div class="divHeight"></div>
        <div class="aui-tab" data-ydui-tab>
            <ul class="tab-nav b-line">
                <li class="tab-nav-item tab-active">
                    <a href="javascript:;">
                        <span>最新</span>
                    </a>
                </li>
                <li class="tab-nav-item">
                    <a href="javascript:;">
                        <span>附近的房源</span>
                    </a>
                </li>

            </ul>
            <div class="tab-panel">
                <div class="tab-panel-item tab-active">
                    @foreach($housing as $h)
                        <a href="/detail/{{$h -> id}}" class="aui-flex b-line">
                            <div class="aui-flex-box">
                                <h3><em style="background:#dcb1a0">精选</em>{{str_limit($h->title,25)}}</h3>
                                <span>
                                        <em style="color: #dcb1a0; font-weight:bold">${{$h->publicPrice}}</em>
                                        <em>{{$h->created_at}}</em>
                                    </span>
                            </div>
                            <div class="aui-ent-img">
                                @foreach($houseIMGs as $hi)
                                    @if($hi -> housingID == $h -> id)
                                        <img src="{{$hi->filePath}}" alt="">
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="tab-panel">
                <div class="tab-panel-item tab-active">

                    <a href="/detail/{{$h -> id}}" class="b-line" style="text-align: center;">
                        <br/>
                        <p style="text-align: center;"><a href="/property">查看更多</a></p>
                    </a>


                </div>
            </div>
        </div>
        <div style="height:60px;"></div>

    </section>
    <footer class="aui-footer aui-footer-fixed">
        <a href="/" class="aui-tabBar-item aui-tabBar-item-active">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-loan"></i>
                    </span>
            <span class="aui-tabBar-item-text">首页</span>
        </a>
        <a href="/property" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
            <span class="aui-tabBar-item-text">精选房源</span>
        </a>
        <a href="/showMap" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
            <span class="aui-tabBar-item-text">地图找房</span>
        </a>

    </footer>
</section>

</body>
</html>
