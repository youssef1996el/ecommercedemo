@extends('layouts.app')
@section('content')
<body >
    <!--loader-->
<div class="tw-loader">
    <div class="tw-ellipsis">
        <div></div><div></div><div></div><div></div>
    </div>
</div>
<!--/loader/-->
<!-- scrollToTop -->
<a href="#top" class="scroll-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</a>
<!-- /scrollToTop -->



<!--Header-->
<header id="sticky-header" class="header">
    <div class="header-area">
        <div class="container">
            <div class="navbar-content">
                <ul class="head-round-icon">
                    <li class="off-canvas-btn"><a href="javascript:void(0);"><i class="bi bi-list"></i></a></li>
                    <li class="off-canvas-btn"><a href="javascript:void(0);"><i class="bi bi-search"></i></a></li>
                </ul>
                <div class="navbar-logo">
                    <a href="{{url('/')}}">
                        <img src="https://static.vecteezy.com/ti/vecteur-libre/t2/2427590-logo-boutique-avec-un-sac-shopping-sur-fond-blanc-gratuit-vectoriel.jpg" alt="logo">
                    </a>
                </div>
                <div class="header-search">

                </div>
                <ul class="head-round-icon">
                    <li>
                        <a href="{{url('Favoirte')}}">
                            <i class="fa-solid fa-heart"></i>
                            <span class="cart_count count_wishlist">0</span>
                        </a>
                    </li>
                    <li>
                       {{--  <a href="javascript:void(0);" class="sidebar_show_hide">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="cart_count total_qty">0</span>
                        </a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header><!--/Header/-->



<!-- off-canvas menu start -->
<aside class="mobile-menu-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="offcanvas-body">
        <div class="offcanvas-top">
            <div class="offcanvas-btn-close">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <div class="search-for-mobile">
            <form method="GET" action="https://bshopen.themeposh.net/search">
                <input name="search" type="text" class="form-control" placeholder="Search for Products" required />
                <button type="submit" class="btn theme-btn"><i class="bi bi-search"></i>Search</button>
            </form>
        </div>
        <div class="mobile-navigation">
            <nav>
                <ul class="mobile-menu">
                    <li class="has-children-menu"><a href="#">Top Categories</a>
                        <ul class="dropdown">
                            <li><a href="https://bshopen.themeposh.net/product-category/14/accessories">Accessories</a></li><li><a href="https://bshopen.themeposh.net/product-category/5/camera">Camera</a></li><li><a href="https://bshopen.themeposh.net/product-category/2/computer">Computer</a></li><li><a href="https://bshopen.themeposh.net/product-category/9/fan">Fan</a></li><li><a href="https://bshopen.themeposh.net/product-category/6/headphones">Headphones</a></li><li><a href="https://bshopen.themeposh.net/product-category/13/health-beauty">Health And Beauty</a></li><li><a href="https://bshopen.themeposh.net/product-category/11/jewelry-watch">Jewelry & Watch</a></li><li><a href="https://bshopen.themeposh.net/product-category/4/laptop">Laptop</a></li><li><a href="https://bshopen.themeposh.net/product-category/1/mobile">Mobile</a></li><li><a href="https://bshopen.themeposh.net/product-category/3/monitor">Monitor</a></li><li><a href="https://bshopen.themeposh.net/product-category/8/motor-bike">Motor Bike</a></li><li><a href="https://bshopen.themeposh.net/product-category/10/shoes">Shoes</a></li><li><a href="https://bshopen.themeposh.net/product-category/12/tv-videos">TV & Videos</a></li><li><a href="https://bshopen.themeposh.net/product-category/7/wireless-speakers">Wireless Speakers</a></li>							</ul>
                    </li>
                    <li ><a target="_self" href="https://www.bshop.themeposh.net/">Home</a></li><li class="has-children-menu"><a target="_self" href="#">Mega Menu</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/brand/44/ca-brand">CA Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/43/pakha-brand">Pakha Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/36/roadstar">Roadstar</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/34/af-brand">AF-Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/33/d-brand">D Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/32/smartphone">Smartphone</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/30/footwear">Footwear</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/29/abukaka">Abukaka</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/20/abu-brand">Abu Brand</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Mega Fixed Width</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/14/accessories">Accessories</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/13/health-beauty">Health And Beauty</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/12/tv-videos">TV &amp; Videos</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/11/jewelry-watch">Jewelry &amp; Watch</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/10/shoes">Shoes</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/9/fan">Fan</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/8/motor-bike">Motor Bike</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/7/wireless-speakers">Wireless Speakers</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/6/headphones">Headphones</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/5/camera">Camera</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Dropdown</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/4/laptop">Laptop</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/3/monitor">Monitor</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/2/computer">Computer</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/1/mobile">Mobile</a></li></ul></li>					</ul>
            </nav>
        </div>
    </div>
</aside>
<!-- /off-canvas menu start -->
        <!-- Page Breadcrumb -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>Register</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://bshopen.themeposh.net">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Page Breadcrumb/ -->
<!-- Category Page -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="row mt10 mb5">
                    <div class="col-md-12">
                        {{-- <a href="https://bshopen.themeposh.net/user/register" class="btn white-btn text-initial mr10 font-bold active">I am a customer</a>
                        <a href="https://bshopen.themeposh.net/seller/register" class="btn white-btn text-initial font-bold">I am a seller</a> --}}
                    </div>
                </div>
                <div class="register">
                    <h4>Create  account</h4>
                    <p>Please fill in the information below</p>

                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="" required />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="" required />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password" required />
                        </div>
                        <input type="submit" class="btn theme-btn full" value="Register">
                    </form>

                    <h3>
                        <a href="{{url('login')}}">Back to login</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>







</body>
<script>

        function getFavorite()
        {
            $.ajax({
                type: "get",
                url: "{{url('getFavorite')}}",

                dataType: "json",
                success: function (response)
                {
                    if(response.status == 200)
                    {
                        $('.count_wishlist').text(response.count);
                    }
                }
            });
        }
        getFavorite();



</script>
@endsection


