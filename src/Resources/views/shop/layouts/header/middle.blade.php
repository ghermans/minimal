<div class="header-middle-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-md-12">
                <div class="site-logo">                                    
                    <a href="index.html">
                        @if ($logo = core()->getCurrentChannel()->logo_url)
                            <img class="logo" src="{{ $logo }}" />
                        @else
                            <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                        @endif
                    </a>
                </div>
            </div>
            
            <div class="col-xl-6 col-md-12">
                <div class="header-search clearfix">
                    <div class="header-search-form">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search product...">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12">
                <div class="shop-cart-menu pull-right">
                
            </div>
        </div>
    </div>
</div>
</div>