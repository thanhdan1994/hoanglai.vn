@extends('layouts.home')

@section('css')
    <link rel="stylesheet" href="/stylesheets/detail-news.css">
@endsection

@section('content')
    @include('layouts.banners')
    <div class="container mt40">
        <div class="row">
            <div class="col-lg-12 clear-padding">
                <article class="artrating">
                    {!! $news->content !!}
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="boxShadow">
                    <div class="title line-blue">
                        <a href="{{ route('home') }}">
                            <img src="/img/photocopier.png" alt="Tin tức và dịch vụ của Hoàng Lai">
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
                        <a href="/dich-vu-cua-chung-toi.html">
                            <img src="/img/printer.png" alt="Đời Cười">
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
                            <div class="flex">
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
                            <div class="flex">
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
                            <div class="flex">
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

        function closeMenu() {
            let over = document.getElementsByClassName('over')[0];
            let subnav = document.getElementsByClassName('subnav')[0];
            subnav.style.display = 'none';
            over.style.display = 'none';
        }
        function openMenu() {
            let over = document.getElementsByClassName('over')[0];
            let subnav = document.getElementsByClassName('subnav')[0];
            subnav.style.display = 'block';
            over.style.display = 'block';
        }
    </script>
@endsection
