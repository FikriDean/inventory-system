<!DOCTYPE html>
<html lang="en">

<head>
				<title>Inventory System | Home</title>
				<!-- Meta -->
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
				<meta name="author" content="iqonic themes">

				<link rel="stylesheet" href="{{ asset('css/backend-plugin.min.css') }}">
				<link rel="stylesheet" href="{{ asset('css/backend.css?v=1.0.0') }}">

				<!-- fontawesome CSS -->
				<link rel="stylesheet" type="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">

				<!-- line-awesome CSS -->
				<link rel="stylesheet" href="{{ asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">

				<!-- remixicon CSS -->
				<link rel="stylesheet" href="{{ asset('vendor/remixicon/fonts/remixicon.css') }}">

				{{-- <!-- dripicons CSS -->
				<link rel="stylesheet" href="{{ asset('vendor/@icon/dripicons/dripicons.css') }}"> --}}
				{{-- 
				<!-- Global CSS -->
				<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

				<!-- vendor CSS -->
				<link rel="stylesheet" href="{{ asset('assets/vendor/prism/prism.css') }}">
				<link rel="stylesheet" href="{{ asset('assets/vendor/elegant_font/css/style.css') }}">

				<!-- Theme CSS -->
				<link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
				<style>
								:root {
												--doc-primary-color: #32BDEA;
												--doc-body-color: #f9f9fb;
								}
				</style> --}}

				@livewireStyles
</head>

