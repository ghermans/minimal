@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<?php $cart = cart()->getCart(); ?>

@if ($cart)
    <?php $items = $cart->items; ?>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.checkout.cart.index') }}">
        <span class="name">
            {{ __('shop::app.header.cart') }}
            <span class="count"> ({{ $cart->items->count() }})</span>
        </span>
        </a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.checkout.cart.index') }}">
        <span class="name">
            {{ __('shop::app.minicart.cart') }}
            <span class="badge badge-danger"> ({{ __('shop::app.minicart.zero') }})</span>
        </span>
        </a>
    </li>
@endif