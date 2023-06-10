<!DOCTYPE html>
<html lang="en">

<head>
				<title>InveSys</title>
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

				{{-- custom CSS --}}
				<link rel="stylesheet" href="{{ asset('css_dean/style.css') }}">

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

				{{-- <!-- loader Start -->
				<div id="loading">
								<div id="loading-center"></div>
				</div>
				<!-- loader END --> --}}

				<!-- Wrapper Start -->
				<div class="wrapper">

								{{-- Sidebar --}}
								@livewire('sidebar')

								{{-- Top Navbar --}}
								@livewire('top-navbar')

								<div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
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
								</div>

								@yield('content-page')
				</div>
				<!-- Wrapper End-->

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

				{{-- Custom JavaScript --}}
				@yield('custom_javascript')

				@livewireScripts
</body>

</html>