<body>

				<!-- loader Start -->
				<div id="loading">
								<div id="loading-center"></div>
				</div>
				<!-- loader END -->

				<!-- Wrapper Start -->
				<div class="wrapper">

								{{-- Sidebar --}}
								@livewire('sidebar')

								{{-- Top Navbar --}}
								@livewire('top-navbar')

								{{-- <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																				<div class="modal-body">
																								<div class="popup text-left">
																												<h4 class="mb-3">New Order</h4>
																												<div class="content create-workform bg-body">
																																<div class="pb-3">
																																				<label class="mb-2">Email</label>
																																				<input type="text" class="form-control" placeholder="Enter Name or Email">
																																</div>
																																<div class="col-lg-12 mt-4">
																																				<div class="d-flex flex-wrap align-items-ceter justify-content-center">
																																								<div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
																																								<div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div> --}}

								{{-- <div class="content-page">
												<div class="container-fluid">
																<div class="row">
																				<div class="col-lg-4">
																								<div class="card card-transparent card-block card-stretch card-height border-none">
																												<div class="card-body p-0 mt-lg-2 mt-0">
																																<h3 class="mb-3">Hi Graham, Good Morning</h3>
																																<p class="mb-0 mr-4">Your dashboard gives you views of key performance or business
																																				process.</p>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-8">
																								<div class="row">
																												<div class="col-lg-4 col-md-4">
																																<div class="card card-block card-stretch card-height">
																																				<div class="card-body">
																																								<div class="d-flex align-items-center mb-4 card-total-sale">
																																												<div class="icon iq-icon-box-2 bg-info-light">
																																																<img src="../assets/images/product/1.png" class="img-fluid"
																																																				alt="image">
																																												</div>
																																												<div>
																																																<p class="mb-2">Total Sales</p>
																																																<h4>31.40</h4>
																																												</div>
																																								</div>
																																								<div class="iq-progress-bar mt-2">
																																												<span class="bg-info iq-progress progress-1" data-percent="85"></span>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="col-lg-4 col-md-4">
																																<div class="card card-block card-stretch card-height">
																																				<div class="card-body">
																																								<div class="d-flex align-items-center mb-4 card-total-sale">
																																												<div class="icon iq-icon-box-2 bg-danger-light">
																																																<img src="../assets/images/product/2.png" class="img-fluid"
																																																				alt="image">
																																												</div>
																																												<div>
																																																<p class="mb-2">Total Cost</p>
																																																<h4>$ 4598</h4>
																																												</div>
																																								</div>
																																								<div class="iq-progress-bar mt-2">
																																												<span class="bg-danger iq-progress progress-1" data-percent="70"></span>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="col-lg-4 col-md-4">
																																<div class="card card-block card-stretch card-height">
																																				<div class="card-body">
																																								<div class="d-flex align-items-center mb-4 card-total-sale">
																																												<div class="icon iq-icon-box-2 bg-success-light">
																																																<img src="../assets/images/product/3.png" class="img-fluid"
																																																				alt="image">
																																												</div>
																																												<div>
																																																<p class="mb-2">Product Sold</p>
																																																<h4>4589 M</h4>
																																												</div>
																																								</div>
																																								<div class="iq-progress-bar mt-2">
																																												<span class="bg-success iq-progress progress-1"
																																																data-percent="75"></span>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-6">
																								<div class="card card-block card-stretch card-height">
																												<div class="card-header d-flex justify-content-between">
																																<div class="header-title">
																																				<h4 class="card-title">Overview</h4>
																																</div>
																																<div class="card-header-toolbar d-flex align-items-center">
																																				<div class="dropdown">
																																								<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001"
																																												data-toggle="dropdown">
																																												This Month
																																												<i class="ri-arrow-down-s-line ml-1"></i>
																																								</span>
																																								<div class="dropdown-menu dropdown-menu-right shadow-none"
																																												aria-labelledby="dropdownMenuButton001">
																																												<a class="dropdown-item" href="#">Year</a>
																																												<a class="dropdown-item" href="#">Month</a>
																																												<a class="dropdown-item" href="#">Week</a>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="card-body">
																																<div id="layout1-chart1"></div>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-6">
																								<div class="card card-block card-stretch card-height">
																												<div class="card-header d-flex align-items-center justify-content-between">
																																<div class="header-title">
																																				<h4 class="card-title">Revenue Vs Cost</h4>
																																</div>
																																<div class="card-header-toolbar d-flex align-items-center">
																																				<div class="dropdown">
																																								<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002"
																																												data-toggle="dropdown">
																																												This Month
																																												<i class="ri-arrow-down-s-line ml-1"></i>
																																								</span>
																																								<div class="dropdown-menu dropdown-menu-right shadow-none"
																																												aria-labelledby="dropdownMenuButton002">
																																												<a class="dropdown-item" href="#">Yearly</a>
																																												<a class="dropdown-item" href="#">Monthly</a>
																																												<a class="dropdown-item" href="#">Weekly</a>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="card-body">
																																<div id="layout1-chart-2" style="min-height: 360px;"></div>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-8">
																								<div class="card card-block card-stretch card-height">
																												<div class="card-header d-flex align-items-center justify-content-between">
																																<div class="header-title">
																																				<h4 class="card-title">Top Products</h4>
																																</div>
																																<div class="card-header-toolbar d-flex align-items-center">
																																				<div class="dropdown">
																																								<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006"
																																												data-toggle="dropdown">
																																												This Month
																																												<i class="ri-arrow-down-s-line ml-1"></i>
																																								</span>
																																								<div class="dropdown-menu dropdown-menu-right shadow-none"
																																												aria-labelledby="dropdownMenuButton006">
																																												<a class="dropdown-item" href="#">Year</a>
																																												<a class="dropdown-item" href="#">Month</a>
																																												<a class="dropdown-item" href="#">Week</a>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="card-body">
																																<ul class="list-unstyled row top-product mb-0">
																																				<li class="col-lg-3">
																																								<div class="card card-block card-stretch card-height mb-0">
																																												<div class="card-body">
																																																<div class="bg-warning-light rounded">
																																																				<img src="../assets/images/product/01.png"
																																																								class="style-img img-fluid m-auto p-3" alt="image">
																																																</div>
																																																<div class="style-text text-left mt-3">
																																																				<h5 class="mb-1">Organic Cream</h5>
																																																				<p class="mb-0">789 Item</p>
																																																</div>
																																												</div>
																																								</div>
																																				</li>
																																				<li class="col-lg-3">
																																								<div class="card card-block card-stretch card-height mb-0">
																																												<div class="card-body">
																																																<div class="bg-danger-light rounded">
																																																				<img src="../assets/images/product/02.png"
																																																								class="style-img img-fluid m-auto p-3" alt="image">
																																																</div>
																																																<div class="style-text text-left mt-3">
																																																				<h5 class="mb-1">Rain Umbrella</h5>
																																																				<p class="mb-0">657 Item</p>
																																																</div>
																																												</div>
																																								</div>
																																				</li>
																																				<li class="col-lg-3">
																																								<div class="card card-block card-stretch card-height mb-0">
																																												<div class="card-body">
																																																<div class="bg-info-light rounded">
																																																				<img src="../assets/images/product/03.png"
																																																								class="style-img img-fluid m-auto p-3" alt="image">
																																																</div>
																																																<div class="style-text text-left mt-3">
																																																				<h5 class="mb-1">Serum Bottle</h5>
																																																				<p class="mb-0">489 Item</p>
																																																</div>
																																												</div>
																																								</div>
																																				</li>
																																				<li class="col-lg-3">
																																								<div class="card card-block card-stretch card-height mb-0">
																																												<div class="card-body">
																																																<div class="bg-success-light rounded">
																																																				<img src="../assets/images/product/02.png"
																																																								class="style-img img-fluid m-auto p-3" alt="image">
																																																</div>
																																																<div class="style-text text-left mt-3">
																																																				<h5 class="mb-1">Organic Cream</h5>
																																																				<p class="mb-0">468 Item</p>
																																																</div>
																																												</div>
																																								</div>
																																				</li>
																																</ul>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-4">
																								<div class="card card-transparent card-block card-stretch mb-4">
																												<div class="card-header d-flex align-items-center justify-content-between p-0">
																																<div class="header-title">
																																				<h4 class="card-title mb-0">Best Item All Time</h4>
																																</div>
																																<div class="card-header-toolbar d-flex align-items-center">
																																				<div>
																																								<a href="#" class="btn btn-primary view-btn font-size-14">View All</a>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="card card-block card-stretch card-height-helf">
																												<div class="card-body card-item-right">
																																<div class="d-flex align-items-top">
																																				<div class="bg-warning-light rounded">
																																								<img src="../assets/images/product/04.png"
																																												class="style-img img-fluid m-auto" alt="image">
																																				</div>
																																				<div class="style-text text-left">
																																								<h5 class="mb-2">Coffee Beans Packet</h5>
																																								<p class="mb-2">Total Sell : 45897</p>
																																								<p class="mb-0">Total Earned : $45,89 M</p>
																																				</div>
																																</div>
																												</div>
																								</div>
																								<div class="card card-block card-stretch card-height-helf">
																												<div class="card-body card-item-right">
																																<div class="d-flex align-items-top">
																																				<div class="bg-danger-light rounded">
																																								<img src="../assets/images/product/05.png"
																																												class="style-img img-fluid m-auto" alt="image">
																																				</div>
																																				<div class="style-text text-left">
																																								<h5 class="mb-2">Bottle Cup Set</h5>
																																								<p class="mb-2">Total Sell : 44359</p>
																																								<p class="mb-0">Total Earned : $45,50 M</p>
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-4">
																								<div class="card card-block card-stretch card-height-helf">
																												<div class="card-body">
																																<div class="d-flex align-items-top justify-content-between">
																																				<div class="">
																																								<p class="mb-0">Income</p>
																																								<h5>$ 98,7800 K</h5>
																																				</div>
																																				<div class="card-header-toolbar d-flex align-items-center">
																																								<div class="dropdown">
																																												<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton003"
																																																data-toggle="dropdown">
																																																This Month
																																																<i class="ri-arrow-down-s-line ml-1"></i>
																																												</span>
																																												<div class="dropdown-menu dropdown-menu-right shadow-none"
																																																aria-labelledby="dropdownMenuButton003">
																																																<a class="dropdown-item" href="#">Year</a>
																																																<a class="dropdown-item" href="#">Month</a>
																																																<a class="dropdown-item" href="#">Week</a>
																																												</div>
																																								</div>
																																				</div>
																																</div>
																																<div id="layout1-chart-3" class="layout-chart-1"></div>
																												</div>
																								</div>
																								<div class="card card-block card-stretch card-height-helf">
																												<div class="card-body">
																																<div class="d-flex align-items-top justify-content-between">
																																				<div class="">
																																								<p class="mb-0">Expenses</p>
																																								<h5>$ 45,8956 K</h5>
																																				</div>
																																				<div class="card-header-toolbar d-flex align-items-center">
																																								<div class="dropdown">
																																												<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton004"
																																																data-toggle="dropdown">
																																																This Month
																																																<i class="ri-arrow-down-s-line ml-1"></i>
																																												</span>
																																												<div class="dropdown-menu dropdown-menu-right shadow-none"
																																																aria-labelledby="dropdownMenuButton004">
																																																<a class="dropdown-item" href="#">Year</a>
																																																<a class="dropdown-item" href="#">Month</a>
																																																<a class="dropdown-item" href="#">Week</a>
																																												</div>
																																								</div>
																																				</div>
																																</div>
																																<div id="layout1-chart-4" class="layout-chart-2"></div>
																												</div>
																								</div>
																				</div>
																				<div class="col-lg-8">
																								<div class="card card-block card-stretch card-height">
																												<div class="card-header d-flex justify-content-between">
																																<div class="header-title">
																																				<h4 class="card-title">Order Summary</h4>
																																</div>
																																<div class="card-header-toolbar d-flex align-items-center">
																																				<div class="dropdown">
																																								<span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005"
																																												data-toggle="dropdown">
																																												This Month
																																												<i class="ri-arrow-down-s-line ml-1"></i>
																																								</span>
																																								<div class="dropdown-menu dropdown-menu-right shadow-none"
																																												aria-labelledby="dropdownMenuButton005">
																																												<a class="dropdown-item" href="#">Year</a>
																																												<a class="dropdown-item" href="#">Month</a>
																																												<a class="dropdown-item" href="#">Week</a>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="card-body">
																																<div class="d-flex flex-wrap align-items-center mt-2">
																																				<div class="d-flex align-items-center progress-order-left">
																																								<div class="progress progress-round m-0 orange conversation-bar"
																																												data-percent="46">
																																												<span class="progress-left">
																																																<span class="progress-bar"></span>
																																												</span>
																																												<span class="progress-right">
																																																<span class="progress-bar"></span>
																																												</span>
																																												<div class="progress-value text-secondary">46%</div>
																																								</div>
																																								<div class="progress-value ml-3 pr-5 border-right">
																																												<h5>$12,6598</h5>
																																												<p class="mb-0">Average Orders</p>
																																								</div>
																																				</div>
																																				<div class="d-flex align-items-center ml-5 progress-order-right">
																																								<div class="progress progress-round m-0 primary conversation-bar"
																																												data-percent="46">
																																												<span class="progress-left">
																																																<span class="progress-bar"></span>
																																												</span>
																																												<span class="progress-right">
																																																<span class="progress-bar"></span>
																																												</span>
																																												<div class="progress-value text-primary">46%</div>
																																								</div>
																																								<div class="progress-value ml-3">
																																												<h5>$59,8478</h5>
																																												<p class="mb-0">Top Orders</p>
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="card-body pt-0">
																																<div id="layout1-chart-5"></div>
																												</div>
																								</div>
																				</div>
																</div>
																<!-- Page end  -->
												</div>
								</div> --}}
				</div>
				<!-- Wrapper End-->

				{{-- <!-- Main Javascript -->
												<script type="text/javascript" src="{{ asset('vendor/jquery-3.3.1.min.js') }}"></script>
												<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
												<script type="text/javascript" src="{{ asset('vendor/prism/prism.js') }}"></script>
												<script type="text/javascript" src="{{ asset('vendor/jquery-scrollTo/jquery.scrollTo.min.js') }}"></script>
												<script type="text/javascript" src="{{ asset('vendor/stickyfill/dist/stickyfill.min.js') }}"></script>
												<script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}

				<!-- Backend-bundle JS -->
				<script src="{{ asset('js/backend-bundle.min.js') }}"></script>

				<!-- Ionicons  -->
				<script src="{{ asset('vendor/ionicons/dist/ionicons.js') }}"></script>

				<!--  Flextree -->
				<script src="{{ asset('js/flex-tree.min.js') }}"></script>
				<script src="{{ asset('js/tree.js') }}"></script>

				<!-- Table Treeview Javascript -->
				<script src="{{ asset('js/table-treeview.js') }}"></script>

				<!-- Masonary Javascript -->
				<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
				<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

				<!-- Mapbox Javascript -->
				<script src="{{ asset('js/mapbox-gl.js') }}"></script>
				<script src="{{ asset('js/mapbox.js') }}"></script>

				<!-- SweetAlert Javascript -->
				<script src="{{ asset('js/sweetalert.js') }}"></script>

				<!-- Vectoe Map Javascript -->
				<script src="{{ asset('js/vector-map-custom.js') }}"></script>

				<!--  Customizer Javascript  -->
				<script src="{{ asset('js/customizer.js') }}"></script>

				<!-- Chart Custom JavaScript -->
				<script src="{{ asset('js/chart-custom.js') }}"></script>

				<!-- Slider JavaScript -->
				<script src="{{ asset('js/slider.js') }}"></script>

				<!-- App JavaScript -->
				<script src="{{ asset('js/app.js') }}"></script>

				@livewireScripts
</body>

</html>
