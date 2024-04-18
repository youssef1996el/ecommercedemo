
<!doctype html>
<html lang="en" >
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->
    <meta name="csrf-token" content="X37ODDjyu2RWczlDIIxHhjO1GKsbAfL21QNYB0Kv">

	<title>Checkout</title>

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
						<li><a class="dropdown-item" href="#">English</a></li>
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
						<form method="GET" action="#">
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
								<ul><li ><a target="_self" href="{{url('/')}}">Home</a></li></ul>
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
				<nav>
					<ul class="mobile-menu">

						<li ><a target="_self" href="{{url('/')}}">Home</a></li><li class="has-children-menu"><a target="_self" href="#">Mega Menu</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/brand/44/ca-brand">CA Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/43/pakha-brand">Pakha Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/36/roadstar">Roadstar</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/34/af-brand">AF-Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/33/d-brand">D Brand</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/32/smartphone">Smartphone</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/30/footwear">Footwear</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/29/abukaka">Abukaka</a></li><li><a target="_self" href="https://bshopen.themeposh.net/brand/20/abu-brand">Abu Brand</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Mega Fixed Width</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/14/accessories">Accessories</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/13/health-beauty">Health And Beauty</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/12/tv-videos">TV &amp; Videos</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/11/jewelry-watch">Jewelry &amp; Watch</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/10/shoes">Shoes</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/9/fan">Fan</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/8/motor-bike">Motor Bike</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/7/wireless-speakers">Wireless Speakers</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/6/headphones">Headphones</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/5/camera">Camera</a></li></ul></li><li class="has-children-menu"><a target="_self" href="#">Dropdown</a><ul class="dropdown"><li><a target="_self" href="https://bshopen.themeposh.net/product-category/4/laptop">Laptop</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/3/monitor">Monitor</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/2/computer">Computer</a></li><li><a target="_self" href="https://bshopen.themeposh.net/product-category/1/mobile">Mobile</a></li></ul></li>					</ul>
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
						<h1>Checkout</h1>
					</div>
				</div>
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Checkout</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Breadcrumb/ -->
	<!-- Checkout -->
	<div class="section bg-white my_card">
		<div class="container">

            <form action="{{url('Payement')}}" method="post"></form>
                @csrf
				<input type="hidden" name="_token" value="X37ODDjyu2RWczlDIIxHhjO1GKsbAfL21QNYB0Kv">				<div class="row">
					<div class="col-lg-7">
						<h5>Shipping Information</h5>
						<p>Already have an account? <a href="{{url('login')}}">Login</a></p>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input id="name" name="name" type="text" placeholder="Name" value="" class="form-control parsley-validated" data-required="true">
									<span class="text-danger error-text name_error"></span>
								</div>
							</div>
						</div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input id="email" name="email" type="email" placeholder="Email Address" value="" class="form-control parsley-validated" data-required="true">
                                        <span class="text-danger error-text email_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input id="phone" name="phone" type="text" placeholder="Phone" value="" class="form-control parsley-validated" data-required="true">
                                        <span class="text-danger error-text phone_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select id="country" name="country" class="form-control parsley-validated" data-required="true">
                                        <option value="">Country</option>
                                                                            <option value="Afghanistan">
                                            Afghanistan
                                        </option>
                                                                            <option value="Aland Islands">
                                            Aland Islands
                                        </option>
                                                                            <option value="Albania">
                                            Albania
                                        </option>
                                                                            <option value="Algeria">
                                            Algeria
                                        </option>
                                                                            <option value="American Samoa">
                                            American Samoa
                                        </option>
                                                                            <option value="Andorra">
                                            Andorra
                                        </option>
                                                                            <option value="Angola">
                                            Angola
                                        </option>
                                                                            <option value="Anguilla">
                                            Anguilla
                                        </option>
                                                                            <option value="Antarctica">
                                            Antarctica
                                        </option>
                                                                            <option value="Antigua and Barbuda">
                                            Antigua and Barbuda
                                        </option>
                                                                            <option value="Argentina">
                                            Argentina
                                        </option>
                                                                            <option value="Armenia">
                                            Armenia
                                        </option>
                                                                            <option value="Aruba">
                                            Aruba
                                        </option>
                                                                            <option value="Asia / Pacific Region">
                                            Asia / Pacific Region
                                        </option>
                                                                            <option value="Australia">
                                            Australia
                                        </option>
                                                                            <option value="Austria">
                                            Austria
                                        </option>
                                                                            <option value="Azerbaijan">
                                            Azerbaijan
                                        </option>
                                                                            <option value="Bahamas">
                                            Bahamas
                                        </option>
                                                                            <option value="Bahrain">
                                            Bahrain
                                        </option>
                                                                            <option value="Bangladesh">
                                            Bangladesh
                                        </option>
                                                                            <option value="Barbados">
                                            Barbados
                                        </option>
                                                                            <option value="Belarus">
                                            Belarus
                                        </option>
                                                                            <option value="Belgium">
                                            Belgium
                                        </option>
                                                                            <option value="Belize">
                                            Belize
                                        </option>
                                                                            <option value="Benin">
                                            Benin
                                        </option>
                                                                            <option value="Bermuda">
                                            Bermuda
                                        </option>
                                                                            <option value="Bhutan">
                                            Bhutan
                                        </option>
                                                                            <option value="Bolivia">
                                            Bolivia
                                        </option>
                                                                            <option value="Bonaire, Sint Eustatius and Saba">
                                            Bonaire, Sint Eustatius and Saba
                                        </option>
                                                                            <option value="Bosnia and Herzegovina">
                                            Bosnia and Herzegovina
                                        </option>
                                                                            <option value="Botswana">
                                            Botswana
                                        </option>
                                                                            <option value="Bouvet Island">
                                            Bouvet Island
                                        </option>
                                                                            <option value="Brazil">
                                            Brazil
                                        </option>
                                                                            <option value="British Indian Ocean Territory">
                                            British Indian Ocean Territory
                                        </option>
                                                                            <option value="Brunei Darussalam">
                                            Brunei Darussalam
                                        </option>
                                                                            <option value="Bulgaria">
                                            Bulgaria
                                        </option>
                                                                            <option value="Burkina Faso">
                                            Burkina Faso
                                        </option>
                                                                            <option value="Burundi">
                                            Burundi
                                        </option>
                                                                            <option value="Cambodia">
                                            Cambodia
                                        </option>
                                                                            <option value="Cameroon">
                                            Cameroon
                                        </option>
                                                                            <option value="Canada">
                                            Canada
                                        </option>
                                                                            <option value="Cape Verde">
                                            Cape Verde
                                        </option>
                                                                            <option value="Cayman Islands">
                                            Cayman Islands
                                        </option>
                                                                            <option value="Central African Republic">
                                            Central African Republic
                                        </option>
                                                                            <option value="Chad">
                                            Chad
                                        </option>
                                                                            <option value="Chile">
                                            Chile
                                        </option>
                                                                            <option value="China">
                                            China
                                        </option>
                                                                            <option value="Christmas Island">
                                            Christmas Island
                                        </option>
                                                                            <option value="Cocos (Keeling) Islands">
                                            Cocos (Keeling) Islands
                                        </option>
                                                                            <option value="Colombia">
                                            Colombia
                                        </option>
                                                                            <option value="Comoros">
                                            Comoros
                                        </option>
                                                                            <option value="Congo">
                                            Congo
                                        </option>
                                                                            <option value="Congo, the Democratic Republic of the">
                                            Congo, the Democratic Republic of the
                                        </option>
                                                                            <option value="Cook Islands">
                                            Cook Islands
                                        </option>
                                                                            <option value="Costa Rica">
                                            Costa Rica
                                        </option>
                                                                            <option value="Cote D&#039;Ivoire">
                                            Cote D&#039;Ivoire
                                        </option>
                                                                            <option value="Croatia">
                                            Croatia
                                        </option>
                                                                            <option value="Cuba">
                                            Cuba
                                        </option>
                                                                            <option value="Curacao">
                                            Curacao
                                        </option>
                                                                            <option value="Cyprus">
                                            Cyprus
                                        </option>
                                                                            <option value="Czech Republic">
                                            Czech Republic
                                        </option>
                                                                            <option value="Denmark">
                                            Denmark
                                        </option>
                                                                            <option value="Djibouti">
                                            Djibouti
                                        </option>
                                                                            <option value="Dominica">
                                            Dominica
                                        </option>
                                                                            <option value="Dominican Republic">
                                            Dominican Republic
                                        </option>
                                                                            <option value="Ecuador">
                                            Ecuador
                                        </option>
                                                                            <option value="Egypt">
                                            Egypt
                                        </option>
                                                                            <option value="El Salvador">
                                            El Salvador
                                        </option>
                                                                            <option value="Equatorial Guinea">
                                            Equatorial Guinea
                                        </option>
                                                                            <option value="Eritrea">
                                            Eritrea
                                        </option>
                                                                            <option value="Estonia">
                                            Estonia
                                        </option>
                                                                            <option value="Ethiopia">
                                            Ethiopia
                                        </option>
                                                                            <option value="Falkland Islands (Malvinas)">
                                            Falkland Islands (Malvinas)
                                        </option>
                                                                            <option value="Faroe Islands">
                                            Faroe Islands
                                        </option>
                                                                            <option value="Fiji">
                                            Fiji
                                        </option>
                                                                            <option value="Finland">
                                            Finland
                                        </option>
                                                                            <option value="France">
                                            France
                                        </option>
                                                                            <option value="French Guiana">
                                            French Guiana
                                        </option>
                                                                            <option value="French Polynesia">
                                            French Polynesia
                                        </option>
                                                                            <option value="French Southern Territories">
                                            French Southern Territories
                                        </option>
                                                                            <option value="Gabon">
                                            Gabon
                                        </option>
                                                                            <option value="Gambia">
                                            Gambia
                                        </option>
                                                                            <option value="Georgia">
                                            Georgia
                                        </option>
                                                                            <option value="Germany">
                                            Germany
                                        </option>
                                                                            <option value="Ghana">
                                            Ghana
                                        </option>
                                                                            <option value="Gibraltar">
                                            Gibraltar
                                        </option>
                                                                            <option value="Greece">
                                            Greece
                                        </option>
                                                                            <option value="Greenland">
                                            Greenland
                                        </option>
                                                                            <option value="Grenada">
                                            Grenada
                                        </option>
                                                                            <option value="Guadeloupe">
                                            Guadeloupe
                                        </option>
                                                                            <option value="Guam">
                                            Guam
                                        </option>
                                                                            <option value="Guatemala">
                                            Guatemala
                                        </option>
                                                                            <option value="Guernsey">
                                            Guernsey
                                        </option>
                                                                            <option value="Guinea">
                                            Guinea
                                        </option>
                                                                            <option value="Guinea-Bissau">
                                            Guinea-Bissau
                                        </option>
                                                                            <option value="Guyana">
                                            Guyana
                                        </option>
                                                                            <option value="Haiti">
                                            Haiti
                                        </option>
                                                                            <option value="Heard Island and Mcdonald Islands">
                                            Heard Island and Mcdonald Islands
                                        </option>
                                                                            <option value="Holy See (Vatican City State)">
                                            Holy See (Vatican City State)
                                        </option>
                                                                            <option value="Honduras">
                                            Honduras
                                        </option>
                                                                            <option value="Hong Kong">
                                            Hong Kong
                                        </option>
                                                                            <option value="Hungary">
                                            Hungary
                                        </option>
                                                                            <option value="Iceland">
                                            Iceland
                                        </option>
                                                                            <option value="India">
                                            India
                                        </option>
                                                                            <option value="Indonesia">
                                            Indonesia
                                        </option>
                                                                            <option value="Iran, Islamic Republic of">
                                            Iran, Islamic Republic of
                                        </option>
                                                                            <option value="Iraq">
                                            Iraq
                                        </option>
                                                                            <option value="Ireland">
                                            Ireland
                                        </option>
                                                                            <option value="Isle of Man">
                                            Isle of Man
                                        </option>
                                                                            <option value="Israel">
                                            Israel
                                        </option>
                                                                            <option value="Italy">
                                            Italy
                                        </option>
                                                                            <option value="Jamaica">
                                            Jamaica
                                        </option>
                                                                            <option value="Japan">
                                            Japan
                                        </option>
                                                                            <option value="Jersey">
                                            Jersey
                                        </option>
                                                                            <option value="Jordan">
                                            Jordan
                                        </option>
                                                                            <option value="Kazakhstan">
                                            Kazakhstan
                                        </option>
                                                                            <option value="Kenya">
                                            Kenya
                                        </option>
                                                                            <option value="Kiribati">
                                            Kiribati
                                        </option>
                                                                            <option value="Korea, Democratic People&#039;s Republic of">
                                            Korea, Democratic People&#039;s Republic of
                                        </option>
                                                                            <option value="Korea, Republic of">
                                            Korea, Republic of
                                        </option>
                                                                            <option value="Kosovo">
                                            Kosovo
                                        </option>
                                                                            <option value="Kuwait">
                                            Kuwait
                                        </option>
                                                                            <option value="Kyrgyzstan">
                                            Kyrgyzstan
                                        </option>
                                                                            <option value="Lao People&#039;s Democratic Republic">
                                            Lao People&#039;s Democratic Republic
                                        </option>
                                                                            <option value="Latvia">
                                            Latvia
                                        </option>
                                                                            <option value="Lebanon">
                                            Lebanon
                                        </option>
                                                                            <option value="Lesotho">
                                            Lesotho
                                        </option>
                                                                            <option value="Liberia">
                                            Liberia
                                        </option>
                                                                            <option value="Libyan Arab Jamahiriya">
                                            Libyan Arab Jamahiriya
                                        </option>
                                                                            <option value="Liechtenstein">
                                            Liechtenstein
                                        </option>
                                                                            <option value="Lithuania">
                                            Lithuania
                                        </option>
                                                                            <option value="Luxembourg">
                                            Luxembourg
                                        </option>
                                                                            <option value="Macao">
                                            Macao
                                        </option>
                                                                            <option value="Macedonia, the Former Yugoslav Republic of">
                                            Macedonia, the Former Yugoslav Republic of
                                        </option>
                                                                            <option value="Madagascar">
                                            Madagascar
                                        </option>
                                                                            <option value="Malawi">
                                            Malawi
                                        </option>
                                                                            <option value="Malaysia">
                                            Malaysia
                                        </option>
                                                                            <option value="Maldives">
                                            Maldives
                                        </option>
                                                                            <option value="Mali">
                                            Mali
                                        </option>
                                                                            <option value="Malta">
                                            Malta
                                        </option>
                                                                            <option value="Marshall Islands">
                                            Marshall Islands
                                        </option>
                                                                            <option value="Martinique">
                                            Martinique
                                        </option>
                                                                            <option value="Mauritania">
                                            Mauritania
                                        </option>
                                                                            <option value="Mauritius">
                                            Mauritius
                                        </option>
                                                                            <option value="Mayotte">
                                            Mayotte
                                        </option>
                                                                            <option value="Mexico">
                                            Mexico
                                        </option>
                                                                            <option value="Micronesia, Federated States of">
                                            Micronesia, Federated States of
                                        </option>
                                                                            <option value="Moldova, Republic of">
                                            Moldova, Republic of
                                        </option>
                                                                            <option value="Monaco">
                                            Monaco
                                        </option>
                                                                            <option value="Mongolia">
                                            Mongolia
                                        </option>
                                                                            <option value="Montenegro">
                                            Montenegro
                                        </option>
                                                                            <option value="Montserrat">
                                            Montserrat
                                        </option>
                                                                            <option value="Morocco">
                                            Morocco
                                        </option>
                                                                            <option value="Mozambique">
                                            Mozambique
                                        </option>
                                                                            <option value="Myanmar">
                                            Myanmar
                                        </option>
                                                                            <option value="Namibia">
                                            Namibia
                                        </option>
                                                                            <option value="Nauru">
                                            Nauru
                                        </option>
                                                                            <option value="Nepal">
                                            Nepal
                                        </option>
                                                                            <option value="Netherlands">
                                            Netherlands
                                        </option>
                                                                            <option value="Netherlands Antilles">
                                            Netherlands Antilles
                                        </option>
                                                                            <option value="New Caledonia">
                                            New Caledonia
                                        </option>
                                                                            <option value="New Zealand">
                                            New Zealand
                                        </option>
                                                                            <option value="Nicaragua">
                                            Nicaragua
                                        </option>
                                                                            <option value="Niger">
                                            Niger
                                        </option>
                                                                            <option value="Nigeria">
                                            Nigeria
                                        </option>
                                                                            <option value="Niue">
                                            Niue
                                        </option>
                                                                            <option value="Norfolk Island">
                                            Norfolk Island
                                        </option>
                                                                            <option value="Northern Mariana Islands">
                                            Northern Mariana Islands
                                        </option>
                                                                            <option value="Norway">
                                            Norway
                                        </option>
                                                                            <option value="Oman">
                                            Oman
                                        </option>
                                                                            <option value="Pakistan">
                                            Pakistan
                                        </option>
                                                                            <option value="Palau">
                                            Palau
                                        </option>
                                                                            <option value="Palestinian Territory, Occupied">
                                            Palestinian Territory, Occupied
                                        </option>
                                                                            <option value="Panama">
                                            Panama
                                        </option>
                                                                            <option value="Papua New Guinea">
                                            Papua New Guinea
                                        </option>
                                                                            <option value="Paraguay">
                                            Paraguay
                                        </option>
                                                                            <option value="Peru">
                                            Peru
                                        </option>
                                                                            <option value="Philippines">
                                            Philippines
                                        </option>
                                                                            <option value="Pitcairn">
                                            Pitcairn
                                        </option>
                                                                            <option value="Poland">
                                            Poland
                                        </option>
                                                                            <option value="Portugal">
                                            Portugal
                                        </option>
                                                                            <option value="Puerto Rico">
                                            Puerto Rico
                                        </option>
                                                                            <option value="Qatar">
                                            Qatar
                                        </option>
                                                                            <option value="Reunion">
                                            Reunion
                                        </option>
                                                                            <option value="Romania">
                                            Romania
                                        </option>
                                                                            <option value="Russian Federation">
                                            Russian Federation
                                        </option>
                                                                            <option value="Rwanda">
                                            Rwanda
                                        </option>
                                                                            <option value="Saint Barthelemy">
                                            Saint Barthelemy
                                        </option>
                                                                            <option value="Saint Helena">
                                            Saint Helena
                                        </option>
                                                                            <option value="Saint Kitts and Nevis">
                                            Saint Kitts and Nevis
                                        </option>
                                                                            <option value="Saint Lucia">
                                            Saint Lucia
                                        </option>
                                                                            <option value="Saint Martin">
                                            Saint Martin
                                        </option>
                                                                            <option value="Saint Pierre and Miquelon">
                                            Saint Pierre and Miquelon
                                        </option>
                                                                            <option value="Saint Vincent and the Grenadines">
                                            Saint Vincent and the Grenadines
                                        </option>
                                                                            <option value="Samoa">
                                            Samoa
                                        </option>
                                                                            <option value="San Marino">
                                            San Marino
                                        </option>
                                                                            <option value="Sao Tome and Principe">
                                            Sao Tome and Principe
                                        </option>
                                                                            <option value="Saudi Arabia">
                                            Saudi Arabia
                                        </option>
                                                                            <option value="Senegal">
                                            Senegal
                                        </option>
                                                                            <option value="Serbia">
                                            Serbia
                                        </option>
                                                                            <option value="Serbia and Montenegro">
                                            Serbia and Montenegro
                                        </option>
                                                                            <option value="Seychelles">
                                            Seychelles
                                        </option>
                                                                            <option value="Sierra Leone">
                                            Sierra Leone
                                        </option>
                                                                            <option value="Singapore">
                                            Singapore
                                        </option>
                                                                            <option value="Sint Maarten">
                                            Sint Maarten
                                        </option>
                                                                            <option value="Slovakia">
                                            Slovakia
                                        </option>
                                                                            <option value="Slovenia">
                                            Slovenia
                                        </option>
                                                                            <option value="Solomon Islands">
                                            Solomon Islands
                                        </option>
                                                                            <option value="Somalia">
                                            Somalia
                                        </option>
                                                                            <option value="South Africa">
                                            South Africa
                                        </option>
                                                                            <option value="South Georgia and the South Sandwich Islands">
                                            South Georgia and the South Sandwich Islands
                                        </option>
                                                                            <option value="South Sudan">
                                            South Sudan
                                        </option>
                                                                            <option value="Spain">
                                            Spain
                                        </option>
                                                                            <option value="Sri Lanka">
                                            Sri Lanka
                                        </option>
                                                                            <option value="Sudan">
                                            Sudan
                                        </option>
                                                                            <option value="Suriname">
                                            Suriname
                                        </option>
                                                                            <option value="Svalbard and Jan Mayen">
                                            Svalbard and Jan Mayen
                                        </option>
                                                                            <option value="Swaziland">
                                            Swaziland
                                        </option>
                                                                            <option value="Sweden">
                                            Sweden
                                        </option>
                                                                            <option value="Switzerland">
                                            Switzerland
                                        </option>
                                                                            <option value="Syrian Arab Republic">
                                            Syrian Arab Republic
                                        </option>
                                                                            <option value="Taiwan, Province of China">
                                            Taiwan, Province of China
                                        </option>
                                                                            <option value="Tajikistan">
                                            Tajikistan
                                        </option>
                                                                            <option value="Tanzania, United Republic of">
                                            Tanzania, United Republic of
                                        </option>
                                                                            <option value="Thailand">
                                            Thailand
                                        </option>
                                                                            <option value="Timor-Leste">
                                            Timor-Leste
                                        </option>
                                                                            <option value="Togo">
                                            Togo
                                        </option>
                                                                            <option value="Tokelau">
                                            Tokelau
                                        </option>
                                                                            <option value="Tonga">
                                            Tonga
                                        </option>
                                                                            <option value="Trinidad and Tobago">
                                            Trinidad and Tobago
                                        </option>
                                                                            <option value="Tunisia">
                                            Tunisia
                                        </option>
                                                                            <option value="Turkey">
                                            Turkey
                                        </option>
                                                                            <option value="Turkmenistan">
                                            Turkmenistan
                                        </option>
                                                                            <option value="Turks and Caicos Islands">
                                            Turks and Caicos Islands
                                        </option>
                                                                            <option value="Tuvalu">
                                            Tuvalu
                                        </option>
                                                                            <option value="Uganda">
                                            Uganda
                                        </option>
                                                                            <option value="Ukraine">
                                            Ukraine
                                        </option>
                                                                            <option value="United Arab Emirates">
                                            United Arab Emirates
                                        </option>
                                                                            <option value="United Kingdom">
                                            United Kingdom
                                        </option>
                                                                            <option value="United States">
                                            United States
                                        </option>
                                                                            <option value="United States Minor Outlying Islands">
                                            United States Minor Outlying Islands
                                        </option>
                                                                            <option value="Uruguay">
                                            Uruguay
                                        </option>
                                                                            <option value="Uzbekistan">
                                            Uzbekistan
                                        </option>
                                                                            <option value="Vanuatu">
                                            Vanuatu
                                        </option>
                                                                            <option value="Venezuela">
                                            Venezuela
                                        </option>
                                                                            <option value="Viet Nam">
                                            Viet Nam
                                        </option>
                                                                            <option value="Virgin Islands, British">
                                            Virgin Islands, British
                                        </option>
                                                                            <option value="Virgin Islands, U.s.">
                                            Virgin Islands, U.s.
                                        </option>
                                                                            <option value="Wallis and Futuna">
                                            Wallis and Futuna
                                        </option>
                                                                            <option value="Western Sahara">
                                            Western Sahara
                                        </option>
                                                                            <option value="Yemen">
                                            Yemen
                                        </option>
                                                                            <option value="Zambia">
                                            Zambia
                                        </option>
                                                                            <option value="Zimbabwe">
                                            Zimbabwe
                                        </option>
                                                                            </select>
                                        <span class="text-danger error-text country_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input id="state" name="state" type="text" placeholder="State" class="form-control parsley-validated" data-required="true">
                                        <span class="text-danger error-text state_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input id="zip_code" name="zip_code" type="text" placeholder="Zip Code" class="form-control parsley-validated" data-required="true">
                                        <span class="text-danger error-text zip_code_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input id="city" name="city" type="text" placeholder="City" class="form-control parsley-validated" data-required="true">
                                        <span class="text-danger error-text city_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea id="address" name="address" placeholder="Address" rows="2" class="form-control parsley-validated" data-required="true"></textarea>
                                        <span class="text-danger error-text address_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkboxlist">
                                        <label class="checkbox-title">
                                            <input id="new_account" name="new_account" type="checkbox">Register an account with above information?
                                        </label>
                                    </div>
                                                                </div>
                            </div>

                            <div class="row hideclass" id="new_account_pass">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        <span class="text-danger error-text password_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>

						<h5 class="mt10">Payment Method</h5>
						<div class="row">
							<div class="col-md-12">
								<span class="text-danger error-text payment_method_error"></span>
																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_stripe" name="payment_method" type="radio" value="3"><img src="https://bshopen.themeposh.net/public/frontend/images/stripe.png" alt="Stripe" />
									</label>
								</div>
								<div id="pay_stripe" class="row hideclass">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<div class="form-control" id="card-element"></div>
													<span class="card-errors" id="card-errors"></span>
												</div>
											</div>
										</div>
									</div>
								</div>

																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_paypal" name="payment_method" type="radio" value="4"><img src="https://bshopen.themeposh.net/public/frontend/images/paypal.png" alt="Paypal" />
									</label>
								</div>
								<p id="pay_paypal" class="hideclass">Pay online via Paypal</p>

																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_razorpay" name="payment_method" type="radio" value="5"><img src="https://bshopen.themeposh.net/public/frontend/images/razorpay.png" alt="Razorpay" />
									</label>
								</div>
								<p id="pay_razorpay" class="hideclass">Pay online via Razorpay</p>

																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_mollie" name="payment_method" type="radio" value="6"><img src="https://bshopen.themeposh.net/public/frontend/images/mollie.png" alt="Mollie" />
									</label>
								</div>
								<p id="pay_mollie" class="hideclass">Pay online via Mollie</p>

																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_cod" name="payment_method" type="radio" value="1"><img src="https://bshopen.themeposh.net/public/frontend/images/cash_on_delivery.png" alt="Cash on Delivery" />
									</label>
								</div>
								<p id="pay_cod" class="hideclass">Please pay money directly to the postman, if you choose cash on delivery method (COD).</p>

																<div class="checkboxlist">
									<label class="checkbox-title">
										<input id="payment_method_bank" name="payment_method" type="radio" value="2"><img src="https://bshopen.themeposh.net/public/frontend/images/bank_transfer.png" alt="Bank Transfer" />
									</label>
								</div>
								<p id="pay_bank" class="hideclass">Please send money to our bank account: A/C- 12365402547895487454.</p>
															</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<textarea name="comments" class="form-control" placeholder="Note" rows="2"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5">
						<div class="carttotals-card">
							<div class="carttotals-head">Order Summary</div>
							<div class="carttotals-body">
								<table class="table">
									<tbody>
                                        @php
                                            $totals =0;
                                        @endphp
                                        @foreach ($data as $item)
                                            @php
                                                $totals += $item->total;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <p class="title">{{$item->name}}</p>

                                                </td>
                                                <td>
                                                    <p class="price">${{$item->total}}</p>
                                                    <p class="sub-price">${{$item->price}} x {{$item->quantity}}</p>
                                                </td>
                                            </tr>
                                        @endforeach

										<tr><td colspan="2"><span class="total">Total</span><span class="total-price">$<span class="total_amount">@php echo $totals @endphp</span></span></td></tr>
									</tbody>
								</table>
																<h5>Shipping Method</h5>
								<div class="row">
									<div class="col-md-12">
										<span class="text-danger error-text shipping_method_error"></span>
																																<div class="checkboxlist">
												<label class="checkbox-title">
													<input data-seller_count="2" data-shippingfee="15" data-total="4,953.90" class="shipping_method" name="shipping_method" type="radio" value="1">Shipment will be within 1 day. Fee for per seller : $15
												</label>
											</div>
																																<div class="checkboxlist">
												<label class="checkbox-title">
													<input data-seller_count="2" data-shippingfee="10" data-total="4,953.90" class="shipping_method" name="shipping_method" type="radio" value="2">Shipment will be within 3 days. Fee for per seller : $10
												</label>
											</div>
																																<div class="checkboxlist">
												<label class="checkbox-title">
													<input data-seller_count="2" data-shippingfee="5" data-total="4,953.90" class="shipping_method" name="shipping_method" type="radio" value="3">Shipment will be within 5-10 days. Fee for per seller : $5
												</label>
											</div>
																																<div class="checkboxlist">
												<label class="checkbox-title">
													<input data-seller_count="2" data-shippingfee="0" data-total="4,953.90" class="shipping_method" name="shipping_method" type="radio" value="4">Shipment will be within 10-15 days. Fee for per seller : $0
												</label>
											</div>
																			</div>
								</div>
																<input name="customer_id" type="hidden" value="" />
								<input name="razorpay_payment_id" id="razorpay_payment_id" type="hidden" />


								{{-- <a id="checkout_submit_form" href="javascript:void(0);" class="btn theme-btn mt10 checkout_btn"></a> --}}
                                <button type="submit" class="btn theme-btn mt10 checkout_btn submitButton">Checkout</button>

							</div>
						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
	<!-- /Checkout/ -->

    <script>
        document.querySelector('.submitButton').addEventListener('click', function(event) {
        // Check if there are no elements with the class 'parsley-error'
        if (!document.querySelector('.parsley-error')) {
            // If there are no elements with class 'parsley-error', submit the form
            document.getElementById('myForm').submit();
        } else {
            // If there are elements with class 'parsley-error', do nothing or handle accordingly
            console.log('Form has errors');
        }
    });
    </script>


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
	<script src="https://bshopen.themeposh.net/public/frontend/js/parsley.min.js"></script>
<script type="text/javascript">
var theme_color = "#c62f2f";
var site_name = "bShop";
var validCardNumer = 0;
var TEXT = [];
	TEXT['Please type valid card number'] = "Please type valid card number";
</script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	var isenable_stripe = "1";
	var stripe_key = "pk_test_51HjTW5CDLNbEmIs6u2osRRFQczMcVP09YPqrLKeWKIH5ostwyF7n76TmuzmQbYk1DdIXIYGlNAFfkjAMb6ovGbLy0040DDzhek";
</script>
<script src="https://bshopen.themeposh.net/public/frontend/pages/payment_method.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
	var isenable_razorpay = "1";
	var razorpay_key_id = "rzp_test_IbBkKGw19m6JoM";
	var razorpay_currency = "USD";
</script>
<script src="https://bshopen.themeposh.net/public/frontend/pages/checkout.js"></script>
	</body>
</html>
