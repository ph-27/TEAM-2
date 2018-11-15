@extends('layouts.master-user')

@section('title', 'Home Page')

@section('css')

@endsection

@section('content')
     {{-- Include slide --}}
     {{-- @include('common.slide') --}}
    {{-- End include slide --}}

    <!-- New Product -->
    @foreach ($allCategory as $category)
        <section class="newproduct bgwhite p-t-45 p-b-25">
            <div class="container">
                <div class="sec-title p-b-60">
                    <h3 class="m-text5 t-center">
                        {{ $category->name }}
                    </h3>
                </div>

                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2"> 
                        <!-- get product by category -->
                        @foreach ($category->products as $product) 

                            <div class="item-slick2 p-l-15 p-r-15">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ $product->picture }}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
                                            <form method="POST" action="{{url('addCart')}}">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    THÊM VÀO GIỎ HÀNG
                                                </button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            {{  $product->product_name }}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            @php
                                              $unit = '';
                                              if (in_array($product->type, [1, 2, 3, 4, 5, 8])) {
                                                  $unit = 'Gram';
                                              } else {
                                                  $unit = 'Kg'; // e nhát viết nên viết demo thôi nhé chị
                                              }
                                            @endphp
                                            {{ $product->unit_price . '/' . $unit }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection

@section('js')

@endsection
