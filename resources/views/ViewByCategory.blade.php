
<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->


	<title>{{$nameCategory}}</title>


		<!--favicon-->
	<link rel="shortcut icon" href="https://bshopen.themeposh.net/public/media/06082021041057-favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://bshopen.themeposh.net/public/media/06082021041057-favicon.ico" type="image/x-icon">
	<!-- css -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		<link href="https://bshopen.themeposh.net/public/frontend/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
	:root {
	  --theme-color: #c62f2f;
	  --menu-background-color: #2d3748;
	}
	</style>
	<link href="https://bshopen.themeposh.net/public/frontend/css/bootstrap-icons.css" rel="stylesheet">
	<link href="https://bshopen.themeposh.net/public/frontend/css/owl.carousel.min.css" rel="stylesheet">
	<link href="https://bshopen.themeposh.net/public/frontend/css/jquery.gritter.min.css" rel="stylesheet">
	<link href="https://bshopen.themeposh.net/public/frontend/css/style.css" rel="stylesheet">
	<link href="https://bshopen.themeposh.net/public/frontend/css/responsive.css" rel="stylesheet">
		</head>
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
		<i class="bi bi-arrow-up"></i>
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
						<a href="#">
							<img src="https://static.vecteezy.com/ti/vecteur-libre/t2/2427590-logo-boutique-avec-un-sac-shopping-sur-fond-blanc-gratuit-vectoriel.jpg" alt="logo">
						</a>
					</div>
					<div class="header-search">
						<form method="GET" action="">
							<input name="search" type="text" class="form-control" placeholder="Search for Products" required />
							<button type="submit" class="btn btn-search"><i class="bi bi-search"></i>Search</button>
						</form>
					</div>
					<ul class="head-round-icon">
						<li>
							<a href="">
								<i class="bi bi-heart"></i>
								<span class="cart_count count_wishlist">0</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="sidebar_show_hide">
								<i class="bi bi-cart"></i>
								<span class="cart_count total_qty">0</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header><!--/Header/-->

	<!--Menu-->
	<div class="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="tp-mega-full">
						<div class="tp-menu align-self-center">
							<nav>
								<ul>
                                    <li >
                                        <a target="_self" href="{{url('/')}}">Home</a>
                                    </li>
                                </ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/Menu/-->

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
				<form method="GET" action="">
					<input name="search" type="text" class="form-control" placeholder="Search for Products" required />
					<button type="submit" class="btn theme-btn"><i class="bi bi-search"></i>Search</button>
				</form>
			</div>
			<div class="mobile-navigation">
				<nav>
					<ul class="mobile-menu">
						<li class="has-children-menu"><a href="#">Top Categories</a>
							<ul class="dropdown">
								<li><a href="">Accessories</a></li><li><a href="">Camera</a>
                                </li><li><a href="">Computer</a></li><li><a href="">Fan</a></li><li><a href="">Headphones</a></li><li><a href="">Health And Beauty</a></li><li><a href="">Jewelry & Watch</a></li><li><a href="">Laptop</a></li><li><a href="">Mobile</a></li><li><a href="">Monitor</a></li><li><a href="">Motor Bike</a></li><li><a href="">Shoes</a></li><li><a href="">TV & Videos</a></li><li>
                                    <a href="">Wireless Speakers</a></li>							</ul>
						</li>
						<li ><a target="_self" href="{{url('/')}}">Home</a></li><li class="has-children-menu"><a target="_self" href="#">Mega Menu</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/brand/44/ca-brand">CA Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/43/pakha-brand">Pakha Brand</a></li><li><a target="_self" href="">Roadstar</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/34/af-brand">AF-Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/33/d-brand">D Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/32/smartphone">Smartphone</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/30/footwear">Footwear</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/29/abukaka">Abukaka</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/20/abu-brand">Abu Brand</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Mega Fixed Width</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/14/accessories">Accessories</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/13/health-beauty">Health And Beauty</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/12/tv-videos">TV &amp; Videos</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/11/jewelry-watch">Jewelry &amp; Watch</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/10/shoes">Shoes</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/9/fan">Fan</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/8/motor-bike">Motor Bike</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/7/wireless-speakers">Wireless Speakers</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/6/headphones">Headphones</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/5/camera">Camera</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Dropdown</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/4/laptop">Laptop</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/3/monitor">Monitor</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/2/computer">Computer</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/1/mobile">Mobile</a></li></ul></li>					</ul>
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
						<h1>Mobile</h1>
					</div>
				</div>
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$nameCategory}}</li>
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

				<div class="col-lg-12">

					<div id="tp_datalist">
						<div class="row">
                            @foreach ($Products as $item)
                                <div class="col-lg-4">
                                    <div class="item-card mb25">
                                        <div class="item-image">
                                            <ul class="labels-list">
                                                <li><span class="tplabel" style="background:#f62459;">NEW</span></li>
                                            </ul>
                                            <ul class="product-action">
                                                <li><a href=""><i class="bi bi-cart"></i></a></li>
                                                <li><a href=""><i class="bi bi-zoom-in"></i></a></li>
                                                <li><a class="addtowishlist" data-id="33" href="javascript:void(0);"><i class="bi bi-heart"></i></a></li>
                                            </ul>

                                            <a href="">
                                                <img src="{{ asset('storage/images/' . $item->image) }}" alt="Phone Galaxy A52s 5G" /></a>
                                        </div>
                                        <h4 class="item-title"><a href="">{{$item->name}}</a></h4>
                                        <div class="brand-card">
                                            <div class="brand">
                                                <span>Brand <a href="">{{$item->brand}}</a></span>
                                            </div>
                                            <div class="brand">
                                                <span>Category <a href="">{{$item->category}}</a></span>
                                            </div>
                                        </div>
                                        <div class="item-price-card">
                                            <div class="item-price">${{$item->price}}</div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
		                </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Category Page/ -->



	<!-- /Shopping Cart -->
	<div class="cart-sidebar">
		<a href="javascript:void(0);" class="sidebar-close sidebar_show_hide">
			<i class="bi bi-x-lg"></i>
		</a>
		<div class="cart-head">
		Shopping Cart
		</div>
		<div class="cart-body" id="tp_cart_data"></div>
		<div class="cart-footer">
			<div class="carttotals">
				<span class="title">Subtotal:</span>
				<span class="price sub_total"></span>
			</div>
			<div class="carttotals">
				<span class="title">Tax:</span>
				<span class="price tax"></span>
			</div>
			<div class="carttotals">
				<span class="title">Total:</span>
				<span class="price tp_total"></span>
			</div>
			<a href="https://bshopen.themeposh.net/cart" class="btn black-btn checkout mt10">View Cart</a>
			<a href="https://bshopen.themeposh.net/checkout" class="btn theme-btn checkout">Checkout</a>
		</div>
	</div>
	<!-- /Shopping Cart -->



	<!-- js -->
	<script src="https://bshopen.themeposh.net/public/frontend/js/jquery-3.6.0.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/popper.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/bootstrap.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/scrolltop.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/jquery.nicescroll.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/owl.carousel.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/jquery.popupoverlay.min.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/jquery.gritter.min.js"></script>
	<script>
		var is_rtl = "0";
		if(is_rtl == 1){
			var isRTL = true;
		}else{
			var isRTL = false;
		}
		var theme_color = "#c62f2f";
		var base_url = "https://bshopen.themeposh.net";
		var public_path = "https://bshopen.themeposh.net/public";
	</script>
	<script src="https://bshopen.themeposh.net/public/frontend/js/scripts.js"></script>
	<script src="https://bshopen.themeposh.net/public/frontend/pages/cart.js"></script>
		<div class="custom-popup light width-100 dnone" id="lightCustomModal">
		<div class="padding-md">
			<h4 class="m-top-none"></h4>
		</div>
		<div class="text-center">
			<a href="javascript:void(0);" class="btn blue-btn lightCustomModal_close mr-10" onClick="onConfirm()">Confirm</a>
			<a href="javascript:void(0);" class="btn danger-btn lightCustomModal_close">Cancel</a>
		</div>
	</div>
	<a href="#lightCustomModal" class="btn btn-warning btn-small lightCustomModal_open dnone">Edit</a>
	<script type="text/javascript">
var category_id = "1";
</script>
<script src="https://bshopen.themeposh.net/public/frontend/pages/product-category.js"></script>
	</body>
</html>
