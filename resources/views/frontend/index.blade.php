@extends('frontend.layouts.app')

@section('content')
@foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                                    <div class="" style="height:275px;">
                                        <a href="{{ $slider->link }}" target="_blank">
                                        <img class="d-block w-100 h-100 lazyload" src="{{ asset('frontend/images/placeholder-rect.jpg') }}" data-src="{{ asset($slider->photo) }}" alt="{{ env('APP_NAME')}} promo">
                                        </a>
                                    </div>
                                @endforeach
<div class="main-slider slider">
    <div class="slider-item " style="background-image:url('images/slider/slideshow1-2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 offset-lg-5 offset-md-3">
                    <div class="slider-caption">
                        <span class="lead">Winter Collection Sale </span>
                        <h1 class="mt-2 mb-5"><span class="text-color">70% off </span>to everything</h1>
                        <a href="shop.html" class="btn btn-main">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="slider-item" style="background-image:url('images/slider/slideshow1-3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 offset-lg-5 offset-md-3">
                    <div class="slider-caption">
                        <span class="lead">up to 70% off</span>
                        <h1 class="mt-2 mb-5"><span class="text-color">Classic</span> Style</h1>
                        <a href="shop.html" class="btn btn-main">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item"
        style="background-image:url('images/slider/slideshow1-1.jpg'); background-position:50%;background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 offset-lg-5 offset-md-3">
                    <div class="slider-caption">
                        <span class="lead">Trendy dress</span>
                        <h1 class="mt-2 mb-5"><span class="text-color">Winter </span>Collection</h1>
                        <a href="shop.html" class="btn btn-main">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<section id="category_section">
    <div class="container mx-auto">
        <div class="slick_category text-center">
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="	https://cdn.shopify.com/s/files/1/0254/6089/9928/products/5559325807_2_6_1_360x.jpg?v=1609318832"
                            alt="Women Clothing &amp; Fashion" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Women Clothing &amp; Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/5231384632_2_6_11_180x.jpg?v=1609732512"
                            alt="" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Men Clothing &amp; Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/1466623512_2_4_3_180x.jpg?v=1609385503"
                            class="img-fluid" alt="img">
                    </div>
                    <div class="text_cate">
                        <h3>Baby &amp; Kids</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/8-11_360x.jpg?v=1620957676"
                            alt="" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Grocery &amp; Pets</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="	https://cdn.shopify.com/s/files/1/0254/6089/9928/products/5559325807_2_6_1_360x.jpg?v=1609318832"
                            alt="Women Clothing &amp; Fashion" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Women Clothing &amp; Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/5231384632_2_6_11_180x.jpg?v=1609732512"
                            alt="" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Men Clothing &amp; Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/1466623512_2_4_3_180x.jpg?v=1609385503"
                            class="img-fluid" alt="img">
                    </div>
                    <div class="text_cate">
                        <h3>Baby &amp; Kids</h3>
                    </div>
                </a>
            </div>
            <div class="category_men_block">
                <a href="">
                    <div class="grid-item">
                        <img src="https://cdn.shopify.com/s/files/1/0254/6089/9928/products/8-11_360x.jpg?v=1620957676"
                            alt="" class="img-fluid img-fit lazyloaded">
                    </div>
                    <div class="text_cate">
                        <h3>Grocery &amp; Pets</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section products-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title text-center">
                    <h2>New arrivals</h2>
                    <p>The best Online sales to shop these weekend</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/322.jpg" alt="product-img"></a>
                    </div>
                    <span class="onsale">Sale</span>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Floral Kirby</a></h2>
                        <span class="price">
                            $329.10
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/111.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Open knit switer</a></h2>
                        <span class="price">
                            $29.10
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/222.jpg" alt="product-img"></a>
                    </div>
                    <span class="onsale">Sale</span>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Official trendy</a></h2>
                        <span class="price">
                            $350.00 – $355.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/322.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Frock short</a></h2>
                        <span class="price">
                            $249
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/444.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Sleeve dress</a></h2>
                        <span class="price">
                            $59.10
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/322.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Stylish dress</a></h2>
                        <span class="price">
                            $99.00
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5 ">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/111.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Body suite</a></h2>
                        <span class="price">
                            $329.10
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5 ">
                <div class="product">
                    <div class="product-wrap">
                        <a href="product-single.html"><img class="img-fluid w-100 mb-3 img-first"
                                src="images/shop/products/222.jpg" alt="product-img"></a>
                    </div>
                    <div class="product-hover-overlay">
                        <a href="#"><i class="tf-ion-android-cart"></i></a>
                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title h5 mb-0"><a href="product-single.html">Sleeve linen shirt</a></h2>
                        <span class="price">
                            <del>60$</del>
                            $50.10
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /portfolio -->
<section class="ads section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-6">
                <div class="content">
                    <span class="h5 deal">Deal of the day 50% Off</span>
                    <h2 class="mt-3 text-white">Trendy Dress</h2>
                    <p class="text-md mt-3 text-white">Hurry up! Limited time offer.Grab ot now!</p>
                    <!-- syo-timer -->
                    <!-- <div id="simple-timer" class="syotimer mb-5"></div> -->
                    <a href="#" class="btn btn-main"><i class="ti-bag mr-2"></i>Shop Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section products-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="flash_men my-4 my-md-0">
                    <div class="special_offer_men p-4 text-center">
                        <div class="special_header d-flex justify-content-between align-items-center">
                            <div class="special_title">
                                <h4>Special Offer</h4>
                            </div>
                            <div class="savings">
                                <span class="savings-text">
                                    <span class="font-weight-normal"> Save</span> <span
                                        class="woocommerce-Price-amount amount font-weight-bold"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>
                                </span>
                            </div>
                        </div>
                        <div class="special_left">
                            <a href="">
                                <img src="https://clothingsnepal.com/uploads/product/201706220613191.jpg"
                                    class="img-fluid" alt="">
                                <h6>Game Console Controller + USB 3.0 Cable</h6>
                            </a>
                        </div>
                        <div class="special_price_le py-2">
                            <h4> <span class="red_text">Rs79.00</span> <small><strike>Rs999</strike></small> </h4>
                        </div>
                        <div class="special_countdown">
                            <div class="content_left">
                                <h5 id="headline">Hurry Up! Offer ends in:</h5>
                                <div id="countdown">
                                    <ul class="d-flex align-items-center justify-content-around m-0 p-0">
                                        <li class="d-flex"><span id="hours" class=""></span>:Hours</li>
                                        <li class="d-flex"><span id="minutes" class=""></span>:Minutes</li>
                                        <li class="d-flex"><span id="seconds" class=""></span>:Seconds</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="special_offer_men p-4 text-center">
                        <div class="special_header d-flex justify-content-between align-items-center">
                            <div class="special_title">
                                <h4>Special Offer</h4>
                            </div>
                            <div class="savings">
                                <span class="savings-text">
                                    <span class="font-weight-normal"> Save</span> <span
                                        class="woocommerce-Price-amount amount font-weight-bold"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>
                                </span>
                            </div>
                        </div>
                        <div class="special_left">
                            <a href="">
                                <img src="https://clothingsnepal.com/uploads/product/201605021457081.jpg"
                                    class="img-fluid" alt="">
                                <h6>Game Console Controller + USB 3.0 Cable</h6>
                            </a>
                        </div>
                        <div class="special_price_le py-2">
                            <h4> <span class="red_text">Rs79.00</span> <small><strike>Rs999</strike></small> </h4>
                        </div>
                        <div class="special_countdown">
                            <div class="content_left">
                                <h5 id="headline">Hurry Up! Offer ends in:</h5>
                                <div id="countdown">
                                    <ul class="d-flex align-items-center justify-content-around m-0 p-0">
                                        <li class="d-flex"><span id="hours_a" class=""></span>:Hours</li>
                                        <li class="d-flex"><span id="minutes_a" class=""></span>:Minutes</li>
                                        <li class="d-flex"><span id="seconds_a" class=""></span>:Seconds</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="widget-featured-entries mt-5 mt-lg-0">
                    <h4 class="mb-4 pb-3">Top Products</h4>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-1.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Keds - Kickstart Pom
                                    Pom</a></h6>
                            <p class="featured-entry-meta">$42.99</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-2.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Nike - Brasilia
                                    Medium Backpack</a></h6>
                            <p class="featured-entry-meta">$27.99</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-3.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Guess - GU7295</a>
                            </h6>
                            <p>$38.00</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-4.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Adidas Originals
                                    Cap</a></h6>
                            <p class="featured-entry-meta">$35.00</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-5.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Big Star Flip
                                    Tops</a></h6>
                            <p class="featured-entry-meta">$10.60</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="widget-featured-entries mt-5 mt-lg-0">
                    <h4 class="mb-4 pb-3">Best Selling</h4>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-7.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Keds - Kickstart Pom
                                    Pom</a></h6>
                            <p class="featured-entry-meta">$42.99</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-8.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Nike - Brasilia
                                    Medium Backpack</a></h6>
                            <p class="featured-entry-meta">$27.99</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-1.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Guess - GU7295</a>
                            </h6>
                            <p>$38.00</p>
                        </div>
                    </div>
                    <div class="media mb-3">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-2.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Adidas Originals
                                    Cap</a></h6>
                            <p class="featured-entry-meta">$35.00</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="featured-entry-thumb" href="#">
                            <img src="images/shop/widget/p-4.jpg" alt="Product thumb" width="64"
                                class="img-fluid mr-3">
                        </a>
                        <div class="media-body">
                            <h6 class="featured-entry-title mb-0"><a href="product-single.html">Big Star Flip
                                    Tops</a></h6>
                            <p class="featured-entry-meta">$10.60</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="feature-block">
                    <i class="tf-ion-android-bicycle"></i>
                    <div class="content">
                        <h5>Free Shipping</h5>
                        <p>On all order over $39.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="feature-block">
                    <i class="tf-wallet"></i>
                    <div class="content">
                        <h5>30 Days Return</h5>
                        <p>Money back Guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="feature-block">
                    <i class="tf-key"></i>
                    <div class="content">
                        <h5>Secure Checkout</h5>
                        <p>100% Protected by paypal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="feature-block">
                    <i class="tf-clock"></i>
                    <div class="content">
                        <h5>24/7 Support</h5>
                        <p>All time customer support </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                // console.log(data);
                $('#section_featured').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                slickInit();
            });
        });
    </script>
@endsection

