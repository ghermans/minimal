@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<?php $cart = cart()->getCart(); ?>

@if ($cart)
    <?php $items = $cart->items; ?>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.checkout.cart.index') }}">
        <span class="name">
            <ion-icon size="large" name="cart-outline"></ion-icon>
            <span class="count"> ({{ $cart->items->count() }})</span>
        </span>
        </a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.checkout.cart.index') }}">
        <span class="name">
            <ion-icon size="large" name="cart-outline"></ion-icon>
            <span class="badge badge-danger"> ({{ __('shop::app.minicart.zero') }})</span>
        </span>
        </a>
    </li>
@endif