@extends('layouts.home')

@section('title', 'Máy Văn Phòng Hoàng Lai - Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM - hoanglai.vn')

@section('meta')
    <meta name="description" content="Máy Văn Phòng Hoàng Lai - Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM - hoanglai.vn">
    <meta name="keywords" content="Máy Văn Phòng Hoàng Lai - Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM - hoanglai.vn">
    <!-- ----------------NEW META -------------------  -->
    <meta name="generator" content="hoanglai.vn" />
    <meta name="copyright" content="Máy Văn Phòng Hoàng Lai" />
    <meta name="author" content="hoanglai.vn" />
@endsection

@section('content')
    @include('layouts.banners')
    <div class="container mt40">
        <div class="row">
            <div class="col-lg-12">
                <section class="boxShadow">
                    <div class="title line-red">
                        <a href="/dich-vu-cua-chung-toi.html">
                            <img src="/img/discount-icon-64x64.png" alt="Đời Cười">
                            <span class="font15">SẢN PHẨM KHUYẾN MÃI</span>
                        </a>
                    </div>
                    <div class="row">
                        @foreach($productsDiscount as $productDiscount)
                            <div class="col-lg-4 mt40">
                                <article class="product">
                                    <a href="{{ route('home.product', ['slug' => $productDiscount->slug, 'id' => $productDiscount->id]) }}" class="thumbnail" style="background-image: url({{$productDiscount->thumbnailUrl}});"></a>
                                    <div class="description">
                                        <h4><a href="{{ route('home.product', ['slug' => $productDiscount->slug, 'id' => $productDiscount->id]) }}">{{$productDiscount->name}}</a></h4>
                                        <span class="price">Giá: {{ number_format($productDiscount->price - ($productDiscount->price * $productDiscount->discount / 100)) }}₫</span>
                                        <del><span class="price"> {{ number_format($productDiscount->price) }}₫</span></del>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="boxShadow">
                    <div class="title line-blue">
                        <a href="{{ route('home.articles.news') }}">
                            <img src="/img/photocopier.png" alt="Đời Cười">
                            <span class="font15">TIN TỨC VÀ DỊCH VỤ</span>
                        </a>
                    </div>
                    @foreach($articles as $article)
                        <article class="common">
                            <a href="{{ route('home.news', ['slug' => $article->slug, 'id' => $article->id]) }}">
                                <img class="thumbnail" src="{{$article->thumbnailUrl}}">
                            </a>
                            <div class="description">
                                <h3><a href="{{ route('home.news', ['slug' => $article->slug, 'id' => $article->id]) }}">{{$article->name}}</a></h3>
                                <p>{{$article->description}}</p>
                            </div>
                        </article>
                    @endforeach
                </section>
            </div>
            <div class="col-lg-4">
                <section class="boxShadow">
                    <div class="title">
                        <a href="{{ route('home') }}">
                            <img src="/img/printer.png" alt="Tin tức và dịch vụ của Hoàng Lai">
                            <span class="font13">ĐƯỢC MUA NHIỀU</span>
                        </a>
                    </div>
                    @foreach($productsBestSell as $productBestSell)
                        <article class="sidebar">
                            <a href="{{ route('home.product', ['slug' => $productBestSell->slug, 'id' => $productBestSell->id]) }}">
                                <img class="thumbnail" src="{{$productBestSell->thumbnailUrl}}">
                            </a>
                            <div class="description">
                                <h4><a href="{{ route('home.product', ['slug' => $productBestSell->slug, 'id' => $productBestSell->id]) }}">{{$productBestSell->name}}</a></h4>
                                <span class="price">Giá: {{number_format($productBestSell->price)}}₫</span>
                            </div>
                        </article>
                    @endforeach
                </section>
            </div>
        </div>
        <div class="row" style="display: none">
            <div class="col-lg-12">
                <section class="boxShadow">
                    <div class="title">
                        <a href="/dich-vu-cua-chung-toi.html">
                            <img src="/img/social-media-icon-64x64.png" alt="Đời Cười">
                            <span class="font13">PHẢN HỒI TỪ KHÁCH HÀNG</span>
                        </a>
                    </div>
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="flex flex-sm-column">
                                <div class="customer-image">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png">
                                </div>
                                <div class="customer-voice">
                                    <h4>Công ty Topdev</h4>
                                    <p>Quá hài lòng về dịch vụ sữa chữa của Công ty giải pháp in Hoàng Lai, các bạn kỹ thuật viên đều có tác phong làm việc rất chuyên nghiệp, đặc biệt là chi phí sữa chữa ở đây lại thấp so với mặc bằng chung nhưng lại rất hiệu quả.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mySlides fade">
                            <div class="flex flex-sm-column">
                                <div class="customer-image">
                                    <img src="https://www.w3schools.com/howto/img_avatar2.png">
                                </div>
                                <div class="customer-voice">
                                    <h4>Công ty Topdev 2</h4>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusamus sapiente iusto suscipit exercitationem fugit? Voluptatum cum quis enim error. Nam, eaque. Labore, magni explicabo ad odio vel repudiandae repellat?</p>
                                </div>
                            </div>
                        </div>

                        <div class="mySlides fade">
                            <div class="flex flex-sm-column">
                                <div class="customer-image">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png">
                                </div>
                                <div class="customer-voice">
                                    <h4>Công ty Topdev 3</h4>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusamus sapiente iusto suscipit exercitationem fugit? Voluptatum cum quis enim error. Nam, eaque. Labore, magni explicabo ad odio vel repudiandae repellat?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        showSlidesAds(slideIndex);
        var myInterval = setInterval(() => {
            showSlidesAds(slideIndex += Math.floor(Math.random() * 2));
        }, 3000);
        function plusSlides(n) {
            clearInterval(myInterval);
            showSlidesAds(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                slides[i].classList.remove("show");
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            slides[slideIndex-1].classList.add("show");
            dots[slideIndex-1].className += " active";
        }

        function showSlidesAds(n) {
            var i;
            var slidesAds = document.getElementsByClassName("slideshow-ads");
            if (n > slidesAds.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slidesAds.length}
            for (i = 0; i < slidesAds.length; i++) {
                slidesAds[i].style.display = "none";
                slidesAds[i].classList.remove("show");
            }
            slidesAds[slideIndex-1].style.display = "block";
            slidesAds[slideIndex-1].classList.add("show");
        }
    </script>
@endsection
