@extends('layouts.master-user')

@section('title', 'Home Page')

@section('css')

@endsection

@section('content')
     {{-- Include slide --}}
     {{-- @include('common.slide') --}}
    {{-- End include slide --}}

    <!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					SẢN PHẨM MỚI TRONG NGÀY
			    </h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
                    @php
                        $loop = [];
                        for ($i = 0; $i < 10; $i++) {
                            $loop[$i] = $i;
                        }
                    @endphp
                    @foreach($loop as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="{{ asset('images/giacam_dui_ga.jpg') }}" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                THÊM VÀO GIỎ HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        Đùi gà
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        150.000/ 1kg (VND)
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
    </section>

    <!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
        <div class="container">
                <div class="sec-title p-b-60">
                        <h3 class="m-text5 t-center">
                            RAU - CỦ - QUẢ
                        </h3>
                </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @php
                        $loop = [];
                        for ($i = 0; $i < 10; $i++) {
                            $loop[$i] = $i;
                        }
                    @endphp
                    @foreach($loop as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src=" {{ asset('images/bap_hat-nam-dong-co-tuoi.jpg') }}" alt="IMG-PRODUCT"> 

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                THÊM VÀO GIỎ HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        Herschel supply co 25l
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        $75.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    <!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
        <div class="container">
                <div class="sec-title p-b-60">
                        <h3 class="m-text5 t-center">
                           HẢI SẢN NƯỚC NGỌT
                        </h3>
                </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @php
                        $loop = [];
                        for ($i = 0; $i < 10; $i++) {
                            $loop[$i] = $i;
                        }
                    @endphp
                    @foreach($loop as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                THÊM VÀO GIỎ HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        Herschel supply co 25l
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        $75.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
        <div class="container">
                <div class="sec-title p-b-60">
                        <h3 class="m-text5 t-center">
                           HẢI SẢN NƯỚC MẶN
                        </h3>
                </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @php
                        $loop = [];
                        for ($i = 0; $i < 10; $i++) {
                            $loop[$i] = $i;
                        }
                    @endphp
                    @foreach($loop as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                THÊM VÀO GIỎ HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        Herschel supply co 25l
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        $75.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
        <div class="container">
                <div class="sec-title p-b-60">
                        <h3 class="m-text5 t-center">
                           GIA CẦM
                        </h3>
                </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @php
                        $loop = [];
                        for ($i = 0; $i < 10; $i++) {
                            $loop[$i] = $i;
                        }
                    @endphp
                    @foreach($loop as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                THÊM VÀO GIỎ HÀNG
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        Herschel supply co 25l
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                                        $75.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

<!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
            <div class="container">
                    <div class="sec-title p-b-60">
                            <h3 class="m-text5 t-center">
                               GIA SÚC
                            </h3>
                    </div>
                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2">
                        @php
                            $loop = [];
                            for ($i = 0; $i < 10; $i++) {
                                $loop[$i] = $i;
                            }
                        @endphp
                        @foreach($loop as $product)
                            <div class="item-slick2 p-l-15 p-r-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">
    
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
    
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    THÊM VÀO GIỎ HÀNG
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>
    
                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

       <!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
            <div class="container">
                    <div class="sec-title p-b-60">
                            <h3 class="m-text5 t-center">
                               ĐỒ KHÔ
                            </h3>
                    </div>
                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2">
                        @php
                            $loop = [];
                            for ($i = 0; $i < 10; $i++) {
                                $loop[$i] = $i;
                            }
                        @endphp
                        @foreach($loop as $product)
                            <div class="item-slick2 p-l-15 p-r-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">
    
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
    
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    THÊM VÀO GIỎ HÀNG
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>
    
                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
            <div class="container">
                    <div class="sec-title p-b-60">
                            <h3 class="m-text5 t-center">
                               TRÁI CÂY
                            </h3>
                    </div>
                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2">
                        @php
                            $loop = [];
                            for ($i = 0; $i < 10; $i++) {
                                $loop[$i] = $i;
                            }
                        @endphp
                        @foreach($loop as $product)
                            <div class="item-slick2 p-l-15 p-r-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">
    
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
    
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    THÊM VÀO GIỎ HÀNG
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>
    
                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Product -->
	<section class="newproduct bgwhite p-t-45 p-b-25">
            <div class="container">
                    <div class="sec-title p-b-60">
                            <h3 class="m-text5 t-center">
                               GIA VỊ
                            </h3>
                    </div>
                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2">
                        @php
                            $loop = [];
                            for ($i = 0; $i < 10; $i++) {
                                $loop[$i] = $i;
                            }
                        @endphp
                        @foreach($loop as $product)
                            <div class="item-slick2 p-l-15 p-r-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">
    
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
    
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    THÊM VÀO GIỎ HÀNG
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>
    
                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
{{-- 
    <!-- Banner2 -->
<!-- 	<section class="banner2 bg5 p-t-55 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="hov-img-zoom pos-relative">
                        <img src="images/banner-08.jpg" alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
                            <span class="m-text9 p-t-45 fs-20-sm">
                                The Beauty
                            </span>

                            <h3 class="l-text1 fs-35-sm">
                                Lookbook
                            </h3>

                            <a href="#" class="s-text4 hov2 p-t-20 ">
                                View Collection
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                        <img src="images/shop-item-09.jpg" alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                            <div class="t-center">
                                <a href="product-detail.html" class="dis-block s-text3 p-b-5">
                                    Gafas sol Hawkers one
                                </a>

                                <span class="block2-oldprice m-text7 p-r-5">
                                    $29.50
                                </span>

                                <span class="block2-newprice m-text8">
                                    $15.90
                                </span>
                            </div>

                            <div class="flex-c-m p-t-44 p-t-30-xl">
                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                    <span class="m-text10 p-b-1 days">
                                        69
                                    </span>

                                    <span class="s-text5">
                                        days
                                    </span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                    <span class="m-text10 p-b-1 hours">
                                        04
                                    </span>

                                    <span class="s-text5">
                                        hrs
                                    </span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                    <span class="m-text10 p-b-1 minutes">
                                        32
                                    </span>

                                    <span class="s-text5">
                                        mins
                                    </span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                    <span class="m-text10 p-b-1 seconds">
                                        05
                                    </span>

                                    <span class="s-text5">
                                        secs
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
 -->
    <!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h3 class="m-text5 t-center">
                    CẢM NHẬN CỦA KHÁCH HÀNG
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="images/blog-01.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    TextTextTextTextTextTextTextText
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

                            <p class="s-text8 p-t-16">
                                TextTextTextTextTextTextTextText
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="images/blog-02.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    TextTextTextTextTextTextTextText
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

                            <p class="s-text8 p-t-16">
                                TextTextTextTextTextTextTextText
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src="images/blog-03.jpg" alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                   TextTextTextTextTextTextTextText
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

                            <p class="s-text8 p-t-16">
                                TextTextTextTextTextTextTextText
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    MIỄN PHÍ GIAO HÀNG TRONG NHIỀU KHU VỰC
                </h4>

                <a href="#" class="s-text11 t-center">
                    Nhấn để xem chi tiết.
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    MUA NHIỀU TÍCH ĐIỂM NHIỀU
                </h4>

                <span class="s-text11 t-center">
                    Mỗi 10.000(VND) tích luỹ được 1 điểm. 1 điểm tương đương 1.000(VND) và điểm tích sẽ được sử dụng từ lần mua tiếp theo.
                </span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    THỜI GIAN HOẠT ĐỘNG
                </h4>

                <span class="s-text11 t-center">
                    Cửa hàng hoạt động từ 6:00 - 20:00 hằng ngày.
                </span>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection
