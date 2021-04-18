<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roost - Material Design Real Estate</title>

        <!-- Vendors -->

        <!-- Material design colors -->
        <link href="../ass/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="../ass/vendors/bower_components/animate.css/animate.min.css">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="../ass/vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- Slick Carousel -->
        <link rel="stylesheet" href="../ass/vendors/bower_components/slick-carousel/slick/slick.css">

        <!-- NoUiSlider - Input Slider -->
        <link rel="stylesheet" href="../ass/vendors/bower_components/nouislider/distribute/nouislider.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="../ass/css/app_1.min.css">
        <link rel="stylesheet" href="../ass/css/app_2.min.css">

        <!-- Page Loader JS -->
        <script src="../ass/js/page-loader.min.js" async></script>
    </head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header">
            <div class="header__top">
                <div class="container">
                    <ul class="top-nav">
                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="">Register</a>

                            <form class="dropdown-menu stop-propagate">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <p><small>By Signing up with Roost, you're agreeing to our <a href="">terms and conditions</a>.</small></p>

                                <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                                <div class="text-center"><small><a href="">Are you an Agent?</a></small></div>

                                <div class="top-nav__auth">
                                    <span>or</span>

                                    <div>Sign in using</div>

                                    <a href="" class="mdc-bg-blue-500">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>

                                    <a href="" class="mdc-bg-cyan-500">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>

                                    <a href="" class="mdc-bg-red-400">
                                        <i class="zmdi zmdi-google"></i>
                                    </a>
                                </div>

                            </form>
                        </li>

                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="" data-rmd-action="switch-login">Login</a>

                            <div class="dropdown-menu">
                                <div class="tab-content">
                                    <form class="tab-pane active in fade" id="top-nav-login">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                                        <div class="text-center">
                                            <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                        </div>

                                        <div class="top-nav__auth">
                                            <span>or</span>

                                            <div>Sign in using</div>

                                            <a href="" class="mdc-bg-blue-500">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>

                                            <a href="" class="mdc-bg-cyan-500">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>

                                            <a href="" class="mdc-bg-red-400">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </div>
                                    </form>

                                    <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                        <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Emaill Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-warning btn-block">Reset Password</button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-google"></i></a>
                        </li>

                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@Roost.com</span></li>
                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>001-541-754-3010</span></li>
                    </ul>
                </div>
            </div>

            <div class="header__main">
                <div class="container">
                    <a class="logo" href="index.html">
                        <img src="img/logo.png" alt="">
                        <div class="logo__text">
                            <span>Roost</span>
                            <span>Material Design Real Estate</span>
                        </div>
                    </a>

                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                        <i class="zmdi zmdi-menu"></i>
                    </div>

                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a></li>

                        <li class="active navigation__dropdown">
                            <a href="index.html">Home</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="after-login.html">After Login</a></li>
                                <li><a href="home-alternative.html">Home Alternative</a></li>
                                <li><a href="dashboard/index.html">Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="" class="prevent-default">Listings</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="listings-grid.html">Grid view</a></li>
                                <li><a href="listings-list.html">List view</a></li>
                                <li><a href="listings-map.html">Map view</a></li>
                                <li><a href="listing-detail.html">Listing Detail</a></li>
                            </ul>
                        </li>


                        <li><a href="submit-property.html">Submit</a></li>

                        <li class="navigation__dropdown">
                            <a href="mortgage.html">Mortgages</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="mortgage-detail.html">Mortgage Detail</a></li>
                                <li><a href="mortgage-detail-reviews.html">Mortgage Reviews</a></li>
                                <li><a href="mortgage-detail-disclaimer.html">Mortgage Disclaimer</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="agents.html">Agents</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                <li><a href="agent-detail-properties.html">Agent Properties</a></li>
                                <li><a href="agent-detail-reviews.html">Agent Reviews</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>

                        <li class="navigation__dropdown">
                            <a href="" class="prevent-default">More</a>

                            <ul class="navigation__drop-menu navigation__drop-menu--right">
                                <li><a href="profile.html">Profile Private</a></li>
                                <li><a href="profile-public.html">Profile Public</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="neighborhood-guide.html">Neighborhood Guide</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="email/listing-mail.html">Email Template</a></li>
                                <li><a href="404.html">Error - 404</a></li>
                                <li><a href="empty-page.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header__search container">
                <form>
                    <div class="search">
                        <div class="search__type dropdown">
                            <a href="" data-toggle="dropdown">Rent</a>

                            <div class="dropdown-menu">
                                <div>
                                    <input type="radio" name="property-type" value="rent">
                                    <span>Rent</span>
                                </div>
                                <div>
                                    <input type="radio" name="property-type" value="buy">
                                    <span>Buy</span>
                                </div>
                            </div>
                        </div>

                        <div class="search__body">
                            <input type="text" class="search__input" placeholder="Enter any Neighorhood, Feature, Zip Code" data-rmd-action="advanced-search-open">

                            <div class="search__advanced">
                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" value="New York, NY">
                                        <label>Location</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ownership Type</label>

                                        <select class="select2">
                                            <option value="">Single Family Home</option>
                                            <option value="">Condo</option>
                                            <option value="">Townhome</option>
                                            <option value="">Apartment Community</option>
                                            <option value="">Room</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--range">
                                        <label>Price Range</label>
                                        <div class="input-slider-values clearfix">
                                            <div class="pull-left"><span>$</span><span id="property-price-upper"></span></div>
                                            <div class="pull-right"><span>$</span><span id="property-price-lower"></span></div>
                                        </div>
                                        <div id="property-price-range"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--range">
                                        <label>Area Size (sqft)</label>
                                        <div class="input-slider-values clearfix">
                                            <div class="pull-left" id="property-area-upper"></div>
                                            <div class="pull-right" id="property-area-lower"></div>
                                        </div>
                                        <div id="property-area-range"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bedrooms</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed1">1
                                            </label>
                                            <label class="btn active">
                                                <input type="checkbox" name="advanced-search-beds" id="bed2" checked>2
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed3">3
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed4">4
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed5">4+
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bathrooms</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn active">
                                                <input type="checkbox" name="advanced-search-baths" id="bath1" checked>1
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath2">2
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath3">3
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath4">4
                                            </label>
                                            <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath5">4+
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 m-t-10">
                                    <button class="btn btn-primary">Search</button>
                                    <button class="btn btn-link" data-rmd-action="advanced-search-close">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="header__recommended">
                <div class="my-location">
                    <div class="my-location__title">Properties nearby your location</div>
                    <div class="dropdown my-location__location hidden-xs">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-pin"></i> San Francisco County, CA</a>

                        <div class="dropdown-menu pull-right stop-propagate">
                            <strong>Change Location</strong>
                            <small>Set your location to get list of properties nearby you</small>

                            <form>
                                <div class="form-group form-group--float">
                                    <input type="email" class="form-control" placeholder="Enter City, State, Zip">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="my-location__map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84147.43307199534!2d-74.15863267618451!3d40.71380993356828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2slk!4v1465216708326" style="border:0; width: 100%; height: 250px;" allowfullscreen></iframe>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="listings-grid">
                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$1,175,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>21 Shop St, San Francisco</small>
                                <h5>Integer tempor luctus maximus</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$1,200,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>Beverly Hills, CA 90210</small>
                                <h5>Duis sollicitudin ante bibendum</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$910,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>132 04th St, San Francisco</small>
                                <h5>Fusce quis libero nonorcious</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$2,542,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>132 Lockslee, San Francisco</small>
                                <h5>Pellentesque habitant</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$823,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>San Francisco, CA 900212 </small>
                                <h5>Maecenas sed purus lorem aliquet cursus</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$1,120,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>21120 Broadway St, San Fransisco</small>
                                <h5>Maecenas sed purus at lorem</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$3,000,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>San Francisco, CA 937202</small>
                                <h5>Nullam finibus libero at hendrerit</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                            </ul>
                        </a>

                        <div class="actions listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>

                    <div class="listings-grid__item">
                        <a href="listing-detail.html">
                            <div class="listings-grid__main">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                <div class="listings-grid__price">$1,175,000</div>
                            </div>

                            <div class="listings-grid__body">
                                <small>4313 Beverly Hills, CA 90210</small>
                                <h5>1358 Ligula Street, Unit 12</h5>
                            </div>

                            <ul class="listings-grid__attrs">
                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                            </ul>
                        </a>

                        <div class="listings-grid__favorite">
                            <div class="actions__toggle">
                                <input type="checkbox">
                                <i class="zmdi zmdi-favorite-outline"></i>
                                <i class="zmdi zmdi-favorite"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>8,243 Properties for Sale, Rent & Real Estate</h2>
                    <small>Villas, Apartments, Office Spaces and Commercial Builsings</small>
                </header>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card__header card__header--minimal">
                                <h2>Recent Properties for Sale</h2>
                                <small>Nunc urnami tempor eget ipsum eurutrum gravida tellus</small>
                            </div>

                            <div class="grid-widget grid-widget--listings">
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">

                                        <div class="grid-widget__info">
                                            <h3>$3,452,000</h3>
                                            <small>4313 Beverly Hills, CA 90210</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">

                                        <div class="grid-widget__info">
                                            <h3>$990,000</h3>
                                            <small>San Francisco, CA 937202</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">

                                        <div class="grid-widget__info">
                                            <h3>1,500,000</h3>
                                            <small>21 Shop St, San Francisco</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">

                                        <div class="grid-widget__info">
                                            <h3>$1,650,690</h3>
                                            <small>13 Beverly Hills, CA 01210</small>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a class="view-more" href="grid-listings.html">
                                View all properties for sale <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card__header card__header--minimal">
                                <h2>Recent Properties for Rent</h2>
                                <small>Suspendisse quis massa fringilla sagittis velit utultrices tellus</small>
                            </div>

                            <div class="grid-widget grid-widget--listings">
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" class="img-responsive" alt="">
                                        <div class="grid-widget__info">
                                            <h3>$1,810,000</h3>
                                            <small>4313 Beverly Hills, CA 90210</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                        <div class="grid-widget__info">
                                            <h3>$1,782,890</h3>
                                            <small>700 Folcon St, San Fransisco, CA</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                        <div class="grid-widget__info">
                                            <h3>$823,000</h3>
                                            <small>1100 Sea avn, San Fransisco, CA</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="grid-widget__item" href="listing-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                        <div class="grid-widget__info">
                                            <h3>$2,543,000</h3>
                                            <small>132 04th St, San Francisco</small>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a class="view-more" href="grid-listings.html">
                                View all properties for rent <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card__header card__header--minimal">
                                <h2>Properties by top locations</h2>
                                <small>Pellentesque habitant morbi tristique senectus et netus et malesuada</small>
                            </div>

                            <div class="grid-widget grid-widget--listings">
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>San Francisco, CA</h4>
                                            <small>1560 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>San Jose, CA</h4>
                                            <small>1232 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Denver, CO</h4>
                                            <small>1103 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>San Diego, CA</h4>
                                            <small>1100 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Dallas, TX</h4>
                                            <small>988 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Dallas, TX</h4>
                                            <small>921 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Los Angeles, CA</h4>
                                            <small>888 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Nashville, TN</h4>
                                            <small>743 Listings</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Palm Bay, FL</h4>
                                            <small>655 Listings</small>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a class="view-more" href="grid-listings.html">
                                View all locations <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card__header card__header--minimal">
                                <h2>Properties by Agents</h2>
                                <small>Duis congue placerat libero in tristique dignissim posuere</small>
                            </div>

                            <div class="grid-widget grid-widget--listings">
                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>David Willson</h4>
                                            <small>154 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Mallinda Hollaway</h4>
                                            <small>143 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Priscilla Erickson</h4>
                                            <small>121 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Randolph Barnett</h4>
                                            <small>112 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Bradford Watson</h4>
                                            <small>98 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Mauris congue ex quis est dictum iaculis</h4>
                                            <small>83 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Mauris congue ex quis est dictum iaculis</h4>
                                            <small>80 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Mauris congue ex quis est dictum iaculis</h4>
                                            <small>62 Listings</small>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-4">
                                    <a class="grid-widget__item" href="agent-detail.html">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">

                                        <div class="grid-widget__info">
                                            <h4>Mauris congue ex quis est dictum iaculis</h4>
                                            <small>59 Listings</small>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a class="view-more" href="agents.html">
                                View all agents <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <a class="logo clearfix" href="">
                                <div class="logo__text">
                                    <span>Roost</span>
                                    <span>Material Design Real Estate</span>
                                </div>
                            </a>

                            <address class="m-t-20 m-b-20 f-14">
                                44-46 Morningside Road,
                                Edinburgh, Scotland
                            </address>

                            <div class="f-20">0062-345678910</div>
                            <div class="f-14 m-t-5">hello@Roost.com / info@Roost.com</div>

                            <div class="f-20 m-t-20">
                                <a href="" class="m-r-10"><i class="zmdi zmdi-google"></i></a>
                                <a href="" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
                                <a href=""><i class="zmdi zmdi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block footer__block--blog">
                            <div class="footer__title">Latest from our blog</div>

                            <a href="">
                                Aenean lacinia bibendum nulla sed
                                <small>On 2016/06/20 at 6:00 PM</small>
                            </a>
                            <a href="">
                                Vestibulum id ligula porta felis euismod semper
                                <small>On 2016/06/18 at 7:12 PM</small>
                            </a>
                            <a href="">
                                Etiam porta sem malesuada magna mollis euismod
                                <small>On 2016/06/10 at 12:59 PM</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <div class="footer__title">Disclaimer</div>

                            <div>Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container">
                    <span class="footer__copyright">© Roost Real Estates</span>

                    <a href="">About Us</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Careers</a>
                    <a href="">Agent Login</a>
                </div>

                <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
                    <i class="zmdi zmdi-chevron-up"></i>
                </div>
            </div>
        </footer>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__inner">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript -->

        <!-- jQuery -->
        <script src="../ass/vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="../ass/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Waves button ripple effects -->
        <script src="../ass/vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="../ass/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- Slick Carousel - Custom Alerts -->
        <script src="../ass/vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

        <!-- NoUiSlider -->
        <script src="../ass/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="../ass/js/app.min.js"></script>

        <!-- Demo only -->
        <script src="../ass/js/demo/demo.js"></script>
    </body>
</html>