@extends('minimal::shop.layouts.index')

@section('page_title')
    Homepage
@stop

@section('content-wrapper')

    @if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts())
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3>{{ __('shop::app.home.featured-products') }}<br/></h3>
                    </div>
                </div>
            </div>
            
            <div class="product-area-inner">
                <div class="row">
                @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $product)
                    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
                    @php $productBaseImage = $productImageHelper->getProductBaseImage($product); @endphp
                    
                    <div class="col-md">
                        <div class="single-product-area">
                            <div class="product-wrapper">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="">
                                            <img src="{{ $productBaseImage['medium_image_url'] }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="{{ route('shop.productOrCategory.index', $product->url_key) }}">{{ $product->name }}</a></h2>
                                            <span class="price">{!! $product->getTypeInstance()->getPriceHtml() !!}</span>
                                    </div>
                                    
                                    <div class="add-to-cart">
                                            <div class="cart-wish-wrap">
                                                <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
                                                    @csrf
                                                    
                                                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    
                                                    <button class="btn btn-md btn-primary add-to-cart" {{ $product->isSaleable() ? '' : 'disabled' }}>{{ ($product->type == 'booking') ?  __('shop::app.products.book-now') :  __('shop::app.products.add-to-cart') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop