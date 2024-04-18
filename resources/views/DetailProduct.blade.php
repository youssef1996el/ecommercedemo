
<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->
    <meta name="csrf-token" content="X37ODDjyu2RWczlDIIxHhjO1GKsbAfL21QNYB0Kv">

	<title>Inspiron FHD Laptop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
						<form method="GET" action="">
							<input name="search" type="text" class="form-control" placeholder="Search for Products" required />
							<button type="submit" class="btn btn-search"><i class="bi bi-search"></i>Search</button>
						</form>
					</div>
					<ul class="head-round-icon">
						<li>
							<a href="{{url('Favoirte')}}">
								<i class="bi bi-heart"></i>
								<span class="cart_countt count_wishlist">0</span>
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
				<form method="GET" action="#">
					<input name="search" type="text" class="form-control" placeholder="Search for Products" required />
					<button type="submit" class="btn theme-btn"><i class="bi bi-search"></i>Search</button>
				</form>
			</div>
			<div class="mobile-navigation">

			</div>
		</div>
	</aside>
	<!-- /off-canvas menu start -->

<!-- Page Breadcrumb -->
<div class="breadcrumb-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="page-title">
					<h1>{{$detailProduct[0]->name}}</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- /Page Breadcrumb/ -->
<!-- Product Details -->
<div class="inner-section">
	<div class="container">
		<!-- Single Product -->
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 mb25">
								<div id="product_big" class="single-product-slider owl-carousel caro-single-product">
                                    @foreach ($products as $item)
                                        <div class="item">
                                            <img src="{{ asset('storage/images/' . $item->image) }}" alt=""/>
                                        </div>
                                    @endforeach


								</div>
				                <div id="product_thumbs" class="thumbnail-card owl-carousel">
                                    @foreach ($products as $item)
                                        <div class="item">
                                            <img src="{{ asset('storage/images/' . $item->image) }}" alt=""/>
                                        </div>
                                    @endforeach

								</div>
							</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb25">
				<div class="pr_details">
					<h4 class="product_title">{{$detailProduct[0]->name}}</h4>
					<div class="pr_rating_wrap">

					</div>

										<div class="pr_extra">{{$detailProduct[0]->description}}</div>

										<div class="pr_extra"><strong>Brand:</strong><a href="https://bshopen.themeposh.net/brand/34/af-brand">  {{$Brand[0]->name}}</a></div>

										<div class="pr_extra"><strong>Category:</strong><a href="https://bshopen.themeposh.net/stores/63/silvary">{{$category[0]->name}}</a></div>



					<div class="product_price">
																				<div class="item-price">${{$detailProduct[0]->price}}</div>

																		</div>



																	<div class="pr_extra"><strong>Availability:</strong><span class="instock">{{$detailProduct[0]->quantity}} In Stock</span></div>
                     <form action="{{url('checkout')}}" method="get" style="display: inline">
					<div class="pr_quantity">
						<label for="quantity">Quantity<span class="red">*</span></label>
						<input name="quantity" id="quantity" type="number" min="1" max="600" value="1" name="quantity">
					</div>
					<div class="pr_buy_cart">
						<a class="btn theme-btn cart AddProductInCart" data-id="39" data-stockqty="600" href="javascript:void(0);">Add To Cart</a>
						<a class="btn theme-btn cart wishlist addtowishlist" data-id="{{$idproduct}}" href="javascript:void(0);"><i class="bi bi-heart-fill"></i></a>

                            <button type="submit" class="btn theme-btn cart " style="display: inline">Buy Now</button>
                            <input type="text" name="productSelected" value="{{$idproduct}}" hidden>
                        </form>
                        {{-- <a class="btn theme-btn cart btnCheckout" data-id="{{$idproduct}}" data-stockqty="600" href="#">Buy Now</a> --}}
					</div>
					<div id="variation_required"><p class="red">Please select required field.</p></div>
					<div id="quantity_required"><p class="red">Please enter quantity.</p></div>
					<div id="stockqty_required"><p class="red">The value must be less than or equal to 600</p></div>
					<div id="stockout_required"><p class="red">This product out of stock.</p></div>
					<div class="pr_extra"><strong>Category:</strong> <a href="https://bshopen.themeposh.net/product-category/4/laptop">Laptop</a></div>
				</div>
			</div>
		</div>
		<!-- /Single Product/ -->

		<!-- Product Description Review -->
		<div class="row">
			<div class="col-lg-12">


							</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="pr-description-review">
					<div class="desc-review-nav nav">
						<a class="active" href="#des_description" data-bs-toggle="tab">Description</a>

					</div>
					<div class="tab-content">
						<div id="des_description" class="tab-pane active">
							<div class="entry">
								{{$detailProduct[0]->description}}
							</div>
						</div>
						<div id="des_reviews" class="tab-pane">
							<div class="review-content">
								<!-- Review Form-->
								<div class="row">
									<div class="col-lg-6">
										<h4>Submit your review</h4>
										<p class="theme-color">Please <a href="https://bshopen.themeposh.net/user/login">login</a> to write review!</p>
										<div class="form-product-review">
											<form class="form" method="POST" action="https://bshopen.themeposh.net/frontend/saveReviews">
												<input type="hidden" name="_token" value="X37ODDjyu2RWczlDIIxHhjO1GKsbAfL21QNYB0Kv">
																								<div class="mb-3">
													<textarea name="comments" placeholder="Write comment" class="form-control" rows="3" disabled></textarea>
												</div>
												<a class="btn theme-btn" href="https://bshopen.themeposh.net/user/login"><i class="bi bi-box-arrow-in-right"></i> Please Login</a>
																							</form>
										</div>
									</div>
									<div class="col-lg-6"></div>
								</div>
								<!-- /Review Form/-->

								<!-- Product Review -->
																<div class="row">
									<div class="col-lg-12">
										<div class="review-heading">
											<h4>1 reviews for - Inspiron FHD Laptop</h4>
										</div>
										<div id="tp_datalist">
											<div class="review-body">
		<div class="review-card">
		<div class="review-photo">
			<span class="username">A</span>
		</div>
		<div class="review-info">
			<div class="author-name">Abdullah Al Mamun</div>
			<div class="rating-wrap">
				<div class="stars-outer">
					<div class="stars-inner" style="width:100%;"></div>
				</div>
			</div>
			<div class="date">19-11-2021</div>
			<div class="desc">
				<p></p>
			</div>
		</div>
	</div>
	</div>
