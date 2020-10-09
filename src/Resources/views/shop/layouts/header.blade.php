<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="{{ route('shop.home.index') }}">
            @if ($logo = core()->getCurrentChannel()->logo_url)
                <img class="logo" src="{{ $logo }}" />
            @else
                <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
            @endif
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            </ul>

            <form class="form-inline ml-auto">
                <input type="text" class="form-control">
            </form>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.session.index') }}">My account</a>
                </li>

                @include('minimal::shop.layouts.mini-cart')
            </ul>
        </div>
    </div>
</nav>

<div class="header-middle-area">
    &nbsp;
</div>