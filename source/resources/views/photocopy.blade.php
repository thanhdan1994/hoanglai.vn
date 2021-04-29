@extends('layouts.home')

@section('css')
    <link rel="stylesheet" href="/stylesheets/category.css">
@endsection

@section('content')
    @include('layouts.banners')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter">
                    <ul class="d-flex flex-column flex-sm-row">
                        @foreach($vendors as $vendor)
                            @if(app('request')->input('brand') && app('request')->input('brand') == $vendor->id)
                                <li class="vendor active"><a href="?brand={{$vendor->id}}"><img src="{{ $vendor->logo }}" /></a></li>
                            @else
                                <li class="vendor"><a href="?brand={{$vendor->id}}"><img src="{{ $vendor->logo }}" /></a></li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="filter-by-price">
                        <label>Chọn mức giá: </label>
                        <a href="?price=duoi-5-trieu">Dưới 5 triệu</a>
                        <a href="?price=tren-7-trieu">Trên 7 triệu</a>
                        <a href="?price=duoi-10-trieu">Dưới 10 triệu</a>
                        <a href="?price=tren-10-trieu">Trên 10 triệu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt40">
        <div class="row">
            <div class="col-lg-12">
                <section class="boxShadow">
                    <div class="title line-blue">
                        <a href="javascrit: void(0)">
                            <img src="/img/photocopy-category-icon-64x64.png" alt="icon photocopy machine">
                            <span class="font15 text-center">DANH SÁCH MÁY PHOTOCOPY TẠI HOÀNG LAI</span>
                        </a>
                    </div>
                    <div class="row" id="box-products">
                        @foreach($products as $product)
                            <div class="col-lg-4 mt40">
                                <x-product-item :product="$product"></x-product-item>
                            </div>
                        @endforeach
                    </div>
                    @if(count($products) > 5)
                        <div class="loadmore">
                            <span class="btn--loadmore" id="loadmore">Xem thêm</span>
                        </div>
                    @endif
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <section class="boxShadow">
                    <div class="title line-blue">
                        <a href="/dich-vu-cua-chung-toi.html">
                            <img src="/img/photocopier.png" alt="TIN TỨC VÀ DỊCH VỤ">
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
    </div>
@endsection

@section('js')
    <script>
        var slideIndex = 1;
        showSlidesAds(slideIndex);

        function plusSlides(n) {
            showSlidesAds(slideIndex += n);
        }

        function showSlidesAds(n) {
            var i;
            var slides = document.getElementsByClassName("slideshow-ads");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                slides[i].classList.remove("show");
            }
            slides[slideIndex-1].style.display = "block";
            slides[slideIndex-1].classList.add("show");
        }
        var nextPage = 2;
        var buttonLoadMore = document.getElementById('loadmore');
        var boxProduct = document.getElementById('box-products');
        buttonLoadMore.addEventListener('click', function () {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    nextPage++;
                    let responseJson = JSON.parse(this.responseText);
                    responseJson.forEach((product, index) => {
                        let html = `<div class="col-lg-4 mt40">
                            <article class="product">
                                <a href="${product.url}" class="thumbnail" style="background-image: url(${product.featured_image});"></a>
                                <div class="description">
                                    <h4><a href="${product.url}">${product.name}</a></h4>
                                    <span class="price">Giá: ${product.price_discount}</span>
                                    <del><span class="price">${product.price}</span></del>
                                </div>
                            </article>
                        </div>`;
                        boxProduct.insertAdjacentHTML('beforeend', html);
                    });
                    if (responseJson.length < 5) {
                        buttonLoadMore.remove();
                    }
                }
            };
            xhttp.open("GET", "/api/products?category=2&page="+nextPage, true);
            xhttp.send();
        });
    </script>
@endsection
