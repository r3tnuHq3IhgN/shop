<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/color-01.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	@livewireStyles
        {{-- <link rel="stylesheet"
            href="{{ mix('css/app.css') }}"> --}}
</head>
<body class="home-page home-01 "> 

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+84) 666 888"><span class="icon label-before fa fa-mobile"></span>Hotline: (+84) 666 888</a>
									<p title=""><span class="fa fa-envelope" aria-hidden="true"></span> nghiephunter.uet.dev@gmail.com</p>
									{{-- <div>
										<i class="fa fa-envelope" aria-hidden="true"></i>
									    <p class="contact-txt">nghiephunter.uet.dev@gmail.com</p>
									</div> --}}
								</li>
							</ul>
						</div> 
						<div class="topbar-menu right-menu" style="margin-right: 5px">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<span title="Vi???t Nam" ><span class="img label-before" width="20px" height="15px"><img src="../assets/images/flag_vietnam.png" alt="lang-vi" width="20px" height="15px"></span>Vi???t Nam</span>
									{{-- <ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="../assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="../assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="../assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="../assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
									</ul> --}}
								</li> 
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)">Dollar (USD)</i></a>
									{{-- <ul class="submenu curency" > 
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul> --}}
								</li>
								@if(Auth::check()) 
								<li class="menu-item menu-item-has-children parent" >
									<a title="{{Auth::user()->name}}" href="#">{{Auth::user()->name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										{{-- <li class="menu-item" >
											<a title="h??? s??" href="me.html">H??? s??</a>
										</li> --}}
										@if(Auth::user()->id==1)
										<li class="menu-item" >
											<a title="admin" href="{{ route('admin')}}">Admin</a>
										</li>
										{{-- <li class="menu-item" >
											<a title="danh m???c" href="{{route('category.list')}}">Danh m???c</a>
										</li>
										<li class="menu-item" >
											<a title="s???n ph???m" href="{{route('product.list')}}">S???n ph???m</a>
										</li>
										<li class="menu-item" >
											<a title="slider" href="{{route('admin.homeslider')}}">Slider</a> 
										</li>
										<li class="menu-item" >
											<a title="slider" href="{{route('admin.homecategories')}}">Category in home</a> 
										</li>
										<li class="menu-item" > 
											<a title="slider" href="{{route('admin.sale')}}">Sale</a> 
										</li>
										<li class="menu-item" >
											<a title="slider" href="{{route('admin.coupons')}}">All coupons</a> 
										</li> --}}
										@endif
										{{-- <li class="menu-item" >
											<a title="c??i ?????t" href="setting.html">C??i ?????t</a>
										</li> --}}
										<li>
										<form action="{{route('logout')}}" method="post">
											@csrf
											<a title="????ng xu???t" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">????ng xu???t</a>
										</form>
										</li>
									</ul>
								</li>
								@else
								<li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">????ng nh???p</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">????ng k??</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="../assets/images/logo.png" alt="logo"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wish-count-component') 
							@livewire('product-count-component')
							<div class="wrap-icon-section show-up-after-1024"> 
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>  
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					{{-- <div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div> --}}

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/404" class="link-term mercado-item-title">Gi???i thi???u</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">S???n ph???m</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Gi??? H??ng</a>
								</li>
								{{-- <li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Thanh to??n</a>
								</li> --}}
								<li class="menu-item">
									<a href="/order-details" class="link-term mercado-item-title">Th??ng tin ????n h??ng</a>
								</li>
								<li class="menu-item">
									<a href="/404" class="link-term mercado-item-title">Li??n h???</a>
								</li>
								@if (Auth::check() && Auth::user()->id==1)
								<li class="menu-item">
									<a href="/admin" class="link-term mercado-item-title">Admin</a>
								</li>		
								@endif	 																
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Mi???n ph?? giao h??ng</h4>
								<p class="fc-desc">Cho ????n h??ng tr??n $1000</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">B???o h??nh</h4>
								<p class="fc-desc">Ho??n ti???n trong 30 ng??y</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Thanh to??n an to??n</h4>
								<p class="fc-desc">An to??n online thanh to??n</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">H??? tr???</h4>
								<p class="fc-desc">?????i ng?? h??? tr??? 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Chi ti???t li??n h???</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">H?? N???i - Vi???t Nam</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+84) 456 789 - (+84) 666 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">nghiephunter.uet.dev@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">???????ng d??y n??ng</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Mi???n ph?? cu???c g???i</span>
										<b class="phone-number">(+84) 456 789 - (+84) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">????ng k?? nh???n th??ng tin</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Email...">
											<button class="btn-submit">????ng k??</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">T??i kho???n c???a t??i</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">T??i kho???n c???a t??i</a></li>
												<li class="menu-item"><a href="#" class="link-term">Th????ng hi???u</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Code</a></li>
												<li class="menu-item"><a href="#" class="link-term">Chi nh??nh</a></li>
												<li class="menu-item"><a href="#" class="link-term">Danh s??ch y??u th??ch</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Th??ng tin</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Li??n h??? v???i ch??ng t??i</a></li>
												<li class="menu-item"><a href="#" class="link-term">?????i tr???</a></li>
												<li class="menu-item"><a href="#" class="link-term">S?? ????? website</a></li>
												<li class="menu-item"><a href="#" class="link-term">Khuy???n m???i ?????c bi???t</a></li>
												<li class="menu-item"><a href="#" class="link-term">L???ch s??? ?????t h??ng</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row"> 

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Ph????ng th???c thanh to??n an to??n</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="../assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">M???ng x?? h???i</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="../assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="../assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				{{-- <div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Fashion:</span></li>
									<li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
									<li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
									<li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
									<li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
									<li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
									<li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
									<li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
									<li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
									<li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div> --}}

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright ?? 2021 Nghi???p Hunter Company. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">V??? ch??ng t??i</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Ch??nh s??ch b???o m???t</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">??i???u kho???n ??i???u ki???n</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Ch??nh s??ch ho??n tr???</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>  
	<script src="../assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="../assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.flexslider.js"></script>
	{{-- <script src="../assets/js/chosen.jquery.min.js"></script> --}}
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.countdown.min.js"></script>
	<script src="../assets/js/jquery.sticky.js"></script>
	<script src="../assets/js/functions.js"></script>
	<script src="{{ mix('js/app.js') }}"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.js" integrity="sha512-ZKqmaRVpwWCw7S7mEjC89jDdWRD/oMS0mlfH96mO0u3wrPYoN+lXmqvyptH4P9mY6zkoPTSy5U2SwKVXRY5tYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	
        @livewireScripts

		@stack('scripts') 
</body>
</html>