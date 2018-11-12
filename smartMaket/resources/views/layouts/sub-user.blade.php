<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="icon" type="image/png" href="images/logo.png"/>
        {{-- Include common css --}}
        @include('common.css')
        {{-- End include common css --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    </head>


    <body class="animsition", style="opacity:1">
    
        <div class="container">
            <main class="content-main">
                @yield('content')
            </main>
        </div>

        {{-- Include js common --}}
        @include('common.js')
        {{-- End include js common --}}
        @yield('js')
        <script src="{{ asset('js/main.js') }}"></script>
        <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
                <div class="flex-w p-b-90">
                    <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                    <h4 class="s-text12 p-b-30">
                        LIÊN HỆ
                    </h4>
            
                    <div>
                        <p class="s-text7 w-size27">
                        Số điện thoại: (+84) 964-051-051<br>
                        FAX: 0511-3051-051<br>
                        Địa chỉ: 96 Lý Tự Trọng, Thanh Bình, Đà Nẵng, Việt Nam.
                        </p>
            
                        <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                        </div>
                    </div>
                    </div>
                    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                            <h4 class="s-text12 p-b-30">
                                Links
                            </h4>
                    
                            <ul>
                                <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    TÌM KIẾM
                                </a>
                                </li>
                    
                                <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    GIỚI THIỆU
                                </a>
                                </li>
                    
                                <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    LIÊN HỆ
                                </a>
                                </li>
                            </div>
                    
                            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                            <h4 class="s-text12 p-b-30">
                                HỖ TRỢ
                            </h4>
                    
                            <ul>
                                <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    CHAT VỚI NHÂN VIÊN
                                </a>
                                </li>
                    
                                <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    GỞI CÂU HỎI
                                </a>
                                </li>
                            </ul>
                            </div>
                    
                            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                            <h4 class="s-text12 p-b-30">
                                Newsletter
                            </h4>
                    
                            <form>
                                <div class="effect1 w-size9">
                                <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                                <span class="effect1-line"></span>
                                </div>
                    
                                <div class="w-size2 p-t-20">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Subscribe
                                </button>
                                </div>
                    
                            </form>
                </div>
             </div>
         </footer>

    </body>
</html>