<div class="row mt-15">
	<div class="col-lg-12">

	</div>
</div>
										</div>
									</div>
								</div>
																<!-- /Product Review/ -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Product Description Review/ -->
	</div>
</div>
<!-- /Product Details/ -->

<!-- Related Products -->

<!-- /Related Products/ -->



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
			{{-- <div class="carttotals">
				<span class="title">Subtotal:</span>
				<span class="price sub_total"></span>
			</div> --}}
			{{-- <div class="carttotals">
				<span class="title">Tax:</span>
				<span class="price tax"></span>
			</div> --}}
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
	var item_id = "39";
	var is_stock = "1";
	var is_stock_status = "1";
	var gcolor = "Red|#dd0e14,Purple|#7a6fec";
	var gsize = "";
	var is_color = 0;
	var is_size = 0;
	if(gcolor !=''){
		is_color = 1;
	}else{
		is_color = 0;
	}
	if(gsize !=''){
		is_size = 1;
	}else{
		is_size = 0;
	}
</script>
<script src="https://bshopen.themeposh.net/public/frontend/pages/product.js"></script>

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
    $('.addtowishlist').on('click',function()
            {

                $.ajax({
                    type: "get",
                    url: "{{url('storeFavortie')}}",
                    data:
                    {
                        idproduct : $(this).attr('data-id'),
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response.status == 200)
                        {
                            getFavorite();
                        }
                    }
                });
            });
    function getCart()
    {
        $.ajax({
            type: "get",
            url: "{{url('getCart')}}",

            dataType: "json",
            success: function (response) {
                if(response.status == 200)
                {
                    $('#tp_cart_data').empty();
                    $.each(response.data, function (index, value) {
                        var imagePath = "{{ asset('storage/images') }}/" + value.image;



                        // Append the cart item HTML with the image path
                        $('#tp_cart_data').append(`
                            <div class="cart-item-group">
                                <div class="cart-item-image">
                                    <img src="${imagePath}" alt="${value.name}">
                                </div>
                                <div class="cart-item-desc">
                                    <h4 class="item-title">${value.name}</h4>
                                    <p class="item-quantity">
                                        <span id="product-quantity">${value.quantity}</span> x $${value.price}
                                    </p>
                                    <a data-id="${value.idproduct}" oncl href="#" class="btn-delete">
                                        <i class="bi bi-x-lg"></i>
                                    </a>
                                </div>
                            </div>
                        `);
                    });

                $('.tp_total').text(response.total[0]['total']);
                $('.cart_count ').text(response.countCarte[0]['c']);
                }
            }
        });
    }
    getCart();
    $('.AddProductInCart').on('click',function()
    {
        var idproduct = @Json($idproduct);
        var quantity  = $('#quantity').val();
        $.ajax({
            type: "get",
            url: "{{url('AddCarte')}}",
            data:
            {
                idproduct : idproduct,
                quantity : quantity,
            },
            dataType: "json",
            success: function (response)
            {
                if(response.status == 200)
                {
                    Swal.fire({

                        icon: "success",
                        title: "Your work has been saved",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#tp_cart_data').empty();
                    $.each(response.data, function (index, value) {
                        var imagePath = "{{ asset('storage/images') }}/" + value.image;



                        // Append the cart item HTML with the image path
                        $('#tp_cart_data').append(`
                            <div class="cart-item-group">
                                <div class="cart-item-image">
                                    <img src="${imagePath}" alt="${value.name}">
                                </div>
                                <div class="cart-item-desc">
                                    <h4 class="item-title">${value.name}</h4>
                                    <p class="item-quantity">
                                        <span id="product-quantity">${value.quantity}</span> x $${value.price}
                                    </p>
                                    <a data-id="${value.idproduct}"  href="#" class="btn-delete ">
                                        <i class="bi bi-x-lg"></i>
                                    </a>
                                </div>
                            </div>
                        `);
                    });

                $('.tp_total').text(response.total[0]['total']);
                $('.cart_count ').text(response.countCarte[0]['c']);



                }
            }
        });
    });
    $(document).on('click','.btn-delete',function()
    {
        $.ajax({
            type: "get",
            url: "{{url('deleteCart')}}",
            data:
            {
                id : $(this).attr('data-id'),
            },
            dataType: "json",
            success: function (response) {
                if(response.status == 200)
                {
                    Swal.fire({

                        icon: "success",
                        title: "Your work has been saved",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    getCart();

                }
            }
        });
    });
    /////////////////////////// favorite

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
                    $('.cart_countt').text(response.count);
                }
            }
        });
    }
    getFavorite();


</script>
	</body>
</html>
