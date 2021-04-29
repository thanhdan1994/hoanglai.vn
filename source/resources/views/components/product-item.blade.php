<article class="product">
    <a href="{{ route('home.product', ['slug' => $product->slug, 'id' => $product->id]) }}" class="thumbnail" style="background-image: url({{$product->thumbnailUrl}});"></a>
    <div class="description">
        <h4><a href="{{ route('home.product', ['slug' => $product->slug, 'id' => $product->id]) }}">{{$product->name}}</a></h4>
        @if($product->discount > 0)
            <span class="price">Giá: {{ $product->discount_price }}₫</span>
            <del><span class="price"> {{ number_format($product->price) }}₫</span></del>
        @else
            <span class="price">Giá: {{ $product->discount_price }}₫</span>
        @endif
    </div>
</article>
