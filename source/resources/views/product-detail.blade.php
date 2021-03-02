@extends('layouts.home')

@section('title', 'Máy Văn Phòng Hoàng Lai - ' . $product->name . ' - hoanglai.vn')

@section('meta')
    <meta name="description" content="{{ $product->description }} - hoanglai.vn">
    <meta name="keywords" content="Máy Văn Phòng Hoàng Lai - Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM - hoanglai.vn">
    <!-- ----------------NEW META -------------------  -->
    <meta name="generator" content="hoanglai.vn" />
    <meta name="copyright" content="Máy Văn Phòng Hoàng Lai" />
    <meta name="author" content="hoanglai.vn" />
@endsection

@section('ldJson')
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Product",
            "name":"{{ $product->name }}",
            "image":[
            @foreach ($product->images as $key => $image)
                @if (($key + 1) < count($product->images))
                    "{{ $image->getUrl() }}",
                @else
                    "{{ $image->getUrl() }}"
                @endif
            @endforeach
            ],
            "description":"{{ $product->description }}",
            "brand":{"@type":"Thing","name":"{{$product->vendor->name}}"},
            "aggregateRating":{"@type":"AggregateRating","ratingValue":4.0,"reviewCount":5},
            "additionalProperty":[
            @foreach($product->parameters as $key => $parameter)
                @if (($key + 1) < count($product->parameters))
                    {"@type":"PropertyValue","name":"{{$parameter['key']}}","value":"{{$parameter['value']}}"},
                @else
                    {"@type":"PropertyValue","name":"{{$parameter['key']}}","value":"{{$parameter['value']}}"}
                @endif
            @endforeach
            ],
            "review": {
                "@type": "Review",
                "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "4",
                  "bestRating": "5"
                },
                "author": {
                  "@type": "Person",
                  "name": "THANH DAN PC"
                }
            },
            "offers": {
                "@type": "Offer",
                "url": "{{ route('home.product', ['slug' => $product->slug, 'id' => $product->id]) }}",
                "priceCurrency": "VND",
                "price": "{{ number_format($product->price - ($product->price * $product->discount / 100), 0, '.', '.') }}",
                "priceValidUntil": "{{ $product->updated_at }}",
                "availability": "http://schema.org/InStock"
            }
        }
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="/stylesheets/detail.css">
@endsection

@section('content')
    <div class="container mt100 bg-white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">{{$product->category->name}}</a></li>
                <li class="breadcrumb-item"><a href="/">{{$product->vendor->name}}</a></li>
            </ol>
            <h2 class="product-name">{{$product->name}}</h2>
        </nav>
        <div class="row pt20 pb20 border-bottom1-eee">
            <div class="col-lg-6 box-images">
                <img id="large-image" src="{{$product->thumbnailUrl}}" />
                <ul class="flex">
                    @foreach ($product->images as $key => $image)
                        <li class="small-image {{ $key == 0 ? 'active' : '' }}" data-origin="{{$image->getUrl()}}">
                            <img src="{{$image->getUrl('thumb-70')}}" style="width: 70px;height: 70px" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="are-price">
                    @if ($product->discount > 0)
                        <span>Giá: </span>
                        <strong>{{ number_format($product->price - ($product->price * $product->discount / 100)) }}₫</strong>
                        <del><span class="hisprice">{{ number_format($product->price) }}₫</span></del>
                        <i>-{{$product->discount}}%</i>
                    @else
                        <span>Giá: </span>
                        <strong>{{ number_format($product->price) }}₫</strong>
                    @endif
                </div>
{{--                <div class="not-repay" style="padding-bottom:10px;">Khuyến mãi dự kiến áp dụng đến 23:00 31/03</div>--}}
                <div class="tableparameter">
                    <h3>Thông số kỹ thuật</h3>
                    <ul class="parameter ">
                        @foreach($product->parameters as $parameter)
                            <li>
                                <span>{{$parameter['key']}}:</span>
                                <div>{{$parameter['value']}}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt50 pb20">
            <div class="col-lg-8 article">
                {!! $product->content !!}
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
    <div class="container mt40">
        <div class="row">
            <div class="col-lg-12">
                <section class="boxShadow">
                    <div class="title line-red">
                        <a href="javascript: void(0)">
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
    </div>
@endsection

@section('js')
    <script>
        var zoomImage = document.getElementById('large-image');
        var smallImages = document.getElementsByClassName('small-image');
        for (i = 0; i < smallImages.length; i++) {
            smallImages[i].addEventListener('click', function() {
                let originImage = this.dataset.origin;
                let imagesItem = this.closest('ul').querySelectorAll('li');
                imagesItem.forEach((item, index) => {
                    item.classList.remove('active');
                })
                this.classList.add('active');
                zoomImage.setAttribute('src', originImage);
            })
        }
    </script>
@endsection
