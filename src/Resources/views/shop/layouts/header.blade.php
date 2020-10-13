<div class="header-middle pt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-2 order-first">
                    <div class="text-center text-sm-left mb-30 mb-sm-0">
                        <a href="{{ route('shop.home.index') }}">
                            @if ($logo = core()->getCurrentChannel()->logo_url)
                                <img class="logo" src="{{ $logo }}" />
                            @else
                                <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                            @endif
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-6">
                    <div class="search-form text-center pt-30 pt-lg-0">
                        <form role="search" action="{{ route('shop.search.index') }}" method="GET" class="form-inline position-relative">
                            <input type="search" name="term" class="form-control" placeholder="{{ __('shop::app.header.search-text') }}">
                            <button type="submit" class="btn search-btn theme-bg btn-rounded">
                                <ion-icon name="search-circle-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="cart-block-links">
                            <ul class="d-flex">
                                <li>
                                    <a href="{{ route('customer.session.index') }}">
                                        <span class="position-relative">
                                            <ion-icon size="large" title="My account" name="person-circle-outline"></ion-icon>
                                        </span>
                                    </a>
                                </li>

                                @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
                                @php $cart = cart()->getCart(); @endphp
                                @if ($cart)
                                @php $items = $cart->items; @endphp
                                
                                <li class="mr-0 cart-block position-relative">
                                    <a class="offcanvas-toggle" href="{{ route('shop.checkout.cart.index') }}">
                                        <span class="position-relative">
                                            <ion-icon size="large" name="cart-outline"></ion-icon>
                                            <span class="badge cbdg1">({{ $cart->items->count() }})</span>
                                        </span>
                                    </a>
                                </li>
                                @else
                                    <li class="mr-0 cart-block position-relative">
                                        <a class="offcanvas-toggle" href="{{ route('shop.checkout.cart.index') }}">
                                            <span class="position-relative">
                                                <ion-icon size="large" name="cart-outline"></ion-icon>
                                                <span class="badge cbdg1">({{ __('shop::app.minicart.zero') }})</span>
                                            </span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>