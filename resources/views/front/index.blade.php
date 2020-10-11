@extends('layouts.site')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Slider -->
            <div class="home-slider5">
                <div id="thmg-slideshow" class="thmg-slideshow">
                    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                            <ul>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('assets/front/images/slide-img1.jpg')}}'><img src='{{asset('assets/front/images/slide-img1.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div>
                                                    <div class="info">
                                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2019</span> </div>
                                                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{asset('assets/front/images/slide-img2.jpg')}}'><img src='{{asset('assets/front/images/slide-img2.jpg')}}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div>
                                                    <div class="info">
                                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2018</span> </div>
                                                        <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> Decorative </div>
                                                        <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                        <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book Appointment</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Category slider Start-->

    <div class="section-filter">
        <div class="b-filter__inner bg-grey container">
            <h2>Find your right car</h2>
            <form class="b-filter">
                <div class="btn-group bootstrap-select">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Make</option>
                        <option>Make 1</option>
                        <option>Make 2</option>
                        <option>Make 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Car Status</option>
                        <option>Status 1</option>
                        <option>Status 2</option>
                        <option>Status 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Model</option>
                        <option>Model 1</option>
                        <option>Model 2</option>
                        <option>Model 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select All Locations</option>
                        <option>Location 1</option>
                        <option>Location 2</option>
                        <option>Location 3</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Select Year</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                </div>
                <div class="ui-filter-slider">
                    <div class="sidebar-widget-body m-t-10">
                        <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                            <input type="text" class="price-slider" value="" style="display:block" >
                        </div>
                        <!-- /.price-range-holder -->
                    </div>
                </div>
                <div>
                    <div class="b-filter__btns">
                        <button class="btn btn-lg btn-primary">search Car</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--Category silder End-->

    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="{{asset('assets/front/images/speakers.png')}}" alt="promotion-banner1"> </a> </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="{{asset('assets/front/images/schedule.png')}}" alt="promotion-banner2"> </a> </div>
            </div>
        </div>
    </div>

    <!-- latest ads Slider -->
    <section class=" wow bounceInUp animated">
        <div class="hot_deals slider-items-products container">
            <div class="new_title">
                <h2>Latest Ads</h2>
                <div class="box-timer">
                    <div class="countbox_1 timer-grid"></div>
                </div>
            </div>
            <div id="hot_deals" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p12.jpg')}}" alt="Retis lapen casen"></a>
                                    <div class="item-box-hover">
                                        <div class="box-inner">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"></button>
                                            </div>
                                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p8.jpg')}}" alt="Retis lapen casen"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                        <div class="box-inner">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"></button>
                                            </div>
                                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p6.jpg')}}" alt="Retis lapen casen"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                        <div class="box-inner">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"></button>
                                            </div>
                                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p8.jpg')}}" alt="Retis lapen casen"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                        <div class="box-inner">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"></button>
                                            </div>
                                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
            </div>
        </div>
    </section>

<!-- featured Ads Slider -->
<section class=" wow bounceInUp animated">
    <div class="best-pro slider-items-products container">
        <div class="new_title">
            <h2>Featured Ads</h2>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p13.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="new-label new-top-left">Hot</div>
                                <div class="sale-label sale-top-left">-15%</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p14.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"> <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p15.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->

                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p16.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p17.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="new-label new-top-left">New</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('assets/front/products-images/p18.jpg')}}" alt="Retis lapen casen"></a>
                                <div class="new-label new-top-left">New</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                        </div>
                                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                <div class="item-content">
                                    <div class="rating">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                    </div>
                                    <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                                    </div>
                                    <div class="other-info">
                                        <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                        <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
            </div>
        </div>
    </div>
</section>
<div class="logo-brand container">
    <div class="brand-title">
        <h2>Popular Brands</h2>
    </div>
    <div class="slider-items-products">
        <div id="brand-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6">
                <!-- Item -->
                <div class="item">
                    <div class="logo-item"><a href="#"><img src="{{asset('assets/front/images/brand1.png')}}" alt="Image"></a></div>
                </div>
                <div class="item">
                    <div class="logo-item"><a href="#"><img src="{{asset('assets/front/images/brand2.png')}}" alt="Image"></a></div>
                </div>
                <!-- End Item -->
                <!-- Item -->
                <div class="item">
                    <div class="logo-item"><a href="#"><img src="{{asset('assets/front/images/brand3.png')}}" alt="Image"></a></div>
                </div>
                <div class="item">
                    <div class="logo-item"><a href="#"><img src="{{asset('assets/front/images/brand4.png')}}" alt="Image"></a></div>
                </div>
                <!-- End Item -->
            </div>
        </div>
    </div>
</div>
@endsection
