@extends('layouts.home')

@section('content')
    @include('layouts.banners')
    <div class="container mt40">
        <div class="row">
            <div class="col-lg-8">
                <section class="boxShadow">
                    <div class="title line-blue">
                        <a href="javascript: void(0)">
                            <img src="/img/maintenance-64x64.png" alt="Đời Cười">
                            <span class="font15">LỖI THƯỜNG GẶP VÀ CÁCH KHẮC PHỤC</span>
                        </a>
                    </div>
                    <div id="boxArticles">
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
                    </div>
                    <div class="loadmore">
                        <span class="btn--loadmore">Xem thêm</span>
                    </div>
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
    </div>
@endsection

@section('js')
    <script>
        var slideIndex = 1;
        showSlidesAds(slideIndex);
        var myInterval = setInterval(() => {
            showSlidesAds(slideIndex += Math.floor(Math.random() * 2));
        }, 3000);
        function plusSlides(n) {
            clearInterval(myInterval);
            showSlidesAds(slideIndex += n);
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

        var nextPage = 2;
        var buttonLoadMore = document.querySelector('.btn--loadmore');
        var boxArticle = document.getElementById('boxArticles');
        buttonLoadMore.addEventListener('click', function () {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    nextPage++;
                    let responseJson = JSON.parse(this.responseText);
                    responseJson.forEach((article, index) => {
                        let html = `<article class="common">
                                <a href="${article.url}">
                                    <img class="thumbnail" src="${article.featured_image}">
                                </a>
                                <div class="description">
                                    <h3><a href="${article.url}">${article.name}</a></h3>
                                    <p>${article.description}</p>
                                </div>
                            </article>`;
                        boxArticle.insertAdjacentHTML('beforeend', html);
                    });
                    if (responseJson.length < 5) {
                        buttonLoadMore.remove();
                    }
                }
            };
            xhttp.open("GET", "/api/articles?article_type=3&page="+nextPage, true);
            xhttp.send();
        });
    </script>
@endsection
