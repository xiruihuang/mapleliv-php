<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>手机app通用模板个人中心页面模板</title>
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
        <meta content="yes" name="apple-mobile-web-app-capable"/>
        <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
        <meta content="telephone=no" name="format-detection"/>
        <link href="../mobile3/css/style.css" rel="stylesheet" type="text/css"/>

         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5SNL4GP');</script>
      <!-- End Google Tag Manager -->

      <!-- Global Site Tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109935869-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109935869-1');
      </script>
    </head>
    <body>

        <!--

         * 17素材vip建站专区模块代码
         * 详尽信息请看官网：http://www.17sucai.com/pins/vip
         *
         * Copyright , 温州易站网络科技有限公司版权所有
         *
         * 请尊重原创，未经允许请勿转载。
         * 在保留版权的前提下可应用于个人或商业用途

        -->

        <section class="aui-flexView">

            <section class="aui-scrollView">
                <div class="aui-flex aui-flex-user b-line">
                    <div class="aui-ona-user">
                        <img src="../mobile3/image/user.png" alt="">
                    </div>
                    @if(Auth::check())
                    <div class="aui-flex-box">
                        <h2>{{$user -> phone}}</h2>
                    </div>
                    @else
                    <div class="aui-flex-box">
                        <h2>点击登录</h2>
                    </div>
                    @endif
                </div>
                <div class="aui-palace">
                    <a href="/history" class="aui-palace-grid">
                        <div class="aui-palace-grid-icon">
                            <img src="../mobile3/image/icon-time-001.png" alt="">
                        </div>
                        <div class="aui-palace-grid-text">
                            <h2>最近浏览</h2>
                        </div>
                    </a>
                    <!--
                    <a href="javascript:;" class="aui-palace-grid">
                        <div class="aui-palace-grid-icon">
                            <img src="../mobile3/image/icon-time-002.png" alt="">
                        </div>
                        <div class="aui-palace-grid-text">
                            <h2>我的信息</h2>
                        </div>
                    </a>
                    <a href="javascript:;" class="aui-palace-grid">
                        <div class="aui-palace-grid-icon">
                            <img src="../mobile3/image/icon-time-003.png" alt="">
                        </div>
                        <div class="aui-palace-grid-text">
                            <h2>我的发布</h2>
                        </div>
                    </a>
                    <a href="javascript:;" class="aui-palace-grid">
                        <div class="aui-palace-grid-icon">
                            <img src="../mobile3/image/icon-time-004.png" alt="">
                        </div>
                        <div class="aui-palace-grid-text">
                            <h2>我的收藏</h2>
                        </div>
                    </a>
                -->

                </div>
                <div class="divHeight"></div>
                <div class="aui-course-list">
                    
                    
                    <div class="divHeight"></div>
                    <!--
                    <a href="javascript:;" class="aui-flex b-line">
                        <div class="aui-cou-img">
                            <img src="../mobile3/image/icon-tag-009.png" alt="">
                        </div>
                        <div class="aui-flex-box">
                            <h2>分享</h2>
                        </div>
                        <div class="aui-arrow">
                            <p></p>
                        </div>
                    </a>
                -->
                    
                    <a href="/mobileAbout" class="aui-flex b-line">
                        <div class="aui-cou-img">
                            <img src="../mobile3/image/icon-tag-011.png" alt="">
                        </div>
                        <div class="aui-flex-box">
                            <h2>关于我们</h2>
                        </div>
                        <div class="aui-arrow">
                            <p></p>
                        </div>
                    </a>
                    <a href="/addGenProperty" class="aui-flex b-line">
			<div class="aui-cou-img">
			    <img src="../mobile3/image/icon-tag-011.png" alt="">
			</div>
			<div class="aui-flex-box">
			    <h2>发布房源</h2>
			</div>
			<div class="aui-arrow">
			    <p></p>
			</div>
		    </a>
                    <a href="/mobileContact" class="aui-flex b-line">
                        <div class="aui-cou-img">
                            <img src="../mobile3/image/icon-tag-012.png" alt="">
                        </div>
                        <div class="aui-flex-box">
                            <h2>意见反馈</h2>
                        </div>
                        <div class="aui-arrow">
                            <p></p>
                        </div>
                    </a>
                    <a href="/mobileContact" class="aui-flex b-line">
                        <div class="aui-cou-img">
                            <img src="../mobile3/image/icon-tag-013.png" alt="">
                        </div>
                        <div class="aui-flex-box">
                            <h2>联系我们</h2>
                        </div>
                        <div class="aui-arrow">
                            <p></p>
                        </div>
                    </a>
                    <a href="javascript:;" class="aui-flex b-line">
                        <div class="aui-cou-img">
                            <img src="../mobile3/image/icon-tag-014.png" alt="">
                        </div>
                        <div class="aui-flex-box">
                            <h2>版本</h2>
                        </div>
                        <div class="aui-arrow">
                            <p>当前版本1.1.0</p>
                        </div>
                    </a>

                </div>
                <div style="height:60px;"></div>

            </section>
                       <footer class="aui-footer aui-footer-fixed">
                <a href="/" class="aui-tabBar-item ">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-loan"></i>
                    </span>
                    <span class="aui-tabBar-item-text">首页</span>
                </a>
                <a href="/rentkeyaProperty" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-credit"></i>
                    </span>
                    <span class="aui-tabBar-item-text">精选</span>
                </a>
                <a href="/generalProperty" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">
                        <i class="icon icon-meTo"></i>
                    </span>
                    <span class="aui-tabBar-item-text">大众</span>
                </a>
                @if(Auth::check())
                <a href="/my" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon aui-tabBar-item-active">

                        <i class="icon icon-find"></i>
                    </span>
                    <span class="aui-tabBar-item-text">我的</span>
                    
                </a>
                @else
                <a href="/login" class="aui-tabBar-item">
                    <span class="aui-tabBar-item-icon">

                        <i class="icon icon-find"></i>
                    </span>
                    <span class="aui-tabBar-item-text">登录</span>
                    
                </a>
                @endif
            </footer>
        </section>

    </body>
</html>
