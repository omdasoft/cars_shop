<header>
    <div class="container">
        <div class="row">
            <div id="header">
                <div class="header-container">
                    <div class="header-logo"> <a href="{{url('/')}}" title="Car HTML" class="logo">
                            <div><img src="{{asset('assets/front/images/logo.png')}}" alt="Car Store"></div>
                        </a> </div>
                    <div class="header__nav">
                        <div class="header-banner">
                            <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                                <div class="assetBlock">
                                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                                        <p style="display: block;"><a href="#">{{__('top-head.place your ads')}} </a></p>
                                        <p style="display: none;">{{__('top-head.herry up')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-user"></i> {{__('top-head.create new account')}} <i class="fa fa-lock"></i>{{__('top-head.login')}}</div>
                        </div>
                        <div class="fl-header-right">
                            <div class="fl-links">
                                <div class="no-js"> <a title="" class="clicker"></a>
                                    <div class="fl-nav-links">
                                        <div class="language-currency">
                                            <div class="fl-language">
                                                <h3>{{__('navbar.language')}}</h3>
                                                <ul class="lang">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li>
                                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!--fl-language-->
                                        </div>
                                        <h3>{{__('navbar.my account')}}</h3>
                                        <ul class="links">
                                            <li><a href="#" title="My Account">{{__('navbar.login')}}</a></li>
                                            <li><a href="#" title="Wishlist">{{__('navbar.register')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fl-nav-menu">
                            <nav>
                                <div class="mm-toggle-wrap">
                                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <div class="nav-inner">
                                    <!-- BEGIN NAV -->
                                    <ul id="nav" class="hidden-xs">
                                        <li class="active"> <a class="level-top" href="{{url('/')}}"><span>{{__('navbar.home')}}</span></a></li>
                                        <li> <a class="level-top" href="{{url('/about')}}"><span>{{__('navbar.about')}}</span></a></li>
                                        <li> <a class="level-top" href="#"><span>{{__('navbar.cars')}}</span></a></li>
                                        <li class="mega-menu"> <a class="level-top" href="grid1.html"><span>{{__('navbar.accessories')}}</span></a>
                                            <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                                                <div class="container">
                                                    <div class="level0-wrapper2">
                                                        <div class="nav-block nav-block-center">
                                                            <!--mega menu-->
                                                            <ul class="level0">
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Audio</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Amplifiers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Installation Parts</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Stereos</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Subwoofers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Body Parts</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bumpers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doors</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fenders</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilles</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hoods</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Exterior</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bed Accessories</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Body Kits</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Grilles</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Car Covers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Bumpers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Interior</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Custom Gauges</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dash Kits</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Seat Covers</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Steering Wheels</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sun Shades</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lighting</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fog Lights</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Headlights</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>LED Lights</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Off-Road Lights</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Signal Lights</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Performance</span></a>
                                                                    <!--sub sub category-->
                                                                    <ul class="level1">
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Air Intake Systems</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Brakes</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Exhaust Systems</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Power Adders</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racing Gear</span></a> </li>
                                                                        <!--level2 nav-6-1-1-->
                                                                    </ul>
                                                                    <!--level1-->
                                                                    <!--sub sub category-->
                                                                </li>
                                                                <!--level3 nav-6-1 parent item-->
                                                            </ul>
                                                            <!--level0-->
                                                        </div>
                                                        <!--nav-block nav-block-center-->

                                                    </div>
                                                    <!--level0-wrapper2-->
                                                </div>
                                                <!--container-->
                                            </div>
                                            <!--level0-wrapper dropdown-6col-->
                                            <!--mega menu-->
                                        </li>
                                        <li> <a class="level-top" href="#"><span>{{__('navbar.car parts')}}</span></a></li>
                                        <li> <a class="level-top" href="#"><span>{{__('navbar.contact us')}}</span></a></li>
                                    </ul>
                                    <!--nav-->
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!--row-->

                </div>
            </div>
        </div>
    </div>
</header>
