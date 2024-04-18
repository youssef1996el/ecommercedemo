
<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->


	<title>Wishlist</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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

	<!--Top Header-->
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">

									</div>
				<div class="col-lg-6">
					<ul class="top-list">

																								<li><a href="{{url('register')}}"><i class="bi bi-person-plus"></i>Register</a></li>
												<li><a href="{{url('login')}}"><i class="bi bi-person"></i>Sign in</a></li>

												<li>
							<div class="btn-group language-menu">
					<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-translate"></i>English
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="https://bshopen.themeposh.net/lang/en">English</a></li>
					</ul>
				</div>						</li>
											</ul>
				</div>
			</div>
		</div>
	</div><!--/Top Header/-->

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
						<form method="GET" action="https://bshopen.themeposh.net/search">
							<input name="search" type="text" class="form-control" placeholder="Search for Products" required />
							<button type="submit" class="btn btn-search"><i class="bi bi-search"></i>Search</button>
						</form>
					</div>
					<ul class="head-round-icon">
						<li>
							<a href="{{url('Favoirte')}}">
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
								<ul><li ><a target="_self" href="{{url('/')}}">Home</a></li>

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

						<li ><a target="_self" href="{{url('/')}}">Home</a></li>
                        </ul>
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
						<h1>Wishlist</h1>
					</div>
				</div>
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Breadcrumb/ -->
	<!-- Wish List -->
	<div class="inner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive shopping-cart">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center">Remove</th>
									<th>Image</th>
									<th>Product</th>

									<th class="text-center">Price</th>

								</tr>
							</thead>
							<tbody id="tp_wishlist_datalist">
                                @foreach ($favortie as $item)
                                    <tr>
                                        <td class="text-center pro-remove-w" data-title="Remove:">
                                            <a data-id="{{$item->id}}" id=""  href="#" class="pro-remove"><i class="bi bi-x-lg"></i></a>
                                        </td>
                                        <td class="pro-image-w">
                                            <div class="pro-image">
                                                <a href="#">
                                                <img src="{{ asset('storage/images/' . $item->image) }}">
                                                </a>
                                            </div>
                                        </td>
                                        <td data-title="Product:">
                                            <span class="pro-name"><a href="#">{{$item->name}}</a></span>
                                        </td>
                                        <td class="text-center pro-price-w" data-title="Price:">
                                            <span class="pro-price">${{$item->price}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Wish List/ -->



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
			<a href="#" class="btn black-btn checkout mt10">View Cart</a>
			<a href="{{url('checkout')}}" class="btn theme-btn checkout">Checkout</a>
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

        $('.pro-remove').on('click',function()
        {
            $.ajax({
                type: "get",
                url: "{{url('removeFavorite')}}",
                data: {
                    id : $(this).attr('data-id'),
                },
                dataType: "json",
                success: function (response) {
                    if(response.status == 200)
                    {
                        location.reload();

                    }
                }
            });
        });
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
	<script src="https://bshopen.themeposh.net/public/frontend/pages/wishlist.js"></script>
	</body>
</html>
